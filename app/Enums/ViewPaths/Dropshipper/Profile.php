<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Profile
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.profile.index',
        ROUTE => 'dropshipper.profile.index'
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.profile.update-view'
    ];
    const BANK_INFO_UPDATE = [
        URI => 'update-bank-info',
        VIEW => 'dropshipper-views.profile.bank-info-update-view'
    ];
}
