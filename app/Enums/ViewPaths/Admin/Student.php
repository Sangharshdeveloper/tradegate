<?php

namespace App\Enums\ViewPaths\Admin;

enum Student
{
    const LIST = [
        URI => 'list',
        VIEW => 'admin-views.student.index'
    ];

    const ADD = [
        URI => 'add',
        VIEW => 'admin-views.student.add-new-student'
    ];

    const ORDER_LIST = [
        URI => 'order-list',
        VIEW => 'admin-views.student.order-list'
    ];
    const ORDER_LIST_EXPORT = [
        URI => 'order-list-export',
    ];
    const ORDER_DETAILS = [
        URI => 'order-details',
        VIEW => 'admin-views.student.order-details'
    ];

    const SUPPLIERS_LIST = [
        URI => 'product-list',
        VIEW => 'admin-views.student.suppliers-list'
    ];

 


    const PRODUCT_LIST = [
        URI => 'product-list',
        VIEW => 'admin-views.student.product-list'
    ];

    const SHOP_GALLERY = [
        URI => 'shop-gallery',
        VIEW => 'admin-views.student.shop-gallery'
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
        VIEW => 'admin-views.student.view'
    ];

    const VIEW_ORDER = [
        URI => '',
        VIEW => 'admin-views.student.view.order'
    ];

    const VIEW_PRODUCT = [
        URI => '',
        VIEW => 'admin-views.student.view.product'
    ];

    const VIEW_REVIEW = [
        URI => '',
        VIEW => 'admin-views.student.view.review'
    ];

    const VIEW_TRANSACTION = [
        URI => '',
        VIEW => 'admin-views.student.view.transaction'
    ];

    const VIEW_SETTING = [
        URI => '',
        VIEW => 'admin-views.student.view.setting'
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
        VIEW => 'admin-views.student.withdraw'
    ];

    const WITHDRAW_LIST_EXPORT = [
        URI => 'withdraw-list-export-excel',
        VIEW => ''
    ];

    const WITHDRAW_VIEW = [
        URI => 'withdraw-view',
        VIEW => 'admin-views.student.withdraw-view',
    ];

    const WITHDRAW_STATUS = [
        URI => 'withdraw-status',
        VIEW => ''
    ];


}
