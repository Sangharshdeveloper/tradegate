<?php

namespace App\Enums\ViewPaths\Student;

class Refund
{
    const INDEX =[
        URI => 'index',
        VIEW => 'student-views.refund.index',
    ];
    const DETAILS =[
        URI => 'details',
        VIEW => 'student-views.refund.details'
    ];
    const UPDATE_STATUS =[
        URI => 'update-status',
        VIEW => ''
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];
}
