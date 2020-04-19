@extends('site::layouts.master')
@push('title')
    Reset Password
@endpush

@section('content')
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="registration-form">
                    <h4 class="registration_title">Reset Password</h4>
                    @include('flash::display')
                    {!! Form::open(['route' => 'reset-password.post','method'=>'POST','id'=>'form']) !!}
                    <div class="form-group">
                        <label for="login_email">Varification Code</label>
                        {!! Form::text('varification_code', $value = null, ['id'=>'varification_code','placeholder'=>'Varification Code','class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('varification_code') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="login_email">Password</label>
                        {!! Form::password('password', ['id'=>'password','placeholder'=>'Password','class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>

                    <div class="form-group">
                        <label for="login_email">Confirm Password</label>
                        {!! Form::password('password_confirmation',['id'=>'password_confirmation','placeholder'=>'Retype Password','class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                    
                    <div class="form-group">
                        <button type="button" class="btn btn-default pad_btn" onClick="event.preventDefault();
                                                     document.getElementById('form').submit(); this.disabled=true; this.innerText='Processing…';">Submit</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="registration-form">
                    <h4 class="registration_title">Or Register from here</h4>
                    <p>There are many benefits of registering with us, if you hesitate to register then you can login
                        with your Facebook Account as well. This will emboss your ad by liking and sharing with friends
                        and families.</p>

                    <a href="{{ route('register') }}" class="btn  btn-register btn-lg">Register Now</a>
                </div>
            </div>
        </div>
    </div>
@endsection
