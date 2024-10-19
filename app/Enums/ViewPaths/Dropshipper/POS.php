<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum POS
{
    const SUMMARY =[
        VIEW => 'dropshipper-views.pos.partials._cart-summary',
    ];
    const CART =[
        VIEW => 'dropshipper-views.pos.partials._cart',
    ];
    const INDEX =[
        URI => '/',
        VIEW => 'dropshipper-views.pos.index',
        ROUTE => 'dropshipper.pos.index',
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
        VIEW => 'supplier-views.pos.partials._quick-view'
    ];
    const SEARCH = [
        URI => 'search-product',
        VIEW => 'supplier-views.pos.partials._search-product'
    ];
}
