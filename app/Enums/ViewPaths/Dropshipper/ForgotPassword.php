<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum ForgotPassword
{
    const INDEX = [
      URI => 'index',
      VIEW => 'dropshipper-views.auth.forgot-password.index'
    ];
    const OTP_VERIFICATION = [
      URI => 'otp-verification',
      VIEW => 'dropshipper-views.auth.forgot-password.verify-otp-view'
    ];
    const RESET_PASSWORD = [
        URI => 'reset-password',
        ROUTE =>'vendor.auth.reset-password',
        VIEW => 'dropshipper-views.auth.forgot-password.reset-password-view'
    ];

}
