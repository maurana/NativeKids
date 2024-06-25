<?php

return [
    'defaults' => [
        'guard' => 'api',
        'passwords' => 'players',
    ],

    'guards' => [
        'api' => [
            'driver' => 'jwt',
            'provider' => 'players',
        ],
    ],

    'providers' => [
        'players' => [
            'driver' => 'eloquent',
            'model' => \App\Models\Players::class
        ]
    ]
];