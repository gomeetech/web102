@php
    $url = null;
    $args = [
        '@limit' => $data->post_number?$data->post_number:4,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
    $children_args = [
        '@limit' => $data->children_number?$data->children_number:20
    ];
    $sidebar_args = [
        '@limit' => $data->sidebar_post_number?$data->sidebar_post_number:10,
        '@sort' => 1
    ];
    $title = null;
    $sub_title = null;
    if($data->dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->dynamic_id])){
        $args['dynamic_id'] = $data->dynamic_id;
        $children_args['dynamic_id'] = $data->dynamic_id;
        $sidebar_args['dynamic_id'] = $data->dynamic_id;
        $title = $dynamic->name;
        $url = $dynamic->getViewUrl();
    }
    if($data->category_id && $category = $helper->getPostCategory(['id' => $data->category_id])){
        $args['@category'] = $data->category_id;
        $sidebar_args['@category'] = $data->category_id;
        $children_args['parent_id'] = $data->category_id;
        $url = $category->getViewUrl();
        if($category->hasChild()){
            if($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
        }else{
            $sidebar_args['@limit'] = [$args['@limit'], $sidebar_args['@limit']];
        }
        
        if(!$title) $title = $category->name;
        else $sub_title = $category->name;
    }else{
        $children_args['parent_id'] = 0;
        if($data->group_by_category) $args['@groupBy'] = ['posts.category_id'];
    }
    
    if($data->title) $title = $data->title;
    if($data->sub_title) $sub_title = $data->sub_title;
    
@endphp
                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module highlight"> 
                    <div class="container"> 
                        <div class="row no-gutter"> 
                            <!--========== BEGIN .COL-MD-8 ==========-->                             
                            <div class="col-md-8"> 
                                <div class="module-title"> 
                                    <h3 class="title"><span class="bg-{{$data->bg_style(1)}}">{{$title}}</span></h3> 
                                    <h3 class="subtitle">{{$sub_title}}</h3> 
                                </div>                                 
                                <!--========== BEGIN .ROW ==========-->                                 
                                <div class="row no-gutter"> 
                                    <!--========== BEGIN .COL-MD-3 ==========-->                                     
                                    <div class="col-xs-12 col-sm-3 col-md-3"> 

                                        @if ($data->menu_type == 'menu' && $menu = $helper->getCustomMenu(['id' => $data->menu_id], 1, ['class' => 'list list-mark-1']))
                                            {!! $menu !!}
                                        @elseif(count($children = $helper->getPostCategories($children_args)))
                                            
                                        <!-- Begin .list list-mark-1 -->                                         
                                        <ul class="list list-mark-1">
                                             @foreach ($children as $child)
                                                 
                                            <li>
                                                <a href="{{$child->getViewUrl()}}">{{$child->name}}</a>
                                            </li>
                                            
                                            @endforeach                       
                                        </ul>                                         
                                        <!-- End .list list-mark-1 -->
                                        @endif
                                    </div>                                     
                                    <!--========== END .COL-MD-3 ==========-->                                     
                                    <!--========== BEGIN .COL-MD-9 ==========-->                                     
                                    <div class="col-xs-12 col-sm-9 col-md-9"> 
                                        <!--========== BEGIN .NEWS ==========-->                                         
                                        <div class="news"> 
                                            @include($_template.'post-list-items', [
                                                'posts' => $helper->getPosts($args),
                                                'image_type' => 3
                                            ])

                                        </div>                                         
                                        <!--========== END .NEWS ==========-->                                         
                                    </div>                                     
                                    <!--========== END .COL-MD-9 ==========-->                                     
                                </div>                                 
                                <!--========== END .ROW ==========-->                                 
                            </div>                             
                            <!--========== END .COL-MD-8 ==========-->                             
                            <!--========== BEGIN COL-MD-4 ==========-->                             
                            <div class="col-md-4"> 
                                <!-- Begin .title-style02 -->                                 
                                <div class="title-style02"> 
                                    <h3><a href="{{$url}}">{{$data->sidebar_title?$data->sidebar_title:'Mới nhất'}}</a></h3> 
                                </div>                                 
                                <!-- End .title-style02 -->                                 
                                <!--========== BEGIN .SIDEBAR-SCROLL ==========-->                                 
                                <div class="sidebar-scroll"> 
                                    @if (count($list = $helper->getPosts($sidebar_args)))
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
                            </div>                             
                            <!--========== END .COL-MD-4 ==========-->                             
                        </div>                         
                    </div>                     
                </section>                 
                <!--========== END .MODULE ==========-->    