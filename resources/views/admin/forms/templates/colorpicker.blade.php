<?php
set_admin_template_data('modals', 'colorpicker-modal');
$input->type = 'text';
$input->addClass('color-picker form-control colorpicker');
$val = $input->val();
if($val){
    $input->style = "color: $val";
}
?>

    <div class="input-group">
    
        {!! $input !!}
        <div class="input-group-append">
            <button type="button" class="btn btn-info color-picker-btn" data-input-id="{{$input->{MODEL_PRIMARY_KEY} }}" data-change-color-selector="#{{$input->{MODEL_PRIMARY_KEY} }}" id="button-group-{{$input->{MODEL_PRIMARY_KEY} }}"><i class="fa fa-paint-brush"></i></button>
        </div>
    

    </div>