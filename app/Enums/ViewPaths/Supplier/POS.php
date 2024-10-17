<?php

namespace App\Enums\ViewPaths\Supplier;

enum POS
{
    const SUMMARY =[
        VIEW => 'supplier-views.pos.partials._cart-summary',
    ];
    const CART =[
        VIEW => 'supplier-views.pos.partials._cart',
    ];
    const INDEX =[
        URI => '/',
        VIEW => 'supplier-views.pos.index',
        ROUTE => 'supplier.pos.index',
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
