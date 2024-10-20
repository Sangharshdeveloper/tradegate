<?php

namespace App\Enums\ViewPaths\Admin;

enum Supplier
{
    const LIST = [
        URI => 'list',
        VIEW => 'admin-views.supplier.index'
    ];

    const ADD = [
        URI => 'add',
        VIEW => 'admin-views.supplier.add-new-supplier'
    ];

    const ORDER_LIST = [
        URI => 'order-list',
        VIEW => 'admin-views.supplier.order-list'
    ];
    const ORDER_LIST_EXPORT = [
        URI => 'order-list-export',
    ];
    const ORDER_DETAILS = [
        URI => 'order-details',
        VIEW => 'admin-views.supplier.order-details'
    ];

    const PRODUCT_LIST = [
        URI => 'product-list',
        VIEW => 'admin-views.supplier.product-list'
    ];

    const STATUS = [
        URI => 'status',
        VIEW => ''
    ];

    const EXPORT = [
        URI => 'export',
        VIEW => ''
    ];

    const VIEW = [
        URI => 'view',
        VIEW => 'admin-views.supplier.view'
    ];

    const VIEW_ORDER = [
        URI => '',
        VIEW => 'admin-views.supplier.view.order'
    ];

    const VIEW_PRODUCT = [
        URI => '',
        VIEW => 'admin-views.supplier.view.product'
    ];

    const VIEW_REVIEW = [
        URI => '',
        VIEW => 'admin-views.supplier.view.review'
    ];

    const VIEW_TRANSACTION = [
        URI => '',
        VIEW => 'admin-views.supplier.view.transaction'
    ];

    const VIEW_SETTING = [
        URI => '',
        VIEW => 'admin-views.supplier.view.setting'
    ];

    const UPDATE = [
        URI => 'update',
        VIEW => 'admin-views.employee.edit'
    ];
    const UPDATE_SETTING = [
        URI => 'update_setting',
        VIEW => ''
    ];

    const SALES_COMMISSION_UPDATE = [
        URI => 'sales-commission-update',
        VIEW => ''
    ];

    const WITHDRAW_LIST = [
        URI => 'withdraw-list',
        VIEW => 'admin-views.supplier.withdraw'
    ];

    const WITHDRAW_LIST_EXPORT = [
        URI => 'withdraw-list-export-excel',
        VIEW => ''
    ];

    const WITHDRAW_VIEW = [
        URI => 'withdraw-view',
        VIEW => 'admin-views.supplier.withdraw-view',
    ];

    const WITHDRAW_STATUS = [
        URI => 'withdraw-status',
        VIEW => ''
    ];


}
