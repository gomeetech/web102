
                <!-- Begin .add-place -->                 
                <div class="add-place"> 
                    @if ($data->type == "code")
                        {!! $data->code !!}
                    @else
                        
                    <a href="{{$data->link}}" target="_blank">
                        <img src="{{$data->banner}}" alt="{{$data->text('Quảng cáo')}}">
                    </a>
                    
                    @endif                     
                </div>                 
                <!-- End .add-place -->                 