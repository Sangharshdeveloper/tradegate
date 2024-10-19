<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum EmergencyContact
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.delivery-man.emergency-contact.index',
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.delivery-man.emergency-contact._update-emergency-contact'
    ];

}
