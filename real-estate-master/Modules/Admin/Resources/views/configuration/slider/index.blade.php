@extends('admin::layouts.wrapper')

@section('header', 'Slider')

@section('content')
	<div class="row">
		<div class="pull-right content-top-button">
			<a href="{{ route('admin.slider.create') }}" class='btn btn-success btn-sm'><i class='glyphicon glyphicon-plus'></i> Add New</a>
		</div>
	</div>
    <div class="table">
        <table class="table table-bordered table-condensed table-hover table-smalltext" id="data-table">
			<thead>
				<th></th>
				<th>Title</th>
				<th>Image</th>
				<th>Description</th>
				<th>Ordering</th>
				<th>Status</th>
				<th>Action</th>
            </thead>
            <tbody>
				@foreach ($sliders as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->title }}</td>
						<td>{{ $item->image }}</td>
						<td>{{ $item->description }}</td>
						<td>{{ $item->ordering }}</td>
						<td>
							@if($item->status) 
								<span style="color:green;">Active</span> 
							@else 
								<span style="color:red;">Inactive</span> 
							@endif
						</td>
						<td>
                            {{
                                Form::open([
                                'url' => route('admin.slider.destroy', $item->id),
                                'method' => 'Delete',
                                'class' => 'pull-right'
                            ])
                            }}
                            <a class="btn btn-danger" onclick="if(!confirm('Are you sure you want to delete ?')) return false;" style="margin-left:10px;"> <i class='glyphicon glyphicon-trash'> </i> &nbsp; Delete</a>
                            {{ Form::close() }}

                            <a href="{{ route('admin.slider.edit', $item->id) }}" style="float:right" type="button" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp; Edit</a>
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
