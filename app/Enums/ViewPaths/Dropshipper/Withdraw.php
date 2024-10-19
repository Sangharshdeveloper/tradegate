<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Withdraw
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.withdraw.index',
        TABLE_VIEW => 'dropshipper-views.withdraw._table',
    ];
    const CLOSE_REQUEST = [
        URI => 'close',
        VIEW => ''
    ];
    const EXPORT = [
        URI => 'export',
        VIEW => '',
         FILE_NAME => 'Vendor-Withdraw-Request.xlsx'
    ];
}
