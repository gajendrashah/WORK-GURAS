@extends('admin::layouts.master')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="wrap">
                <p class="form-title">Sign In</p>
                    
                    <form class="login" role="form" method="POST" action="{{ route('admin.login-submit') }}">
                        @include('flash::message')
                        {{ csrf_field() }}
                        <label for="username">Email</label>

                            <input id="email" type="text" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        <label for="password">Password</label>
                            <input id="password" type="password" name="password" required placeholder="Password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        <input type="submit" value="Login" class="btn btn-success btn-sm">
                </form>
            </div>
        </div>
    </div>
@endsection
