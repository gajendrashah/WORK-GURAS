@extends('site::layouts.master')

@section('content')
<div class="container custom-container mt-2" style="background:#fff; padding:10px 0">
    <div class="col container">
        <div class="card" data-tabulation="">
            <div class="mbPremiumHeading text-left p-3">Benefits You Get <span class="my-2">Guaranteed Visibility |
                    Maximum Buyer
                    Attention | Better Responses</span> </div>
            <div class="whyMbPremiumList">
                <div class="row my-5">
                    <div class="whyMbPremiumListBox col">
                        <div class="whyMbPremiumListBoxInn row">
                            <div class="col-sm-4">
                                <img style="height:auto!important" src="{{ asset('/assets/site/images/client.png')}}"
                                    alt="Selling Guide image">
                            </div>
                            <div class="col-sm-8 my-auto">
                                <h4>50,000+ Happy Clients</h4>
                                95% of our customers are 'happy with us' and over 80% 'recommend us'
                            </div>
                        </div>
                    </div>
                    <div class="whyMbPremiumListBox col">
                        <div class="whyMbPremiumListBoxInn row">
                            <div class="col-sm-4">
                                <img style="height:auto!important" src="{{ asset('/assets/site/images/services.png')}}"
                                    alt="Selling Guide image">
                            </div>
                            <div class="col-sm-8 my-auto">
                                <h4>75,000+ Services Delivered</h4>
                                From advertising solutions to tenant verification to legal assistance, we do it
                                all
                            </div>
                        </div>
                    </div>
                    <div class="whyMbPremiumListBox col">
                        <div class="whyMbPremiumListBoxInn row">
                            <div class="col-sm-4">
                                <img style="height:auto!important" src="{{ asset('/assets/site/images/manager.png')}}"
                                    alt="Selling Guide image">
                            </div>
                            <div class="col-sm-8 my-auto">
                                <h4>Dedicated Relationship Manager</h4>
                                Most comprehensive selling/<br>
                                renting assistance to help you at <br>
                                every stage.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection