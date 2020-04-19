@extends('site::layouts.master')

@push('title')
    List Free Ad
@endpush

@section('content')
    <div class="container custom-container mt-2">
        <div class="row">
            <div class="col-lg-4 col-sm-6  categories">
                @include('site::account.member-area-menu')
            </div>
            <!--categories-->
            <div class="col-lg-8 col-sm-6">
                <!-- Tab panes -->
                <div class="tab-content" style="background:#fff">
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
                                                <table class="table table-bordered" id="data-table" style="width:100%;margin:0px;">
                                                    <thead>
                                                    <tr>
                                                        <th>Property Tile</th>
                                                        <th>Is Site Visit</th>
                                                        <th>Is Immediate Purchase</th>
                                                        <th>Is Home Loan</th>
                                                        <th>Site Visit Date</th>
                                                        <th>Site Visit Time</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orders as $item)
                                                            <tr>
                                                                <td>{{ $item->product->title }}</td>
                                                                <td>@if($item->is_site_visit) yes @else No @endif</td>
                                                                <td>@if($item->is_immediate_purchase) yes @else No @endif</td>
                                                                <td>@if($item->is_home_loan) yes @else No @endif</td>
                                                                <td>{{ $item->site_visit_date }} </td>
                                                                <td>{{ $item->site_visit_time }}</td>
                                                                <td>
                                                                    <a href="{{ route('seller.property.sales.show', $item->id) }}" class='btn btn-primary btn-xs pull-left'>
                                                                        <i class='fa fa-eye'></i>
                                                                    </a>
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
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
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
