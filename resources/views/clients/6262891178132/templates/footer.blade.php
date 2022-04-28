@php
    $footer = $options->theme->footer;
@endphp

<!--========== BEGIN #FOOTER==========-->             
<footer id="footer"> 
    <!-- Begin .parallax -->                 
    <div id="parallax-section2"> 
        <div class="bg parallax2 overlay img-overlay2"> 
            <div class="container"> 
                <div class="row no-gutter"> 
                    {!! $html->news_footer->components !!}
                            
                </div>                             
            </div>                         
        </div>                     
    </div>                 
    <!-- End .parallax -->                 
</footer>             
<!--========== END #FOOTER==========-->             
<!--========== BEGIN #COPYRIGHTS==========-->             
<div id="copyrights"> 
    <!-- Begin .container -->                 
    <div class="container"> 
        <!-- Begin .copyright -->                     
        
        @if ($footer->copyright)
            {!! $footer->copyright !!}
        @else
            <div class="copyright"> &copy; {{date('Y')}}, Bản quyền thuộc <a href="/">{{$siteinfo->site_name}}</a>. Giữ toàn quyển </div>                     
        @endif
        <!-- End .copyright -->                     
        <!--  Begin .footer-social-icons -->                     
        <div class="footer-social-icons"> 
            
            <ul> 
                @foreach (['facebook', 'twitter', 'linkedin', 'youtube'] as $item)
                    @if ($social = $footer->get($item))
                        <li><a href="{{$social}}" class="{{$item}}"><i class="fa fa-{{$item}} {{$item}}"></i></a></li>
                    @endif
                @endforeach
            </ul>                         
        </div>                     
        <!--  End .footer-social-icons -->                     
    </div>                 
    <!-- End .container -->                 
</div>             
<!--========== END #COPYRIGHTS==========-->     