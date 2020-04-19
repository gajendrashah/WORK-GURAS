@extends('site::layout')

@push('title')
Category
@endpush

@section('content')
<div class="container custom-container mt-2">
    <div class="row">
        <div class="col-lg-3 col-sm-3 categories" style="flex:0 0 20%!important;  max-width:20%!important;">
            <div class="listed-ads">
                @include('site::includes.advertisement')
            </div>
        </div>
        <div class="col-lg-9 col-sm-9" style=" flex:0 0 80%!important; max-width:80%!important;">
            <!--Sorting bar Start-->
            <div class="sort_page_bar clearfix">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="dropdown sorting_page">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Sort by:
                                <small>Default Sorting</small>
                                <button type="button" class="btn btn-default btn-lg dropdown-toggle"
                                    data-toggle="dropdown" aria-expanded="false"><span class="fa fa-angle-down"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Most Popular</a></li>
                                <li><a href="#">New In</a></li>
                                <li><a href="#">Lowest Price</a></li>
                                <li><a href="#">Highest Price</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="list_show ">
                            <p>Records <b>{{ $products->firstItem() }} - {{ $products->lastItem() }} </b> of
                                <b>{{ $products->total() }}</b> (for page {{ $products->currentPage() }} )</p>
                        </div>
                    </div>
                    {{--<div class="col-lg-4 col-sm-6">--}}
                    {{--<ul class="viewLilst text-right">--}}
                    {{--<li><a id="viewGrid" href="#"><i class="fa fa-th-large"></i></a></li>--}}
                    {{--<li><a id="viewList" href="#"><i class="fa fa-th-list"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="Ads-section">
                <div class="product_item product_grid">
                    <div class="row">
                        @forelse($products as $product)
                        <div class="col-lg-3">
                            <div class="productGrid">
                                <div class="image-wrapper">
                                    @if($product->cover_image)
                                    <img src="{{ route('product.resize',['image'=>$product->cover_image,'w'=>300,'h'=>300]) }}"
                                        alt="{{ $product->title  }}">
                                    @else
                                    <img src="{{ asset('assets/site/images/no_image.png' ) }}"
                                        alt="{{ $product->title  }}">
                                    @endif
                                </div>
                                <div class="info-product">
                                    <h5><a href="#">{{ $product->title }}</a></h5>
                                    <h6><a href="#">{{ $product->category->name }}</a></h6>
                                    <p><a href="#">Price:{{ number_format($product->price )}}/-</a></p>
                                </div>
                                <div class="product-view clearfix">
                                    <a href="{{ route('product.detail',['slug'=>$product->slug,'id'=>$product->id]) }}">
                                        <i class="fa fa-eye"></i>View Detail
                                    </a>
                                </div>
                                {{--<span class="product_status"> New</span>--}}
                            </div>
                        </div>
                        @empty
                        <h4 class="text-center text-danger">No product Available</h4>
                        @endforelse
                    </div>
                </div>
                {{--<div class="product_item product_listing" style="display:none">--}}
                {{--<div class="productGrid">--}}
                {{--<div class="row">--}}
                {{--<div class="col-lg-4">--}}
                {{--<div class="image-wrapper"><img src="img/product12.jpg"></div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-8">--}}
                {{--<div class="productContent">--}}
                {{--<div class="info-product">--}}
                {{--<h5><a href="#">Women floral top</a></h5>--}}
                {{--<p class="category"><a href="#">Fashion</a></p>--}}
                {{--<p class="price"><a href="#">$770</a></p>--}}
                {{--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada--}}
                {{--fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,--}}
                {{--ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam--}}
                {{--egestas semper. Aenean ultricies mi vitae est. Mauris placerat--}}
                {{--eleifend leo.</p>--}}

                {{--</div>--}}
                {{--<div class="product-view clearfix"><a href="#"><i class="fa fa-eye"></i>View--}}
                {{--Detail</a><a href="#"><i class="fa fa-heart"></i>Wishlist</a></div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--<span class="product_status"> New</span>--}}
                {{--</div>--}}
                {{--<div class="productGrid">--}}
                {{--<div class="row">--}}
                {{--<div class="col-lg-4">--}}
                {{--<div class="image-wrapper"><img src="img/product12.jpg"></div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-8">--}}
                {{--<div class="productContent">--}}
                {{--<div class="info-product">--}}
                {{--<h5><a href="#">Women floral top</a></h5>--}}
                {{--<p class="category"><a href="#">Fashion</a></p>--}}
                {{--<p class="price"><a href="#">$770</a></p>--}}
                {{--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada--}}
                {{--fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,--}}
                {{--ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam--}}
                {{--egestas semper. Aenean ultricies mi vitae est. Mauris placerat--}}
                {{--eleifend leo.</p>--}}

                {{--</div>--}}
                {{--<div class="product-view clearfix"><a href="#"><i class="fa fa-eye"></i>View--}}
                {{--Detail</a><a href="#"><i class="fa fa-heart"></i>Wishlist</a></div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--<span class="product_status"> New</span>--}}
                {{--</div>--}}
                {{--<div class="productGrid">--}}
                {{--<div class="row">--}}
                {{--<div class="col-lg-4">--}}
                {{--<div class="image-wrapper"><img src="img/product12.jpg"></div>--}}
                {{--</div>--}}
                {{--<div class="col-lg-8">--}}
                {{--<div class="productContent">--}}
                {{--<div class="info-product">--}}
                {{--<h5><a href="#">Women floral top</a></h5>--}}
                {{--<p class="category"><a href="#">Fashion</a></p>--}}
                {{--<p class="price"><a href="#">$770</a></p>--}}
                {{--<p>Pellentesque habitant morbi tristique senectus et netus et malesuada--}}
                {{--fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae,--}}
                {{--ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam--}}
                {{--egestas semper. Aenean ultricies mi vitae est. Mauris placerat--}}
                {{--eleifend leo.</p>--}}

                {{--</div>--}}
                {{--<div class="product-view clearfix"><a href="#"><i class="fa fa-eye"></i>View--}}
                {{--Detail</a><a href="#"><i class="fa fa-heart"></i>Wishlist</a></div>--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}
                {{--<span class="product_status"> New</span>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div>
            <div class="row">
                <hr>
                <div class="col-lg-12">
                    <div class="listing-pagination">
                        <nav aria-label="Page navigation">
                            {{ $products->links() }}
                        </nav>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="list_show text-right">
                        <p>Pages <b>1</b> of <b>324</b> Pages</p>
                    </div>
                </div>
                </hr>
            </div>
        </div>
        <!--Sorting bar End-->
    </div>
</div>
@endsection