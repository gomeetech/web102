@php
    $style = $options->theme->styling;
@endphp
<!DOCTYPE html> 
<html lang="vi"> 
    
    <head> 
        @include($_lib.'head')
    
    </head>     
    
    <body> 
        {!! $html->top->embeds !!}
        @if ($style->show_pageloader)
            
        <div id="pageloader"> 
            <div class="loader-item"> 
                <img src="{{theme_asset('img/load.gif')}}" alt='loader' /> 
            </div>             
        </div>
        @endif
        <!--========== BEGIN #WRAPPER ==========-->         
        <div id="wrapper" data-color="{{$style->color('red')}}"> 
            <!--========== BEGIN #HEADER ==========-->             

            @include($_template.'header')   
            <!--========== END #HEADER ==========-->             
            <!--========== BEGIN #MAIN-SECTION ==========-->             
            <section id="main-section">
                @include($_template.'breakcrumb') 
                <!--========== BEGIN .MODULE ==========-->
                <section class="module {{($mc = $__env->yieldContent('module_class')) ? $mc : ''}}">

                    <div class="container">
                        @if ($__env->yieldContent('show_breaking_news'))
                            @include($_template.'breaking-news') 
                        @endif
                        
                        <div class="row no-gutter">
                            <!--========== BEGIN .COL-MD-8 ==========-->
                            <div class="col-md-8">
                                @yield('content')
                            </div>
                            <!--========== END .COL-MD-8 ==========-->
                            <!--========== BEGIN .COL-MD-4 ==========-->
                            <div class="col-md-4">
                                @include($_template.'sidebar')
                            </div>
                            <!--========== END .COL-MD-4 ==========-->
                        </div>
                    </div>
                </section>
                <!--========== END .MODULE ==========-->
            </section>             
            <!--========== END #MAIN-SECTION ==========-->             
            
            @include($_template.'footer')        
        </div>         
        <!--========== END #WRAPPER ==========-->         
        
        @include($_template.'js')
        {!! $html->bottom->embeds !!}
    </body>     

</html>