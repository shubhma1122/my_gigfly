<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'secret' => 'sk_test_LRFbNEFtDhXVrXgFJlByHw7U',
    ],

    /**
     * Social media login
     */
    'github' => [
        'client_id'     => '8acecf12e52022098109',
        'client_secret' => '805f58c32bab0ef40df196253ac72a6455b6b8f0',
        'redirect'      => 'https://gigfly.in/auth/github/callback',
    ],
    'linkedin' => [    
        'client_id'     => '77mevt1zkodv86',
        'client_secret' => 'xoKFXmYtXBlEusOt',
        'redirect'      => 'https://gigfly.in/auth/linkedin/callback'
    ],
    'google' => [    
        'client_id'     => '437991781393-i2vms29ttjcfqumhl5pn2tc78nuf5n0p.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'https://gigfly.in/auth/google/callback'
    ],
    'facebook' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://gigfly.in/auth/facebook/callback'
    ],
    'twitter' => [    
        'client_id'     => '',
        'client_secret' => '',
        'redirect'      => 'https://gigfly.in/auth/twitter/callback'
    ],

    // Email marketing
    'mailjet' => [
        'key'    => "",
        'secret' => "",
    ]

];
