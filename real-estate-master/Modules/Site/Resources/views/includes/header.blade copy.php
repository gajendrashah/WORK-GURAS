<div class="navigation" data-spy="" data-offset-top="60">
    <nav class="navbar navbar-expand-lg p-0" style="background:rgba(35,47,62,1);">
        <div class="container custom-container">
            <div class="nav-head">
                <a href="{{ route('home') }}">
                    <img src="{{asset('images/logo.png')}}" alt="logo">
                </a>
            </div><!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggler" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="fa fa-bars"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse flex-grow-0" id="bs-example-navbar-collapse-1">
                <div class="container custom-container">
                    <div class="right-head">
                        <div class="right-head-top">
                            <div class="search-bar">
                                <form method="get" action="{{ route('product-list.search') }}" accept-charset="UTF-8"
                                    class="form-horizontal search-form" role="form">
                                    <div class="row m-0">
                                        <div class="col-sm-7 col-lg-7 easy-autocomplete eac-blue-light"
                                            style="padding:0">
                                            <input type="text" name="q" id="q" class="form-control"
                                                placeholder="What are you looking for ?" autocomplete="off" required>
                                        </div>
                                        <div class="col-sm-4 col-lg-4" style=" padding:0;">
                                            <select class="form-control" name="category"
                                                style="height:40px!important; border-left:1px solid #000;">
                                                <option value="">Select Search Category</option>
                                                <option value="house">House</option>
                                                <option value="land">Land</option>
                                                <option value="appartment">Appartment</option>
                                                <option value="office">Office</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="col-sm-1 col-lg-1 btn btn-search">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                        <!-- <div class="col-sm-1">
                                                <a href="" class="btn btn-search"
                                                    style="height:40px; padding-top:10px;">Advance Search</a>
                                            </div> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="right-head-bottom clearfix">
                            <!-- hr line -->
                            <div style="background:rgba(255,255,255,0.3); height:1px; margin-top:10px"></div>
                            <div class="nav-menus navbar-default" style="float:left;padding-top:5px">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Buy &nbsp;
                                        </a>
                                        <div class="dropdown-menu dropdown-custom">
                                            <ul class="nav navbar-nav navbar-nav-custom">
                                                <li class="nav-link">
                                                    <p> Properties </p>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'property_type' => 'house']) }}">House/Villa</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'property_type' => 'land']) }}">Land/Plots</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'property_type' => 'office']) }}">Office</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'property_type' => 'appartment']) }}">Appartment</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="nav-link">
                                                    <p> Properties </p>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'urgent' => 'yes']) }}">Urgent
                                                                Properties</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'premium' => 'yes']) }}">Premium
                                                                Properties</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'property_type' => 'house']) }}">Banglo
                                                                Properties</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'property_type' => '']) }}">Normal
                                                                Properties</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="nav-link">
                                                    <p>Budget Friendly</p>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'from' => '5000', 'to' => '15000']) }}">Rs.5,000
                                                                - Rs.15,000</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'from' => '15000', 'to' => '30000']) }}">Rs.15,000
                                                                - Rs.30,000</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'from' => '30000', 'to' => '50000']) }}">Rs.30,000
                                                                - Rs.50,000</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'sell', 'from' => '50000']) }}">Above
                                                                50,000</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Rent &nbsp;
                                        </a>
                                        <div class="dropdown-menu dropdown-custom">
                                            <ul class="nav navbar-nav navbar-nav-custom">
                                                <li class="nav-link">
                                                    <p> Properties </p>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'property_type' => 'house']) }}">House/Villa</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'property_type' => 'land']) }}">Land/Plots</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'property_type' => 'office']) }}">Office</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'property_type' => 'appartment']) }}">Appartment</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="nav-link">
                                                    <p> Properties </p>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'urgent' => 'yes']) }}">Urgent
                                                                Properties</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'premium' => 'yes']) }}">Premium
                                                                Properties</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'property_type' => 'house']) }}">Banglo
                                                                Properties</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'property_type' => '']) }}">Normal
                                                                Properties</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="nav-link">
                                                    <p>Budget Friendly</p>
                                                    <ul>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'from' => '5000', 'to' => '15000']) }}">Rs.5000
                                                                - Rs.15,000</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'from' => '15000', 'to' => '30000']) }}">Rs.15000
                                                                - Rs.30,000</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'from' => '30000', 'to' => '50000']) }}">Rs.30000
                                                                - Rs.50,000</a>
                                                        </li>
                                                        <li>
                                                            <a
                                                                href="{{ route('products', ['category' => 'rent', 'from' => '50000']) }}">Above
                                                                Rs.50,000</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            Services
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('contactus') }}">Contact us</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Help &nbsp;
                                        </a>

                                        <ul class="dropdown-menu"
                                            style="overflow-y: auto;border-radius: 5px ! important;">

                                            <li class="nav">
                                                <a href="{{route('buying-tips')}}">Buying Guide</a>
                                            <li class="nav">
                                                <a href="{{route('sellingguide')}}">Selling Guide</a>
                                            </li>
                                            <li class="nav" style="padding: 5px 0;color:#939598;">
                                                <a href="{{route('buying-tips')}}">Investment</a>
                                            </li>
                                            <li class="nav" style="padding: 5px 0;color:#939598;">
                                                <a href="{{route('legalServices')}}">Legal Advice</a>
                                            </li>
                                            <li class="nav" style="padding: 5px 0;color:#939598;">
                                                <a href="{{route('roi-tips')}}">ROI</a>
                                            </li>
                                            <li class="nav" style="padding: 5px 0;color:#939598;">
                                                <a href="#">Home Loan</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('land-measurement.index') }}">Land Measurement</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="top_head_right " style="float:right;padding-top:7px">
                                @if(auth()->user())
                                <div class="dropdown">
                                    <a class="dropbtn btn header-bottom" style="padding:10px 10px;">
                                        @if(Auth::user()->profile_image == null) <img
                                            src="{{ asset('/assets/site/images/user.png')}}" alt='profile_image'
                                            style="width: 25px;height:25px;border-radius: 16px;float: left;margin-right: 10px;margin-top:-2px;" />
                                        @else <img src="{{ asset('/images/users/'.Auth::user()->profile_image)}}"
                                            alt='profile_image'
                                            style="width: 25px;height: 25px;border-radius: 16px;float: left;margin-right: 10px;margin-top:-2px;" />
                                        @endif
                                        <span style="color:#fff">{{ auth()->user()->full_name }}</span>
                                    </a>
                                    <div class="dropdown-content">
                                        <a href="{{ route('account.dashboard') }}">My Account</a>
                                        <a href="{{ route('logout') }}">Logout</a>
                                    </div>
                                </div>

                                @else
                                <a href="{{ route('login') }}" class="btn header-bottom"
                                    style="padding:5px 10px;">Register/Login</a>

                                @endif
                                <a href="{{ route('seller.property.create')}}" class="btn header-bottom"
                                    style="padding:5px 10px; border:1px solid #d92228 !important">Post Your
                                    Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>
</div>