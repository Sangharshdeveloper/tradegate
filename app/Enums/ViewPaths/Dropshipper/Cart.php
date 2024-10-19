<?php

namespace App\Enums\ViewPaths\Dropshipper;

enum Cart
{

    const SUMMARY =[
        VIEW => 'dropshipper-views.pos.partials._cart-summary',
    ];
    const CART =[
        VIEW => 'dropshipper-views.pos.partials._cart',
    ];
    const VARIANT =[
        URI => 'get-variant-price',
    ];
    const QUANTITY_UPDATE =[
        URI => 'quantity-update',
    ];
    const ADD =[
        URI => 'add-to-cart',
    ];
    const REMOVE =[
        URI => 'cart-remove',
    ];
    const GET_CART_IDS =[
        URI => 'get-cart-ids',
    ];
    const CLEAR_CART_IDS =[
        URI => 'clear-cart-ids',
    ];
    const CART_EMPTY =[
        URI => 'cart-empty',
    ];
    const NEW_CART_ID =[
        URI => 'new-cart-id',
    ];
    const CHANGE_CART =[
        URI => 'change-cart',
    ];
}
