<?php

namespace App\Enums\ViewPaths\Vendor;

enum Auth
{
    const VENDOR_LOGIN = [
        URI => 'login',
        VIEW => 'vendor-views.auth.login',
    ];

    const VENDOR_LOGOUT = [
        URI => 'vendor.auth.login',
        VIEW => 'vendor-views.auth.login'
    ];
    
    const RECAPTURE = [
        URI => 'recaptcha',
    ];

    const VENDOR_REGISTRATION = [
        URI => 'index',
        VIEW => 'seller_registration'
    ];

    const SUPPLIER_LOGIN = [
        URI => 'login',
        VIEW => 'supplier-views.auth.login',
    ];

    const SUPPLIER_LOGOUT = [
        URI => 'supplier.auth.login',
        VIEW => 'supplier-views.auth.login'
    ];
 
    const SUPPLIER_REGISTRATION = [
        URI => 'index',
        VIEW => 'seller_registration'
    ];


    // Dropshipper Login

    const DROPSHIPPER_LOGIN = [
        URI => 'login',
        VIEW => 'dropshipper-views.auth.login',
    ];

    const DROPSHIPPER_LOGOUT = [
        URI => 'supplier.auth.login',
        VIEW => 'dropshipper-views.auth.login'
    ];
 
    const DROPSHIPPER_REGISTRATION = [
        URI => 'index',
        VIEW => 'seller_registration'
    ];

}
