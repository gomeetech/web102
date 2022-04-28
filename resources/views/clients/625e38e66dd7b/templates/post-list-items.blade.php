@if (isset($posts) && is_countable($posts) && count($posts))
    @php
        $imageType = isset($image_type) && in_array($image_type, [1, 2, 3, 4, 5]) ? $image_type : 2;
        $cateLabels = [];
        $getCategoryLabel = function(&$cateLbls, $id){
            if(!isset($cateLbls[$id])){
                $cateLbls[$id] = count($cateLbls) % 5 + 1;
            }
            return $cateLbls[$id];
        };
    @endphp
    @foreach ($posts as $post)
        @php
            $cate = $post->getCategory();
        @endphp
        <!-- Begin .item-->


        <div class="item"> 
            <div class="item-image-{{$imageType}}">
                <a class="img-link" href="{{$url = $post->getViewUrl()}}">
                    <img class="img-responsive img-full" src="{{$post->getImage('social')}}" alt="{{$post->title}}">
                </a>
                @if ($cate)
                    <span><a class="label-{{$getCategoryLabel($cateLabels, $post->category_id)}}" href="{{$cate->getViewUrl()}}">{{$cate->name}}</a></span>
                @endif
            </div>                                         
            <div class="item-content"> 
                <div class="title-left title-style04 underline04"> 
                    <h3><a href="{{$url}}"><strong>{{$post->title}}</strong></a></h3> 
                </div>
                @if (count($related_posts = $post->getRelated(2)))
                    @foreach ($related_posts as $p)
                        <p><a href="{{$p->getViewUrl()}}" target="_blank" class="external-link">{{$p->title}}</a></p> 
                    @endforeach
                @endif
                
                @if ($cate)
                    
                <div>
                    <a href="{{$cate->getViewUrl()}}" target="_blank"><span class="read-more">{{$cate->name}}</span></a>
                </div>
                
                @endif
            </div>                                         
        </div>                 
        <!-- End .item-->
        
    @endforeach

@endif