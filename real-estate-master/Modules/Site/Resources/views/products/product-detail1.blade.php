@extends('site::layouts.master')

@push('title')
    Product Details
@endpush

@section('content')
    <div class="container custom-container">
        <div class="row">
            <div class="col-lg-6">
                <div id="main" role="main">
                    <div id="slider" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('images/ad3.png') }}"
                                     style="width:100%;height:450px;"/>
                            </li>
                        </ul>
                    </div>
                    <div id="carousel" class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="{{ asset('images/ad3.png') }}" style="height:200px;width:200px;"/>

                            </li>
                        <!-- items mirrored twice, total of 12 -->
                        </ul>
                    </div>
                </div>
                <div class="description">
                    <h5>Description</h5>

                    <div class="dataBlock">
                        <div class="map__section" id="map__section"
                        style="padding:10px; width:300px; height:170px; display:block">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.403722815205!2d85.33112641483913!3d27.704818532210354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a3cb4aa2a1%3A0x957e0125c0d890c8!2sGuras%20Technology%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1580976012623!5m2!1sen!2snp"
                            frameborder="0" style="border:0;"
                            allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!--Start product-detail-->
                <div class="side product-item vertical-divider-left">
                    <div class="product_description">
                        <div class="productTitle clearfix">
                            <h3>Product Name </h3>
                            <ul class="share_detail">
                                <li><i class="fa fa-facebook"></i></a></li>
                                <li><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="price" style="font-size: 18px;color:green;">
                            <b>Price: Rs. 1299</b>
                        </div>
                        <div class="genral_details">
                            <h6>Genral Details</h6>
                                            
                            <p>Total Price</p>
                            <p>Rent  Price</p>
                            <p><strong>Price Per Seat:</strong>: 1000</p>
                            <p><strong>Is price Negotiable??</strong>: 1000</p>
                            <p><strong>Monthly Price</strong>: 1000</p>
                            <p><strong>Security Deposit</strong>: 1000</p>
                            <p><strong>Brokerage</strong>: 1000</p>

                            <p><strong>Electricity Charge</strong>: 1000</p>
                            <p><strong>Laundry Charge</strong>: 1000</p>
                            <p><strong>Maintainence Charge</strong>: 1000</p>

                            <h6>Area Details</h6>
                            
                            <p><strong><p>Plot Length</strong>: 1000</p>
                            <p><strong>Plot Breath</strong>: 1000</p>
                            <p><strong><p>Plot Area</strong>: 1000</p>
                            <p><strong>Cover Area</strong>: 1000</p>
                            <p><strong>Carpet Area</strong>: 1000</p>
                        </div>
                        <div class="genral_details">
                            <h6>Product Details</h6>
                            <p><strong> Property Type:</strong>: 1000</p>
                            <h6>Product Location</h6>

                            <p><strong>State:</strong>: 1000</p>
                            <p><strong>City:</strong>: 1000</p>
                            <p><strong>Locality:</strong>: 1000</p>
                            <p><strong>Name of society:</strong>: 1000</p>
                            <p><strong>Is cornor Shop??</strong>: 1000</p>
                            <p><strong>Corner Shop:</strong>: 1000</p>
                            <p><strong>Is main  Road facing?</strong>: 1000</p>
                            
                            
                            <h6>Property Features</h6>
                            <p><strong>Property Availability</strong>: 1000</p>
                            <p><strong>Age of Construction</strong>: 1000</p>
                            <p><strong>Leased Status</strong>: 1000</p>
                            <p><strong>Leased Informations</strong>: 1000</p>
                            <p><strong>Currently Leased Rent</strong>: 1000</p>
                            <p><strong>Leased Date</strong>: 1000</p>
                            <p><strong>Bedrooms</strong>: 1000</p>
                            <p><strong>Balconies</strong>: 1000</p>
                            <p><strong>floor</strong>: 1000</p>
                            <p><strong>Total Floors</strong>: 1000</p>
                            <p><strong>Furnished Status</strong>: 1000</p>
                            <p><strong>Bathrooms</strong>: 1000</p>

                            <h6>Extra Features</h6>
                            <p><strong>Attached Bathroom</strong>: 1000</p>
                            <p><strong>Attached Balcony</strong>: 1000</p>
                            <p><strong>Is Gated Colony</strong>: 1000</p>
                            <p><strong>AC</strong>: 1000</p>
                            <p><strong>BED</strong>: 1000</p>
                            <p><strong>ardrobe</strong>: 1000</p>
                            <p><strong>Tv</strong>: 1000</p>
                            <p><strong>Sofa</strong>: 1000</p>
                            <p><strong>Dining Table</strong>: 1000</p>
                            <p><strong>Microwave</strong>: 1000</p>
                            <p><strong>Gas Connection</strong>: 1000</p>
                            <p><strong>Personal Washroom</strong>: 1000</p>
                            <p><strong>Pantry Cafeteria</strong>: 1000</p>
                            <p><strong>is Cornor show room??</strong>: 1000</p>
                            <p><strong>No of Seats</strong>: 1000</p>
                            <p><strong>Cabins</strong>: 1000</p>
                            <p><strong>Open Hours</strong>: 1000</p>
                            <p><strong>Lock In Period</strong>: 1000</p>
                        </ul>
                    </div>
                    </div>
                </div>
               
            </div>
        </div>
        
    </div>
    
@endsection
