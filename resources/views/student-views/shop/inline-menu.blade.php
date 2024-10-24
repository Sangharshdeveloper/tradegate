<div class="inline-page-menu my-4">
    <ul class="list-unstyled">
        <li class="{{ Request::is('student/shop/index') && !request()->has('pagetype') ?'active':'' }}"><a href="{{route('student.shop.index')}}">{{translate('general')}}</a></li>
        @if (($minimumOrderAmountStatus && $minimumOrderAmountByVendor ) || ($freeDeliveryStatus && $freeDeliveryResponsibility == 'seller'))
            <li class="{{ Request::is('student/shop/index') && request('pagetype') == 'order_settings' ?'active':'' }}">
                <a href="{{ route('student.shop.index',['pagetype'=>'order_settings']) }}">{{translate('order_settings')}}</a>
            </li>
        @endif
    </ul>
</div>
