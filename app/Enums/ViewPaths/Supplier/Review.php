<?php

namespace App\Enums\ViewPaths\Supplier;

enum Review
{
    const INDEX = [
        URI => 'index',
        VIEW => 'supplier-views.reviews.index'
    ];

    const UPDATE_STATUS = [
        URI => 'update-status',
        VIEW => ''
    ];

    const REVIEW_REPLY = [
        URI => 'add-review-reply',
        VIEW => ''
    ];

    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];
}
