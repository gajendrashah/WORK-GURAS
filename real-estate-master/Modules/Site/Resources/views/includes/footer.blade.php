<div class="newsletter">
    <div class="container custom-container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 contact_description">
                <div class="footer-logo my-2">
                    <a href="#">
                        <img src="{{asset('images/logo.png')}}" alt="Second Logo"></a>
                </div>
                <p>
                    <ul>
                        <li><i class="fa fa-globe" style="padding-right:0.3em;"></i>Santinagar, Kathmandu</li>
                        <li><i class="fa fa-phone" style="padding-right:0.3em;"></i>+089 09990909</li>
                        <li><i class="fa fa-envelope" style="padding-right:0.3em;"></i>info@example.com</li>
                    </ul>
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3  newsletter_description ">
                <h6>Links</h6>
                <p>
                    <ul>
                        <li><a href="#">Services</a></li>
                        <li><a href="{{ route('contactus') }}">Contact us</a></li>
                        <li><a href="#">Blogs</a></li>
                        <li><a href="#">Suggestion Box</a></li>
                    </ul>
                </p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 newsletter_description">
                <h6>Company</h6>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Buying Guide</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="{{ route('seller.property.create')}}">Add Your Property</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 newsletter_form search-bar">
                <h6>Dont miss our new property</h6>
                <form action="{{ route('subscription-submit') }}" method="post" class="subscribe"
                    id="subscription_form1">
                    @csrf
                    <div class="input-group">
                        <input id="subcription_email1" type="email" name="subcription_email" class="form-control"
                            placeholder="Enter Your Email..." required="">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-search"
                                onClick="event.preventDefault();
                        document.getElementById('subscription_form1').submit(); this.disabled=true; this.innerText='Processing…';">Subscribe</button>
                        </span>
                    </div>
                </form>
                <div class="social-icons">
                    <h6 style="color: #fff;">Follow us:</h6>
                    <ul class="my-1">
                        <li class="text-center">
                            <a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="text-center">
                            <a href="https://twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="text-center">
                            <a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li class="text-center">
                            <a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container custom-container my-3">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">

        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center privacy_details clearfix my-auto">
            <ul class="text-center">
                <li>
                    Privacy
                </li>
                <li>
                    Terms and Conditions
                </li>
                <li>
                    Contact
                </li>
            </ul>
            <div class="copyright"><span>Real Estate © {{ date('Y') }}. All Rights Reserved.</span></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 my-auto">

        </div>
    </div>
</div>