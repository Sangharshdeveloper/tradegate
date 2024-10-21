<?php

namespace App\Enums\ViewPaths\Student;

enum EmergencyContact
{
    const INDEX = [
        URI => 'index',
        VIEW => 'student-views.delivery-man.emergency-contact.index',
    ];
    const UPDATE = [
        URI => 'update',
        VIEW => 'student-views.delivery-man.emergency-contact._update-emergency-contact'
    ];

}
