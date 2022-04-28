@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:5,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $title = null;
    $sub_title = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        if(!$title) $title = $category->name;
        else $sub_title = $category->name;
    }
    if($data->content_type && $data->content_type != 'all'){
        $args['content_type'] = $data->content_type;
    }
    if($data->title) $title = $data->title;
    if($data->sub_title) $sub_title = $data->sub_title;
    
@endphp

@if ($t = count($posts = $helper->getPosts($args)))
@php
    $first = $posts[0];
@endphp
<div class="module-title"> 
    <h3 class="title"><span class="bg-{{$data->bg_style(1)}}">{{$title}}</span></h3> 
    <h3 class="subtitle">{{$sub_title}}</h3> 
</div>                                     
<!-- Begin .item -->
<div class="item"> 
    <div class="item-image-1">
        <a class="img-link" href="{{$u = $first->getViewUrl()}}">
            <img class="img-responsive img-full" src="{{$first->getThumbnail()}}" alt="{{$first->title}}">
        </a>
    </div>                                         
    <div class="item-content"> 
        <div class="title-left title-style04 underline04"> 
            <h3><a href="{{$u}}"><strong>{{$first->title}}</strong></a></h3> 
        </div>                                             
        <br> 
        <div class="post-meta-elements"> 
            <div class="post-meta-author"> 
                <i class="fa fa-user"></i>
                <a href="#">{{$first->getAuthor()->name}}</a> 
            </div>                                                 
            <div class="post-meta-date"> 
                <i class="fa fa-calendar"></i>{{$first->dateFormat('d-m-Y')}}
            </div>                                                 
        </div>                                             
        <p><a href="{{$u}}" target="_blank" class="external-link">{{$first->getShortDesc(80)}}</a></p>
        <div> 
            <a href="{{$u}}"><span class="read-more">Đọc tiếp</span></a> 
        </div>                                             
    </div>                                         
</div>                                     
<!-- End .item -->                                     
<!-- Begin .news-block" -->                                     
<div class="news-block"> 
    @for ($i = 1; $i < $t; $i++)
        @php
            $post = $posts[$i];
        @endphp
    <div class="item-block"> 
        <div class="item-image">
            <a class="img-link" href="{{$u = $post->getViewUrl()}}">
                <img class="img-responsive img-full" src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
            </a>
        </div>                                             
        <div class="item-content">
            <span class="day">{{$post->dateFormat('d/m/Y')}}</span> 
            <p><a href="{{$u}}" target="_blank" class="external-link">{{$post->title}}</a></p> 
        </div>
    </div>
    @endfor
    
</div>                                     
<!-- End .news-block" -->
@endif