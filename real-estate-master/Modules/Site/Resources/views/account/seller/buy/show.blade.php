@extends('site::layouts.master')

@push('title')
Buy Product Detail
@endpush

@section('content')
<div class="container custom-container my-2">
    <div class="row">
        <div class="col-lg-3 col-sm-4 categories">
            @include('site::account.member-area-menu')
            <!-- accordion end -->
        </div>
        <div class="col-lg-9 col-sm-8">
            <div class="product_description">
                <div class="product_description">
                    <div class="genral_details" style="background:#fff">
                        <h6>Primary Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>No of Views:</strong> {{ $product->views }}</p>
                                <p><strong>Sold:</strong>: {{ $product->sold }}</p>
                                <p><strong>Person_type:</strong> {{ $product->person_type }}</p>
                                <p><strong>Sell Type:</strong> {{ $product->sell_type }}</p>
                                <p><strong>Title:</strong> {{ $product->title }}</p>
                                <p><strong>Property Type:</strong> {{ $product->property_type }}</p>
                                <p><strong>State:</strong> {{ $product->state }}</p>
                                <p><strong>City:</strong> {{ $product->city }}</p>
                            </div>

                            <div class="col-md-6">
                                <p><strong>Name Of Society:</strong> {{ $product->name_of_project_society }}</p>
                                <p><strong>Locality:</strong> {{ $product->locality }}</p>
                                <p><strong>Price:</strong> {{ $product->price }} @if($product->price_type == "Sale") for
                                    @else per
                                    @endif {{ $product->price_type }}</p>
                                <p><strong>Is Negotiable:</strong> @if($product->negotiable) yes @else No @endif</p>
                                <p><strong>Is Urgent:</strong>@if($product->is_urgent) yes @else No @endif </p>
                                <p><strong>Is Premium:</strong>@if($product->is_premium) yes @else No @endif</p>
                                <p><strong>Is Exclusively:</strong>@if($product->is_exclusively) yes @else No @endif</p>
                            </div>
                            <div class="col-md-12">
                                <p><strong>Details:</strong>: </p>
                                <p>{{ $product->detaill }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="genral_details" style="background:#fff">
                        <h6>Other Details</h6>
                        <div class="row">
                            <div class="col-md-6">
                                @if($product->property_status)<p><strong>Property Status:</strong>
                                    {{ $product->property_status }}</p>
                                @endif

                                @if($product->total_no_of_rooms)<p><strong>Total Rooms:</strong>
                                    {{ $product->total_no_of_rooms }}</p>
                                @endif

                                @if($product->no_of_rooms_available)<p><strong>Rooms Available:</strong>:
                                    {{ $product->no_of_rooms_available }}</p>
                                @endif

                                @if($product->bedrooms_no)<p><strong>No. of Bedrooms:</strong>
                                    {{ $product->bedrooms_no }}</p>
                                @endif

                                @if($product->bathrooms_no)<p><strong>No. of Bathrooms:</strong>
                                    {{ $product->bathrooms_no }}</p>
                                @endif

                                @if($product->meeting_rooms)<p><strong>Meeting rooms:</strong>
                                    {{ $product->meeting_rooms }}</p>
                                @endif

                                @if($product->total_floor_no)<p><strong>Total Floor No:</strong>
                                    {{ $product->total_floor_no }}</p>
                                @endif

                                @if($product->floor_no)<p><strong>Floor No.:</strong>:
                                    {{ $product->floor_no }}</p>
                                @endif

                                <p><strong>Furnished Status:</strong>:@if($product->furnished_status) Yes @else No
                                    @endif</p>

                                @if($product->colony_name)<p><strong>Name of colony:</strong>
                                    {{ $product->colony_name }}</p>
                                @endif

                                @if($product->colonies_no)<p><strong>Colony No:</strong>
                                    {{ $product->colonies_no }}</p>
                                @endif

                                <p><strong>Is in Fence:</strong>@if($product->is_in_fence) Yes @else No @endif</p>

                                <p><strong>Parking:</strong>@if($product->is_parking) Yes @else No @endif</p>

                                <p><strong>Is Main Road Facing:</strong> @if($product->is_main_road_facing) Yes @else No
                                    @endif</p>

                                @if($product->road_width)<p><strong>Road Width:</strong> {{ $product->road_width }}</p>
                                @endif

                                @if($product->parking_area)<p><strong>Parking Area:</strong>
                                    {{ $product->parking_area }}</p> @endif

                                @if($product->plot_length_length)<p><strong>Plot:</strong>
                                    {{ $product->plot_length_length }}
                                    {{ $product->plot_length_measure }}, {{ $product->plot_length_breath }}
                                    {{ $product->plot_length_measure }} </p>
                                @endif

                                @if($product->plot_area_area)<p><strong>Plot Area:</strong>
                                    {{ $product->plot_area_area }}
                                    {{ $product->plot_area_measure }}</p>
                                @endif

                                @if($product->covered_area_area)<p><strong>Cover Area:</strong>
                                    {{ $product->covered_area_area }}
                                    {{ $product->covered_area_measure }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="genral_details" style="background:#fff">
                        <h6>Images</h6>
                        <div class="row">
                            <div class="col-md-12">
                                <p>Main Image</p>
                                <img id="coverImage"
                                    src="{{asset(config('dashboard.products'). $product->main_image) }}"
                                    alt="your image" class="preview-image" style="width:50%;padding-left:15px;" />
                            </div>
                            <div class="col-md-12">
                                <p>Additional Images</p>
                                <div class="row mb-2">
                                    @foreach($additionalImages as $row)
                                    <div class="col-md-2 image-margin btnRemoveProductImage" data-id="{{ $row->id }}">
                                        <div class="thumbnail img-wrap">
                                            <img src="{{ asset(config('dashboard.additional-products') . $row->images) }}"
                                                style="width:100px;height:70px;padding-left:15px;" />
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection