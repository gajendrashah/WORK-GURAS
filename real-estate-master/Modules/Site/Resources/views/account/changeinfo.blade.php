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
                            <h5>Change My Info</h5>
                            {!! Form::model(auth()->user(),['method'=>'POST','route'=>['account.change.info.post'],'class'=>'form-horizontal','role'=>'form','id'=>'form','files'=>true],'novalidate') !!}
                            
                            @include('flash::display')
                                <div class="form-group">
                                    <div style="margin-left: 45%;margin-bottom: 45px;margin-top: 45px;">    
                                        <div style="position: relative;bottom: -70px;opacity: 1;z-index: 1;color: black;background: white;font-weight: bold;margin-left: -20px;">Change your profile</div>
                                        <label style="display: block;margin-top: -40px;" for="avatar">
                                            @if(Auth::user()->profile_image == null) <img src="{{ asset('/assets/site/images/user.png')}}" alt='profile_image'
                                             style="width: 80px;height: 80px;border-radius: 50px;" id="imgupload" /> 
                                            @else <img src="{{ asset('/images/users/'.Auth::user()->profile_image)}}" alt='profile_image' 
                                            style="width: 80px;height: 80px;border-radius: 50px;" id="imgupload" /> 
                                             @endif  
                                        </label>
                                        <div class="col-md-6">
                                            <input type="file" class="form-control" name="profile_image" id="avatar" style="display: none">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="your_name">Your Name:</label>
                                    {!! Form::text('full_name', $user->full_name, ['id'=>'full_name','placeholder'=>'Full Name','class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Email:</label>
                                    {!! Form::label('email',$user->email , ['id'=>'email','placeholder'=>'Email','class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="mobile">Mobile Phone:</label>
                                    {!! Form::text('mobile', $user->userProfile ? $user->userProfile->mobile : null, ['id'=>'mobile','placeholder'=>'Mobile','class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="address"> Address </label>
                                    {!! Form::text('address_1', $user->userProfile ? $user->userProfile->address_1 : null, ['id'=>'address_1','placeholder'=>'Full Address','class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->first('address_1') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="address2">State Name</label>
                                    {!! Form::text('address_2', $user->userProfile ? $user->userProfile->address_2 : null , ['id'=>'address_2','placeholder'=>'state Name','class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->first('address_2') }}</span>
                                </div>
                                <div class="form-group">
                                    <label for="address2">District Name</label>
                                    {!! Form::text('district', $user->userProfile ? $user->userProfile->district : null , ['id'=>'district','placeholder'=>'District Name','class'=>'form-control']) !!}
                                    <span class="text-danger">{{ $errors->first('district') }}</span>
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <button type="button" class="btn btn-default pad_btn" onClick="event.preventDefault();
                                                     document.getElementById('form').submit(); this.disabled=true; this.innerText='Processing…';">Submit</button>
                                </div>
                            {!! Form::close() !!}
                        </div>



                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@push('scripts')
<script>
    function readFile() {
          if (this.files && this.files[0]) {
            var FR= new FileReader();
            FR.onload = function(e) {
              document.getElementById("imgupload").src = e.target.result;
              document.getElementById("imgupload").style.width = "80px";
              document.getElementById("imgupload").style.height = "80px";

            };
            FR.readAsDataURL( this.files[0] );
          }
        }

        document.getElementById("avatar").addEventListener("change", readFile, false);

</script>
@endpush