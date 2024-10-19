<?php

namespace App\Enums\ViewPaths\Supplier;

enum Profile
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.profile.index',
        ROUTE => 'supplier.profile.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'supplier-views.profile.update-view'
    ];
    const BANK_INFO_UPDATE = [
        URI => 'update-bank-info',
        VIEW => 'supplier-views.profile.bank-info-update-view'
    ];
}
