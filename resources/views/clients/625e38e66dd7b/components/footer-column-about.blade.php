
                    <div class="col-sm-6 col-md-3"> 
                        <h3 class="title-left title-style03 underline03">{{$data->title}}</h3> 
                        <p class="about-us">
                            {!! nl2br($data->about_content($siteinfo->description)) !!}
                        </p> 
                        @if ($data->show_logo)
                            
                        <div class="site-logo">
                            <a href="{{route('home')}}">
                                <img src="{{$siteinfo->footer_logo?$siteinfo->footer_logo:($siteinfo->logo?$siteinfo->logo:theme_asset('img/logo.png'))}}" /> 
                                {!! news_component_text_logo($data, 'h3', 'p') !!}
                                
                            </a>
                        </div>                                     
                        
                        @endif
                    </div>       