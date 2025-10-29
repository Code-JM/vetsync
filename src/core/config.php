<?php

// load environment variables using Dotenv
try {
    if (class_exists('Dotenv\Dotenv') && method_exists('Dotenv\Dotenv', 'createImmutable')) {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
        $dotenv->safeLoad();
    }
} catch (Exception $e) {
    // Dotenv not available, will use defaults
}

// Helper function to get environment variable with fallback
function env($key, $default = null)
{
    $value = getenv($key);
    if ($value === false) {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? $default;
    }
    return $value;
}

$config = [
    'sub_folder' => 'vetsync',
    'root_path' => $_SERVER['DOCUMENT_ROOT'],
    'uri_path' => $_SERVER['REQUEST_URI'],
    'app' => [
        'base_url' => env('APP_URL', 'http://vetsync.test'),
        'assets_url' => '/public',
        'name' => env('APP_NAME', 'VetSync'),
    ],
    'db' => [
        'host' => env('DB_HOST', 'localhost'),
        'name' => env('DB_DATABASE', 'vetsync'),
        'port' => env('DB_PORT', '3306'),
        'username' => env('DB_USERNAME', 'root'),
        'password' => env('DB_PASSWORD', ''),
    ]
];

$response = [
    'success' => false,
    'message' => '',
    'data' => null
];
