@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:3,
        '@sort' => $data->sorttype?$data->sorttype:1,
        'content_type' => ['video', 'video_embed']
    ];
    $title = null;
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
    }
    if($data->title) $title = $data->title;
@endphp

@if ($t = count($video_posts = $helper->getPosts($args)))
    
                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module dark"> 
                    <!--========== BEGIN VIDEO ==========-->                     
                    <!-- Begin .container-->                     
                    <div class="container"> 
                        <div class="row no-gutter"> 
                            <!-- Begin .col-md-9 -->                             
                            <div class="col-sm-9 col-md-9"> 
                                <div class="video-full"> 
                                    <div class="video-container"> 
                                        <iframe src="{{$video_posts[0]->getVideo()->embed_url}}" class="video" title="Advertisement"></iframe>                                         
                                    </div>                                     
                                </div>                                 
                            </div>                             
                            <!-- End .col-md-9-->                             
                            <!-- Begin .col-md-3-->                             
                            <div class="col-xs-12 col-sm-3 col-md-3"> 
                                <div class="title-left title-style03 underline03"> 
                                    <h4>{{$title?$title:'Video liên quan'}}</h4> 
                                </div>
                                @for ($i = 1; $i < $t; $i++)
                                    @php
                                        $post = $video_posts[$i];
                                    @endphp
                                    <div class="module-media"> 
                                        <div class="image">
                                            <img class="img-responsive" src="{{$post->getThumbnail()}}" alt="">
                                        </div>                                     
                                        <a href="{{$post->getViewUrl()}}"><span class="play-icon"></span></a> 
                                    </div>
                                @endfor
                            </div>
                            <!-- End .col-md-3-->
                        </div>
                    </div>
                    <!--End .container-->
                    <!--========== END VIDEO ==========-->
                </section>
                <!--========== END .MODULE ==========-->
@endif