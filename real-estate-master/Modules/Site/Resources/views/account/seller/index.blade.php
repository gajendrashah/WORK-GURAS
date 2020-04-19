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
                <div class="tab-content" style="background:#fff">
                    <div role="tabpanel" class="tab-pane active" id="divCategoryForm">
                                  
                        <div class="member_area_heading">
                            <h6 style="height:35px;">
                                <sapn style="float:left;">Property List </sapn>
                                <a class="btn btn-warning" href="{{ route('seller.property.create') }}" style="float: right;background-color: #d92228!important;padding:3px 12px;margin-top:-6px;"><i class="fa fa-plus" aria-hidden="true"></i> New Property</a>
                            </h6>
                            <div class="main-content">
                                <div class="ads-tab" style="padding:0px;">
                                    <!-- Nav tabs -->
                                    @include('flash::display')
                                    <!-- Tab panes -->
                                    <div class="tab-content" style="padding:0px;">
                                        <div role="tabpanel" class="tab-pane active" id="all_ads">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" id="data-table" style="width:100%;margin:0px;">
                                                    <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Date</th>
                                                        <th>Sell Type</th>
                                                        <th>Property</th>
                                                        <th>Title</th>
                                                        <th>For</th>
                                                        <th>City</th>
                                                        <th>Town</th>
                                                        <th>Price</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    
                                                </table>
                                            </div>
                                            <nav aria-label="Page navigation">
                                                
                                            </nav>

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
	            ajax: '{{ route('seller.property.datatable') }}',
	            order: [[0,'desc']],
	            columns: [
                    {data:'id', name:'id', visible:false},
                    {data:'created_at', name:'created_at'},
                    {data:'person_type', name:'person_type'},
	            	{data:'property_type', name:'property_type'},
                    {data:'title', name:'title'},
                    {data:'sell_type', name:'sell_type'},
                    {data:'city', name:'city'},
                    {data:'name_of_project_society', name:'name_of_project_society'},
                    {data:'price', name:'price'},
	            	{data:'action', name:'status'},
	            ]
	        });
	    });

	</script>

@endpush
