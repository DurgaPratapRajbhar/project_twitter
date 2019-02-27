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

        'twitter' => [
    'client_id' =>'4HFb0gnNBJcTVpF0WCAKNnNMx', 
    'client_secret' =>'QFqcHyniQUV3SUj0dYbGVxGQQOm2O3eCFPqvQd9x3IYLWAnZbt',  
    'redirect' => 'http://qa.gmc.rupeeboss.com/twitter/callback',
],

    'facebook' => [
    'client_id' => '383898142407866',
    'client_secret' => 'b67bcb50b0780122ad180432422b21c4',
    'redirect' => 'http://localhost:8000/callback',

],
 

];
