@php
    $header = $options->theme->header;
@endphp
            <header id="header"> 
                <!-- Begin .top-menu -->                 
                <div class="top-menu" > 
                    <!-- Begin .container -->                     
                    <div class="container"> 
                        <!-- Begin .left-top-menu --> 
                        {!! $helper->getCustomMenu('topleft', 1, ['class' => 'left-top-menu']) !!}
                        <!-- End .left-top-menu -->                         
                        <!-- Begin .right-top-menu -->
                        {!! 
                            $helper->getCustomMenu('topright', 1, [
                                'class' => 'right-top-menu pull-right'
                            ])->append('
                            <li>
                                <form action="'.route('client.search').'" method="get">
                                    <div class="search-container"> 
                                        <div class="search-icon-btn"> 
                                            <span style="cursor:pointer"><i class="fa fa-search"></i></span> 
                                        </div>                                     
                                        <div class="search-input"> 
                                            <input type="search" class="search-bar" name="s" placeholder="tìm kiếm..." title="Search" /> 
                                        </div>                                     
                                    </div>
                                </form> 
                            </li>
                            ')
                        !!}
                        <!-- End .right-top-menu -->                         
                    </div>                     
                    <!-- End .container -->                     
                </div>                 
                <!-- End .top-menu -->                 
                <!-- Begin .container -->                 
                <div class="container"> 
                    <!-- Begin .header-logo -->                     
                    <div class="header-logo">
                        <a href="{{route('home')}}">
                            <img src="{{$siteinfo->logo?$siteinfo->logo:theme_asset('img/logo.png')}}" alt="{{$siteinfo->site_name}}" /> 
                            {!! news_text_logo('h1', 'h4') !!}
                        </a>
                    </div>                     
                    <!-- End .header-logo -->                     
                    <!-- Begin .header-add-place -->                     
                    @if ($header->show_banner)
                        
                    <div class="header-add-place"> 
                        <div class="desktop-add">
                            @if ($header->ads_type == "code")
                                {!! $header->ads_code !!}
                            @else
                                <a href="{{$header->banner_link('#')}}" target="_blank">
                                    <img src="{{$header->banner_image(theme_asset('img/banner_728x90.jpg'))}}" alt="{{$header->banner_alt}}">
                                </a>
                            @endif
                                
                        </div>                         
                    </div>

                    @endif
                    <!-- End .header-add-place -->                     
                    <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->                     
                    <nav class="navbar navbar-default" id="mobile-nav"> 
                        <div class="navbar-header"> 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" id="sidenav-toggle"> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                             
                            <div class="sidenav-header-logo">
                                <a href="{{route('home')}}">
                                    <img src="{{$siteinfo->mobile_logo?$siteinfo->mobile_logo:($siteinfo->logo?$siteinfo->logo:theme_asset('img/logo.png'))}}" alt="{{$siteinfo->site_name}}" /> 
                                    {!! news_text_logo('h2', 'h5') !!}
                                </a>
                            </div>                             
                        </div>                         
                        <div class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle"> 
                            <button type="button" class="navbar-toggle active" data-toggle="collapse"> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                             
                            <div class="sidenav-brand"> 
                                <div class="sidenav-header-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{$siteinfo->mobile_logo?$siteinfo->mobile_logo:($siteinfo->logo?$siteinfo->logo:theme_asset('img/logo.png'))}}" /> 
                                        {{-- <h1>24h <span>News</span></h1>  --}}
                                        {!! news_text_logo('h2', 'h5') !!}
                                        
                                    </a>
                                </div>
                            </div> 
                            {!! news_menu_sidebar_style('primary', ['class' => 'sidenav-menu']) !!}
                        </div>                         
                    </nav>                     
                    <!--========== END .NAVBAR #MOBILE-NAV ==========-->                     
                </div>                 
                <!-- End .container -->                 
                <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->                 
                <div class="navbar" id="fixed-navbar"> 
                    <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->                     
                    <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle"> 
                        <!--========== BEGIN .CONTAINER ==========-->                         
                        <div class="container"> 
                            <!-- Begin .nav navbar-nav -->
                            @php
                                $menu = news_menu_primary_style('primary', ['class' => 'nav navbar-nav']);
                            @endphp
                            {!! $menu !!}
                            
                            <!--========== END .NAV NAVBAR-NAV ==========-->                             
                        </div>                         
                        <!--========== END .CONTAINER ==========-->                         
                    </div>                     
                    <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->                     
                    <!--========== BEGIN .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->                     
                    <div class="second-menu navbar" id="nav-below-main"> 
                        <!-- Begin .container -->                         
                        <div class="container"> 
                            <!-- Begin .collapse navbar-collapse -->                             
                            <div class="collapse navbar-collapse nav-below-main"> 
                                <!-- Begin .nav navbar-nav -->
                                @if ($activeItem = $menu->getActiveItem())
                                    @if ($activeItem->hasHiddenSubMenu())
                                        {!! $activeItem->sub->removeClass()->addClass('nav navbar-nav') !!}
                                    @endif
                                @endif
                                <!-- End .nav navbar-nav -->                                 
                            </div>                             
                            <!-- End .collapse navbar-collapse -->                             
                            <!-- Begin .clock --> 
                            @if ($header->show_datetime)
                                       
                            <div class="clock datetime-now" data-lang="{{$header->datetime_lang}}" data-format="{{$header->date_format}}"> 
                                <div id="time"></div>                                 
                                <div id="date"></div>                                 
                            </div>                             
                            
                            @endif
                            <!-- End .clock -->                             
                        </div>                         
                        <!-- End .container -->                         
                    </div>                     
                    <!--========== END .SECOND-MENU NAVBAR #NAV-BELOW-MAIN ==========-->                     
                </div>                 
            </header>          