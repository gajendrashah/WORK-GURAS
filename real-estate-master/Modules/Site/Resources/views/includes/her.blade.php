<div class="top-header">
    <div class="container custom-container clearfix">
        <div class="top_head_left pull-left">
            <ul>
                <li><a href="#">Home</a></li>
            </ul>
        </div>
        <div class="top_head_right pull-right">
            <ul>
            @if(auth()->user())
                <li style="height: 13px;"> @if(Auth::user()->profile_image == null) <img src='{{ asset('/assets/site/images/user.png')}}' alt='profile_image' style="width: 25px;height:25px;border-radius: 6px;float: left;margin-right: 5px;margin-top:-5px;" /> @else <img src='{{ asset('/assets/site/images/'.Auth::user()->profile_image)}}' alt='profile_image' style="width: 25px;height: 25px;border-radius: 6px;float: left;margin-right: 5px;margin-top:-5px;" />  @endif  
                    <span class="text-success">Welcome</span></li> |
                <li><i class="zmdi zmdi-case color-blue"></i> <a href="{{ route('account.dashboard') }}">Account</a>
                </li>
                <li><i class="zmdi zmdi-power color-blue"></i> <a href="{{ route('logout') }}"></i>Logout</a></li>
            @else
                <li><a href="{{ route('login') }}"><i class="zmdi zmdi-sign-in color-blue"></i>Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
            </ul>
        </div>

    </div>
</div>
<div class="bottom-head">
    <div class="container custom-container">
        <div class="row" style="margin:0px;">
            <div class="col-lg-2 col-sm-6" style="padding-left:0px;">
                <h4 class="logo">
                    <a href="#">
                        <span> Real</span>Estate 
                    </a>
                </h4>
            </div>
            <div class="col-lg-7  col-sm-6 search-bar">
                <form method="GET" action="" accept-charset="UTF-8" class="form-horizontal search-form" role="form">
                
                <div class="form-group">

                    <div style="float:left;width:30%;" class="easy-autocomplete eac-blue-light">
                        <select class="form-control">
                            <option>Select Search Category</option>
                        </select>
                    </div>
                    <div style="float:right;width:70%;" class="easy-autocomplete eac-blue-light">
                        <input type="text" name="q" id="q" class="form-control" placeholder="What are you looking for ?" autocomplete="off">
                        <div class="easy-autocomplete-container" id="eac-container-q">
                            <ul style=""></ul>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning btn-search"><i class="zmdi zmdi-search"></i></button>
                </form>
            </div>
            

            
            <div class="col-lg-3 col-sm-3 submit text-center textRight" style="padding-right:0px;;">
                <a href="{{route('posts.register')}}"
                   class="btn btn-warning" style="float:right;">Post Your Property</a>
            </div>
        </div>
        {{--Header Menu--}}
        <div class="pad-nav navigation" data-spy="affix" data-offset-top="60">
            <nav class="navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Menu</a></div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="nav-head">Popular Categories:</li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Buy &nbsp
                                <i class="zmdi zmdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-custom" >
                                <ul class="nav navbar-nav navbar-nav-custom">
                                    <li class="nav">
                                        <p> Properties </p>
                                        <ul>
                                            <li >
                                                <a href="{{ route('product-list', 'slug') }}">29K+ Flats</a>
                                            </li>
                                            <li >
                                                <a href="#">6K+ House/Villa</a>
                                            </li>
                                            <li >
                                                <a href="#">10K+ Plots</a>
                                            </li>
                                            <li >
                                                <a href="#">1K+ Comme rcial Properties</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav"> 
                                        <p> Feature Collection </p>
                                        <ul>
                                            <li>
                                                <a href="#">17K+ Owner Properties</a>
                                            </li>
                                            <li>
                                                <a href="#">4K+ Verified Properties</a>
                                            </li>
                                            <li>
                                                <a href="#">16K+ Exclusive Properties</a>
                                            </li>
                                            <li>
                                                <a href="#">18K+ Projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav" style="padding: 5px 10px;color:#939598;">
                                        <p>Tool and Help </p>
                                        <ul>
                                            <li>
                                                <a href="#">Explore Localities</a>
                                            </li>
                                            <li>
                                                <a href="#">Rates & Trends</a>
                                            </li>
                                            <li>
                                                <a href="#">Home Loan Calculator</a>
                                            </li>
                                            <li>
                                                <a href="#">Prop Index</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Rent &nbsp
                                <i class="zmdi zmdi-chevron-down"></i>
                            </a>
                            <div class="dropdown-menu dropdown-custom" >
                                <ul class="nav navbar-nav navbar-nav-custom">
                                    <li class="nav">
                                        <p> Properties </p>
                                        <ul>
                                            <li >
                                                <a href="#">29K+ Flats</a>
                                            </li>
                                            <li >
                                                <a href="#">6K+ House/Villa</a>
                                            </li>
                                            <li >
                                                <a href="#">10K+ Plots</a>
                                            </li>
                                            <li >
                                                <a href="#">1K+ Comme rcial Properties</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav"> 
                                        <p> Feature Collection </p>
                                        <ul>
                                            <li>
                                                <a href="#">17K+ Owner Properties</a>
                                            </li>
                                            <li>
                                                <a href="#">4K+ Verified Properties</a>
                                            </li>
                                            <li>
                                                <a href="#">16K+ Exclusive Properties</a>
                                            </li>
                                            <li>
                                                <a href="#">18K+ Projects</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav">
                                        <p>Budget Friendly Homes </p>
                                        <ul>
                                            <li> 
                                                <a href="{{ route('product-list', 'slug') }}">7K+ options under Rs 10,000</a>
                                            </li>
                                            <li>
                                                <a href="#">13K+ options under Rs 15,000</a>
                                            </li>
                                            <li>
                                                <a href="#">20K+ options under Rs 20,000</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Other Service &nbsp
                                <i class="zmdi zmdi-chevron-down"></i>
                            </a>
                            
                            <ul class="dropdown-menu" style="overflow-y: auto;">
                                <li>
                                    <a href="#">Contact With Agent</a>
                                </li>
                                <li>
                                    <a href="#">Property Valuation</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#">Advertisement</a>
                        </li>

                        <li class="dropdown">
                            <a href="#">Help</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </nav>
        </div>
    </div>
</div>