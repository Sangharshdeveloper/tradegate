<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Auth
{
   

    const DROPSHIPPER_LOGIN = [
        URI => 'login',
        VIEW => 'dropshipper-views.auth.login',
    ];

    const DROPSHIPPER_LOGOUT = [
        URI => 'dropshipper.auth.login',
        VIEW => 'dropshipper-views.auth.login'
    ];
 
    const DROPSHIPPER_REGISTRATION = [
        URI => 'index',
        VIEW => 'seller_registration'
    ];

     
    const RECAPTURE = [
        URI => 'recaptcha',
    ];

   

}
