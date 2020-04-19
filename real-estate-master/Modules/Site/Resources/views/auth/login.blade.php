@extends('site::layouts.master')
@push('title')
    Login
@endpush

@section('content')
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="registration-form">
                    <h4 class="registration_title">I already have an Account</h4>
                    @include('flash::display')
                    {!! Form::open(['route' => 'login.post','method'=>'POST','id'=>'sign_in']) !!}
                    <div class="form-group">
                        <label for="login_email">Email address</label>
                        {!! Form::email('email', $value = null, ['id'=>'email','placeholder'=>'Email','class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="login_paswd">Password</label>
                        {!! Form::password('password', ['id'=>'password','placeholder'=>'Password','class'=>'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group checkbox">
                        <label>
                            {!! Form::checkbox('remember',1,false, ['id'=>'remember_me','class'=>'filled-in chk-col-pink']) !!}
                            <span class="terms">Remember me</span>
                        </label>
                    </div>
                    <div class="form-group forget_pswd">
                        <a href="{{ route('forgot-password') }}">Forgot Password?</a>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <button type="button" class="btn btn-default pad_btn" onClick="event.preventDefault();
                                                     document.getElementById('sign_in').submit(); this.disabled=true; this.innerText='Processing…';">Login</button>
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
@push('script')
<script type="text/javascript">
$(function() {
    $('sign_in').each(function() {
        $(this).find('input').keypress(function(e) {
            // Enter pressed?
            if(e.which == 10 || e.which == 13) {
                this.form.submit();
            }
        });

        $(this).find('input[type=submit]').hide();
    });
});
</script>
@endpush
