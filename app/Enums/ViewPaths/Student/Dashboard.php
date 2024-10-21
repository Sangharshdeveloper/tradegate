<?php

namespace App\Enums\ViewPaths\Student;

enum Dashboard
{
    const INDEX = [
        URI => '/',
        VIEW => 'student-views.dashboard.index',
        ROUTE => 'student.dashboard.index'
    ];
      
    const ORDER_STATUS = [
        URI => 'order-status',
        VIEW => 'student-views.partials._dashboard-order-status'
    ];
    const EARNING_STATISTICS = [
        URI => 'earning-statistics',
        VIEW => 'student-views.dashboard.partials.earning-statistics'
    ];
    const WITHDRAW_REQUEST = [
        URI => 'withdraw-request',
        VIEW => ''
    ];
    const METHOD_LIST = [
        URI => 'method-list',
        VIEW => ''
    ];


}
