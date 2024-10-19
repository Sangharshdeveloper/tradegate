<?php

namespace App\Enums\ViewPaths\Dropshipper;

class Refund
{
    const INDEX =[
        URI => 'index',
        VIEW => 'dropshipper-views.refund.index',
    ];
    const DETAILS =[
        URI => 'details',
        VIEW => 'dropshipper-views.refund.details'
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
