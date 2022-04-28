@php
    $url = null;
    $sidebar_url = null;
    $args = [
        '@limit' => $data->post_number?$data->post_number:3,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $sidebar_args = [
        '@limit' => $data->sidebar_post_number?$data->sidebar_post_number:10,
        '@sort' => $data->sidebar_sorttype?$data->sidebar_sorttype:1,
        '@with' => ['category']
    ];
    $title = null;
    $sub_title = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $sidebar_args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
        $url = $dynamic->getViewUrl();
    }

    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        $url = $category->getViewUrl();
        if($category->hasChild() && $data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
        if(!$title) $title = $category->name;
        else $sub_title = $category->name;
    }elseif($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
    
    $sidebar_title = null;

    if($data->sidebar_dynamic_id && $sidebar_dynamic = $helper->getDynamic(['id' => $data->sidebar_dynamic_id])){
        $sidebar_args['dynamic_id'] = $data->sidebar_dynamic_id;
        $sidebar_title = $sidebar_dynamic->name;
        $sidebar_url = $sidebar_dynamic->getViewUrl();
    }
    if($data->sidebar_category_id && $sidebar_category = $helper->getPostCategory(['id' => $data->category_id])){
        $sidebar_args['@category'] = $data->sidebar_category_id;
        $sidebar_url = $sidebar_category->getViewUrl();
        
        if(!$sidebar_title) $sidebar_title = $category->name;
    }
    
    if($data->sidebar_title) $sidebar_title = $data->sidebar_title;
    
@endphp
@if (count($posts = $helper->getPosts($args)))
    
                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module highlight"> 
                    <!--========== BEGIN .CONTAINER ==========-->                     
                    <div class="container"> 
                        <!--========== BEGIN .ROW ==========-->                         
                        <div class="row no-gutter"> 
                            <!--==========BEGIN .COL-MD-8 ==========-->                             
                            <div class="col-md-8"> 
                                <!--========== BEGIN .NEWS ==========-->                                 
                                <div class="news"> 
                                    <div class="module-title"> 
                                        <h3 class="title"><span class="bg-{{$data->bg_style}}">{{$title}}</span></h3> 
                                        <h3 class="subtitle">{{$sub_title}}</h3> 
                                    </div>
                                    @foreach ($posts as $post)
                                        
                                    <!-- Begin .item -->                                     
                                    <div class="item"> 
                                        <div class="item-image-3">
                                            <a class="img-link" href="{{$u = $post->getViewUrl()}}">
                                                <img class="img-responsive img-full" src="{{$post->getImage('social')}}" alt="{{$post->title}}">
                                            </a>
                                        </div>                                         
                                        <div class="item-content"> 
                                            <div class="title-left title-style04 underline04"> 
                                                <h3 lang="vi"><a href="{{$u}}"><strong>{{$post->title}}</strong></a></h3> 
                                            </div>                                             
                                            <p lang="vi"><a href="{{$u}}"> <i class="fa fa-clock-o"></i> <span class="day"><strong> {{$post->timeAgo()}}</strong></span></a></p> 
                                            <p lang="vi"><a href="{{$u}}">{{$post->getShortDesc(60)}}</a></p> 
                                            <div> 
                                                <a href="{{$u}}"><span lang="vi" class="read-more">Đọc tiếp</span></a> 
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End .item -->                                     
                                    
                                    @endforeach                                 
                                </div>                                 
                                <!--========== END NEWS ==========-->                                 
                            </div>                             
                            <!--========== END COL-MD-9 ==========-->                             
                            <!--========== BEGIN COL-MD-4 ==========-->                             
                            <div class="col-md-4"> 
                                @if (count($list = $helper->getPosts($sidebar_args)))
                                    
                                <!--========== BEGIN .TV SCHEDULE ==========-->                                 
                                <div class="sidebar-schedule"> 
                                    <!-- Begin .block-title-2 -->                                     
                                    <div class="block-title-2"> 
                                        <h3><a href="{{$sidebar_url}}"><strong>{{$sidebar_title}}</strong></a></h3> 
                                    </div>
                                    <!-- End .block-title-2 -->
                                    <div id="sidebar-schedule-slider" class="owl-carousel"> 
                                        @foreach ($list as $item)
                                        <!-- Begin .schedule-slide -->
                                        <div class="sidebar-schedule-slide"> 
                                            <div class="sidebar-schedule-slider-layer full"> 
                                                <a href="{{$item->getViewUrl()}}"> 
                                                    <div class="content"> 
                                                        {{-- <h3 class="hour-tag">18:00</h3>  --}}
                                                        @if ($cate = $item->getCategory())
                                                        <h4 class="sidebar-show-title bg-1">{{$cate->name}}</h4> 
                                                        @endif
                                                        <p>{{$item->title}}</p> 
                                                    </div>                                                     
                                                    <img src="{{$item->getThumbnail()}}" alt="{{$item->title}}">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- End .schedule-slide -->
                                        
                                        @endforeach
                                    </div>
                                </div>
                                <!--========== END .TV SCHEDULE ==========-->                                 
                                
                                @endif
                                @if ($data->show_news_video)
                                    @php
                                        $params = [
                                            'content_type' => ['video', 'video_embed'],
                                            '@sort' => 'rand()'
                                        ];
                                    @endphp
                                    @if (($pvideo = $helper->getPost($params)) && $video = $pvideo->getVideo())
                                            
                                    <!--========== BEGIN SIDEBAR-VIDEO ==========-->                                 
                                    <!-- Begin .title-style01 -->                                 
                                    <div class="title-style01"> 
                                        <h3><strong>Video</strong></h3> 
                                    </div>                                 
                                    <!-- End .title-style01 -->                                 
                                    <!-- Begin .sidebar-block -->                                 
                                    <div class="sidebar-block"> 
                                        <div class="video-container"> 
                                            <iframe src="{{$video->embed_url}}" class="video" title="Advertisement"></iframe>
                                        </div>                                     
                                        <div class="sidebar-content"> 
                                            <p>{{$post->description}} </p> 
                                        </div>                                     
                                    </div>                                 
                                    <!-- End  .sidebar-block -->                                 
                                    <!--========== END SIDEBAR-VIDEO ==========-->
                                    
                                    @endif
                                @endif
                            </div>                             
                            <!--========== END COL-MD-4 ==========-->                             
                        </div>                         
                    </div>
                </section>
                <!--========== END .MODULE ==========-->
@endif