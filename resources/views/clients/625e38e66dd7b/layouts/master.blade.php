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
                @yield('content')
            </section>             
            <!--========== END #MAIN-SECTION ==========-->             
            
            @include($_template.'footer')        
        </div>         
        <!--========== END #WRAPPER ==========-->         
        
        @include($_template.'js')
        {!! $html->bottom->embeds !!}
    </body>     

</html>