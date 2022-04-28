@extends($_layout.'sidebar')
@section('title', 'Kết quả tìm kiếm cho ['.$keywords.']')
@section('show_breaking_news', 'show')
@section('module_class', 'module-top')

@section('meta.robots', 'noindex')

@section('content')


    {{-- <div class="module-title">
        <h3 class="title"><span class="bg-default">Tìm kiếm</span></h3>
        
    </div> --}}
    <div class="search-block">
        <form action="{{route('client.search')}}">
            <div class="input-group content-group">
                <input type="search" name="s" class="form-control" placeholder="Tìm kiếm" title="Tìm kiếm" value="{{$keywords}}" />
                <div class="input-group-btn">
                    <button type="submit" class="btn bg-default btn-icon"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="search-nav">
            @if (count($refs = $helper->getSearchRefOptions($r = strtolower($request->ref))))
                                
                <ul class="nav navbar-nav">
                    @foreach ($refs as $ref => $text)
                    <li class="{{$ref == $r ? 'active': ''}}"><a href="{{route('client.search', ['ref' => $ref, 's' => $keywords])}}">{{$text}}</a></li>
                    @endforeach
                    
                </ul>
            
            @endif
        </div>
    </div>
    
    <!--========== BEGIN .ARTICLE ==========-->
    @if (count($results))
        @foreach ($results as $item)
            @if ($loop->index % 3 == 0)
                <div class="article">
            @endif
            <div class="entry-block-small">
                <div class="entry-image">
                    <a class="img-link" href="{{$u = $item->getViewUrl()}}">
                        <img class="img-responsive img-full" src="{{$item->getImage('social')}}" alt="{{$item->title}}">
                    </a>
                    @php
                        $cate = null;
                        $cateUrl = null;
                        if($item->category_id && $item->category){
                            $cate = $item->category->name;
                            $cateUrl = $item->category->getViewUrl();
                        }elseif($item->type == 'page'){
                            $cate = 'Trang';
                            $cateUrl = '#';
                        }elseif($item->dynamic_id && $item->dynamic){
                            $cate = $item->dynamic->name;
                            $cateUrl = $item->dynamic->getViewUrl();
                        }
                    @endphp
                    @if ($cate)
                        
                    <span>
                        <a class="label-5" href="{{$cateUrl}}">{{$cate}}</a>
                    </span>

                    @endif
                    
                </div>
                <div class="content">
                    <h3><a href="{{$u}}">{{$item->title}}</a></h3>
                    <p><a href="{{$u}}">{{$item->getShortDesc(90)}}</a></p>
                    <div> <a href="{{$u}}"><span class="read-more">Xem thêm</span></a> </div>
                </div>
            </div>
            
            @if ($loop->index % 3 == 2 || $loop->last)
                <div class="clearfix"></div>
                </div>
            @endif
        @endforeach
        <div class="text-center">
            <!--========== BEGIN .PAGINATION ==========-->
            {{$results->links($_template.'pagination')}}
            <!--========== END .PAGINATION ==========-->
        </div>
    @else
        <div class="alert alert-warning text-center mt-4 mb-4">Không có kết quả phù hợp</div>
    @endif
    <!--========== END ARTICLE ==========-->

@endsection