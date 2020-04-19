@extends('admin::layouts.wrapper')

@section('header', 'Ads')

@section('content')
	<div class="row">
		<div class="pull-right content-top-button">
			<a href="{{ route('admin.ads.create') }}" class='btn btn-success btn-sm'><i class='glyphicon glyphicon-plus'></i> Add New</a>
		</div>
	</div>
    <div class="table">
        <table class="table table-bordered table-condensed table-hover table-smalltext" id="data-table">
			<thead>
				<th></th>
				<th>Title</th>
				<th>Redirect Link</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Status</th>
				<th>File Name</th>
				<th>Action</th>
            </thead>
            <tbody>
				@foreach($ads as $item)
				<tr>
					<th>{{ $item->id }}</th>
					<th>{{ $item->title }}</th>
					<th>{{ $item->link }}</th>
					<th>{{ $item->start_date }}</th>
					<th>{{ $item->end_date }}</th>
					<th>{{ $item->status }}</th>
					<th>{{ $item->file_name }}</th>
					<th>
						{{
							Form::open([
							'url' => route('admin.ads.destroy', $item->id),
							'method' => 'Delete',
							'class' => 'pull-right'
						])
						 }}
						<a class="btn btn-danger" onclick="if(!confirm('Are you sure you want to delete ?')) return false;" style="margin-left:10px;"> <i class='glyphicon glyphicon-trash'> </i> &nbsp; Delete</a>
						{{ Form::close() }}

						<a href="{{ route('admin.ads.edit', $item->id) }}" style="float:right" type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp; Edit</a>

					</th>
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
