<?php

namespace App\Enums\ViewPaths\Student;

enum POS
{
    const SUMMARY =[
        VIEW => 'student-views.pos.partials._cart-summary',
    ];
    const CART =[
        VIEW => 'student-views.pos.partials._cart',
    ];
    const INDEX =[
        URI => '/',
        VIEW => 'student-views.pos.index',
        ROUTE => 'student.pos.index',
    ];

    const CHANGE_CUSTOMER =[
        URI => 'change-customer',
    ];
    const UPDATE_DISCOUNT =[
        URI => 'update-discount',
    ];
    const COUPON_DISCOUNT =[
        URI => 'coupon-discount',
    ];
    const STORE_KEY =[
        URI => 'store-key',
    ];
    const QUICK_VIEW = [
        URI => 'quick-view',
        VIEW => 'student-views.pos.partials._quick-view'
    ];
    const SEARCH = [
        URI => 'search-product',
        VIEW => 'student-views.pos.partials._search-product'
    ];
}
