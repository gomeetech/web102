@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:10,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $title = null;
    $mark_title = null;
    $link = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
        $link = $dynamic->getViewUrl();
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        
        $link = $category->getViewUrl();
        if(!$title) $title = $category->name;
        else $sub_title = $category->name;
    }
    if($data->content_type && $data->content_type != 'all'){
        $args['content_type'] = $data->content_type;
    }
    
    if($data->gallery_title) $title = $data->gallery_title;
    if($data->sub_title) $sub_title = $data->sub_title;
    if($data->link) $link = $data->link;
@endphp
                <!--========== BEGIN .MODULE ==========-->
                <section class="module"> 
                    @if ($data->title || $data->link)
                    <h2 class="title-style05 style-02">
                        {{$data->title}}
                        @if ($data->link)
                            <span><a href="{{$data->link}}">{{$data->text}}</a></span>
                        @endif
                    </h2>
                    @endif

                    @if ($data->mark_title)
                    <!-- Begin .title-style05-bg -->                     
                    <div class="center-title"> 
                        <span class="title-line-left"></span> 
                        <h4 class="title-style05 style-01">{{$data->mark_title}}</h4> 
                        <span class="title-line-right"></span> 
                    </div>
                    <!-- End .title-style05-bg -->
                    @endif

                    @if (count($posts = $helper->getPosts($args)))
                        
                    <!--========== BEGIN .CONTAINER ==========-->                     
                    <div class="container"> 
                        <!--========== BEGIN BIG-GALLERY==========-->                         
                        <!-- Begin .carousel-title -->                         
                        <h3 class="carousel-title-gray">{{$title}}</h3> 
                        <!-- End .carousel-title -->                         
                        <!-- Begin .gallery-slider owl-carousel -->                         
                        <div id="big-gallery-slider-3" class="owl-carousel"> 
                            @foreach ($posts as $post)
                            <div class="big-gallery"> 
                                @if (in_array($post->content_type, ['video', 'video_embed']))
                                <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}"> 
                                <a href="{{$post->getViewUrl()}}"><span class="play-icon"></span></a> 
                                @else
                                <a href="{{$post->getViewUrl()}}">
                                    <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                                </a>
                                @endif
                            </div>
                            @endforeach
                        </div>
                        <!-- End .gallery-slider owl-carousel -->
                        <!--========== END BIG-GALLERY==========-->
                    </div>
                    <!--========== BEGIN .CONTAINER ==========-->
                    
                    @endif
                </section>
                <!--========== END .MODULE ==========-->