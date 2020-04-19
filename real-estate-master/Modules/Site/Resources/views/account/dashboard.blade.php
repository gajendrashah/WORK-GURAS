@extends('site::layouts.master')
@push('title')
    User Dashboard
@endpush

@section('content')
    <div class="container custom-container my-2">
        <div class="row">
            <div class="col-lg-3 col-sm-6  categories">
                @include('site::account.member-area-menu')
            </div>
            <!--categories-->
            <div class="col-lg-9 col-sm-6">
                <!-- Tab panes -->
                <div class="tab-content" style="background:#fff">
                    <div role="tabpanel" class="tab-pane active " id="home">
                        <div class="member_area_heading">
                            <h6>Log in as {{ Auth::user()->full_name }}</h6>
                            <div class="main-content row" >
                                
                                <div class="col-md-9">
                                    <p><b>Hello {{ Auth::user()->full_name }} . Welcome to your dashboard!</b></p>
                                </div>
                                <div class="col-md-3" >
                                    @if(Auth::user()->profile_image == null) <img src='{{ asset('/assets/site/images/user.png')}}' alt='profile_image' style="width: 100px;border-radius: 50px;margin-left: 17%;" /> 
                                    @else <img src='{{ asset('/images/users/'.Auth::user()->profile_image)}}' alt='profile_image' style="width: 100px; height:100px; border-radius: 50px; margin:0 auto" />  @endif  
                                    <p style="text-align:center">{{ Auth::user()->full_name }}</p>
                                    
                                </div>


                                <div class="col-md-12" style="padding-top:30px;" >
                                    <p><b><i class="fa fa-pie-chart" aria-hidden="true"></i> Account Stats</b></p>
                                    <hr/>
                                    <p>Number of Properties Added <span>0</span></p>
                                    <p>Number of Properties Sold <span>0</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
