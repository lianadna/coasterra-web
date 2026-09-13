<?php

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->render(function (Throwable $e, $request) {
            // Laravel uses these exceptions for normal flow control: failed
            // validation must redirect back with errors, and an unauthenticated
            // visitor must be redirected to the login page. Returning null here
            // hands them back to the framework's default handling.
            if ($e instanceof ValidationException
                || $e instanceof AuthenticationException
                || $e instanceof AuthorizationException
                || $e instanceof TokenMismatchException
                || $e instanceof HttpResponseException) {
                return null;
            }

            if ($request->is('api/*')) {
                return response()->json([
                    'message' => 'Resource not found or server error occurred.',
                    'error' => config('app.debug') ? $e->getMessage() : 'Internal Server Error',
                ], $e instanceof NotFoundHttpException ? 404 : 500);
            }

            // Keep the full stack trace visible while developing.
            if (config('app.debug') && ! $e instanceof HttpExceptionInterface) {
                return null;
            }

            $status = $e instanceof HttpExceptionInterface ? $e->getStatusCode() : 500;

            return response()->view('errors.404', [
                'exception' => $e,
                'status' => $status,
            ], $status);
        });
    })->create();
