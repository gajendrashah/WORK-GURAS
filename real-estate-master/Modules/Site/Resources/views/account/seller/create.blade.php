@extends('site::layouts.master')

@push('title')
Add new property
@endpush

@section('content')
<div class="container custom-container my-2">
    <div class="row">
        <div class="col-lg-4 col-sm-6  categories">
            @include('site::account.member-area-menu')
        </div>
        <!--categories-->
        <div class="col-lg-9 col-sm-6">
            <!-- Tab panes -->
            <div class="tab-content" style="background:#fff">
                <div role="tabpanel" class="tab-pane active " id="divCategoryForm">
                    @include('flash::display')
                    <div class="registration-form registration-form-custom ads-form choose-category">
                        <div class="register__mainDiv clearfix">
                            <div class="register__mainDiv__Container">
                                <form action="{{ route('seller.property.store') }}" method="post"
                                    enctype='multipart/form-data' id="form">
                                    @csrf
                                    <!-- heading -->
                                    <div class="form-group">
                                        <label>I am <sup> *</sup></label>
                                        <label class="control control--radio">
                                            {!! Form::radio('person_type', 'Owner', true); !!}
                                            Owner
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--radio">
                                            {!! Form::radio('person_type', "Agent"); !!}
                                            Agent
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--radio">
                                            {!! Form::radio('person_type', 'Builder'); !!}
                                            Builder
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Property For <sup> *</sup></label>
                                        <label class="control control--radio">
                                            {!! Form::radio('sell_type', 'Sell' , true);!!}
                                            Sell
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--radio">
                                            {!! Form::radio('sell_type', 'Rent');!!}
                                            Rent
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Property Title <sup> * </sup></label>
                                        {!! Form::text('title', $value = null,
                                        ['id'=>'title','placeholder'=>'Title','class'=>'form-control','minlength'=>'3'])
                                        !!}
                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Property Type <sup> * </sup></label>
                                        @php
                                        $propertyType = [
                                        ''=>'Select Property Type',
                                        'Land'=>'Land',
                                        'House'=>'House',
                                        'Appartments'=>'Appartments',
                                        'Office Space'=>'Office Space',
                                        ];
                                        @endphp
                                        {!! Form::select('property_type', $propertyType, null, ['class'=>'form-control
                                        property_type','id'=>'propertyType']) !!}
                                        <span class="text-danger">{{ $errors->first('property_type') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label>State</label>
                                        @php
                                        $state = [
                                        ''=>'Select State',
                                        'Province No. 1'=>'Province No. 1',
                                        'Province No. 2'=>'Province No. 2',
                                        'Province No. 3'=>'Province No. 3',
                                        'Province No. 4'=>'Province No. 4 (aka Gandaki/Gandaki Pradesh).',
                                        'Province No. 5'=>'Province No. 5',
                                        'Province No. 6'=>'Province No. 6 (aka Karnali).',
                                        'Province No. 7'=>'Province No. 7 (aka Sudurpaschim).',
                                        ];
                                        @endphp
                                        {!! Form::select('state', $state, null, ['class'=>'form-control property_type'])
                                        !!}
                                        <span class="text-danger">{{ $errors->first('state') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label>City <sup> *</sup></label>

                                        @php
                                        $city = [
                                        ''=>'Select City',
                                        'Kathmandu'=>"Kathmandu",
                                        'Bhaktapur'=>"Bhaktapur",
                                        'Lalitpur'=>"Lalitpur",
                                        'Kavre'=>"Kavre",
                                        'Kirtipur'=>"Kirtipur",
                                        'Pokhara'=>"Pokhara",
                                        'Chitwan'=>"Chitwan",
                                        'Biratnagar'=>"Biratnagar",
                                        'Birgunj'=>"Birgunj",
                                        'Dharan Bazar'=>"Dharan Bazar",
                                        'Bharatpur'=>"Bharatpur",
                                        'Janakpur'=>"Janakpur",
                                        'Dhangarhi'=>"Dhangarhi",
                                        'Butwal'=>"Butwal",
                                        'Mahendranagar'=>"Mahendranagar",
                                        'Hetauda'=>"Hetauda",
                                        'Nepalgunj'=>"Nepalgunj",
                                        'Bhairahawa'=>"Bhairahawa",
                                        'Gulariya'=>"Gulariya",
                                        'Ithari'=>"Ithari",
                                        'Tikapur'=>"Tikapur",
                                        'Tulsipur'=>"Tulsipur",
                                        'Rajbiraj'=>"Rajbiraj",
                                        'Lahan'=>"Lahan",
                                        'Birendranagar'=>"Birendranagar",
                                        'Gaur'=>"Gaur",
                                        'Siraha'=>"Siraha",
                                        'Tansen'=>"Tansen",
                                        'Jaleswar'=>"Jaleswar",
                                        'Dipayal'=>"Dipayal",
                                        'Baglung'=>"Baglung",
                                        'Khandbari'=>"Khandbari",
                                        'Dhankuta'=>"Dhankuta",
                                        'Waling'=>"Waling",
                                        'Dailekh'=>"Dailekh",
                                        'Malangwa'=>"Malangwa",
                                        'Bhadrapur'=>"Bhadrapur",
                                        'Dadeldhura'=>"Dadeldhura",
                                        'Darchula'=>"Darchula",
                                        'Ilam'=>"Ilam",
                                        ];
                                        @endphp
                                        {!! Form::select('city', $city, null, ['class'=>'form-control property_type'])
                                        !!}
                                        <span class="text-danger">{{ $errors->first('city') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Name of Society</label>
                                        {!! Form::text('name_of_project_society', $value = null, ['placeholder'=>'Name
                                        of Society','class'=>'form-control']) !!}
                                        <span class="text-danger">{{ $errors->first('name_of_project_society') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label>Locality</label>
                                        {!! Form::text('locality', $value = null,
                                        ['placeholder'=>'Locality','class'=>'form-control']) !!}
                                        <span class="text-danger">{{ $errors->first('locality') }}</span>
                                    </div>

                                    <div id="load_files"></div>

                                    <div class="form-group">
                                        <label for="input_price">Price <sup> *</sup></label>
                                        {!! Form::text('price', $value = null, [
                                        'id'=>'price',
                                        'placeholder'=>'Price',
                                        'class'=>'form-control',
                                        'onkeypress'=>'return onlyNumbers(this.value);',
                                        'data-parsley-type'=>'integer',
                                        'autocomplete'=>'off',
                                        'onInput'=>'checkLength()',
                                        'style'=>'width:50%',
                                        ]) !!}
                                        @php
                                        $priceType = [
                                        'Sale'=>'Sale',
                                        'Monthly'=>'Monthly',
                                        'Anual'=>'Anual',
                                        ];
                                        @endphp
                                        {!! Form::select('price_type', $priceType, null, ['class'=>'form-control
                                        property_type', "style"=> "width:23% ! important;"]) !!}
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                        <div id="numToWord"></div>

                                    </div>
                                    <div class="form-group">
                                        <label>Price Negotiable</label>
                                        <label class="control control--radio">
                                            {!! Form::radio('negotiable', 1,true); !!}
                                            Yes
                                            <div class="control__indicator"></div>
                                        </label>
                                        <label class="control control--radio">
                                            {!! Form::radio('negotiable', 0); !!}
                                            Fixed Price
                                            <div class="control__indicator"></div>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label>Main Image <sup> * </sup></label>
                                        {!!
                                        Form::file('main_image',['data-parsley-filesize'=>'2','data-parsley-mimes'=>'image/jpeg,
                                        image/png,image/jpg' ])!!}
                                        <span class="text-danger">{{ $errors->first('main_image') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="addImages">Additional Images</label>
                                        <div class="col-md-12 dotted-line" id="clickable">
                                            <div class="dropzone ">
                                                <div id="dropzone" class="ability-dropzone">
                                                    <div class="dz-message">
                                                        Click to upload or drop files here.<br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Video Url</label><br>
                                        {!! Form::url('video_link', $value = null, ['placeholder'=>'Paste your Url
                                        ','class'=>'form-control w-100']) !!}
                                        <span class="text-danger">{{ $errors->first('video_link') }}</span>
                                    </div>

                                    <div class="form-group">
                                        <label for="description" style="width:100%;" class="text-top">Description <sup>
                                                * </sup></label>
                                        {!! Form::textarea('details', $value = null, ['id' => "area1",
                                        'placeholder'=>'Details','class'=>'form-control', 'style' => 'width:100%;']) !!}
                                        <span class="text-danger">{{ $errors->first('details') }}</span>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::checkbox('is_urgent', 1); !!}
                                        <label style="width:95%;" class="text-top">You want to sell urgently.</label>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::checkbox('is_premium', 1); !!}
                                        <label style="width:95%;" for="description" class="text-top">You want to add
                                            your property into Premium category.</label>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::checkbox('is_exclusively', 1); !!}
                                        <label style="width:95%;" for="description" class="text-top">I am posting this
                                            property 'exclusively' on RealEstate.</label>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::checkbox('is_term_condition', 1,true); !!}
                                        <label style="width:95%;" for="description" class="text-top">
                                            I am the owner/I have the authority to post this
                                            property.
                                            I agree not to provide incorrect property
                                            information or
                                            state a
                                            discriminatory
                                            preference.
                                            In case, the information does not comply with
                                            RealEstate
                                            terms,
                                            RealEstate.com has the
                                            right to edit/remove the property from their
                                            site. <sup>*</sup>
                                        </label>
                                    </div>


                                    <div class="form-group">
                                        {{ Form::submit('Post Your Property', ['class'=>'btn btn-warning', 'style' => 'float:left; color:#fff; margin-top:20px;']) }}
                                    </div>


                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection


@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
@endpush
@push('scripts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{ asset('assets/site/js/dropzone.js')}}" defer></script>
<script src="{{ asset('assets/site/js/package/parsley/parsley.min.js')}}" defer></script>
<script src="{{ asset('assets/site/js/form-validation.js')}}" defer></script>
<script>
$(".property_type").change(function() {

    var property_type = $(this).val();

    $.ajax({
            url: "{{ env('APP_URL') }}/seller/property/" + property_type + "/load-page",
            type: "GET",
            cache: false
        })
        .done(function(msg) {

            console.log(msg);

            $('#load_files').html(msg);
        });

});

//DROPZONE
$(function() {
    {
        {
            --
            var newsImages = "{{ images|json_encode|raw }}";
            --
        }
    }
    var newsImages = "";
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone("div#dropzone", {
        url: "{{ route('seller.property.additional-image') }}", // POST IMAGES TO SERVER
        addRemoveLinks: true,
        maxFiles: 6,
        maxFilesize: 5,
        acceptedFiles: "image/*",
        renameFile: true,
        clickable: "#clickable",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        init: function() {

            this.on("maxfilesexceeded", function(file) {

                swal('Error', 'Only 6 file allowed', 'error');

            });

        }

    });

    if (newsImages.length > 0) {
        newsImages.forEach(function(image) {
            var mock = {
                name: image.name,
                size: image.size
            };
            myDropzone.emit("addedfile", mock);
            myDropzone.emit("thumbnail", mock, decodeURI(image.thumbnail));
            myDropzone.emit("complete", mock);
        });

        myDropzone.options.maxFiles = myDropzone.options.maxFiles - newsImages.length;
    }

    myDropzone.on("success", function(e) {

        var res = $.parseJSON(e.xhr.response);
        $("#form").append("<input id='ad_image_" + res.image_id +
            "' type='hidden' name='additional_image[]' value='" + res.image_id + "' />")

    }).on('removedfile', function(e) {

        var res = $.parseJSON(e.xhr.response);
        $("#form").append("<input type='hidden' name='remove_image[]' value='" + res.image_id + "' />");

    }).on('error', function(file, response, e) {

        if (e) {

            var msg = $.parseJSON(e.response);
            swal('Error', msg['error'], 'error');

        } else if (response) {

            swal('Error', response, 'error');
        }

    });

    $("#price").keyup(function() {
        var value = $(this).val();
        NumToWord(value, 'numToWord');
    }).keyup();
});
</script>

<script>
$('input[type=radio][name=sell_type]').change(function() {
    if (this.value == 'Sell') {
        $('#availableRooms').hide();
        $('#floor_no').hide();

    } else if (this.value == 'Rent') {
        $('#availableRooms').show();
        $('#floor_no').show();
    }
});
</script>
<script>
$('input[type=radio][name=is_main_road_facing]').change(function() {
    alert(this.value);

    if (this.value == 1) {
        alert("yes");
        $('#roadWidth').show();
        $('#roadToland').hide();
    } else if (this.value == 0) {
        alert("no");

        $('#roadWidth').hide();
        $('#roadToland').show();
    }
});
</script>

@endpush