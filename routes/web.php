<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubscriberController;

/*
|--------------------------------------------------------------------------
| Public landing page
|--------------------------------------------------------------------------
| Detail routes keep their id optional so the many static links that still
| point at e.g. /blog-details keep working; the controller then falls back
| to the newest record.
*/

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/index2', 'index2')->name('index2');
    Route::get('/index3', 'index3')->name('index3');
    Route::get('/index4', 'index4')->name('index4');
    Route::get('/index5', 'index5')->name('index5');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/services', 'services')->name('services');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog-details/{blog?}', 'blogDetails')->name('blogDetails');
    Route::get('/blog-grid', 'blogGrid')->name('blogGrid');
    Route::get('/blog-standard', 'blogStandard')->name('blogStandard');
});

Route::controller(PagesController::class)->group(function () {
    Route::get('/be-volunteer', 'beVolunteer')->name('beVolunteer');
    Route::get('/camping', 'camping')->name('camping');
    Route::get('/camping-details/{camping?}', 'campingDetails')->name('campingDetails');
    Route::get('/camping-donation/{camping?}', 'campingDonation')->name('campingDonation');
    Route::get('/donations', 'donations')->name('donations');
    Route::get('/project', 'project')->name('project');
    Route::get('/project-details/{project?}', 'projectDetails')->name('projectDetails');
    Route::get('/services-details/{service?}', 'servicesDetails')->name('servicesDetails');
    Route::get('/volunteer', 'volunteer')->name('volunteer');
    Route::get('/volunteer-details/{volunteer?}', 'volunteerDetails')->name('volunteerDetails');
});

// Forms submitted by visitors
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('contact.store');
Route::post('/camping-donation/{camping}', [DonationController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('donation.store');
Route::post('/comment/{subject}/{id}', [CommentController::class, 'store'])
    ->middleware('throttle:10,1')
    ->whereIn('subject', ['blog', 'camping'])
    ->whereNumber('id')
    ->name('comment.store');
Route::post('/subscribe', [SubscriberController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('subscribe.store');

/*
|--------------------------------------------------------------------------
| Admin Authentication
|--------------------------------------------------------------------------
| Registration is intentionally NOT public. New admin accounts can only be
| created from inside the admin panel (Users menu) by a logged-in admin.
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('users', Admin\UserController::class)->except(['show']);
        Route::resource('roles', Admin\RoleController::class)->except(['show']);

        // Site-wide content managed as key/value settings
        Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings.index');
        Route::put('settings', [Admin\SettingController::class, 'update'])->name('settings.update');
        Route::resource('achievements', Admin\AchievementController::class)->except(['show']);

        // Visitor submissions
        Route::get('comments', [Admin\CommentController::class, 'index'])->name('comments.index');
        Route::put('comments/{comment}/approve', [Admin\CommentController::class, 'approve'])->name('comments.approve');
        Route::put('comments/{comment}/unapprove', [Admin\CommentController::class, 'unapprove'])->name('comments.unapprove');
        Route::delete('comments/{comment}', [Admin\CommentController::class, 'destroy'])->name('comments.destroy');
        Route::resource('subscribers', Admin\SubscriberController::class)->except(['show', 'create', 'store']);

        // Landing page content
        Route::resource('sliders', Admin\SliderController::class)->except(['show']);
        Route::resource('services', Admin\ServiceController::class)->except(['show']);
        Route::resource('testimonis', Admin\TestimoniController::class)->except(['show']);
        Route::resource('partners', Admin\PartnerController::class)->except(['show']);
        Route::resource('volunteers', Admin\VolunteerController::class)->except(['show']);
        Route::resource('categories', Admin\CategoryController::class)->except(['show']);
        Route::resource('blogs', Admin\BlogController::class)->except(['show']);
        Route::resource('projects', Admin\ProjectController::class)->except(['show']);
        Route::resource('clients', Admin\ClientController::class)->except(['show']);

        // Campaigns, events and donations
        Route::resource('campings', Admin\CampingController::class)->except(['show']);
        Route::resource('organizers', Admin\OrganizerController::class)->except(['show']);
        Route::resource('events', Admin\EventController::class)->except(['show']);
        Route::resource('donaturs', Admin\DonaturController::class)->except(['show']);
        Route::resource('donations', Admin\DonationController::class)->except(['show']);
        Route::resource('payments', Admin\PaymentController::class)->except(['show']);

        // Products
        Route::resource('product-categories', Admin\ProductCategoryController::class)->except(['show']);
        Route::resource('products', Admin\ProductController::class)->except(['show']);

        // Inbox from the landing page contact form
        Route::get('contacts', [Admin\ContactController::class, 'index'])->name('contacts.index');
        Route::delete('contacts/{contact}', [Admin\ContactController::class, 'destroy'])->name('contacts.destroy');
    });
});
