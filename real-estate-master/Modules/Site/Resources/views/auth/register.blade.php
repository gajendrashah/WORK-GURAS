@extends('site::layouts.master')
@push('title')
Register
@endpush
@section('content')
<div class="container custom-container">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <div class="registration-form">
                <h4 class="registration_title">Registration here</h4>
                <p>Fields marked with (*) are compulsory</p>
                @include('flash::display')
                {{--  @include('flash::display')  --}}
                {!! Form::open(['route' => 'register.post','method'=>'POST','id'=>'register',
                'files'=>true],'novalidate') !!}
                <div class="form-group">
                    <div style="margin-left: 45%;margin-bottom: 60px;">
                        <div
                            style="position: relative;bottom: -66px;opacity: 1;z-index: 1;color: black;background: white;font-weight: bold;margin-left: -20px;">
                            Choose your profile</div>
                        <label style="display: block;margin-top: -40px;" for="avatar">
                            <img src="http://www.ukm.my/portal/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png"
                                style="border-radius: 40px;height: 70px;width: 80px;" id="imgupload">
                        </label>
                        <div class="col-md-6">
                            {!!
                            Form::file('profile_image',['id'=>'avatar','class'=>'form-control','style'=>'display:none']),
                            null !!}
                            <!-- <input type="file" class="form-control" name="profile_image" id="avatar" "> -->
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="user_type">User Type<sup>*</sup></label>
                    {!! Form::select('user_type', ['seller'=>'Seller', 'buyer'=>'Buyer'], null ,
                    ['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="full_name">Name<sup>*</sup></label>
                    {!! Form::text('full_name', $value = null, ['id'=>'full_name','placeholder'=>'Full
                    Name','class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                </div>
                <div class="form-group">
                    <label for="login_email">Email address</label>
                    {!! Form::email('email', $value = null,
                    ['id'=>'email','placeholder'=>'Email','class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
                <div class="form-group">
                    <label for="password">Password<sup>*</sup></label>
                    {!! Form::password('password', ['id'=>'password','placeholder'=>'Password','class'=>'form-control'])
                    !!}
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    {!! Form::password('password_confirmation',['id'=>'password_confirmation','placeholder'=>'Retype
                    Password','class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                </div>
                <div class="form-group">
                    <label for="address_1">Address</label>
                    {!! Form::text('address_1', $value = null,
                    ['id'=>'address_1','placeholder'=>'Address','class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('address_1') }}</span>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    {!! Form::text('mobile', $value = null,
                    ['id'=>'mobile','placeholder'=>'Mobile','class'=>'form-control']) !!}
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                </div>

                <div class="form-group checkbox">
                    <label>
                        <input type="checkbox" name="terms"><span class="terms">I agree to the <a href="#">Terms and
                                Conditions</a> of Real Estate Pvt. Ltd.</span>
                        <span class="text-danger">{{ $errors->first('terms') }}</span>
                    </label>
                </div>
                <div class="form-group">
                    <label></label>
                    <button type="button" class="btn btn-primary btn-lg pad_btn"
                        onClick="event.preventDefault();
                                                     document.getElementById('register').submit(); this.disabled=true; this.innerText='Processing…';">Register</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        <div class="col-md-6 col-sm-6">
            <div class="registration-form">
                <h4 class="registration_title_benifit">Benefits of Registering</h4>
                <div class="register_benifit">

                    <ul>
                        <li>Post unlimited Ads for FREE</li>
                        <li>Get your own Dashboard</li>
                        <li>Manage all Ads and Replies</li>
                        <li>Can participate on Community Discussion</li>
                        <li>Get Email Notification when someone replies you</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
@stop
@push('scripts')
<script>
function readFile() {
    if (this.files && this.files[0]) {
        var FR = new FileReader();
        FR.onload = function(e) {
            document.getElementById("imgupload").src = e.target.result;
            document.getElementById("imgupload").style.width = "80px";

        };
        FR.readAsDataURL(this.files[0]);
    }
}

document.getElementById("avatar").addEventListener("change", readFile, false);
</script>
@endpush