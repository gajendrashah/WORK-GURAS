@extends('site::layouts.master')

@section('content')
<div class="container custom-container">
    <div class="row">
        <div class="col-lg-3 col-sm-3 categories" style="flex:0 0 20%!important;  max-width:20%!important;">
            <div class="listed-ads">
                @include('site::includes.advertisement')
            </div>
        </div>
        <div class="col-lg-9 col-sm-9" style=" flex:0 0 80%!important; max-width:80%!important;">
            <div class="agent-container row" style="margin:0px; padding:20px 0px">
                <div class="col-md-12">
                    <span style="font-size:12px;"> Agent </span>
                </div>
                <div class="row col-md-12">
                    <div class="col-md-4 col-padding-left-null">
                        <img src="http://127.0.0.1:8000/images/products/2020-02-23-03-08-09-71169-2.png" alt="img"
                            style="height:250px;width:100%;">
                    </div>

                    <div class="col-md-8 col-padding-left-null col-padding-right-null">
                        <div class="productTitle clearfix" style="margin-bottom:10px;">
                            <h3>Keshav</h3>
                            <ul class="share_detail">
                                <li style="padding:0px;border-bottom:0px;"><a href="https://www.facebook.com"
                                        class="facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li style="padding:0px;border-bottom:0px;"><a href="https://plus.google.com"
                                        class="google-plus" target="_blank"><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                        <table class="table" style="margin-bottom:0px;">
                            <tbody>
                                <tr>
                                    <td style="border:0px;padding:0px;">
                                        <p class="product-details"><strong>Post: </strong> Agent</p>
                                    </td>
                                    <td style="border:0px;padding:0px;">
                                        <p class="product-details"><strong>Location: </strong> Kathmandu, Province
                                            No. 3</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px;padding:0px;">
                                        <p class="product-details"><strong>Email: </strong> keshab.bhadel.5@gmail.com
                                        </p>
                                    </td>
                                    <td style="border:0px;padding:0px;">
                                        <p class="product-details"><strong>Contact: </strong> +(770909090909) </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:0px;padding:0px;">
                                    </td>
                                    <td style="border:0px;padding:0px;">

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="col-md-12 col-padding-left-null">
                            <div>
                                <h5 style="padding-top:10px">Details</h5>
                                <p class="product-details">dfhaskljdfk asklfjslkfjlksfd kllk</p>
                            </div>
                        </div>

                        <div class="col-md-5 col-padding-left-null col-padding-right-null"
                            style="margin-top:10px!important">
                            <a href="{{route('singleagent')}}" class="btn btn-search"><i class="fa fa-info pr-2"></i>
                                View Detail</a>
                        </div>

                    </div>
                    <div class="col-md-12" style="padding-top:20px;">
                        <div class="col-md-5 col-padding-left-null">
                            <span style="font-size:10px;width:100%;">Posted: Feb 23, 2020 </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection