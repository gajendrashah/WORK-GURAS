<hr>
<!-- house -->
<div class="feature-ad mt-3">
    <div class="heading_category clearfix">
        <div class="main_heading d-inline text-left">
            <div class="float-left">
                <h6 class="kaushan-script-text">House</h6>
                <div class="hr_line "></div>
            </div>
            <a class="view-all-bottom float-right mt-4 px-3 py-2"
                href="{{ route('products', ['property_type' => 'house']) }}">View All</a>
        </div>
    </div>
    <div class="row m-0">
        @foreach ($home as $item)
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
<hr>
<!-- land -->
<div class="feature-ad mt-3">
    <div class="heading_category clearfix">
        <div class="main_heading d-inline text-left">
            <div class="float-left">
                <h6 class="kaushan-script-text">Land</h6>
                <div class="hr_line"></div>
            </div>
            <a class="view-all-bottom float-right mt-4 px-3 py-2"
                href="{{ route('products', ['property_type' => 'land']) }}">View
                All</a>
        </div>
    </div>
    <div class="row m-0">
        @foreach ($land as $item)
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
<hr>
<!-- appartment -->
<div class="feature-ad mt-3">
    <div class="heading_category clearfix">
        <div class="main_heading d-inline text-left">
            <div class="float-left">
                <h6 class="kaushan-script-text">Appartment</h6>
                <div class="hr_line "></div>
            </div>
            <a class="view-all-bottom float-right mt-4 px-3 py-2"
                href="{{ route('products', ['property_type' => 'appartment']) }}">View All</a>
        </div>
    </div>
    <div class="row m-0">
        @foreach ($appartment as $item)
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
<hr>
<!-- office -->
<div class="feature-ad mt-3">
    <div class="heading_category clearfix">
        <div class="main_heading d-inline text-left">
            <div class="float-left">
                <h6 class="kaushan-script-text">Office</h6>
                <div class="hr_line  mb-3"></div>
            </div>
            <a class="view-all-bottom float-right mt-4 px-3 py-2"
                href="{{ route('products', ['property_type' => 'office']) }}">View All</a>
        </div>
    </div>
    <div class="row m-0">
        @foreach ($office as $item)
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
<hr>