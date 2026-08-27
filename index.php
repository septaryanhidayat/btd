<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Auto-create essential storage directories
$storageFolders = [
    __DIR__ . '/storage/framework/views',
    __DIR__ . '/storage/framework/sessions',
    __DIR__ . '/storage/framework/cache',
    __DIR__ . '/storage/logs',
    __DIR__ . '/bootstrap/cache',
];
foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        @mkdir($folder, 0775, true);
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Check vendor autoload
if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/vendor/autoload.php';
} elseif (file_exists(__DIR__.'/../vendor/autoload.php')) {
    require __DIR__.'/../vendor/autoload.php';
} else {
    die("<h3>Error: Composer autoload (vendor/autoload.php) not found.</h3><p>Please run <code>composer install</code>.</p>");
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
if (file_exists(__DIR__.'/bootstrap/app.php')) {
    $app = require_once __DIR__.'/bootstrap/app.php';
} elseif (file_exists(__DIR__.'/../bootstrap/app.php')) {
    $app = require_once __DIR__.'/../bootstrap/app.php';
} else {
    die("<h3>Error: bootstrap/app.php not found.</h3>");
}

$app->handleRequest(Request::capture());
