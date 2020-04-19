@php
    $number = [
        '1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', '6'=>'6', '7'=>'7', '8'=>'8', '9'=>'9', '10'=>'10',
        '11'=>'11', '12'=>'12', '13'=>'13', '14'=>'14', '15'=>'15', '16'=>'16', '17'=>'17', '18'=>'18', '19'=>'19', '20'=>'20',
        '21'=>'21', '22'=>'22', '23'=>'23', '24'=>'24', '25'=>'25', '26'=>'26', '27'=>'27', '28'=>'28', '29'=>'29', '30'=>'30',
    ];
@endphp

@php
    $lenthMeasureType = [
        'ft'=>'ft',
        'yrd'=>'yrd',
        'meter'=>'meter',
    ];

    $areaMeasureType = [
        'Sq-ft'=>'Sq-ft',
        'Sq-yrd'=>'Sq-yrd',
        'Sq-meter'=>'Sq-meter',
        'Acre'=>'Acre',
        'Bigha'=>'Bigha',
        'Hectare'=>'Hectare',
    ];
@endphp
<div class="form-group">
    <label>No of Rooms.</label>
    {!! Form::select('no_of_rooms_available', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label>Meeting Rooms</label>
    <label class="control control--radio">
        {!! Form::radio('meeting_rooms', 1); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('meeting_rooms', 0, true); !!}
        No
        <div class="control__indicator"></div>
    </label>
</div>

<div class="form-group">
    <label>Furnished Status</label>
    <label class="control control--radio">
        {!! Form::radio('furnished_status', 1, true); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('furnished_status', 0); !!}
        No
        <div class="control__indicator"></div>
    </label>
</div>


<div class="form-group">
    <label>Total No of Floor.</label>
    {!! Form::select('total_floor_no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label> Floor No.</label>
    {!! Form::select('floor_no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label>Colony Name.</label>
    {!! Form::text('colony_name', $value = null, ['id'=>'title','placeholder'=>'Colony Name','class'=>'form-control']);!!}
</div>

<div class="form-group">
    <label>Colonies No.</label>
    {!! Form::select('colonies_no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label for="address2">Is Main Road Facing</label>
    <label class="control control--radio">
        {!! Form::radio('is_main_road_facing', 1, true); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('is_main_road_facing', 0); !!}
        No
        <div class="control__indicator"></div>
    </label>
</div>

<script>
    $('input[type=radio][name=is_main_road_facing]').change(function() {
    if (this.value == 1) {
        $('#officeroadWidth').show();
        $('#officeroadToland').hide();
    }
    else if (this.value == 0) {
        $('#officeroadWidth').hide();
        $('#officeroadToland').show();
    }});
    
</script>
<div class="form-group" id="officeroadWidth">
    <label>Road Width.</label>
    {!! Form::number('road_width', $value = null, ['id'=>'officeroad_width','placeholder'=>'Road Width Area','class'=>'form-control', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('road_width_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
    <span class="text-danger">{{ $errors->first('road_width') }}</span>
</div>

<div class="form-group" id="officeroadToland" style="display:none">
    <label for="address2">Road to Land Distance</label>
    {!! Form::number('land_to_road_distance', $value = null, ['id'=>'office_road_to_land','placeholder'=>'Road to Land Distance','class'=>'form-control', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('land_to_road_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
</div>

<div class="form-group">
    <label for="address2">Covered Area Length</label>
    {!! Form::text('covered_area_length', $value = null, ['id'=>'off_cv_len','placeholder'=>'Length','class'=>'form-control', 'onchange'=>'calculateApCoverArea()' ,"style"=>"width:25% ! important;"]) !!}
    {!! Form::text('covered_area_breath', $value = null, ['id'=>'off_cv_bre','placeholder'=>'Breath','class'=>'form-control', 'onchange'=>'calculateApCoverArea()' ,"style"=>"width:25% ! important;"]) !!}
    {!! Form::select('covered_area_measure', $lenthMeasureType, null, ['id'=>'off_cv_meas','class'=>'form-control property_type', 'onchange'=>'calculateApCoverAreaMeasure()',"style"=> "width:23% ! important;"]) !!}
</div>

<div class="form-group">
    <label for="address2">Covered Area</label>
    {!! Form::text('covered_area_area', $value = null, ['id'=>'off_cv_area','placeholder'=>'Cover Area','class'=>'form-control','readonly', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('covered_area_measure', $areaMeasureType, null, ['id'=>'off_cv_area_meas','class'=>'form-control property_type', 'readonly',"style"=> "width:23% ! important;"]) !!}
</div>

<script>
function calculateApCoverArea() {
    var var1 = document.getElementById('off_cv_len').value;
    var var2 = document.getElementById('off_cv_bre').value;
    var result = document.getElementById('off_cv_area');
    var myResult = var1 * var2;
    document.getElementById('off_cv_area').value = myResult;
}

function calculateApCoverAreaMeasure() {
    var measure = document.getElementById('off_cv_meas').value;
    document.getElementById('off_cv_area_meas').value = 'Sq-' + measure;
}
</script>

<div class="form-group">
    <label for="address2">Property Type</label>
    <label class="control control--radio">
        {!! Form::radio('property_status', 'New Property', true); !!}
        New Property
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('property_status', 'Old Property'); !!}
        Old Property
        <div class="control__indicator"></div>
    </label>
</div>
