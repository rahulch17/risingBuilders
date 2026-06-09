<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company Configuration
    |--------------------------------------------------------------------------
    |
    | All company-specific settings used across views and services.
    | Override these values in your .env file.
    |
    */

    'name'    => env('COMPANY_NAME', 'Rising Builders'),
    'address' => env('COMPANY_ADDRESS', '100 Architecture Drive, New York, NY 10001'),
    'phone'   => env('COMPANY_PHONE', '+1 (212) 555-0100'),
    'email'   => env('COMPANY_EMAIL', 'hello@risingbuilders.com'),
    'founded' => 1990,

    /*
     * The email address that receives all contact form submissions.
     */
    'office_email' => env('COMPANY_OFFICE_EMAIL', 'office@risingbuilders.com'),

];
