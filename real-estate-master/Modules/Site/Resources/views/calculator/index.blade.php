@extends('site::layouts.master')

@section('content')
@php
$landMeasurementType = [
'ropani'=>'Ropani',
'aana'=>'Aana',
'paisa'=>'Paisa',
'dam'=>'Dam',
'bigha'=>'Bigha',
'kathha'=>'Kathha',
'dhur'=>'Dhur',
];
@endphp
<div class="container custom-container mt-2">

    <div class="row">
        <div class="col-lg-6 col-sm-6" style=" flex:0 0 80%!important; max-width:80%!important;">
            <div class="col-md-8">
                <div class="card text-white mb-3" style="background-color: rgba(35,47,62,1)">
                    <div class="card-body tabs" style="padding: 1.25rem;">
                        <h2 class="card-title">Land Measurement</h2>

                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item ">
                                <a class="nav-link @if(isset(request()->type))  @endif  @if(isset(request()->bigha) || isset(request()->kathha) || isset(request()->dur) || isset(request()->ropani) || isset(request()->aana)|| isset(request()->paisa) || isset(request()->dum))  @else  @endif"
                                    id="all-tab" data-toggle="tab" href="#all-content" role="tab" aria-controls="all"
                                    aria-selected="true">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(isset(request()->bigha) || isset(request()->kathha) || isset(request()->dur)) active @endif"
                                    id="bigha-tab" data-toggle="tab" href="#bigha-content" role="tab"
                                    aria-controls="bigha" aria-selected="false">Bigha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(isset(request()->ropani) || isset(request()->aana) || isset(request()->paisa) || isset(request()->dam)) active @endif"
                                    id="ropani-tab" data-toggle="tab" href="#ropani-content" role="tab"
                                    aria-controls="ropani" aria-selected="false">Ropani</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show @if(isset(request()->type)) active in @endif  @if(isset(request()->bigha) || isset(request()->kathha) || isset(request()->dur) || isset(request()->ropani) || isset(request()->aana)|| isset(request()->paisa) || isset(request()->dum))  @else active in @endif"
                                id="all-content" role="tabpanel" aria-labelledby="all-tab">
                                {{ Form::open([
                                        'method' => 'get',
                                        'class' => 'form-horizontal',
                                        'enctype'=>'multipart/form-data'
                                        ])
                                    }}
                                <div class="row card-body">

                                    <div class="col-sm-5">
                                        <select name="type" class="form-control">
                                            @foreach ($landMeasurementType as $key)
                                            <option {{ $key == request()->type ? 'selected' : '' }} value="{{ $key }}">
                                                {{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-sm-7">
                                        {{ Form::number('number', request()->number, ['class' => 'form-control', "step" => "0.000001"])}}
                                    </div>

                                    <div class="col-sm-12 align-bottom" style="margin-bottom: 1rem;margin-top: 1rem;">
                                        <button type="submit" class="btn btn-primary btn-block">Convert</button>
                                    </div>
                                </div>
                                {{ form::close() }}
                            </div>
                            <div class="tab-pane @if(isset(request()->bigha) || isset(request()->kathha) || isset(request()->dur)) active in @endif"
                                id="bigha-content" role="tabpanel" aria-labelledby="bigha-tab">
                                {{ Form::open([
                                    'method' => 'get',
                                    'class' => 'form-horizontal',
                                    'enctype'=>'multipart/form-data'
                                    ])
                                }}
                                <div class="row card-body">
                                    <div class="col-sm-4">
                                        {{ Form::text('bigha', request()->bigha, ['class' => 'form-control' , 'placeholder' => 'Bigha'])}}
                                    </div>
                                    <div class="col-sm-4">
                                        {{ Form::text('kathha', request()->kathha, ['class' => 'form-control' , 'placeholder' => 'Kathha'])}}
                                    </div>
                                    <div class="col-sm-4">
                                        {{ Form::text('dhur', request()->dhur, ['class' => 'form-control' , 'placeholder' => 'Dhur'])}}
                                    </div>
                                    <div class="col-sm-12 align-bottom" style="margin-bottom: 1rem;margin-top: 1rem;">
                                        <button type="submit" class="btn btn-primary btn-block">Convert</button>
                                    </div>
                                </div>
                                {{ form::close() }}
                            </div>
                            <div class="tab-pane @if(isset(request()->ropani) || isset(request()->aana) || isset(request()->paisa) || isset(request()->dam)) active in @endif"
                                id="ropani-content" role="tabpanel" aria-labelledby="ropani-tab">
                                {{ Form::open([
                                        'method' => 'get',
                                        'class' => 'form-horizontal',
                                        'enctype'=>'multipart/form-data'
                                        ])
                                    }}
                                <div class="row card-body">
                                    <div class="col-md-3">
                                        {{ Form::number('ropani', request()->ropani, ['class' => 'form-control' , 'placeholder' => 'Ropani'])}}
                                    </div>
                                    <div class="col-md-3">
                                        {{ Form::number('aana', request()->aana, ['class' => 'form-control' , 'placeholder' => 'Aana'])}}
                                    </div>
                                    <div class="col-md-3">
                                        {{ Form::number('paisa', request()->paisa, ['class' => 'form-control' , 'placeholder' => 'Paisa'])}}
                                    </div>
                                    <div class="col-md-3">
                                        {{ Form::number('dam', request()->dam, ['class' => 'form-control', 'placeholder' => 'Dam'])}}
                                    </div>
                                    <div class="col-sm-12 align-bottom" style="margin-bottom: 1rem;margin-top: 1rem;">
                                        <button type="submit" class="btn btn-primary btn-block">Convert</button>
                                    </div>
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-3 bg-secondary text-white" style="background-color:#6c757d!important;">
                    <div class="card-body" style="padding: 1.25rem;">
                        <h2 class="card-title">Results</h2>
                        <p class="">Results are based on 4 decimal points!</p>
                        <div class="alert alert-primary alert-dismissible" role="alert"
                            style="color: #004085;background-color: #cce5ff;border-color: #b8daff;">
                            <strong>In Ropani:</strong>
                            {{ isset($landMeasurementResult['ropaniResult']) ? $landMeasurementResult['ropaniResult'] : ""  }}<span
                                class="text-center h5" id="ropaniResult"></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>In Bigha:</strong>
                            {{ isset($landMeasurementResult['bighaResult']) ? $landMeasurementResult['bighaResult'] : "" }}<span
                                class="text-center h5" id="bighaResult"></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="alert alert-warning alert-dismissible" role="alert">
                            <strong>In Sq. Meter:</strong>
                            {{ isset($landMeasurementResult['squareFeetResult']) ? $landMeasurementResult['squareFeetResult'] : "" }}<span
                                class="text-center h5" id="squareMeterResult"></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>In Sq. Feet:</strong>
                            {{ isset($landMeasurementResult['squareMeterResult']) ? $landMeasurementResult['squareMeterResult'] : "" }}<span
                                class="text-center h5" id="squareFeetResult"></span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                    </div>
                    <!-- <div class="card-footer">
                        <span></span>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection