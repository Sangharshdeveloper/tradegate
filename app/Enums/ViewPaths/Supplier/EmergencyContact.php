<?php

namespace App\Enums\ViewPaths\Supplier;

enum EmergencyContact
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.delivery-man.emergency-contact.index',
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'supplier-views.delivery-man.emergency-contact._update-emergency-contact'
    ];

}
