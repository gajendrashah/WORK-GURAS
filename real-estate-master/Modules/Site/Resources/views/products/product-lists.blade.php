@extends('site::layouts.master')

@section('content')
<div class="container custom-container mt-2">
    <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 categories">
            <div class="listed-ads mt-3">
                @include('site::includes.side-searchbar')
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
            <div class="row">
                @foreach ($cityproducts as $item)
                <!--Start product-detail-->
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 p-1">
                    <a href="{{ route('product.details', $item->id) }}">
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
                                        <span class="p-2">Urgent</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="date_posted">{{(new Carbon\Carbon($item->created_at))->diffForHumans()}}
                                </div>
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
                                    </li>
                                    <li><img src="{{asset('/images/bed.svg')}}" alt="bed"
                                            style="width:16px;height:16px;">
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
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script type="text/javascript">
function login() {
    alert('login');
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

<script type='text/javascript'>
jQuery(document).ready(function($) {

    $('#modelclose, #model-exit').click(function() {
        $('#modelBack').stop().fadeOut('medium');
    });

});
</script>
@endpush