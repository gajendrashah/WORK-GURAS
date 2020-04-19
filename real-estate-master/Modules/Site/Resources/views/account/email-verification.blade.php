@extends('site::layouts.master')
@push('title')
    User Dashboard
@endpush

@section('content')
    <div class="container custom-container my-2">
        <div class="row">
            <div class="col-lg-3 col-sm-6  categories">
                @include('site::account.member-area-menu')
            </div>
            <!--categories-->
            <div class="col-lg-9 col-sm-6">
                <!-- Tab panes -->
                <div class="tab-content" style="background:#fff">
                    <div role="tabpanel" class="tab-pane active " id="home">
                        <div class="member_area_heading">
                            <h6>Log in as {{ Auth::user()->full_name }}</h6>
                            <div class="main-content">
                                <div class="registration-form ads-form choose-category">
                                    @include('flash::display')
                                    {!! Form::open(['route' => 'account.email-varification.submit','method'=>'POST','id'=>'form']) !!}
                                    <div class="form-group">
                                        <label for="varification_code">Varification Code</label>
                                        {!! Form::text('varification_code', $value = null, ['id'=>'email','placeholder'=>'Enter your varification code','class'=>'form-control']) !!}
                                        <p class="text-danger">{{ $errors->first('varification_code') }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <button type="submit" class="btn btn-default pad_btn">Submit</button>
                                        <a type="button" href="{{ route('account.resend-varification-code') }}"
                                            class="btn pad_btn">Resend</a>
                                    </div>
                                    
                                    {!! Form::close() !!}
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
