<?php

namespace App\Enums\ViewPaths\Student;

enum Auth
{
   

    const LOGIN = [
        URI => 'login',
        VIEW => 'supplier-views.auth.login',
    ];

    const LOGOUT = [
        URI => 'student.auth.login',
        VIEW => 'student-views.auth.login'
    ];
 
    const REGISTRATION = [
        URI => 'index',
        VIEW => 'seller_registration'
    ];

     
    const RECAPTURE = [
        URI => 'recaptcha',
    ];

   

}
