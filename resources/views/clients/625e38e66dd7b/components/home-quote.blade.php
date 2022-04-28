@php
    $link = $data->link;
    $label = $data->label;
    $title = $data->title;
    $desc = $data->description;
    $buttonText = $data->button_text;
    $image = $data->image;

@endphp
                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module dark"> 
                    <div class="container"> 
                        <div class="show-info">
                            @if ($label)
                                
                            <h4 class="schedule-logo bg-1"><a href="{{$link}}" target="_blank">{{$label}}</a></h4>
                            @endif
                            <div class="show-title">
                                <h2>{{$title}}</h2>
                                <h3>{{$desc}}</h3>
                            </div>
                            <h4><a class="show-info-button bg-1" href="{{$link}}"> {{$buttonText}} </a></h4>
                            @if ($image)
                                
                            <div class="figure">
                                <img src="{{$image}}" alt="{{$title}}">
                            </div>
                            
                            @endif
                        </div>
                        <div class="schedule-squares">
                            <span class="square2"></span>
                            <span class="square3"></span>
                            <span class="square4"></span> 
                            <span class="square5"></span>
                            <span class="square6"></span>
                            <span class="square7"></span>
                            <span class="square8"></span>
                            <span class="square9"></span>
                            <span class="square10"></span>
                            <span class="square11"></span>
                        </div>
                    </div>
                </section>
                <!--========== END .MODULE ==========-->
                