                <!--========== BEGIN .MODULE  ==========-->                 
                <section class="module"> 
                    <!--========== BEGIN .CONTAINER ==========-->                     
                    <div class="container"> 
                        <!-- Begin .bottom-add-place-->                         
                        <div class="bottom-add-place"> 
                            @if ($data->type == "code")
                                {!! $data->code !!}
                            @elseif($data->banner)
                                
                            <a href="{{$data->link}}" target="_blank">
                                <img src="{{$data->banner}}" alt="{{$data->text('Quảng cáo')}}">
                            </a>
                            
                            @endif
                        </div>                         
                        <!-- End .bottom-add-place -->   
                                         
                    </div>                     
                    <!--========== END .CONTAINER ==========-->                     
                </section>                 
                <!--========== END .MODULE ==========-->
