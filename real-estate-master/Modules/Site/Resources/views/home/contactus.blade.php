@extends('site::layouts.master')

@section('content')
<div class="container custom-container mt-2">
    <div class="contact-container">
        <div class="container-fluid">
            <h2>Contact us</h2>
        </div>
        <div class="contactus-details">
            <!-- contact us -->
            <section class="contact__container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="map__container" style="height:auto">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2055.3623971428287!2d85.32261094822567!3d27.70538425978875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1907f7e2f099%3A0x517cd88424589879!2sRaffles%20Educare!5e0!3m2!1sen!2snp!4v1581939717678!5m2!1sen!2snp"
                                width="100%" height="450px" frameborder="0" style="border:0;"
                                allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="contact_info">
                            <p><i class="fa fa-home" style="padding-right:10px;"></i>Shaantinagar, Kathmandu 44605
                            </p>
                            <p><i class="fa fa-phone" style="padding-right:10px;"></i>92384092834902</p>
                            <p><i class="fa fa-envelope" style="padding-right:10px;"></i>info@sdhfj.com</p>
                        </div>
                        @include('flash::message')
                        {{ Form::open([ 
                            'url' => route('contact-submit') ,
                            'method' => 'POST',
                            'class' => 'form-horizontal',
                            'enctype'=>'multipart/form-data',
                            'id' => 'contact_form'
                            ]) 
                        }}
                        <div class="form-group">
                            {!! Form::text('name',null, ['class'=>'form-control px-3 py-3',
                            'placeholder'=>"Full Name"]) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::text('email', $value = null, ['class'=>'form-control px-3 py-3',
                            'placeholder'=>"Email"])
                            !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::number('phone_number', $value = null, ['class'=>'form-control px-3
                            py-3',
                            'placeholder'=>"Phone Number"]) !!}
                            <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::text('subject', $value = null, ['class'=>'form-control px-3 py-3',
                            'placeholder'=>"Subject"]) !!}
                            <span class="text-danger">{{ $errors->first('subject') }}</span>
                        </div>
                        <div class="form-group">
                            {!! Form::textarea('message', null, ['style' =>
                            'resize:none;width:100%;height:150px;padding:1em', 'cols' =>
                            '30', 'rows' => '7', 'placeholder'=>"Message"]) !!}
                            <span class="text-danger">{{ $errors->first('message') }}</span>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-search" onClick="event.preventDefault();
              document.getElementById('contact_form').submit(); this.disabled=true; this.innerVal='Processing…';">
                        </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection