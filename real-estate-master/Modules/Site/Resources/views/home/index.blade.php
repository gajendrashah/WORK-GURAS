@extends('site::layouts.master')

@section('content')

{{--<div class="row">
        <div class="col-lg-3 col-sm-3 categories"
            style="flex:0 0 20%!important; margin-top:10px; max-width:20%!important;">
            <div class="listed-ads">
                @include('site::includes.advertisement')
            </div>
        </div>
        <div class="col-lg-9 col-sm-9" style="flex:0 0 80%!important; max-width:80%!important;">
        </div>
    </div>
--}}
<div class="position-relative">
    <div id="carousel-example-1z" class="carousel slide carousel-fade w-100" data-ride="carousel">
        @include('site::includes.banner')
    </div>
    @include('site::includes.searchbar')
</div>
@include('site::includes.propertyfile')
<div class="container custom-container">
    <div class="main-wrapper">
        @include('site::includes.featured')
        <div class="main-section">
            @include('site::includes.category')
        </div>
        <div class="main_section">
            <div class="Property-Count-section">
                @include('site::includes.propertycount')
            </div>
        </div>
    </div>
    <div class="manage_ads do-you-know py-5">
        <div class="container custom-container py-5">
            <div class="head_ads container-fluid text-center b-block w-100">
                <h3 style="font-weight:700; margin:20px 0; line-height:1.5">
                    शहरी सुबिधा ड्ट कम बाट बिज्ञापन गरी सजिलै आफ्नो सम्पती बिक्री तथा भाडामा दिनुहोस साथै ब्यापार
                    बडाउनुहोस
                </h3>
                <!-- <img src="{{asset('images/Annotation.png')}}" alt="Annotation Image"> -->
            </div>
            <div class="head_ads_for container-fluid text-center my-2">
                <h5> Advertise your property through <span style="color:#d92228">
                        saharisubidha.com</span>
                </h5>
            </div>
            <div class="contact_info container-fluid text-center my-4" style="width:55%">
                <h5 class="call_on">Call Now:
                    &nbsp;9808172044, 9849471417</h5>
            </div>
            <div class="contact_info container-fluid text-center text-black pt-2">
                <a href="{{ route('contactus') }}" style="padding:10px; background:#d92228; color:#fff; border-radius:7px;">
                    Email / Message us</a>
            </div>
        </div>
    </div>
</div>
<div class="do_you_know">
    <div class="container custom-container py-5">
        <div class="row m-0">
            <hr>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 my-auto">
                <h6>Do you find what you are looking for?</h6>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 text-right">
                <a href="{{ route('contactus') }}" class="btn btn-search">LET US KNOW </a></div>
        </div>
    </div>
</div>

@endsection