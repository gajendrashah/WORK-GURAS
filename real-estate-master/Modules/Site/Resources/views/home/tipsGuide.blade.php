@extends('site::layouts.master')

@section('content')
<div class="container custom-container mt-2 pb-5">
    <div class="">
        <h2 class="text-center my-5">Tips</h2>
        <div class="cards__container row col-sm-10 mx-auto">
            <div class="card col-sm-3" style="min-width:32%!important; flex-width:32%!important; box-shadow:0px 0px 12px -5px rgba(0,0,0,0.75)">
                <div class="title_heading">
                    <img src="{{asset('/images/tips.png')}}" alt="Tips Image" style="width:200px; height:200px; margin:auto">
                    <h2>Buying Tips</h2>
                </div>
                <div class="description">
                    <p>Everything you need to know before buying a homet</p>
                    <a href="{{route('buying-tips')}}" class="btn btn-search">Read More</a>
                </div>
            </div>
            <div class="card col-sm-3" style="min-width:32%!important; flex-width:32%!important; box-shadow:0px 0px 12px -5px rgba(0,0,0,0.75)">
                <div class="title_heading">
                    <img src="{{asset('/images/Roi.png')}}" alt="Tips Image" style="width:200px; height:200px; margin:auto">
                    <h2>Return on investment</h2>
                </div>
                <div class="description">
                    <p>Find out how much return your investment is giving</p>
                    <a href="{{route('roi-tips')}}" class="btn btn-search">Read More</a>
                </div>
            </div>
            <div class="card col-sm-3" style="min-width:32%!important; flex-width:32%!important; box-shadow:0px 0px 12px -5px rgba(0,0,0,0.75)">
                <div class="title_heading">
                    <img src="{{asset('/images/legaladvice.png')}}" alt="Tips Image" style="width:200px; height:200px; margin:auto">
                    <h2>Legal Advice</h2>
                </div>
                <div class="description">
                    <p>Your quick guide to real estate laws and
                            regulations</p>
                    <a href="{{route('legalServices')}}" class="btn btn-search">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection