@php
    $url = null;
    $args = [
        '@limit' => $data->post_number?$data->post_number:4,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $sidebar_args = [
        '@limit' => $data->sidebar_post_number?$data->sidebar_post_number:10,
        '@sort' => 1
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
        $sidebar_args['@category'] = $data->category_id;
        $url = $category->getViewUrl();
        if($category->hasChild()){
            if($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
        }else{
            $sidebar_args['@limit'] = [$args['@limit'], $sidebar_args['@limit']];
        }
        if(!$title) $title = $category->name;
        else $sub_title = $category->name;
    }elseif($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
    
    if($data->title) $title = $data->title;
    if($data->sub_title) $sub_title = $data->sub_title;
    
@endphp

@count($posts = $helper->getPosts($args))
                <!--========== BEGIN .MODULE ==========-->
                <section class="module"> 
                    <div class="container"> 
                        <div class="row no-gutter"> 
                            <!--========== BEGIN .COL-MD-8 ==========-->                             
                            <div class="col-md-8"> 
                                <!--========== BEGIN .NEWS ==========-->                                 
                                <div class="news"> 
                                    <div class="module-title"> 
                                        <h3 class="title"><span class="bg-{{$data->bg_style(11)}}">{{$title}}</span></h3> 
                                        <h3 class="subtitle">{{$sub_title}}</h3>
                                    </div>
                                    @foreach ($posts as $post)
                                    @php
                                        $cate = $post->getCategory();
                                    @endphp
                                    <!-- Begin .item-->
                                    
                                    
                                    <div class="item"> 
                                        <div class="item-image-2">
                                            <a class="img-link" href="{{$u = $post->getViewUrl()}}">
                                                <img class="img-responsive img-full" src="{{$post->getImage('social')}}" alt="{{$post->title}}">
                                            </a>
                                            @if ($cate)
                                                
                                            <span><a class="label-{{$loop->index % 5 + 1}}" href="{{$cate->getViewUrl()}}">{{$cate->name}}</a></span>
                                            
                                            @endif
                                        </div>                                         
                                        <div class="item-content"> 
                                            <div class="title-left title-style04 underline04"> 
                                                <h3><a href="{{$u}}"><strong>{{$post->title}}</strong></a></h3> 
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
                                </div>                                 
                                <!--========== End .NEWS ==========-->                                 
                            </div>                             
                            <!--========== End .COL-MD-8 ==========-->                             
                            <!--========== BEGIN .COL-MD-4 ==========-->                             
                            <div class="col-md-4">
                                @if ($data->sidebar_banner || ($data->ads_type == 'code' && $data->ads_code))
                                    
                                <!-- Begin .sidebar-add-place -->                                 
                                <div class="sidebar-add-place">
                                    @if ($data->ads_type == "code")
                                        {!! $data->ads_code !!}
                                    @else
                                        
                                    <a href="{{$data->sidebar_link}}" target="_blank">
                                        <img src="{{$data->sidebar_banner}}" alt="{{$data->text('Quảng cáo')}}">
                                    </a>                                     
                                    @endif
                                    
                                </div>                                 
                                <!-- End .sidebar-add-place -->
                                
                                @endif
                                <!-- Begin .block-title-1 -->                                 
                                <div class="block-title-1"> 
                                    <h3><a href="#"><strong>{{$data->sidebar_title}}</strong></a></h3> 
                                </div>                                 
                                <!-- End .block-title-1 -->                                 
                                <!--========== BEGIN .SIDEBAR-NEWSFEED ==========-->                                 
                                <div class="sidebar-newsfeed"> 
                                    <!-- Begin .newsfeed -->                                     
                                    <div class="newsfeed-3"> 
                                        @count($newses = $helper->getPosts($sidebar_args))
                                            
                                        <ul> 
                                            @foreach ($newses as $news)
                                                
                                            <li> 
                                                <div class="item"> 
                                                    <div class="item-image">
                                                        <a class="img-link" href="{{$u = $news->getViewUrl()}}">
                                                            <img class="img-responsive img-full" src="{{$news->getImage('social')}}" alt="{{$news->title}}">
                                                        </a>
                                                    </div>
                                                    <div class="item-content"> 
                                                        <h4 class="ellipsis"><a href="{{$u}}">{{$news->title}}</a></h4> 
                                                        <p class="ellipsis"><a href="{{$u}}">{{$news->getShortDesc(60)}}</a></p> 
                                                    </div>
                                                </div>
                                            </li>
                                        
                                            @endforeach
                                        </ul>
                                        
                                        
                                        @endcount
                                    </div>                                     
                                    <!-- End .newsfeed -->                                     
                                </div>                                 
                                <!--========== END .SIDEBAR-NEWSFEED ==========-->                                 
                            </div>                             
                            <!--========== END .COL-MD-4 ==========-->                             
                        </div>                         
                    </div>                     
                </section>
                <!--========== END .MODULE ==========-->

@endcount