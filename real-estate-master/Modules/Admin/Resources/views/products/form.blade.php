@extends('admin::layouts.wrapper')

@section('header', $product->exists ? 'Edit Product' : 'New Product')

@section('panel-color', 'info')

@section('content')
	@if($product->exists)
		{{Form::model($product, [
			'route' => ['admin.products.update', $product],
			'method' => 'PUT',
			'class' => 'form-horizontal',
			'enctype'=>'multipart/form-data'
			])
		}}
	@else
		{{ Form::open([
			'url' => route('admin.products.store') ,
			'method' => 'POST',
			'class' => 'form-horizontal',
			'enctype'=>'multipart/form-data'
			])
		}}
	@endif

	<div class="form-group">
		{{ Form::label('name', 'Title', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title'])}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('description', 'Description', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
           {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'style' => 'height:100px;width:100%;resize:none;'])}}
		</div>
	</div>

    <div class="form-group">
		{{ Form::label('image', 'Image', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			@if($product->exists)
				<div class="">
                    <img src="{{ asset(products_path() . $product->image) }}" width="100" height="100" class="img-responsive">
				</div>
				<div class="help-block">
					Image Currently
				</div>
			@endif
			{{ Form::file('image', ['class'=>'form-control', 'accept' => 'image/x-png,image/jpeg']) }}
			<span class="help-block">
		        <strong>Min:50x50, Max:500x500, Mime:jpg/png</strong>
		    </span>
		</div>
	</div>

	<div class="form-group">
		<div class="text-center">
		    {{ Form::submit($product->exists ? 'Edit' : 'Create', ['class'=>'btn btn-info']) }}
		</div>
	</div>

	{{ Form::close() }}
@stop

