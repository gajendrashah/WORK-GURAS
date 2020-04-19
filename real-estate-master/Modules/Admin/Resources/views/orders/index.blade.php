
@extends('admin::layouts.wrapper')

@section('header', 'Orders')

@section('content')
    @include('flash::display')
    <div class="table">
        <table class="table table-bordered table-condensed table-hover table-smalltext" id="data-table">
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
                            <a href="{{ route('admin.order.show', $item->id) }}" class='btn btn-primary btn-xs pull-left'>
                                <i class='glyphicon glyphicon-move'></i>
                            </a>

                            {{ 
                                Form::open([
                                    'url' => route('admin.order.confirm', $item->id), 
                                    'method' => 'Post',
                                    'class' => 'pull-right'
                                ])
                                }} 
                            <a class='btn btn-danger btn-xs' onclick=\"if(!confirm('Are you sure your property sale?')) return false;\"> <i class='glyphicon glyphicon-edit'> </i>
                                </a>
                            {{ Form::close() }}

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




	

