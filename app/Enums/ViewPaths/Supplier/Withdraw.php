<?php

namespace App\Enums\ViewPaths\Supplier;

enum Withdraw
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.withdraw.index',
        TABLE_VIEW => 'supplier-views.withdraw._table',
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
