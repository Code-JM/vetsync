<?php

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
    'twilio' => [
        'enabled' => filter_var(env('TWILIO_ENABLED', 'false'), FILTER_VALIDATE_BOOLEAN),
        'account_sid' => env('TWILIO_ACCOUNT_SID', 'ACcf37ba627c802b531968b31dcd59b5f4'),
        'auth_token' => env('TWILIO_AUTH_TOKEN', '21aad3a288b9925641c264811d203c46'),
        'from_number' => env('TWILIO_FROM_NUMBER', '+12294902818')
    ],
    'messages' => [
        'clinic_name' => 'J.A.A Veterinary Clinic',
        'clinic_contact' => '(02) 8888-8888',
    ]
];