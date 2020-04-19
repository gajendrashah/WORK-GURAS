@extends('site::layouts.master')

@section('content')
<div class="container custom-container">

    <div class="row">
        {{--<div class="col-lg-3 col-sm-3 categories" style="margin-top:20px; flex:0 0 20%!important;  max-width:20%!important;">
            <div class="listed-ads">
                @include('site::includes.advertisement')
            </div>
        </div>
        <div class="col-lg-9 col-sm-9" style=" flex:0 0 80%!important; max-width:80%!important;">--}}
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                @include('site::includes.banner')
            </div>
            @include('site::includes.featured')
        {{--</div>--}}
    </div>
    <div class="Ads-section ">
        @include('site::includes.category-featured')
    </div>
</div>

@endsection