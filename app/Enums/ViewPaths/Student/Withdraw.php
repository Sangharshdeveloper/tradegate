<?php

namespace App\Enums\ViewPaths\Student;

enum Withdraw
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.withdraw.index',
        TABLE_VIEW => 'student-views.withdraw._table',
    ];
    const CLOSE_REQUEST = [
        URI => 'close',
        VIEW => ''
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => '',
         FILE_NAME => 'Student-Withdraw-Request.xlsx'
    ];
}
