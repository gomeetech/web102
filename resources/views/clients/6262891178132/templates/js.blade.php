
<!-- External JavaScripts -->         
<script src="{{theme_asset('js/jquery-3.1.1.min.js')}}"></script>         
<script src="{{theme_asset('js/bootstrap.min.js')}}"></script>         
<script src="{{theme_asset('js/jquery-ui.min.js')}}"></script>         
<script src="{{theme_asset('js/plugins.js')}}"></script>         


@yield('jsinit')


@include($_lib.'js')
<!-- JavaScripts -->         
<script src="{{theme_asset('js/functions.js')}}"></script>         

<!-- js tại view -->
@yield('js')
