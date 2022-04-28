@php
    $args = [
        '@limit' => $data->post_number?$data->post_number:20,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $title = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        if(!$title) $title = $category->name;
    }
    
    if($data->content_type && $data->content_type != 'all'){
        $args['content_type'] = $data->content_type;
    }
    if($data->title) $title = $data->title;
    
@endphp
                                <!-- Begin .title-style02 -->                                 
                                <div class="title-style02"> 
                                    <h3>{{$title?$title:'Mới nhất'}}</h3> 
                                </div>                                 
                                <!-- End .title-style02 -->                                 
                                <!--========== BEGIN .SIDEBAR-SCROLL ==========-->                                 
                                <div class="sidebar-scroll"> 
                                    @if (count($list = $helper->getPosts($args)))
                                        @foreach ($list as $item)
                                            
                                            <!-- End .scroll-item -->                                     
                                            <div class="scroll-item"> 
                                                <div class="item"> 
                                                    <div class="item-image">
                                                        <a class="img-link" href="{{$u = $item->getViewUrl()}}">
                                                            <img class="img-responsive img-full" src="{{$item->getImage('social')}}" alt="{{$item->title}}">
                                                        </a>
                                                    </div>                                             
                                                    <div class="item-content">
                                                        <h4><a href="{{$u}}">{{$item->title}}</a></h4>
                                                        <p><i class="fa fa-clock-o"></i>  {{$item->timeAgo()}}  </p> 
                                                    </div>                                             
                                                </div>                                         
                                            </div>
                                    
                                        @endforeach
                                    @endif


                                </div>                                 
                                <!--========== END .SIDEBAR-SCROLL ==========-->   