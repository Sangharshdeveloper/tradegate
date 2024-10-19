@if(count($main_banner) > 0)
<section class="bg-transparent">
    <div class="position-relative" style="width:100%">
        <!--<div class="row no-gutters position-relative rtl">-->
        @if ($categories->count() == -99 )
        <div class="col-xl-3 position-static d-none d-xl-block __top-slider-cate">
            <div class="category-menu-wrap position-static">
                <ul class="category-menu mt-0">
                    @foreach ($categories as $key=>$category)
                    <li>
                        <a href="{{route('products',['category_id'=> $category['id'],'data_from'=>'category','page'=>1])}}">{{$category->name}}</a>
                        @if ($category->childes->count() > 0)
                        <div class="mega_menu z-2">
                            @foreach ($category->childes as $sub_category)
                            <div class="mega_menu_inner">
                                <h6><a href="{{route('products',['category_id'=> $sub_category['id'],'data_from'=>'category','page'=>1])}}">{{$sub_category->name}}</a></h6>
                                @if ($sub_category->childes->count() >0)
                                @foreach ($sub_category->childes as $sub_sub_category)
                                <div><a href="{{route('products',['category_id'=> $sub_sub_category['id'],'data_from'=>'category','page'=>1])}}">{{$sub_sub_category->name}}</a></div>
                                @endforeach
                                @endif
                            </div>
                            @endforeach
                        </div>
                        @endif
                    </li>
                    @endforeach
                    <li class="text-center">
                        <a href="{{route('categories')}}" class="text-primary font-weight-bold justify-content-center text-capitalize">
                            All
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        @endif


        <div class="owl-theme owl-carousel hero-slider" style="position: relative;">
            @foreach($main_banner as $key=>$banner)
            <a href="{{$banner['url']}}" class="d-block" target="_blank">
                <img class="w-100 __slide-img" alt=""
                    src="{{ getStorageImages(path: $banner->photo_full_url, type: 'banner') }}">
            </a>
            @endforeach
        </div>
        <div class="carousel-wrap-2 d-none d-sm-block" style="position: absolute;  position: absolute;bottom: 0px;left: 50%;transform: translateX(-50%); width: 95%; z-index: 2; ">
            <div class="owl-carousel owl-theme category-wise-product-slider" >
                @foreach($products as $key => $product)
                @php($overallRating = getOverallRating($product->reviews))
<div class="product-single-hover style--category shadow-none">
    <div class="overflow-hidden position-relative">
        <div class=" inline_product clickable d-flex justify-content-center">
            @if($product->discount > 0)
                <div class="d-flex">
                    <span class="for-discount-value p-1 pl-2 pr-2 font-bold fs-13">
                        <span class="direction-ltr d-block">
                            @if ($product->discount_type == 'percent')
                                {{round($product->discount,(!empty($decimal_point_settings) ? $decimal_point_settings: 0))}}%
                            @elseif($product->discount_type =='flat')
                                {{ webCurrencyConverter(amount: $product->discount) }}
                            @endif
                        </span>
                    </span>
                </div>
            @else
                <div class="d-flex justify-content-end">
                    <span class="for-discount-value-null"></span>
                </div>
            @endif
            <div class="d-block pb-0">
                <a href="{{route('product',$product->slug)}}" class="d-block">
                    <img  alt=""
                         src="{{ getStorageImages(path: $product->thumbnail_full_url, type: 'product') }}">
                </a>
            </div>

            <div class="quick-view">
                <a class="btn-circle stopPropagation action-product-quick-view" href="javascript:" data-product-id="{{ $product->id }}">
                    <i class="czi-eye align-middle"></i>
                </a>
            </div>
            @if($product->product_type == 'physical' && $product->current_stock <= 0)
                <span class="out_fo_stock">{{translate('out_of_stock')}}</span>
            @endif
        </div>
        <div class="single-product-details" style="background-color:white; height:50px;">
            @if($overallRating[0] != 0 )
                <div class="rating-show justify-content-between">
                <span class="d-inline-block font-size-sm text-body">
                    @for($inc=1;$inc<=5;$inc++)
                        @if ($inc <= (int)$overallRating[0])
                            <i class="tio-star text-warning"></i>
                        @elseif ($overallRating[0] != 0 && $inc <= (int)$overallRating[0] + 1.1 && $overallRating[0] > ((int)$overallRating[0]))
                            <i class="tio-star-half text-warning"></i>
                        @else
                            <i class="tio-star-outlined text-warning"></i>
                        @endif
                    @endfor
                    <label class="badge-style">( {{ count($product->reviews) }} )</label>
                </span>
                </div>
            @endif
            <div class="" >
                <a href="{{route('product',$product->slug)}}" class="text-capitalize fw-semibold">
                    {{ $product['name'] }}
                </a>
            </div>
            <div class="justify-content-between ">
                <div class="product-price d-flex flex-wrap gap-8 align-items-center row-gap-0">
                    @if($product->discount > 0)
                        <del class="category-single-product-price">
                            {{ webCurrencyConverter(amount: $product->unit_price) }}
                        </del>
                    @endif
                    <span class="text-accent text-dark">
                        {{ webCurrencyConverter(amount:
                            $product->unit_price-(getProductDiscount(product: $product, price: $product->unit_price))
                        ) }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>



                @endforeach
            </div>
        </div>



    </div>
</section>
@endif