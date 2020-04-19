@extends('site::layouts.master')

@push('title')
    List Free Ad
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
                    <div class="main-content">
                        <div class="registration-form ads-form">
                            <h5>Change Password</h5>

                            @include('flash::display')

                            {!! Form::open(['route' => 'account.change.password.post','method'=>'POST','id'=>'form']) !!}

                            <div class="form-group">
                                <label for="exampleInputName" class="text-top">Current Password:</label>
                                {!! Form::password('current_password',['id'=>'code','placeholder'=>'Current Password','class'=>'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('current_password') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName" class="text-top">New Password:</label>
                                {!! Form::password('new_password',['id'=>'code','placeholder'=>'New Password','class'=>'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('new_password') }}</span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName" class="text-top">Retype Password:</label>
                                {!! Form::password('retype_password',['id'=>'code','placeholder'=>'Retype Password','class'=>'form-control']) !!}
                                <span class="text-danger">{{ $errors->first('retype_password') }}</span>
                            </div>

                            <div class="form-group">
                                <label></label>
                                <button type="submit" class="btn btn-default pad_btn">Change Password
                                </button>
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
