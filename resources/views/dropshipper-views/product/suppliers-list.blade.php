@php use Illuminate\Support\Str; @endphp
@extends('layouts.back-end.app-dropshipper')

@section('title', 'Suppliers List')

@section('content')
    <div class="content container-fluid">
        <div class="mb-4">
            <h2 class="h1 mb-0 text-capitalize d-flex align-items-center gap-2">
                <img src="{{dynamicAsset(path: 'public/assets/back-end/img/add-new-seller.png')}}" alt="">
                {{'Suppliers List'}}
                <span class="badge badge-soft-dark radius-50 fz-12">{{ $suppliers->total() }}</span>
            </h2>
        </div>

        <div class="row">
            <section class="col-lg-12">
                @if(count($suppliers) > 0)
                    <div class="row mx-n2 __min-h-200px">
                        @foreach ($suppliers  as $key=>$seller)
                        @php dd($seller->id) @endphp

                            @php($current_date = date('Y-m-d'))
                            @php($start_date = date('Y-m-d', strtotime($seller->vacation_start_date)))
                            @php($end_date = date('Y-m-d', strtotime($seller->vacation_end_date)))
                            <div class="col-lg-3 col-md-6 col-sm-12 px-2 pb-4 text-center">
                                <a href="{{route('dropshipper.products.shop-gallery',['id' => $seller?->shop?->id, 'seller_id' => $seller?->id ])}}" class="others-store-card text-capitalize">
                                    <div class="overflow-hidden other-store-banner">
                                        <img class="w-100 h-100 object-cover" alt="" src="{{ getStorageImages(path: $seller?->shop?->banner_full_url, type: 'shop-banner') }}">
                                    </div>
                                    <div class="name-area">
                                        <div class="position-relative">
                                            <div class="overflow-hidden other-store-logo rounded-full">
                                                <img class="rounded-full" alt="{{ translate('store') }}"
                                                     src="{{ getStorageImages(path: $seller?->shop?->image_full_url, type: 'backend-basic') }}">
