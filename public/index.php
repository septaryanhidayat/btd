<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Auto-create essential storage subdirectories if missing on fresh deployment
$storageFolders = [
    __DIR__ . '/../storage/framework/views',
    __DIR__ . '/../storage/framework/sessions',
    __DIR__ . '/../storage/framework/cache',
    __DIR__ . '/../storage/logs',
    __DIR__ . '/../bootstrap/cache',
];
foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) {
        @mkdir($folder, 0775, true);
    }
}

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Verify composer autoloader
if (!file_exists(__DIR__.'/../vendor/autoload.php')) {
    die("<h3>Error: Composer Dependencies (vendor/autoload.php) Not Found!</h3><p>Silakan jalankan perintah <code>composer install</code> di terminal cPanel atau upload folder vendor.</p>");
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
