<?php

return [
    'default' => env('FILESYSTEM_DRIVER', 'local'),
    'disks' => [
        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
        'public' => [
            'driver' => 'local',
            'root' => app_path('/../../html/uploads'),
            'url' => env('APP_URL').'/uploads',
            'visibility' => 'public',
        ],
        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],
        'bunnycdn' => [
            'driver' => 'bunnycdn',
            'storage_zone' => env('BUNNYCDN_STORAGE_ZONE', 'digiuthnewt'),
            'api_key' => env('BUNNYCDN_API_KEY', 'fea46266-a75f-48ad-b803240ebcbd-3b3f-4cda'),
            'region' => env('BUNNYCDN_REGION', 'de')
        ],
    ],
    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],
];