<!-- {{ getStorageImages(path: $seller->image_full_url, type: 'shop') }} -->
                                            </div>

                                            @if($seller->temporary_close)
                                                <span class="temporary-closed position-absolute text-center rounded-full p-2">
                                                    <span>{{translate('Temporary_OFF')}}</span>
                                                </span>
                                            @elseif(($seller->vacation_status && ($current_date >= $seller?->shop?->vacation_start_date) && ($current_date <= $seller->vacation_end_date)))
                                                <span class="temporary-closed position-absolute text-center rounded-full p-2">
                                                    <span>{{translate('closed_now')}}</span>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="info pt-2">
                                            <h5 class="text-start">{{ $seller?->shop?->name }}</h5>
                                            <div class="d-flex align-items-center">
                                                <h6 class="web-text-primary">{{number_format($seller?->shop?->average_rating,1)}}</h6>
                                                <i class="tio-star text-star mx-1"></i>
                                                <small>{{ translate('rating') }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-area">
                                        <div class="info-item">
                                            <h6 class="web-text-primary">{{$seller?->shop?->review_count < 1000 ? $seller?->shop?->review_count : number_format($seller?->shop?->review_count / 1000 , 1).'K'}}</h6>
                                            <span>{{ translate('reviews') }}</span>
                                        </div>
                                        <div class="info-item">
                                            <h6 class="web-text-primary">{{$seller?->shop?->products_count < 1000 ? $seller?->shop?->products_count : number_format($seller?->shop?->products_count /1000 , 1).'K'}}</h6>
                                            <span>{{ translate('products') }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mx-n2">
                        <div class="col-md-12">
                            <div class="text-center">
                                {{ $suppliers->links() }}
                            </div>
                        </div>
                    </div>
                @else
                    <div class="mb-5 text-center text-muted">
                        <div class="d-flex justify-content-center my-2">
                            <img alt="" src="{{ theme_asset(path: 'public/assets/front-end/img/media/seller.svg') }}">
                        </div>
                        <h4 class="text-muted">{{ translate('vendor_not_available') }}</h4>
                        <p>{{ translate('Sorry_no_data_found_related_to_your_search') }}</p>
                    </div>
                @endif
            </section>
        </div>

        <div class="row mt-4" style="display:none;">
            <div class="col-md-12">
                <div class="card">
                    <div class="px-3 py-4">
                        <div class="d-flex justify-content-between gap-10 flex-wrap align-items-center">
                            <div class="">
                                <form action="{{ url()->current() }}" method="GET">
                                    <div class="input-group input-group-merge input-group-custom width-500px">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tio-search"></i>
                                            </div>
                                        </div>
                                        <input id="datatableSearch_" type="search" name="searchValue" class="form-control"
                                            placeholder="{{translate('search_by_shop_name_or_vendor_name_or_phone_or_email')}}" aria-label="Search orders" value="{{ request('searchValue') }}">
                                        <button type="submit" class="btn btn--primary">{{translate('search')}}</button>
                                    </div>
                                </form>
                            </div>
                            <div class="d-flex justify-content-end gap-2">
                                <div class="dropdown text-nowrap">
                                    <button type="button" class="btn btn-outline--primary" data-toggle="dropdown">
                                        <i class="tio-download-to"></i>
                                        {{translate('export')}}
                                        <i class="tio-chevron-down"></i>
                                    </button>

                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li>
                                            <a type="submit" class="dropdown-item d-flex align-items-center gap-2 " href="{{route('admin.vendors.export',['searchValue' => request('searchValue')])}}">
                                                <img width="14" src="{{dynamicAsset(path: 'public/assets/back-end/img/excel.png')}}" alt="">
                                                {{translate('excel')}}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <a href="{{route('admin.suppliers.add')}}" type="button" class="btn btn--primary text-nowrap">
                                    <i class="tio-add"></i>
                                    {{'Add New Supplier'}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table
                            style="text-align: {{Session::get('direction') === "rtl" ? 'right' : 'left'}};"
                            class="table table-hover table-borderless table-thead-bordered table-nowrap table-align-middle card-table w-100">
                            <thead class="thead-light thead-50 text-capitalize">
                            <tr>
                                <th>{{translate('SL')}}</th>
                                <th>{{translate('shop_name')}}</th>
                                <th>{{translate('vendor_name')}}</th>
                                <th>{{translate('contact_info')}}</th>
                                <th>{{translate('status')}}</th>
                                <th class="text-center">{{translate('total_products')}}</th>
                                <th class="text-center">{{translate('total_orders')}}</th>
                                <th class="text-center">{{translate('action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($suppliers as $key=>$seller)
                                <tr>
                                    <td>{{$suppliers->firstItem()+$key}}</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-10 w-max-content">
                                            <img width="50"
                                            class="avatar rounded-circle object-fit-cover" src="{{ getStorageImages(path: $seller?->shop?->image_full_url, type: 'backend-basic') }}"
                                                alt="">
                                            <div>
                                                <a class="title-color" href="{{ route('admin.vendors.view', ['id' => $seller->id]) }}">{{ $seller->shop ? Str::limit($seller->shop->name, 20) : translate('shop_not_found')}}</a>
                                                <br>
                                                <span class="text-danger">
                                                    @if($seller->shop && $seller->shop->temporary_close)
                                                        {{ translate('temporary_closed') }}
                                                    @elseif($seller->shop && $seller->shop->vacation_status && $current_date >= date('Y-m-d', strtotime($seller->shop->vacation_start_date)) && $current_date <= date('Y-m-d', strtotime($seller->shop->vacation_end_date)))
                                                        {{ translate('on_vacation') }}
                                                    @endif
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <a title="{{translate('view')}}"
                                           class="title-color"
                                           href="{{route('admin.suppliers.view',$seller->id)}}">
                                            {{$seller->f_name}} {{$seller->l_name}}
                                        </a>
                                    </td>
                                    <td>
                                        <div class="mb-1">
                                            <strong><a class="title-color hover-c1" href="mailto:{{$seller->email}}">{{$seller->email}}</a></strong>
                                        </div>
                                        <a class="title-color hover-c1" href="tel:{{$seller->phone}}">{{$seller->phone}}</a>
                                    </td>
                                    <td>
                                        {!! $seller->status=='approved'?'<label class="badge badge-success">'.translate('active').'</label>':'<label class="badge badge-danger">'.translate('inactive').'</label>' !!}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.vendors.product-list',[$seller['id']])}}"
                                           class="btn text--primary bg-soft--primary font-weight-bold px-3 py-1 mb-0 fz-12">
                                            {{$seller->product->count()}}
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route('admin.vendors.order-list',[$seller['id']])}}"
                                            class="btn text-info bg-soft-info font-weight-bold px-3 py-1 fz-12 mb-0">
                                            {{$seller->orders->where('seller_is','seller')->where('order_type','default_type')->count()}}
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a title="{{translate('view')}}"
                                                class="btn btn-outline-info btn-sm square-btn"
                                                href="{{route('admin.suppliers.view',$seller->id)}}">
                                                <i class="tio-invisible"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive mt-4">
                        <div class="px-4 d-flex justify-content-center justify-content-md-end">
                            {!! $suppliers->links() !!}
                        </div>
                    </div>
                    @if(count($suppliers)==0)
                        @include('layouts.back-end._empty-state',['text'=>'no_vendor_found'],['image'=>'default'])
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
