<h6><span><i class="zmdi zmdi-view-list-alt"></i></span>Menu</h6>
<div>
    <!-- Nav tabs -->
    <div class="member_area">
        <ul id="ulMenu" class="nav nav-tabs" role="tablist">
            @php
                $routeName = Request::route()->getName()
            @endphp
            <li role="presentation" class="@if($routeName=='account.dashboard') active @endif"><a href="{{ route('account.dashboard') }}">Home</a></li>

            @if(Auth::user()->user_type == "buyer") 
                <li role="presentation" class="@if(
                    $routeName=='buyer.buy.product.index' ||
                    $routeName=='buyer.buy.product.show') active @endif">
                    <a href="{{ route('buyer.buy.product.index') }}">Buyer Product List</a>
                </li>   
            @endif

            @if(Auth::user()->user_type == "seller") 
            
                <li role="presentation" class="@if(
                        $routeName=='seller.property.index' || 
                        $routeName=='seller.property.show' || 
                        $routeName=='seller.property.create' || 
                        $routeName=='seller.property.edit'
                    )active @endif">
                    <a href="{{ route('seller.property.index') }}">Your Properties</a>
                </li>
            
                <li role="presentation" class="@if(
                    $routeName=='seller.property.orders.list' ||
                    $routeName=='seller.property.order.show'
                    ) active @endif" ><a href="{{route('seller.property.orders.list')}}">Ordered Product
                        </a></li>

                <li role="presentation" class="@if($routeName=='seller.property.sales.list') active @endif" ><a href="{{route('seller.property.sales.list')}}">Sold Product
                        </a></li>

                <li role="presentation" class="@if(
                    $routeName=='seller.buy.product.list' ||
                    $routeName=='seller.buy.product.detail') active @endif">
                    <a href="{{ route('seller.buy.product.list') }}">Bought Product</a>
                </li>   
            @endif
                
            <li role="presentation" class="@if($routeName=='account.change.info') active @endif" ><a href="{{route('account.change.info')}}">Change
                    Info</a></li>
            <li role="presentation" class="@if($routeName=='account.change.password') active @endif">
                <a href="{{ route('account.change.password') }}">Change
                    Password
                </a>
            </li>
        </ul>
    </div>
</div>