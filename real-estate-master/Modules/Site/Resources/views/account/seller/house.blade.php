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
];
@endphp

<div class="form-group">
    <label>Total No of Rooms.</label>
    {!! Form::select('total_no_of_rooms', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group" style="display:none" id="availableRooms">
    <label>Available Rooms.</label>
    {!! Form::select('no_of_rooms_available', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label>No of Bedrooms.</label>
    {!! Form::select('bedrooms_no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label>No of Bathrooms.</label>
    {!! Form::select('bathrooms_no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label>Meeting Rooms</label>
    <label class="control control--radio">
        {!! Form::radio('meeting_rooms', 1, true); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('meeting_rooms', 0); !!}
        No
        <div class="control__indicator"></div>
    </label>
</div>

<div class="form-group">
    <label>Kitchen</label>
    <label class="control control--radio">
        {!! Form::radio('kitchen', 1, true); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('kitchen', 0); !!}
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

<div class="form-group" id="floor_no" style="display:none">
    <label>Floor No.</label>
    {!! Form::select('floor-no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label>Colony Name.</label>
    {!! Form::text('colony_name', $value = null, ['placeholder'=>'Colony Name','class'=>'form-control']) !!}
    <span class="text-danger">{{ $errors->first('colony_name') }}</span>
</div>

<div class="form-group">
    <label>Colonies No.</label>
    {!! Form::select('colonies_no', $number, null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    <label for="address2">Is in Fence</label>
    <label class="control control--radio">
        {!! Form::radio('is_in_fence', 1, true); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('is_in_fence', 0); !!}
        No
        <div class="control__indicator"></div>
    </label>
</div>

<div class="form-group">
    <label for="address2">Is Parking</label>
    <label class="control control--radio">
        {!! Form::radio('is_parking', 1, true); !!}
        Yes
        <div class="control__indicator"></div>
    </label>
    <label class="control control--radio">
        {!! Form::radio('is_parking', 0); !!}
        No
        <div class="control__indicator"></div>
    </label>
</div>
<script>
$('input[type=radio][name=is_parking]').change(function() {
    if (this.value == 1) {
        $('#parkingArea').show();
    } else if (this.value == 0) {
        $('#parkingArea').hide();
    }
});
</script>

<div class="form-group" id="parkingArea">
    <label>Parking Area.</label>
    {!! Form::text('parking_area', $value = null, ['placeholder'=>'Parking Area','class'=>'form-control',"style"=>"width:50% ! important;"]) !!}
    {!! Form::select('parking_area_measure', $areaMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
    <span class="text-danger">{{ $errors->first('parking_area') }}</span>
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
        $('#roadWidth').show();
        $('#houseroadToland').hide();
    }
    else if (this.value == 0) {
        $('#roadWidth').hide();
        $('#houseroadToland').show();
    }});
    
</script>
<div class="form-group" id="roadWidth">
    <label>Road Width.</label>
    {!! Form::number('road_width', $value = null, ['id'=>'houseroad_width','placeholder'=>'Road Width Area','class'=>'form-control', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('road_width_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
    <span class="text-danger">{{ $errors->first('road_width') }}</span>
</div>

<div class="form-group" id="houseroadToland" style="display:none">
    <label for="address2">Road to Land Distance</label>
    {!! Form::number('land_to_road_distance', $value = null, ['id'=>'house_road_to_land','placeholder'=>'Road to Land Distance','class'=>'form-control', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('land_to_road_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
</div>

<div class="form-group">
    <label for="address2">Plot Length</label>
    {!! Form::number('plot_length_length', $value = null,
    ['id'=>'house_plotlength','placeholder'=>'Length','class'=>'form-control', 'onchange'=>'calculateHomePlotArea()', "style"=>"width:25% ! important;"]) !!}
    {!! Form::number('plot_length_breath', $value = null,
    ['id'=>'house_plotbreath','placeholder'=>'Breath','class'=>'form-control', 'onchange'=>'calculateHomePlotArea()', "style"=>"width:25% ! important;"]) !!}
    {!! Form::select('plot_length_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=>
    "width:23% ! important;"]) !!}
</div>

<div class="form-group">
    <label for="address2">Plot Area</label>
    {!! Form::number('plot_area_area', $value = null, ['id'=>'house_plot_area','placeholder'=>'Plot Area','class'=>'form-control','readonly',
    "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('plot_area_measure', $areaMeasureType, null, ['class'=>'form-control property_type','readonly', "style"=>
    "width:23% ! important;"]) !!}
</div>

<script>
function calculateHomePlotArea() {
    var var1 = document.getElementById('house_plotlength').value;
    var var2 = document.getElementById('house_plotbreath').value;
    var result = document.getElementById('house_plot_area');
    var myResult = var1 * var2;
    document.getElementById('house_plot_area').value = myResult;
}

function calculatePlotAreaMeasure() {
    var measure = document.getElementById('plot_measure').value;
    document.getElementById('plot_area_measure').value = 'Sq-' + measure;
}
</script>

<div class="form-group">
    <label for="address2">Covered Area Length</label>
    {!! Form::number('covered_area_length', $value = null,
    ['id'=>'cv_len','placeholder'=>'Length','class'=>'form-control', 'onchange'=>'calculateHomeCoverArea()', "style"=>"width:25% ! important;"]) !!}
    {!! Form::number('covered_area_breath', $value = null,
    ['id'=>'cv_bre','placeholder'=>'Breath','class'=>'form-control', 'onchange'=>'calculateHomeCoverArea()', "style"=>"width:25% ! important;"]) !!}
    {!! Form::select('covered_length_measure', $lenthMeasureType, null, ['id'=>'cv_measure','class'=>'form-control property_type',
        'onchange'=>'calculateCoverAreaMeasure()',
    "style"=> "width:23% ! important;"]) !!}
</div>

<div class="form-group">
    <label for="address2">Covered Area</label>
    {!! Form::number('covered_area_area', $value = null, ['id'=>'cv_area','placeholder'=>'Cover
    Area','class'=>'form-control','readonly', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('covered_area_measure', $areaMeasureType, null, ['id'=>'cv_area_measure','class'=>'form-control property_type','readonly', "style"=>
    "width:23% ! important;"]) !!}
</div>

<script>
function calculateHomeCoverArea() {
    var var1 = document.getElementById('cv_len').value;
    var var2 = document.getElementById('cv_bre').value;
    var result = document.getElementById('cv_area');
    var myResult = var1 * var2;
    document.getElementById('cv_area').value = myResult;
}

function calculateCoverAreaMeasure() {
    var measure = document.getElementById('cv_measure').value;
    document.getElementById('cv_area_measure').value = 'Sq-' + measure;
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
        {!! Form::radio('property_status', 'Resale'); !!}
        Resale
        <div class="control__indicator"></div>
    </label>
</div>