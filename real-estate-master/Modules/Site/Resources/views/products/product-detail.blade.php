@extends('site::layouts.master')

@push('title')
Product Details
@endpush

@section('content')
<div class="container custom-container mt-2">
    <div class="row">
        <div class="col-sm-12">
            <div class="container custom-container">
                <div class="propertyHeader__container mb-4">
                    <div class="row head_property">
                        <div class="col-sm-12 property__image__container my-3">
                            <div id="mdb-lightbox-ui"></div>
                            <!--Carousel Wrapper-->
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item mdb-lightbox active">
                                        <a href="{{asset(config('dashboard.products'). $product->main_image) }}"
                                            data-size="1600x1067">
                                            <img class="d-block w-100"
                                                src="{{asset(config('dashboard.products'). $product->main_image) }}"
                                                alt="Main Image">
                                    </div>
                                    @foreach($additionalImages as $row)
                                    <div class="carousel-item mdb-lightbox">
                                        <a href="{{ asset(config('dashboard.additional-products') . $row->images) }}"
                                            data-size="1600x1067">
                                            <img class="d-block h-100"
                                                src="{{ asset(config('dashboard.additional-products') . $row->images) }}"
                                                alt="Addditional Image">
                                    </div>
                                    @endforeach
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                                <ol class="carousel-indicators p-1" style="background:#000">
                                    <li data-target="#carousel-thumb" data-slide-to="0"
                                        class="active carousal_thumb_indicators m-0">
                                        <img src="{{asset(config('dashboard.products'). $product->main_image) }}"
                                            width="100">
                                    </li>
                                    @foreach($additionalImages as $row)
                                    <li data-target="#carousel-thumb" data-slide-to="{{$row->id}}"
                                        class="carousal_thumb_indicators mt-0">
                                        <img src="{{ asset(config('dashboard.additional-products') . $row->images) }}"
                                            width="100" class="h-100">
                                    </li>
                                    @endforeach
                                </ol>
                            </div>
                            <!--/.Carousel Wrapper-->
                            <div class="its">
                                @if($product->is_premium==1)
                                <div class="is_fet_ur py-1 mb-1">
                                    <span class="py-2 px-4">Premium</span>
                                </div>
                                @endif
                                @if($product->is_urgent==1)
                                <div class="it_ur py-1">
                                    <span class="py-2 px-4">Urgent</span>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row py-4">
                        <div class="col-sm-9">
                            <div class="container description__contents">
                                <div class="row Features mb-2 ">
                                    <div class="col-sm-12 title_container py-2"
                                        style="background:#fff;border: 1px solid #ced4da; border-radius: .25rem;">
                                        <div class="row">
                                            <div class="py-4 col-sm-8">
                                                <div class="title_container">
                                                    <h2> {{ $product->title }}&nbsp;({{$product->property_type}} on
                                                        {{ $product->price_type }})<h2>
                                                </div>
                                                <p style="color:gray; padding:0 10px;"><i class="fa fa-map-marker"></i>
                                                    {{$product->state}},&nbsp;{{$product->city}},&nbsp;{{$product->locality}},&nbsp;{{$product->name_of_project_society}}</span>
                                                </p>
                                            </div>
                                            <div class="col-sm-3 my-auto" style="max-width:30%; flex:0 0 30%">
                                                <div class="price_amt_container">
                                                    <div class="d-flex">
                                                        <p class="text"
                                                            style="font-size:20px; font-weight:700; font-family:sans-serif;">
                                                            Rs.{{ number_format($product->price) }}</p>
                                                        <div class="negiot my-auto">
                                                            @if($product->negotiable==0)
                                                            <span> Negotiable</span>
                                                            @else
                                                            <span class="negiotable"> Fixed</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="heading_text my-3 col-sm-12"
                                        style="background:#fff;border: 1px solid #ced4da; border-radius: .25rem;">
                                        <div class="heading py-3">
                                            <h5 class="heading_info text-uppercase"> Features</h5>
                                            <div style="background:#d92228; height:2px; width:3em;"></div>
                                        </div>
                                        <div class="py-3">
                                            <div class="pb-3">
                                                @if($product->property_type=="Land")
                                                <div class="area_cov">
                                                    <img src="{{asset('/images/land.svg')}}" alt="area covered"
                                                        style="width:28px;height:28px;" data-toggle="tooltip"
                                                        title="Land Area!">
                                                    <p style="font-size:20px;"><span>-</span>
                                                        @if($product->plot_area_area)
                                                        {{$product->plot_area_area}}
                                                        {{$product->plot_area_measure}}
                                                        @else<b>undefined</b>
                                                        @endif
                                                    </p>
                                                </div>
                                                @else
                                                <div class="area_cov">
                                                    <img src="{{asset('/images/land.svg')}}" alt="area covered"
                                                        style="width:28px;height:28px;" data-toggle="tooltip"
                                                        title="Land Area!">
                                                    <p style="font-size:20px;"><span>-</span>
                                                        @if($product->covered_area_area)
                                                        {{$product->covered_area_area}}
                                                        {{$product->covered_area_measure}}
                                                        @else<b>0</b>
                                                        @endif
                                                    </p>
                                                </div>
                                                @endif
                                                <ul class="summary">
                                                    <li><img src="{{asset('/images/bed.svg')}}" alt="bed"
                                                            style="width:28px;height:28px;" data-toggle="tooltip"
                                                            title="Bed Rooms!">
                                                        <p style="font-size:20px;">
                                                            <span class="pl-2">-</span>
                                                            @if($product->bedrooms_no)
                                                            {{$product->bedrooms_no}}
                                                            @else
                                                            <b>0</b>
                                                            @endif
                                                        </p>
                                                    </li>
                                                    <li><img src="{{asset('/images/toilet.svg')}}" alt="bathroom"
                                                            style="width:28px;height:28px;" data-toggle="tooltip"
                                                            title="Bathrooms!">
                                                        <p style="font-size:20px;">
                                                            <span class="pl-2">-</span>
                                                            @if($product->bathrooms_no)
                                                            {{$product->bathrooms_no}}
                                                            @else
                                                            <b>0</b>
                                                            @endif
                                                        </p>
                                                    </li>
                                                    <li><img src="{{asset('/images/parking.svg')}}" alt="parking"
                                                            style="width:28px;height:28px;" data-toggle="tooltip"
                                                            title="Parking!">
                                                        <p style="font-size:20px;">
                                                            <span class="pl-2">-</span>
                                                            @if($product->is_parking)
                                                            <b>Yes</b>
                                                            @else
                                                            <b>No</b>
                                                            @endif
                                                        </p>
                                                    </li>
                                                    <li><img src="{{asset('/images/cook.svg')}}" alt="parking"
                                                            style="width:28px;height:28px;" data-toggle="tooltip"
                                                            title="Kitchen!">
                                                        <p style="font-size:20px;">
                                                            <span class="pl-2">-</span>
                                                            @if($product->kitchen)
                                                            <b>Yes</b>
                                                            @else
                                                            <b>No</b>
                                                            @endif
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="paragraph_content py-3">
                                            Property Status <b>:</b>
                                            @if($product->property_status!="null")
                                            <b>{{$product->property_status}}</b>
                                            @else
                                            <b>Null</b>
                                            @endif
                                        </div>
                                        <div class="paragraph_content py-3">
                                            Parking<b>:</b>
                                            @if($product->is_parking)
                                            <b>Yes</b>
                                            @else
                                            <b>No</b>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row address_map mb-2">
                                    <div class="heading_text col-sm-12"
                                        style="background:#fff;border: 1px solid #ced4da; border-radius: .25rem;">
                                        <div class="heading py-3">
                                            <h5 class="heading_info text-uppercase"> Map Details</h5>
                                            <div style="background:#d92228; height:2px; width:3em;"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 paragraph_content pad_1">
                                                <p>Address :
                                                    <b>{{$product->state}},&nbsp;{{$product->city}},&nbsp;{{ucwords($product->locality)}},&nbsp;
                                                        {{ucwords($product->name_of_project_society)}}</b>
                                                </p>
                                            </div>
                                            <div class="col-sm-4 paragraph_content pad_1">
                                                Longitude <b>:</b>
                                                @if($product->longitude)
                                                <b>{{$product->longitude}}</b>
                                                @else
                                                <b>Null</b>
                                                @endif
                                            </div>
                                            <div class="col-sm-4 paragraph_content pad_1">
                                                Latitude<b>:</b>
                                                @if($product->latitude)
                                                <b>{{$product->latitude}}</b>
                                                @else
                                                <b>Null</b>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row property_attributes_container mb-2 ">
                                    <div class="heading_text col-sm-12 my-3"
                                        style="background:#fff;border: 1px solid #ced4da; border-radius: .25rem;">
                                        <div class="heading py-3">
                                            <h5 class="heading_info text-uppercase"> Description</h5>
                                            <div style="background:#d92228; height:2px; width:3em;"></div>
                                        </div>
                                        <div class="mb-3">
                                            <p style="font-size:14px">
                                                {!! $product->details !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row booking_button mb-2 ">
                                    <div class="book_now_container col-sm-12">
                                        <a href="#" onclick="booking({{ $product->id }})"
                                            class="btn btn-warning btn-search text-white">Book
                                            Now</a>
                                    </div>
                                </div>
                                @if($product->video_link)
                                <div class="row video_container">
                                    <iframe width="955" height="515"
                                        src="https://www.youtube.com/embed/{{$product->video_link}}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                @else
                                <div class="row content-not-available  text-center justify-content-center"
                                    style="height:515px; background:#000">
                                    <p class="text-danger my-auto" style="font-size:32px"><i
                                            class="fa fa-times-circle text-danger d-block" style="font-size:46px"></i>
                                        Video is Not Available</p>
                                </div>

                                @endif
                                <div class="row map_container my-3">
                                    <div id="map"></div>
                                    <script>
                                    // Initialize and add the map
                                    function initMap() {
                                        // The location of Uluru
                                        var uluru = {
                                            lat: -25.344,
                                            lng: 131.036
                                        };
                                        // The map, centered at Uluru
                                        var map = new google.maps.Map(
                                            document.getElementById('map'), {
                                                zoom: 4,
                                                center: uluru
                                            });
                                        // The marker, positioned at Uluru
                                        var marker = new google.maps.Marker({
                                            position: uluru,
                                            map: map
                                        });
                                    }
                                    </script>
                                    <script async defer
                                        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="basic_details mb-3 p-2"
                                style="background:#fff;border: 1px solid #ced4da; border-radius: .25rem;">
                                <div class="heading_text mb-3">
                                    <h5 class="heading_info text-uppercase"> Basic Details</h5>
                                    <div style="background:#d92228; height:2px; width:3em;"></div>
                                </div>
                                <ul class="basic_details list-unstyled">
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Property Type
                                            </div>
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                {{$product->property_type}}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Type
                                            </div>
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                For {{$product->price_type}}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Price
                                            </div>
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                {{ number_format($product->price) }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Bedrooms
                                            </div>
                                            @if($product->bedrooms_no!=null)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                {{$product->bedrooms_no}}
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                0
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Bathroom
                                            </div>
                                            @if($product->bathroon_no!=null)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                $product->bathroon_no
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                0
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Meeting Rooms
                                            </div>
                                            @if($product->meeting_rooms!=null)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                {{$product->meeting_rooms}}
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                0
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Furnished Status
                                            </div>
                                            @if($product->funnished_status!=null)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                furnished
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                unfurnished
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Land Area
                                            </div>
                                            @if($product->plot_area_area)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>{{$product->plot_area_area}}{{$product->plot_area_measure}}
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>undefined
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Covered Area
                                            </div>
                                            @if($product->covered_area_area)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>{{$product->covered_area_area}}{{$product->covered_area_measure}}
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>undefined
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Road Facing
                                            </div>
                                            @if($product->is_main_road_facing)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>Yes
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>No
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Road Width
                                            </div>
                                            @if($product->road_width)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>{{$product->road_width}}
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>undefined
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Fence
                                            </div>
                                            @if($product->is_in_fence==1)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>Yes
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>No
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row bbdr">
                                            <div class="col-sm-6 paragraph_content py-2 px-1">
                                                Colony Name
                                            </div>
                                            @if($product->colony_name)
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b
                                                    class="px-2">:</b>{{$product->colony_name}}
                                            </div>
                                            @else
                                            <div class="col-sm-6 paragraph_content py-2 px-1"> <b class="px-2">:</b>
                                                Undefined
                                            </div>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="social-icons text-center">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com" target="_blank">
                                            <i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://plus.google.com" target="_blank">
                                            <i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com" target="_blank">
                                            <i class="fa fa-instagram"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="contact_info mb-3">
                                <div class="heading_text my-3">
                                    <h5 class="heading_info text-uppercase"> Contact info</h5>
                                    <div style="background:#d92228; height:2px; width:3em;"></div>
                                </div>
                                <div class="user_info d-flex mb-4">
                                    <div class="user_img" style="width:50px; height:50px;">
                                        @if($product->user)
                                        @if($product->user->profile_image == null)
                                        <img src="{{ asset('/assets/site/images/user.png')}}" alt=""
                                            style="border-radius:50%" />
                                        @else
                                        <img src="{{ asset('/images/users/'.$product->user->profile_image)}}" alt=""
                                            style=" border-radius:50%">
                                        @endif
                                        @endif
                                    </div>
                                    <div class="paragraph_content ml-2 my-auto">
                                        <span style="font-weight:700; font-size:18px">
                                            {{ $product->user ? $product->user->full_name : "" }}
                                        </span><br>
                                        {{ $product->user ? $product->user->email : "" }}
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="contact_via_email mb-3">
                                <div class="heading_text my-3">
                                    <h5 class="heading_info text-uppercase"> Contact via email</h5>
                                    <div style="background:#d92228; height:2px; width:3em;"></div>
                                </div>
                                @include('flash::message')
                                {{ Form::open([ 
                                    'url' => route('contact-submit') ,
                                    'method' => 'POST',
                                    'class' => 'form-horizontal',
                                    'enctype'=>'multipart/form-data',
                                    'id' => 'contact_form'
                                    ]) 
                                }}
                                <div class="form-group">
                                    {!! Form::text('name',null, ['class'=>'form-control px-2 py-2',
                                    'placeholder'=>"Full Name"]) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                                <div class="form-group">
                                    {!! Form::text('email', $value = null, ['class'=>'form-control px-2 py-2',
                                    'placeholder'=>"Email"])
                                    !!}
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group">
                                    {!! Form::number('phone_number', $value = null, ['class'=>'form-control px-2
                                    py-2',
                                    'placeholder'=>"Phone Number"]) !!}
                                    <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                                </div>
                                <div class="form-group">
                                    {!! Form::text('subject', $value = null, ['class'=>'form-control px-2 py-2',
                                    'placeholder'=>"Subject"]) !!}
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                </div>
                                <div class="form-group">
                                    {!! Form::textarea('message', null, ['style' =>
                                    'resize:none;width:100%;height:150px;padding:1em', 'cols' =>
                                    '30', 'rows' => '7', 'placeholder'=>"Message"]) !!}
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-search" onClick="event.preventDefault();
              document.getElementById('contact_form').submit(); this.disabled=true; this.innerVal='Processing…';">
                                </div>
                                {{ Form::close() }}
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="propertyDetails_container my-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modelBack" class="modelBack" style="overflow: scroll;">
    <div class="model-exit" id='model-exit'>
    </div>
    <div class="modelBox">
        <div class="col-md-12">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" style="margin-bottom:0px;">
                    <div class="panel-heading modelHeader">
                        <div class="modelHeader_text"><span id="model-header"></span></div>
                        <div class="modelclose" id="modelclose" style="margin:1rem;">
                            <button type="button" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div id="load_model" class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="modelBack" class="modelBack" style="overflow: scroll;">
    <div class="model-exit" id='model-exit'>
    </div>
    <div class="modelBox">
        <div class="col-md-12">
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default" style="margin-bottom:0px;">
                    <div class="panel-heading modelHeader">
                        <div class="modelHeader_text"><span id="model-header"></span></div>
                        <div class="modelclose" style="margin:1rem;">
                            <button type="button" id="modelclose" class="close" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div id="load_model" class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$('#modelclose').click(function() {
    $('#modelBack').hide();
});

function login() {
    alert('login please to book');
}

function booking(id) {
    $('#modelBack').show();
    $('#model-header').html("<p style='margin:1rem;'>Booking</p>");
    $('#load_model').html('<div class="lds-spinner"><div></div><div></div><div></div></div>');
    $.ajax({
            url: '../../../product/' + id + '/booking',
            cache: false
        })
        .done(function(msg) {
            $('#load_model').html(msg);
        });
}
</script>
@endsection