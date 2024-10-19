<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Product
{
    const ADD = [
        URI => 'add',
        VIEW => 'dropshipper-views.product.add-new'
    ];

    const LIST = [
        URI => 'list',
        VIEW => 'dropshipper-views.product.list'
    ];

    const UPDATE = [
        URI => 'update',
        VIEW => 'dropshipper-views.product.edit'
    ];

    const VIEW = [
        URI => 'view',
        VIEW => 'dropshipper-views.product.view',
        ROUTE => 'dropshipper.products.view'
    ];

    const SKU_COMBINATION = [
        URI => 'sku-combination',
        VIEW => ''
    ];

    const DIGITAL_VARIATION_COMBINATION = [
        URI => 'digital-variation-combination',
        VIEW => 'dropshipper-views.product.partials._digital-variation-combination'
    ];

    const DIGITAL_VARIATION_FILE_DELETE = [
        URI => 'digital-variation-file-delete',
        VIEW => ''
    ];

    const UPDATE_STATUS = [
        URI => 'status-update',
        VIEW => ''
    ];

    const GET_CATEGORIES = [
        URI => 'get-categories',
        VIEW => ''
    ];

    const BARCODE_VIEW = [
        URI => 'barcode',
        VIEW => 'dropshipper-views.product.barcode'
    ];

    const BARCODE_GENERATE = [
        URI => 'barcode',
        VIEW => ''
    ];

    const EXPORT_EXCEL = [
        URI => 'export-excel',
        VIEW => ''
    ];

    const STOCK_LIMIT = [
        URI => 'stock-limit-list',
        VIEW => 'dropshipper-views.product.stock-limit-list'
    ];

    const DELETE = [
        URI => 'delete',
        VIEW => ''
    ];

    const DELETE_IMAGE = [
        URI => 'delete-image',
        VIEW => ''
    ];

    const GET_VARIATIONS = [
        URI => 'get-variations',
        VIEW => 'dropshipper-views.product.partials._update_stock'
    ];

    const UPDATE_QUANTITY = [
        URI => 'update-quantity',
        VIEW => ''
    ];

    const BULK_IMPORT = [
        URI => 'bulk-import',
        VIEW => 'dropshipper-views.product.bulk-import'
    ];
    const SEARCH = [
        URI => 'search',
        VIEW => 'dropshipper-views.partials._search-product'

    ];
    const PRODUCT_GALLERY = [
        URI => 'product-gallery',
        VIEW => 'dropshipper-views.product.product-gallery'
    ];

    const STOCK_LIMIT_STATUS = [
        URI => 'stock-limit-status',
        VIEW => ''
    ];

    const DELETE_PREVIEW_FILE = [
        URI => 'delete-preview-file',
        VIEW => '',
    ];
}
