<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Locate basePath
$basePath = file_exists(__DIR__ . '/bootstrap/app.php') ? __DIR__ : (file_exists(__DIR__ . '/../bootstrap/app.php') ? dirname(__DIR__) : __DIR__);

// Auto-create essential storage subdirectories
$storageFolders = [
    $basePath . '/storage/framework/views',
    $basePath . '/storage/framework/sessions',
    $basePath . '/storage/framework/cache',
    $basePath . '/storage/logs',
    $basePath . '/bootstrap/cache',
];
foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        @mkdir($folder, 0775, true);
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = $basePath . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader dynamically
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require __DIR__ . '/vendor/autoload.php';
} elseif (file_exists(__DIR__ . '/../vendor/autoload.php')) {
    require __DIR__ . '/../vendor/autoload.php';
} else {
    die("<h3>Error: vendor/autoload.php not found.</h3>");
}

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once $basePath . '/bootstrap/app.php';

$app->handleRequest(Request::capture());
