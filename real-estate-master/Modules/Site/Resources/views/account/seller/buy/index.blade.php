@extends('site::layouts.master')

@push('title')
    Buy Product List
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
                                <sapn style="float:left;">Buy Product List </sapn>
                            </h6>
                            <div class="main-content">
                                <div class="ads-tab" style="padding:0px;">
                                    <!-- Nav tabs -->
                                    @include('flash::display')
                                    <!-- Tab panes -->
                                    <div class="tab-content" style="padding:0px; background:#fff">
                                        <div role="tabpanel" class="tab-pane active" id="all_ads">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="data-table" style="width:100%;margin:0px;">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Sell Type</th>
                                                        <th>Property Type</th>
                                                        <th>Tile</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                        <th>Name of Society</th>
                                                        <th>Price</th>
                                                        <th>Price Type</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    
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
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script>
		$(function() {
	        $('#data-table').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: '{{ route('seller.buy.product.datatable') }}',
	            order: [[0,'desc']],
	            columns: [
                    {data:'id', name:'id', visible:false},
	            	{data:'product.sell_type', name:'product.sell_type'},
                    {data:'product.property_type', name:'product.property_type'},
                    {data:'product.title', name:'product.title'},
	            	{data:'product.state', name:'product.state'},
                    {data:'product.city', name:'product.city'},
                    {data:'product.name_of_project_society', name:'product.name_of_project_society'},
                    {data:'product.price', name:'product.price'},
                    {data:'product.price_type', name:'product.price_type'},
	            	{data:'action', name:'action'},
	            ]
	        });
	    });

	</script>

@endpush
