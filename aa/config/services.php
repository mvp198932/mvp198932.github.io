<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */
    'github' => [
        'client_id' => 'your github app client_id',
        'client_secret' => 'your github app client_secret',
        'redirect' => 'http://laravel.app:8000/auth/github/callback'
    ],
    'facebook' => [
        'client_id' => env('642093939975952'),
        'client_secret' => env('9da1ebeeb2719ff76971e9e0855cd66f'),
        'redirect' => env('http://localhost:8000/user/auth/facebook-sign-in-callback'),
    ],
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
