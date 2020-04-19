
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
						
					</tr>
				@endforeach
            </tbody>
		</table>
	</div>

@endsection

