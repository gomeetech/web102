<!--========== BEGIN .WEATHER ==========-->
<div id='weather' class='sidebar-weather'>
    <div id='weather-title' class='weather-city'>
        <div class='weather-city-text'></div>
    </div>
    <div class='weather-card'>
        <div class="temp"> <i class="weather-icon wi"></i>
            <div class='temperature'></div>
            <button class='btn btn-primary btn-switch-scale' data-scale="{{$data->scale('C')}}"> <span class="switch">{{$data->scale('C')}}</span> </button>
        </div>
        <div id='description'>
            <div id='type' class='desc-text desc-type'> </div>
            <i class="wi wi-humidity"></i>
            <div id='humidity' class='desc-text desc-humidity'> </div>
            <i class="wi wi-strong-wind"></i>
            <div id='wind' class='desc-text desc-wind'> </div>
        </div>
    </div>
    <div class="hidden-data" style="display:none" 
        data-scale="{{$data->scale('C')}}" 
        data-lat="{{$data->lat('21.028511')}}" 
        data-long="{{$data->long('105.804817')}}">
        Du lieu thoi tiet trong thuoc tinh html
    </div>
</div>
<!--========== END .WEATHER ==========-->