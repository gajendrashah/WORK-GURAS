@extends('site::layouts.master')

@push('title')
List Free Ad
@endpush

@section('content')
<div class="container custom-container my-2">
    <div class="row">
        <div class="col-lg-3 col-sm-6  categories">
            @include('site::account.member-area-menu')
        </div>
        <!--categories-->
        <div class="col-lg-9 col-sm-6">
            <!-- Tab panes -->
            <div class="tab-content" style=" background:#fff">
                <div role="tabpanel" class="tab-pane active" id="divCategoryForm">

                    <div class="member_area_heading">
                        <h6 style="height:35px;">
                            <sapn style="float:left;">Orders List </sapn>
                        </h6>
                        <div class="main-content">
                            <div class="ads-tab" style="padding:0px;">
                                <!-- Nav tabs -->
                                @include('flash::display')
                                <!-- Tab panes -->
                                <div class="tab-content" style="padding:0px; background:#fff">
                                    <div role="tabpanel" class="tab-pane active" id="all_ads">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="data-table"
                                                style="width:100%;margin:0px;">
                                                <thead>
                                                    <tr>
                                                        <th>Property Id</th>
                                                        <th>Property Tile</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Contact</th>
                                                        <th>Is Immediate Purchase</th>
                                                        <th>Details</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $item)
                                                    <tr>
                                                        <td>{{ $item->product->id }}</td>
                                                        <td>{{ $item->product->title }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->contact }}</td>
                                                        <td>@if($item->is_immediate_purchase) yes @else No @endif</td>
                                                        <td>{{ $item->details }}</td>
                                                        <td>
                                                            <a href="{{ route('seller.property.order.show', $item->id) }}"
                                                                class='btn btn-primary btn-xs pull-left'>
                                                                <i class='fa fa-eye'></i>
                                                            </a>

                                                            {{ 
                                                                        Form::open([
                                                                            'url' => route('seller.property.order.confirm', $item->id), 
                                                                            'method' => 'Post',
                                                                            'class' => 'pull-right'
                                                                        ])
                                                                     }}
                                                            <a class='btn btn-danger btn-xs'
                                                                onclick=\"if(!confirm('Are you sure your property
                                                                sale?')) return false;\"> <i class='fa fa-trash'> </i>
                                                            </a>
                                                            {{ Form::close() }}

                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
$(function() {
    $('#data-table').DataTable({

    });
});
</script>

@endpush