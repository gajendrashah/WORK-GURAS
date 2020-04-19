@extends('site::layout')

@push('title')
    Not Found
@endpush
@inject('adService', 'App\Modules\Ad\Services\AdService')

@section('content')
    <div class="container custom-container">
        <div class="Ads-section">
            <div class="row">
                <div class="comm-error">
                    <i class="fa fa-ban" aria-hidden="true"></i>
                    <div class="error-info">
                        <h3 style="">Sorry! This product is no longer available</h3>
                    </div>
                </div>
            </div>
            <div class="Feature-ad clearfix">
                <h6><i class="zmdi zmdi-star"></i>Most Popular Product</h6>
                <!-- <a href="product_listing.php">View All</a>--> 
            </div>
            <div class="row">
                @forelse($popularProducts as $item)
                    <div class="col-lg-2">
                        <div class="productGrid">
                            <div class="image-wrapper">
                                @if($item->cover_image)
                                    <img src="{{ asset('/uploads/products/'.$item->cover_image) }}"
                                         style="width:400px;height:400px;"
                                         alt="{{ $item->title  }}"
                                         onclick="viewDetail('{{ route('product.detail',['slug'=>$item->slug,'id'=>$item->id]) }}')">
                                @else
                                    <img src="{{ asset('assets/site/images/no_image.png' ) }}"
                                         alt="{{ $item->title  }}"
                                         onclick="viewDetail('{{ route('product.detail',['slug'=>$item->slug,'id'=>$item->id]) }}')">
                                @endif
                            </div>
                            <div class="info-product">
                                <h5><a href="#">{{ str_limit($item->title, $limit = 22, $end = '...')}}</a></h5>
                                <h6><a href="#">{{ $item->category->name }}</a></h6>
                                <p><a href="#">Price:{{ number_format(intval($item->price)) }}/-</a></p>
                            </div>
                            <div class="product-view clearfix">
                                <a href="{{ route('product.detail',['slug'=>$item->slug,'id'=>$item->id]) }}">
                                    <i class="fa fa-eye"></i>View Detail</a>
                            </div>
                            {{--<span class="product_status red">--}}
                            {{--Sold--}}
                            {{--</span>--}}
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    
@endsection
@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {
        $('#commentForm').on('submit', function (e) {

            e.preventDefault();
            let message = $('#comment').val();
            let productId = $('#product').val();

            let imageUrl = "{{ asset('assets/site/images/') }}";

            $.ajax({
                method: "POST",
                url: "{!! route('comment.store') !!}",
                data: {_token: "{{ csrf_token() }}", message: message, product_id: productId},
                success: function (data) {
                    console.log(data);
                    let image = imageUrl +"/"+data.image;
                    let html = "<li>\n" +
                        "   <div class=\"thumbnail\" style=\"padding:0px;\">\n"+
                        "       <img src="+ image +" alt=\"profile_image\" style=\"width: 40px;height:40px;\" />\n"+
                        "    </div>\n" +
                        "   <div class=\"user_info\">\n" +
                        "       <h4><a href=\"#\">" + data.name + "</a></h4>\n" +
                        "            <p>" + data.message + " </p>\n" +
                        "             <span class=\"post_date\">" + data.createdAt + " </span>\n" +
                        "     </div>\n" +
                        "</li>"; 
                    $(".user_comment").append(html);

                    $('#commentModel').modal('hide');
                    $('#comment').val("");
                },
                error: function (request, status, error) {

                    let text = jQuery.parseJSON(request.responseText);
                    let statusCode = request.status;

                    if (statusCode == '401') {

                        swal({
                            title: text.message,
                            text: "Login to continue!",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                        });
                        $('#commentModel').modal('hide');
                        $('#comment').val("");
                        $('#product').val("");
                    }

                    if (statusCode == '500') {

                        swal({
                            title: "Internal server error",
                            text: "Please try again later",
                            icon: "warning",
                            buttons: true,
                            dangerMode: true,
                            timer: 200
                        });
                        $('#commentModel').modal('hide');
                        $('#comment').val("");
                        $('#product').val("");
                    }
                }
            });
        });
    });
</script>
@endpush
