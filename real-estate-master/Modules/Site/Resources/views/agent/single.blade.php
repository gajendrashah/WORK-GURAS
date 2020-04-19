@extends('site::layouts.master')

@section('content')
<div class="container custom-container">
    <div class="row">
        <div class="col-lg-9 col-sm-9" style=" flex:0 0 80%!important; max-width:80%!important;">
            <div class="row agentuserinfo-head">
                <div class="col-sm-2">
                    <img src="http://127.0.0.1:8000/images/products/2020-02-23-03-08-09-71169-2.png" alt="img"
                        style="height:100px;width:100%;">
                </div>
                <div class="col-sm-10">
                    <div class="hilightHeading aboutAgent">Keshav</div>
                    <div class="paragraph">
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
                    </div>
                </div>
            </div>
            <div class="row agentuserinfo">
                <ul>
                    <li class="agentLi">
                        <div class="highlightsInfo aboutAgentTxt row">
                            <div class="hilightHeading aboutAgent">About the Agent</div>
                            <div class="paragraph">
                                <span id="shortDesc">We are the Gurgaon based Real Estate consultant having the
                                    expertise in
                                    the Real Estate sector for last 12 years and have huge clientele in nepal and
                                    Abroad. We
                                    follow fair trade practices and share a good repute with our esteemed clients.
                                    We
                                    offer
                                    top-of-the-line realty services and ... <a href="javascript:void(0)"
                                        class="moreData" onclick="showFullAboutAgent();">+ more</a>
                                </span>
                                <span id="fullDesc" style="display: none;">We are the Gurgaon based Real Estate
                                    consultant
                                    having the expertise in the Real Estate sector for last 12 years and have huge
                                    clientele
                                    in nepal and Abroad. We follow fair trade practices and share a good repute with
                                    our
                                    esteemed clients. We offer top-of-the-line realty services and hold a long-range
                                    experience in the industry.
                                    <a href="javascript:void(0)" class="moreData" onclick="showAboutAgent();">-
                                        less</a>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="column_1">Dealing In</div>
                        <div class="column_2">
                            Rent/Lease, Pre-launch, Original Booking, Resale
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Trade License Registration</div>
                        <div class="column_2">
                            No
                            <div class="helpTextToolTipsWrap">
                                <div class="helpToolTipBox">
                                    <div class="helpToolTipBoxInner">Agent registered with Trade License as per
                                        Government
                                        of nepal rules, will provide you invoice for his services</div>
                                </div>
                            </div>
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">NAR Registration</div>
                        <div class="column_2">
                            No
                            <div class="helpTextToolTipsWrap">
                                <div class="helpToolTipBox">
                                    <div class="helpToolTipBoxInner">Agent is registered with National Association
                                        of
                                        Realtors - nepal</div>
                                </div>
                            </div>
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Properties for Sale</div>
                        <div class="column_2">
                            31<span class="normalFont"> (
                                <span style="cursor: pointer;"
                                    target="_blank">20 Land/Plots</span>
                                ,
                                <span style="cursor: pointer;"
                                    target="_blank">7 Flats</span>
                                ,
                                <span style="cursor: pointer;"
                                    target="_blank">2 Commercial Office Space</span>
                                ,
                                <span style="cursor: pointer;"
                                    target="_blank">1 Builder Floor Apartment</span>
                                ,
                                <span style="cursor: pointer;"
                                    target="_blank">1 Commercial Shop</span>
                                )</span>
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Properties for Rent</div>
                        <div class="column_2 na">
                            N/A
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Projects Available</div>
                        <div class="column_2">
                            15 <span class="normalFont" id="projectDes">( <a
                                    href=""
                                    target="_blank">Malibu Town</a>,
                                <a href=""
                                    target="_blank">M3M Merlin</a>,
                                <a href=""
                                    target="_blank">M3M Golf Estate</a>,
                                <a href=""
                                    target="_blank">Palm Drive</a>,
                                <a href=""
                                    target="_blank">Digital Greens</a>
                                <a href="javascript:void(0);" class="moreData" id="projectMore"
                                    onclick="projectShowMore();">+ more</a></span><span class="normalFont"
                                id="projectFull" style="display: none;"> ( <a
                                    href=""
                                    target="_blank">Malibu Town</a>, <a
                                    href=""
                                    target="_blank">M3M Merlin</a>, <a
                                    href=""
                                    target="_blank">M3M Golf Estate</a>, <a
                                    href=""
                                    target="_blank">Palm Drive</a>, <a
                                    href=""
                                    target="_blank">Digital Greens</a>, <a
                                    href=""
                                    target="_blank">DLF City Plot Phase 2</a>, <a
                                    href=""
                                    target="_blank">Emerald Hills</a>, <a
                                    href=""
                                    target="_blank">Palm Terraces Select</a>, <a
                                    href=""
                                    target="_blank">DLF City Plot Phase 4 </a>, <a
                                    href=""
                                    target="_blank">DLF City Plot Phase 1</a>, <a
                                    href=""
                                    target="_blank">Marbella Villa</a>, <a
                                    href=""
                                    target="_blank">Emerald Floors Premier</a>, <a
                                    href=""
                                    target="_blank">M3M Urbana</a>, <a
                                    href=""
                                    target="_blank">Palm Terraces</a>, <a
                                    href=""
                                    target="_blank">Suncity Township</a>
                                <a href="javascript:void(0);" class="moreData" id="projectLess" style="display: none;"
                                    onclick="projectShowLess();">- less</a></span> <span class="normalFont">)</span>
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Services Provided </div>
                        <div class="column_2">
                            Home Loan Assistance (
                            IDBI
                            ,
                            Axis Bank
                            ,
                            HDFC
                            ,
                            ICICI Bank
                            ,
                            LIC HFL
                            ,
                            Bank of Baroda
                            ,
                            SBI
                            ,
                            Citibank
                            ,
                            PNB
                            )
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Expertise IN</div>
                        <div class="column_2">
                            Property Registry, Resale Property
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Operating Since</div>
                        <div class="column_2">
                            2005
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <li>
                        <div class="column_1">Website</div>
                        <div class="column_2">
                            <span class="na">N/A</span>
                        </div>
                        <div class="clearAll"></div>
                    </li>
                    <div class="clearAll"></div>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-3 categories" style="flex:0 0 20%!important;  max-width:20%!important;">
            <div class="listed-ads">
                @include('site::includes.advertisement')
            </div>
        </div>
    </div>
</div>
<script>
function showFullAboutAgent() {
    document.getElementById('fullDesc').style.display = "block";
    document.getElementsByClassName('moreData')[0].style.display = "none";
}

function showAboutAgent() {
    document.getElementById('fullDesc').style.display = "none";
    document.getElementsByClassName('moreData')[0].style.display = "block";
}
</script>
@endsection