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
                        <div class="right-head-bottom clearfix">
                            <div class="nav-menus navbar-default" style="float:left;padding-top:5px">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('products',['category' => '', 'property_type' => '']) }}">
                                            Properties
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('products', ['category' => 'rent']) }}">
                                            Rent 
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            Business
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#">
                                            Services
                                        </a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            Help &nbsp;
                                        </a>

                                        <ul class="dropdown-menu"
                                            style="overflow-y: auto;border-radius: 5px ! important;">
                                            <li class="nav">
                                                <a href="{{ route('land-measurement.index') }}">Land Measurement</a>
                                            </li>
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