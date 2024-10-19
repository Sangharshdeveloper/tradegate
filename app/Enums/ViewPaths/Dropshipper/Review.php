<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Review
{
    const INDEX = [
        URI => 'index',
        VIEW => 'dropshipper-views.reviews.index'
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
