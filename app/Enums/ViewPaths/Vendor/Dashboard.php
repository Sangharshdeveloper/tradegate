<?php

namespace App\Enums\ViewPaths\Vendor;

enum Dashboard
{
    const INDEX = [
        URI => '/',
        VIEW => 'vendor-views.dashboard.index',
        ROUTE => 'vendor.dashboard.index'
    ];

    const ORDER_STATUS = [
        URI => 'order-status',
        VIEW => 'vendor-views.partials._dashboard-order-status'
    ];
    const EARNING_STATISTICS = [
        URI => 'earning-statistics',
        VIEW => 'vendor-views.dashboard.partials.earning-statistics'
    ];
    const WITHDRAW_REQUEST = [
        URI => 'withdraw-request',
        VIEW => ''
    ];
    const METHOD_LIST = [
        URI => 'method-list',
        VIEW => ''
    ];


    //  Supplier Start
    const INDEX_SUPPLIER = [
        URI => '/',
        VIEW => 'vendor-views.dashboard.index',
        ROUTE => 'vendor.dashboard.index'
    ];

    const ORDER_STATUS_SUPPLIER = [
        URI => 'order-status',
        VIEW => 'supplier-views.partials._dashboard-order-status'
    ];
    const EARNING_STATISTICS_SUPPLIER = [
        URI => 'earning-statistics',
        VIEW => 'supplier-views.dashboard.partials.earning-statistics'
    ];
    const WITHDRAW_REQUEST_SUPPLIER = [
        URI => 'withdraw-request',
        VIEW => ''
    ];
    const METHOD_LIST_SUPPLIER = [
        URI => 'method-list',
        VIEW => ''
    ];

    // Suppliers End

    //  Dropshipper Start
    const INDEX_DROPSHIPPER = [
        URI => '/',
        VIEW => 'drophipper-views.dashboard.index',
        ROUTE => 'drophipper.dashboard.index'
    ];

    const ORDER_STATUS_DROPSHIPPER = [
        URI => 'order-status',
        VIEW => 'drophipper-views.partials._dashboard-order-status'
    ];
    const EARNING_STATISTICS_DROPSHIPPER = [
        URI => 'earning-statistics',
        VIEW => 'drophipper-views.dashboard.partials.earning-statistics'
    ];
    const WITHDRAW_REQUEST_DROPSHIPPER = [
        URI => 'withdraw-request',
        VIEW => ''
    ];
    const METHOD_LIST_DROPSHIPPER = [
        URI => 'method-list',
        VIEW => ''
    ];
    // Dropshipper End
}
