@extends('site::layouts.master')
@push('title')
    Forgot Password
@endpush

@section('content')
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="registration-form">
                    <h4 class="registration_title">Forgot Password</h4>
                    @include('flash::display')
                    {!! Form::open(['route' => 'forgot-password.post','method'=>'POST','id'=>'form']) !!}
                    <div class="form-group">
                        <label for="login_email">Email address</label>
                        {!! Form::text('email', $value = null, ['id'=>'email','placeholder'=>'Email','class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    
                    <div class="form-group">
                    <label for="login_email"></label>
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
