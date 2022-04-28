
    <div class="container"> 
        <!-- Begin .breadcrumb-line -->
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                @if ($breakcrumbs = $helper->getBreakcrumbs())
                    @foreach ($breakcrumbs as $item)
                        <li @if ($loop->last) class="active"@endif>
                            @if ($loop->last)
                            {{$item->text}}
                            @elseif($loop->first)
                            <h5><a href="{{$item->url}}">{{$item->text}}</a></h5>
                            @else
                            <a href="{{$item->url}}"><strong>{{$item->text}}</strong></a>
                            @endif
                        </li>
                    @endforeach
                @endif
            </ul>
        </div>
        <!-- End .breadcrumb-line --> 
    </div>