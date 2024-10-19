<section class="overflow-hidden">


    <div class="row g-3 mx-max-md-0 justify-content-center">


        <!--<div class="col-lg-10 d-none d-md-block px-max-md-0">-->

            <div class="col-lg-8 mb-3 d-none d-md-block px-max-md-0">
                <div class="owl-theme owl-carousel flash-deal-slider">
                        @php $counter = 0;@endphp
                        @foreach($latest_products as $product)
                        <!--<div class="col-xl-3 col-sm-4 col-md-6 col-lg-4 col-6">-->
                            <div >
                                @include('web-views.partials._inline-single-product',['product'=>$product,'decimal_point_settings'=>$decimal_point_settings])
                            </div>
                        <!--</div>-->
                        @php
                        $counter++;
                        @endphp

                        @if($counter >= 4)
                        @break
                        @endif
                        @endforeach
                </div>
            </div>

        <!--</div>-->
    </div>


</section>