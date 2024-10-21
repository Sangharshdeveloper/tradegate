<?php

namespace App\Enums\ViewPaths\Student;

enum ForgotPassword
{
    const INDEX = [
      URI => 'index',
      VIEW => 'student-views.auth.forgot-password.index'
    ];
    const OTP_VERIFICATION = [
      URI => 'otp-verification',
      VIEW => 'student-views.auth.forgot-password.verify-otp-view'
    ];
    const RESET_PASSWORD = [
        URI => 'reset-password',
        ROUTE =>'student.auth.reset-password',
        VIEW => 'student-views.auth.forgot-password.reset-password-view'
    ];

}
