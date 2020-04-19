
@extends('admin::layouts.wrapper')

@section('header', 'Products')

@section('content')
    <div class="table">
        <table class="table table-bordered table-condensed table-hover table-smalltext" id="data-table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Sell Type</th>
					<th>Property type</th>
					<th>Title</th>
					<th>State</th>
					<th>City</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
            </thead>
            <tbody>
				@foreach ($products as $item)
					<tr>
						<td>Id</td>
						<td>{{ $item->sell_type }}</td>
						<td>{{ $item->property_type }}</td>
						<td>{{ $item->title }}</td>
						<td>{{ $item->state }}</td>
						<td>{{ $item->city }}</td>
						<td>{{ $item->price }}</td>
						<td>
							<a href="{{ route('admin.product.show', $item->id) }}" class='btn btn-primary btn-xs pull-left'>
                                <i class='glyphicon glyphicon-move'></i>
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


