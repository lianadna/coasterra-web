<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Handler\SlackWebhookHandler;
use Monolog\Handler\RedisHandler;
use Monolog\Formatter\JsonFormatter;
use Monolog\Formatter\LineFormatter;
use Monolog\Processor\PsrLogMessageProcessor;
use Monolog\Processor\WebProcessor;
use Monolog\Processor\MemoryUsageProcessor;
use Monolog\Processor\MemoryPeakUsageProcessor;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that is utilized to write
    | messages to your logs. The value provided here should match one of
    | the channels present in the list of "channels" configured below.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Deprecations Log Channel
    |--------------------------------------------------------------------------
    |
    | This option controls the log channel that should be used to log warnings
    | regarding deprecated PHP and library features. This allows you to get
    | your application ready for upcoming major versions of dependencies.
    |
    */

    'deprecations' => [
        'channel' => env('LOG_DEPRECATIONS_CHANNEL', 'null'),
        'trace' => env('LOG_DEPRECATIONS_TRACE', false),
    ],

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Laravel
    | utilizes the Monolog PHP logging library, which includes a variety
    | of powerful log handlers and formatters that you're free to use.
    |
    | Available drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog", "custom", "stack"
    |
    */

    'channels' => [

        'stack' => [
            'driver' => 'stack',
            'channels' => explode(',', env('LOG_STACK', 'single,daily')),
            'ignore_exceptions' => false,
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
            'formatter' => class_exists(LineFormatter::class) ? new LineFormatter(
                "[%datetime%] %channel%.%level_name%: %message% %context% %extra%\n",
                "Y-m-d H:i:s",
                true,
                true
            ) : null,
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/laravel.log'),
            'level' => env('LOG_LEVEL', 'debug'),
            'days' => env('LOG_DAILY_DAYS', 30),
            'replace_placeholders' => true,
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
        ],

        'emergency' => [
            'driver' => 'daily',
            'path' => storage_path('logs/emergency.log'),
            'level' => 'emergency',
            'days' => 90,
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
        ],

        'critical' => [
            'driver' => 'daily',
            'path' => storage_path('logs/critical.log'),
            'level' => 'critical',
            'days' => 60,
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
        ],

        'error' => [
            'driver' => 'daily',
            'path' => storage_path('logs/error.log'),
            'level' => 'error',
            'days' => 30,
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
        ],

        'warning' => [
            'driver' => 'daily',
            'path' => storage_path('logs/warning.log'),
            'level' => 'warning',
            'days' => 14,
            'formatter' => class_exists(LineFormatter::class) ? new LineFormatter(
                "[%datetime%] %level_name%: %message%\n",
                "Y-m-d H:i:s"
            ) : null,
        ],

        'info' => [
            'driver' => 'daily',
            'path' => storage_path('logs/info.log'),
            'level' => 'info',
            'days' => 7,
            'formatter' => class_exists(LineFormatter::class) ? new LineFormatter(
                "[%datetime%] %level_name%: %message%\n",
                "Y-m-d H:i:s"
            ) : null,
        ],

        'debug' => [
            'driver' => 'daily',
            'path' => storage_path('logs/debug.log'),
            'level' => 'debug',
            'days' => 3,
            'formatter' => class_exists(LineFormatter::class) ? new LineFormatter(
                "[%datetime%] %level_name%: %message% %context%\n",
                "Y-m-d H:i:s"
            ) : null,
        ],

        'activity' => [
            'driver' => 'daily',
            'path' => storage_path('logs/activity.log'),
            'level' => 'info',
            'days' => 30,
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
        ],

        'security' => [
            'driver' => 'daily',
            'path' => storage_path('logs/security.log'),
            'level' => 'info',
            'days' => 90,
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
        ],

        'slack' => [
            'driver' => 'monolog',
            'handler' => SlackWebhookHandler::class,
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => env('LOG_SLACK_USERNAME', 'Laravel Log'),
            'emoji' => env('LOG_SLACK_EMOJI', ':boom:'),
            'level' => env('LOG_LEVEL', 'critical'),
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
            'processors' => [
                PsrLogMessageProcessor::class,
                WebProcessor::class,
                MemoryUsageProcessor::class,
            ],
        ],

        'redis' => [
            'driver' => 'monolog',
            'handler' => RedisHandler::class,
            'level' => env('LOG_LEVEL', 'debug'),
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
            'processors' => [
                PsrLogMessageProcessor::class,
                WebProcessor::class,
            ],
        ],

        'papertrail' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => env('LOG_PAPERTRAIL_HANDLER', SyslogUdpHandler::class),
            'handler_with' => [
                'host' => env('PAPERTRAIL_URL'),
                'port' => env('PAPERTRAIL_PORT'),
                'connectionString' => 'tls://'.env('PAPERTRAIL_URL').':'.env('PAPERTRAIL_PORT'),
            ],
            'processors' => [PsrLogMessageProcessor::class],
        ],

        'stderr' => [
            'driver' => 'monolog',
            'level' => env('LOG_LEVEL', 'debug'),
            'handler' => StreamHandler::class,
            'formatter' => env('LOG_STDERR_FORMATTER'),
            'with' => [
                'stream' => 'php://stderr',
            ],
            'processors' => [
                PsrLogMessageProcessor::class,
                WebProcessor::class,
                MemoryUsageProcessor::class,
                MemoryPeakUsageProcessor::class,
            ],
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => env('LOG_LEVEL', 'debug'),
            'facility' => env('LOG_SYSLOG_FACILITY', LOG_USER),
            'replace_placeholders' => true,
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => env('LOG_LEVEL', 'debug'),
            'replace_placeholders' => true,
        ],

        'null' => [
            'driver' => 'monolog',
            'handler' => NullHandler::class,
        ],

        'rotating' => [
            'driver' => 'monolog',
            'handler' => RotatingFileHandler::class,
            'level' => env('LOG_LEVEL', 'debug'),
            'formatter' => class_exists(JsonFormatter::class) ? new JsonFormatter() : null,
            'with' => [
                'filename' => storage_path('logs/laravel.log'),
                'maxFiles' => 30,
                'level' => env('LOG_LEVEL', 'debug'),
            ],
            'processors' => [
                PsrLogMessageProcessor::class,
                WebProcessor::class,
                MemoryUsageProcessor::class,
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Global Log Processors
    |--------------------------------------------------------------------------
    |
    | These processors will be added to every log channel configured above.
    | Processors can add extra data to log entries, such as memory usage,
    | request information, or any custom data you want to include.
    |
    */

    'processors' => [
        PsrLogMessageProcessor::class,
        WebProcessor::class,
        MemoryUsageProcessor::class,
        MemoryPeakUsageProcessor::class,
    ],

];
