
@php
    $lenthMeasureType = [
        'ft'=>'ft',
        'yrd'=>'yrd',
        'meter'=>'meter',
    ];
@endphp
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
        $('#roadToland').hide();
    }
    else if (this.value == 0) {
        $('#roadWidth').hide();
        $('#roadToland').show();
    }});
    
</script>
<div class="form-group" id="roadWidth">
    <label for="address2">Road Width</label>
    {!! Form::number('road_width', $value = null, ['id'=>'road_width','placeholder'=>'Road Width Area','class'=>'form-control', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('road_width_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
</div>

<div class="form-group" id="roadToland" style="display:none">
    <label for="address2">Road to Land Distance</label>
    {!! Form::number('land_to_road_distance', $value = null, ['id'=>'road_to_land','placeholder'=>'Road to Land Distance','class'=>'form-control', "style"=>"width:50% ! important;"]) !!}
    {!! Form::select('land_to_road_measure', $lenthMeasureType, null, ['class'=>'form-control property_type', "style"=> "width:23% ! important;"]) !!}
</div>

<div class="form-group">
    <label for="address2">Plot Length</label>
    {!! Form::text('plot_length_length', $value = null, ['id'=>'plotlength','placeholder'=>'Length','class'=>'form-control', 'onchange'=>'calculatePlotArea()', "style"=>"width:25% ! important;"]) !!}
    {!! Form::text('plot_length_breath', $value = null, ['id'=>'plotbreath','placeholder'=>'Breath','class'=>'form-control', 'onchange'=>'calculatePlotArea()', "style"=>"width:25% ! important;"]) !!}
    {!! Form::select('plot_length_measure', $lenthMeasureType, null, ['id'=>'plot_measure','class'=>'form-control property_type','onchange'=>'calculatePlotAreaMeasure()', "style"=> "width:23% ! important;"]) !!}
</div>


<div class="form-group">
    <label for="address2">Plot Area</label>
    {!! Form::text('plot_area_area', $value = null, ['id'=>'plot_area','placeholder'=>'Plot Area','class'=>'form-control','readonly', "style"=>"width:50% ! important;"]) !!}
    {!! Form::text('plot_area_measure', $value = null, ['id'=>'plot_area_measure','class'=>'form-control property_type', 'readonly',"style"=> "width:23% ! important;"]) !!}
</div>

<script>
    function calculatePlotArea() {
        var var1 = document.getElementById('plotlength').value; 
        var var2 = document.getElementById('plotbreath').value;
        var result = document.getElementById('plot_area'); 
        var myResult = var1 * var2;
        document.getElementById('plot_area').value = myResult;
    }
    function calculatePlotAreaMeasure(){
        var measure = document.getElementById('plot_measure').value; 
        document.getElementById('plot_area_measure').value = 'Sq-' + measure;
    }
</script>