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
    
    if($data->title) $title = $data->title;
@endphp
@count($posts = $helper->getPosts($args))
                <!--========== BEGIN .MODULE  ==========-->                 
                <section class="module"> 
                    <!--========== BEGIN .CONTAINER ==========-->                     
                    <div class="container"> 
                        <!--========== BEGIN SMALL-GALLERY ==========-->                         
                        <!-- Begin .carousel-title -->                         
                        <h3 class="carousel-title">{{$title}}</h3> 
                        <!-- End .carousel-title -->                         
                        <!-- Begin .gallery-slider owl-carousel -->                         
                        <div id="small-gallery-slider" class="owl-carousel"> 
                            @foreach ($posts as $item)
                                
                            <div class="small-gallery"> 
                                <img class="img-responsive" src="{{$item->getThumbnail()}}" alt="{{$item->title}}"> 
                                <div class="post-content"> 
                                    <a href="{{$u = $item->getViewUrl()}}">{{$item->title}}</a> 
                                    <p><a href="{{$u}}">{{$item->getShortDesc(24)}}</a></p> 
                                    <i class="fa fa-clock-o"></i>
                                    <span class="day"> {{$item->dateFormat('d/m/Y')}}</span> 
                                </div>                                 
                            </div>
                            
                            @endforeach
                        </div>                         
                        <!-- End .gallery-slider owl-carousel -->                         
                        <!--========== END SMALL-GALLERY ==========-->                         
                                              
                    </div>                     
                    <!--========== END .CONTAINER ==========-->                     
                </section>                 
                <!--========== END .MODULE ==========-->
@endcount