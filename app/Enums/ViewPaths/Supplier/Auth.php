<?php

namespace App\Enums\ViewPaths\Supplier;

enum Auth
{
   

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

     
    const RECAPTURE = [
        URI => 'recaptcha',
    ];

   

}
