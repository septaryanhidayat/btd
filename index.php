<?php

/**
 * Laravel Root Entry Point Bridge for cPanel / Shared Hosting
 * Directs all root requests to public/index.php
 */

if (file_exists(__DIR__ . '/public/index.php')) {
    require __DIR__ . '/public/index.php';
} else {
    die("<h3>Error: public/index.php not found.</h3>");
}
