@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:4,
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
        if($category->hasChild() && $data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
        if(!$title) $title = $category->name;
        else $sub_title = $category->name;
    }elseif($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
    
    if($data->title) $title = $data->title;
    if($data->sub_title) $sub_title = $data->sub_title;
    
@endphp

@if (count($posts = $helper->getPosts($args)))
    
                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module highlight" wp-site-content wp-body-class wp-site-name wp-title wp-site-desc wp-header-image> 
                    <div class="container"> 
                        <div class="module-title"> 
                            <h3 class="title"><span class="bg-{{$data->bg_style(1)}}">{{$title}}</span></h3> 
                            <h3 class="subtitle">{{$sub_title}}</h3> 
                        </div>                         
                        <!--========== BEGIN .ROW ==========-->                         
                        <div class="row no-gutter"> 
                            @foreach ($posts as $post)
                                @php
                                    $cate = $post->getCategory();
                                @endphp
                                @if ($loop->index % 2 == 0)
                                <div class="col-sm-6 col-md-6"> 
                                    <!--========== BEGIN .NEWS ==========-->                                 
                                    <div class="news"> 
                                @endif
                                        <!-- Begin .item -->                                     
                                        <div class="item"> 
                                            <div class="item-image-1">
                                                <a class="img-link" href="{{$url = $post->getViewUrl()}}">
                                                    <img class="img-responsive img-full" src="{{$post->getImage('social')}}" alt="{{$post->title}}">
                                                </a>
                                                @if ($cate)
                                                    
                                                <span><a class="label-{{$loop->index % 5 + 1}}" href="{{$cate->getViewUrl()}}">{{$cate->name}}</a></span>
                                                
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
                                        <!-- End .item -->       
                                @if ($loop->index % 2 == 1 || $loop->last)
                                    </div>
                                    <!--========== END .NEWS ==========-->
                                </div>
                                <!--========== END .COL-MD-6 ==========-->
                                @endif
                            @endforeach
                                                         
                        </div>                         
                    </div>                     
                </section>                 
                <!--========== END .MODULE ==========-->  


@endif