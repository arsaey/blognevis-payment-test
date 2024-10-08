<?php

return [
    'path' => 'blognevis-payments',
    'dashboard_key' => 'password',
    'zarinpal' => [
        /*
    |--------------------------------------------------------------------------
    | merchantID
    |--------------------------------------------------------------------------
    |
    | merchantID must be 36 chars
    |
    */
        'merchantID' => env('ZARINPAL_MERCHANTID', 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'),

        /*
        |--------------------------------------------------------------------------
        | language
        |--------------------------------------------------------------------------
        |
        | Available languages: 'fa', 'en'
        |
        */
        'lang' => env('ZARINPAL_LANG', 'fa'),

        /*
        |--------------------------------------------------------------------------
        | sandbox
        |--------------------------------------------------------------------------
        |
        | true: '1', false: '0'
        |
        */
        'sandbox' => env('ZARINPAL_SANDBOX', '1'),

        /*
        |--------------------------------------------------------------------------
        | zaringate (more info: https://bit.ly/2Ukay07)
        |--------------------------------------------------------------------------
        |
        | true: '1', false: '0'
        |
        */
        'zaringate' => env('ZARINPAL_ZARINGATE', '0'),

        /*
        |--------------------------------------------------------------------------
        | zaringate PSPs (more info: https://bit.ly/2Ukay07)
        |--------------------------------------------------------------------------
        |
        | Available PSPs: 'Asan', 'Sep', 'Sad', 'Pec', 'Fan', 'Emz'
        |
        */
        'zaringate_psp' => env('ZARINPAL_ZARINGATE_PSP', 'Asa'),
    ],
    'plisio'=>[
        /*
        |--------------------------------------------------------------------------
        | Api Key
        |--------------------------------------------------------------------------
        |
        | This value can be obtained in your Plisio account when creating a store.
        |
        */
        'api_key' => 'Enter your api key'
    ],
    'nowpayments'=>[

        /**
         * API Key From NOWPayments Dashboard
         *
         */
        'apiKey' => 'T61BW4E-9NZ4J7F-MXN2321-N2AD0DJ',
    
        /**
         * IPN Secret from NOWPayments Dashboard
         */
        'ipnSecret' => env('NOWPAYMENTS_IPN_SECRET'),
    
        /**
         * You enviroment can either be live or sandbox.
         * Make sure to add the appropriate API key after changing the enviroment in .env
         *
         */
        'env' => env('NOWPAYMENTS_ENV', 'sandbox'),
    
        /**
         * NOWPayments Live URL
         *
         */
        'liveUrl' => env('NOWPAYMENTS_LIVE_URL', "https://api.nowpayments.io/v1"),
    
        /**
         * NOWPayments Sandbox URL
         *
         */
        'sandboxUrl' => env('NOWPAYMENTS_SANDBOX_URL', "https://api-sandbox.nowpayments.io/v1"),
    
        /**
         * Your callback URL
         *
         */
        'callbackUrl' => env('NOWPAYMENTS_CALLBACK_URL'),
    
        /**
         * Your Nowpayment email here
         *
         */
        'email' => env('NOWPAYMENTS_EMAIL'),
        
        /**
         * Your Nowpayment password here
         *
         */
        'password' =>  env('NOWPAYMENTS_PASSWORD'),
    
    ]
];
