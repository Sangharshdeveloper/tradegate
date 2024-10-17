<?php

namespace App\Enums\ViewPaths\Supplier;

class Refund
{
    const INDEX =[
        URI => 'index',
        VIEW => 'supplier-views.refund.index',
    ];
    const DETAILS =[
        URI => 'details',
        VIEW => 'supplier-views.refund.details'
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
