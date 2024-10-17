<?php

namespace App\Enums\ViewPaths\Supplier;

enum ForgotPassword
{
    const INDEX = [
      URI => 'index',
      VIEW => 'supplier-views.auth.forgot-password.index'
    ];
    const OTP_VERIFICATION = [
      URI => 'otp-verification',
      VIEW => 'supplier-views.auth.forgot-password.verify-otp-view'
    ];
    const RESET_PASSWORD = [
        URI => 'reset-password',
        ROUTE =>'vendor.auth.reset-password',
        VIEW => 'supplier-views.auth.forgot-password.reset-password-view'
    ];

}
