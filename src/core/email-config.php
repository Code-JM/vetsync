<?php

// Email configuration for sending emails to users
// Helper function to get environment variable with fallback
if (!function_exists('env')) {
    function env($key, $default = null)
    {
        $value = getenv($key);
        if ($value === false) {
            $value = $_ENV[$key] ?? $_SERVER[$key] ?? $default;
        }
        return $value;
    }
}

return [
    'smtp' => [
        'host' => env('SMTP_HOST', 'smtp.gmail.com'),
        'port' => (int) env('SMTP_PORT', 587),
        'encryption' => 'tls',
        'auth' => true,
        'username' => env('SMTP_USERNAME', 'Vetsync.01@gmail.com'),
        'password' => env('SMTP_PASSWORD', 'spcb gkth opmn yvvb'),
        'from_email' => env('SMTP_FROM_EMAIL', 'Vetsync.01@gmail.com'),
        'from_name' => env('SMTP_FROM_NAME', 'VetSync Veterinary Clinic')
    ],
    'templates' => [
        'path' => __DIR__ . '/../templates/email/'
    ]
];
