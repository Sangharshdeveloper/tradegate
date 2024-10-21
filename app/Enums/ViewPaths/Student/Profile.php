<?php

namespace App\Enums\ViewPaths\Student;

enum Profile
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.profile.index',
        ROUTE => 'student.profile.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'student-views.profile.update-view'
    ];
    const BANK_INFO_UPDATE = [
        URI => 'update-bank-info',
        VIEW => 'student-views.profile.bank-info-update-view'
    ];
}
