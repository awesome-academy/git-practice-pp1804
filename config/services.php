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

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
<<<<<<< HEAD
=======
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
<<<<<<< HEAD
        'region' => 'us-east-1',
=======
        'region' => env('SES_REGION', 'us-east-1'),
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
<<<<<<< HEAD
=======
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
    ],

];
