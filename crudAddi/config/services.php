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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'api_key' => 'AIzaSyCfrWmqc1H0dvTT89xSqOnXSgXroolKgEY',
        'auth_domain' =>  'addicrudlaravel.firebaseapp.com',
        'database_url' => 'addicrudlaravel.firebaseapp.com',
        'project_id' => 'addicrudlaravel',
        'storage_bucket' => 'addicrudlaravel.appspot.com',
        'messaging_sender_id' => '881957508665',
        'app_id' => '1:881957508665:web:2de8960a1cda31543f5fe8',
        
    ],

];
