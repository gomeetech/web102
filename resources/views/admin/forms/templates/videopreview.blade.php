<?php
use Gomee\Html\Input;
use Gomee\Helpers\Arr;
add_js_src('static/manager/js/input.video.js');
?>

    <div class="video-url-input" id="input-video-{{$input->{MODEL_PRIMARY_KEY} }}" data-id="{{$input->{MODEL_PRIMARY_KEY} }}">
        
        <div class="url-input">
            {!! $input !!}
        </div>
        <div class="video-preview">

        </div>

        
    </div>
    

