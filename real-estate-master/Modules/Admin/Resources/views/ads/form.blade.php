@extends('admin::layouts.wrapper')

@section('header', $ads->exists ? 'Edit Ads' : 'New Ads')

@section('panel-color', 'info')

@section('content')
	@if($ads->exists)
		{{Form::model($ads, [
			'route' => ['admin.ads.update', $ads],
			'method' => 'PUT',
			'class' => 'form-horizontal',
			'enctype'=>'multipart/form-data'
			])
		}}
	@else
		{{ Form::open([
			'url' => route('admin.ads.store') ,
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
		{{ Form::label('redirect_link', 'Redirect Link', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Redirect Link'])}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('start_date', 'Show Start Date', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::date('start_date', null, ['class' => 'form-control'])}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('end_date', 'Show End Date', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::date('end_date', null, ['class' => 'form-control'])}}
		</div>
	</div>

	<div class="form-group">
		{{ Form::label('sort_order', 'Ordering', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			{{ Form::number('sort_order', null, ['class' => 'form-control', 'placeholder' => 'Ordering'])}}
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
           {{ Form::textarea('details', null, ['class' => 'form-control', 'placeholder' => 'Details', 'style' => 'height:100px;width:100%;resize:none;'])}}
		</div>
	</div>

    <div class="form-group">
		{{ Form::label('file_name', 'Image', ['class' => 'control-label col-sm-3']) }}
		<div class="col-sm-5">
			@if($ads->exists)
				<div class="">
                    <img src="{{ asset(config('dashboard.ads') . $ads->file_name) }}" width="100" height="100" class="img-responsive">
				</div>
				<div class="help-block">
					Image Currently
				</div>
			@endif
			{{ Form::file('file_name', ['class'=>'form-control', 'accept' => 'image/x-png,image/jpeg']) }}
			<span class="help-block">
		        <strong>Min:50x50, Max:500x500, Mime:jpg/png</strong>
		    </span>
		</div>
	</div>

	<div class="form-group">
		<div class="text-center">
		    {{ Form::submit($ads->exists ? 'Update' : 'Create', ['class'=>'btn btn-info']) }}
		</div>
	</div>

	{{ Form::close() }}
@stop

