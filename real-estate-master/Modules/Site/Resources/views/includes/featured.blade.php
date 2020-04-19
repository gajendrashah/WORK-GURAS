
<div class="feature-ad my-5 clearfix">
    <div class="heading_category clearfix">
        <div class="main_heading d-inline text-left">
            <div class="float-left">
                <h6 class="kaushan-script-text">Premium Properties in Nepal</h6>
                <div class="hr_line "></div>
            </div>
            <a class="view-all-bottom float-right mt-4 px-3 py-2"
                href="{{ route('products', ['premium' => 'yes']) }}">View All</a>
        </div>
    </div>

    {{--<div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">
        <!--Start product-detail-->
        <div class="feature_carousel carousel-inner v-2 py-3" role="listbox">
           @if($firstSliderFet)
            <div class="carousel-item active" style="margin-left:18px">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-1">
                    <div class="card p-1 product__container">
                        <div class="image_body position-relative">
                            <div class="its">
                                @if($firstSliderFet->is_premium==1)
                                <div class="is_fet_ur py-1 mb-1">
                                    <span class="py-2 px-4">Premium</span>
                                </div>
                                @endif
                                @if($firstSliderFet->is_urgent==1)
                                <div class="it_urg py-1">
                                    <span class="py-2 px-4">Urgent</span>
                                </div>
                                @endif
                            </div>
                            <div class="date_posted">
                                {{(new Carbon\Carbon($firstSliderFet->created_at))->diffForHumans()}}</div>
                            <div class="images">
                                <img src="{{asset(config('dashboard.products'). $firstSliderFet->main_image) }}"
                                    alt="img" style="height:180px;width:100%;">
                            </div>
                        </div>
                        <div class="price__view clearfix px-2 ml-0">
                            <div class="price_per float-left my-auto text-white pt-2">Rs. &nbsp;
                                <b style="font-size:14px; padding:3px 6px; background:orange; border-radius:55px;">
                                    {{ $firstSliderFet->price }}</b></div>
                            <div class="viewDet float-right">
                                <a href="https://www.facebook.com" class="btn btn-default btn-rounded facebook"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://plus.google.com" class="btn btn-default btn-rounded google-plus"
                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="{{ route('product.details', $firstSliderFet->id) }}"
                                    class="btn btn-default btn-rounded">view</a>
                            </div>
                        </div>

                        <div class="property_type text-left pt-2 px-2">
                            <h4>
                                {{$firstSliderFet->property_type}} on {{$firstSliderFet->sell_type}}
                            </h4>
                        </div>
                        <div class="prop_details text-left p-2">
                            <h4 class="text">
                                {{ $firstSliderFet->title }}, {{$firstSliderFet->city}},
                                {{$firstSliderFet->name_of_project_society}}, {{$firstSliderFet->locality}}
                            </h4>
                            <p class="card-text text-left mt-2" style="font-size:12px;">
                                <i class="fa fa-map-marker"></i>
                                @if($firstSliderFet->Locality){{$firstSliderFet->Locality}},@endif
                                {{$firstSliderFet->name_of_project_society}}, {{$firstSliderFet->city}}
                            </p>
                        </div>
                        <div class="pl-2 my-1">
                            @if($firstSliderFet->property_type=="Land")
                            <div class="area_cov">
                                <img src="{{asset('/images/land.svg')}}" alt="area covered"
                                    style="width:16px;height:16px;">
                                <p>
                                    @if($firstSliderFet->plot_area_area)
                                    {{$firstSliderFet->plot_area_area}}
                                    {{$firstSliderFet->plot_area_measure}}
                                    @endif</p>
                            </div>
                            @else
                            <div class="area_cov">
                                <img src="{{asset('/images/land.svg')}}" alt="area covered"
                                    style="width:16px;height:16px;">
                                <p>
                                    @if($firstSliderFet->covered_area_area)
                                    {{$firstSliderFet->covered_area_area}}
                                    {{$firstSliderFet->covered_area_measure}}
                                    @endif
                                </p>
                            </div>
                            @endif
                        </div>
                        <div class="pl-2 my-1">
                            <ul class="summary">
                                <li><img src="{{asset('/images/bed.svg')}}" alt="bed" style="width:16px;height:16px;">
                                    @if($firstSliderFet->bedrooms_no)<b>{{$firstSliderFet->bedrooms_no}}</b>@else<b>-</b>@endif
                                </li>
                                <li><img src="{{asset('/images/toilet.svg')}}" alt="bathroom"
                                        style="width:16px;height:16px;">
                                    @if($firstSliderFet->bathrooms_no)<b>{{$firstSliderFet->bathrooms_no}}</b>@else<b>-</b>@endif
                                </li>
                                <li><img src="{{asset('/images/parking.svg')}}" alt="parking"
                                        style="width:16px;height:16px;">
                                    <b>@if($firstSliderFet->is_parking)Yes @else No @endif</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @foreach ($features as $item)
            <div class="carousel-item" style="margin-left:18px">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-1">
                    <div class="card p-1 product__container">
                        <div class="image_body position-relative">
                            <div class="its">
                                @if($item->is_premium==1)
                                <div class="is_fet_ur py-1 mb-1">
                                    <span class="py-2 px-4">Premium</span>
                                </div>
                                @endif
                                @if($item->is_urgent==1)
                                <div class="it_urg py-1">
                                    <span class="py-2 px-4">Urgent</span>
                                </div>
                                @endif
                            </div>
                            <div class="date_posted">{{(new Carbon\Carbon($item->created_at))->diffForHumans()}}</div>
                            <div class="images">
                                <img src="{{asset(config('dashboard.products'). $item->main_image) }}" alt="img"
                                    style="height:180px;width:100%;">
                            </div>
                        </div>
                        <div class="price__view clearfix px-2 ml-0">
                            <div class="price_per float-left my-auto text-white pt-2">Rs. &nbsp;
                                <b style="font-size:14px; padding:3px 6px; background:orange; border-radius:55px;">
                                    {{ $item->price }}</b></div>
                            <div class="viewDet float-right">
                                <a href="https://www.facebook.com" class="btn btn-default btn-rounded facebook"
                                    target="_blank"><i class="fa fa-facebook"></i></a>
                                <a href="https://plus.google.com" class="btn btn-default btn-rounded google-plus"
                                    target="_blank"><i class="fa fa-google-plus"></i></a>
                                <a href="{{ route('product.details', $item->id) }}"
                                    class="btn btn-default btn-rounded">view</a>
                            </div>
                        </div>

                        <div class="property_type text-left pt-2 px-2">
                            <h4>
                                {{$item->property_type}} on {{$item->sell_type}}
                            </h4>
                        </div>
                        <div class="prop_details text-left p-2">
                            <h4 class="text">
                                {{ $item->title }}, {{$item->city}},
                                {{$item->name_of_project_society}}, {{$item->locality}}
                            </h4>
                            <p class="card-text text-left mt-2" style="font-size:12px;">
                                <i class="fa fa-map-marker"></i>
                                @if($item->Locality){{$item->Locality}},@endif
                                {{$item->name_of_project_society}}, {{$item->city}}
                            </p>
                        </div>
                        <div class="pl-2 my-1">
                            @if($item->property_type=="Land")
                            <div class="area_cov">
                                <img src="{{asset('/images/land.svg')}}" alt="area covered"
                                    style="width:16px;height:16px;">
                                <p>
                                    @if($item->plot_area_area)
                                    {{$item->plot_area_area}}
                                    {{$item->plot_area_measure}}
                                    @endif</p>
                            </div>
                            @else
                            <div class="area_cov">
                                <img src="{{asset('/images/land.svg')}}" alt="area covered"
                                    style="width:16px;height:16px;">
                                <p>
                                    @if($item->covered_area_area)
                                    {{$item->covered_area_area}}
                                    {{$item->covered_area_measure}}
                                    @endif
                                </p>
                            </div>
                            @endif
                        </div>
                        <div class="pl-2 my-1">
                            <ul class="summary">
                                <li><img src="{{asset('/images/bed.svg')}}" alt="bed" style="width:16px;height:16px;">
                                    @if($item->bedrooms_no)<b>{{$item->bedrooms_no}}</b>@else<b>-</b>@endif
                                </li>
                                <li><img src="{{asset('/images/toilet.svg')}}" alt="bathroom"
                                        style="width:16px;height:16px;">
                                    @if($item->bathrooms_no)<b>{{$item->bathrooms_no}}</b>@else<b>-</b>@endif
                                </li>
                                <li><img src="{{asset('/images/parking.svg')}}" alt="parking"
                                        style="width:16px;height:16px;">
                                    <b>@if($item->is_parking)Yes @else No @endif</b>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--End product-detail-->
            @endforeach
        </div>

        <!--Controls-->
        <a class="carousel-control-prev my-auto" style="height:10%;" href="#carousel-example-multi" role="button"
            data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next my-auto" style="height:10%;" href="#carousel-example-multi" role="button"
            data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>--}}
    <div class="row m-0">
        @foreach ($features as $item)
        <!--Start product-detail-->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-1">
            <a href="{{ route('product.details', $item->id) }}">
                <div class="card p-1 product__container">
                    <div class="image_body position-relative">
                        <div class="its">
                            @if($item->is_premium==1)
                            <div class="is_fet_ur py-1 mb-1">
                                <span class="py-1 px-2">Premium</span>
                            </div>
                            @endif
                            @if($item->is_urgent==1)
                            <div class="it_urg py-1">
                                <span class="p-2">Urgent</span>
                            </div>
                            @endif
                        </div>
                        <div class="date_posted">{{(new Carbon\Carbon($item->created_at))->diffForHumans()}}</div>
                        <div class="forwhat">On {{$item->sell_type}}</div>
                        <div class="images">
                            <img src="{{asset(config('dashboard.products'). $item->main_image) }}" alt="img"
                                style="height:180px;width:100%;">
                        </div>
                    </div>
                    <div class="price__view clearfix p-1 ml-0">
                        <div class="price_per float-left p-1 text-white">
                            <b style="font-size:14px; border-radius:55px;">
                                Rs.{{ $item->price }}</b></div>
                        <div class="viewDet float-right">
                            <a href="https://www.facebook.com" class="btn btn-default btn-rounded facebook"
                                target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://plus.google.com" class="btn btn-default btn-rounded google-plus"
                                target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    <div class="prop_details text-left p-2">
                        <a href="{{ route('product.details', $item->id) }}">
                            <h4 class="text">
                                {{ucfirst($item->title) }}, {{ucfirst($item->city)}},
                                {{ucfirst($item->name_of_project_society)}}, {{ucfirst($item->locality)}}
                            </h4>
                        </a>
                        <p><strong>
                                {{$item->property_type}}
                            </strong>
                        </p>
                        <p class="card-text text-left" style="font-size:12px;">
                            <i class="fa fa-map-marker"></i>
                            @if($item->Locality){{ucfirst($item->Locality)}},@endif
                            {{ucfirst($item->name_of_project_society)}}, {{ucfirst($item->city)}}
                        </p>
                    </div>
                    <div class="pl-2 my-1 pb-3">
                        <ul class="summary">
                            <li>
                                @if($item->property_type=="Land")
                                <div class="area_cov">
                                    <img src="{{asset('/images/land.svg')}}" alt="area covered" style="width:16px;height:16px;">
                                    <p>
                                        @if($item->plot_area_area)
                                        {{$item->plot_area_area}}
                                        {{$item->plot_area_measure}}
                                        @endif</p>
                                </div>
                                @else
                                <div class="area_cov">
                                    <img src="{{asset('/images/land.svg')}}" alt="area covered" style="width:16px;height:16px;">
                                    <p>
                                        @if($item->covered_area_area)
                                        {{$item->covered_area_area}}
                                        {{$item->covered_area_measure}}
                                        @endif
                                    </p>
                                </div>
                                @endif
                            </li>
                            <li><img src="{{asset('/images/bed.svg')}}" alt="bed" style="width:16px;height:16px;">
                                @if($item->bedrooms_no)<b>{{$item->bedrooms_no}}</b>@else<b>-</b>@endif
                            </li>
                            <li><img src="{{asset('/images/toilet.svg')}}" alt="bathroom"
                                    style="width:16px;height:16px;">
                                @if($item->bathrooms_no)<b>{{$item->bathrooms_no}}</b>@else<b>-</b>@endif
                            </li>
                            <li><img src="{{asset('/images/parking.svg')}}" alt="parking"
                                    style="width:16px;height:16px;">
                                <b>@if($item->is_parking)Yes @else No @endif</b>
                            </li>
                        </ul>
                    </div>
                </div>
            </a>
        </div>
        <!--End product-detail-->
        @endforeach
    </div>
</div>
<script>
$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function() {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    if (next.next().length > 0) {
        next.next().children(':first-child').clone().appendTo($(this));
    } else {
        $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
});
</script>