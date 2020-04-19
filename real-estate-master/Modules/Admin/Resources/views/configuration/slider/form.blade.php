@extends('admin::layouts.wrapper')

@section('header', $slider->exists ? 'Edit Slider' : 'New Slider')

@section('panel-color', 'info')

@section('content')
	@if($slider->exists)
		{{Form::model($slider, [
			'route' => ['admin.slider.update', $slider],
			'method' => 'PUT',
			'class' => 'form-horizontal',
			'enctype'=>'multipart/form-data'
			])
		}}
	@else
		{{ Form::open([
			'url' => route('admin.slider.store') ,
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
		{{ Form::label('ordering', 'Ordering', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::number('ordering', null, ['class' => 'form-control', 'placeholder' => 'Ordering'])}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('status', 'Is Show', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::select('status', [1=>'Active', 0=>'inActive'], null , ['class'=>'form-control']) }}
		</div>
	</div>


	<div class="form-group">
		{{ Form::label('details', 'Details', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
           {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Details', 'style' => 'height:100px;width:100%;resize:none;'])}}
		</div>
	</div>

    <div class="form-group">
		{{ Form::label('file_name', 'Image', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			@if($slider->exists)
				<div class="">
                    <img src="{{ asset(config('dashboard.slider') . $slider->image) }}" width="100" height="100" class="img-responsive">
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
		    {{ Form::submit($slider->exists ? 'Update' : 'Create', ['class'=>'btn btn-info']) }}
		</div>
	</div>

	{{ Form::close() }}
@stop

