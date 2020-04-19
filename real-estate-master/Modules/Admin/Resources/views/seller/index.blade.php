
@extends('admin::layouts.wrapper')

@section('header', 'Seller')

@section('content')
    <div class="table">
        @include('flash::message')
		<table class="table table-bordered table-condensed table-hover table-smalltext" id="data-table">
			<thead>
				<th>Name</th>
				<th>Email</th>
				<th>Email Varify</th>
				<th>Mobile Number</th>
				<th>District</th>
				<th>Action</th>
            </thead>
            <tbody>
				@foreach ($seller as $item)
					<tr>
						<td>{{ $item->full_name }}</td>
						<td>{{ $item->email }}</td>
						<td>
							@if($item->email_verified)
							<span style="color:green">Varified</span>
							@else
							<span style="color:red">No Varified</span>
							@endif
						</td>
						<td>{{ $item->userProfile ? $item->userProfile->mobile : "" }}</td>
						<td>{{ $item->userProfile ? $item->userProfile->district : "" }}</td>
						<td>
							<a href="{{ route('admin.seller.show', $item->id) }}" class='btn btn-primary btn-xs pull-left'>
								Details
							</a>

							<a href="{{ route('admin.seller.product-list', $item->id) }}" class='btn btn-primary btn-xs pull-left'>
								Product List
							</a>
						</td>
					</tr>
				@endforeach
            </tbody>
		</table>
	</div>

@endsection

@push('scripts')
<link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

	<script>
		$(function() {
	        $('#data-table').DataTable({
	            
	        });
	    });

	</script>

@endpush


