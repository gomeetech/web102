@php
    $args = [
        '@limit' => $data->sidebar_post_number?$data->sidebar_post_number:5,
        '@sort' => $data->sidebar_sorttype?$data->sidebar_sorttype:1
    ];
    $sidebar_title = null;
    $sidebar_link = null;
    if($data->sidebar_dynamic_id && $dynamic = $helper->getDynamic(['id' => $data->sidebar_dynamic_id])){
        $args['dynamic_id'] = $data->sidebar_dynamic_id;
        $sidebar_title = $dynamic->name;
        $sidebar_link = $dynamic->getViewUrl();
    }
    if($data->sidebar_category_id && $category = $helper->getPostCategory(['id' => $data->sidebar_category_id])){
        $args['@category'] = $data->sidebar_category_id;
        if(!$sidebar_title) $sidebar_title = $category->name;
        $sidebar_link = $category->getViewUrl();
    }
    if($data->sidebar_content_type && $data->sidebar_content_type != 'all'){
        $args['content_type'] = $data->sidebar_content_type;
    }
    if($data->sidebar_title) $sidebar_title = $data->sidebar_title;
    if($data->sidebar_link) $sidebar_link = $data->sidebar_link;
    
@endphp
                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module highlight"> 
                    <!--========== BEGIN.CONTAINER ==========-->                     
                    <div class="container"> 
                        <!--========== BEGIN .ROW ==========-->                         
                        <div class="row no-gutter"> 
                            <!--========== BEGIN .C0L-MD-8 ==========-->                             
                            <div class="col-md-8"> 
                                <!-- Begin .news -->                                 
                                <div class="news"> 
                                    @include($_component.'grid-first-large-thumbnail', [
                                        'data' => crazy_arr([
                                            'post_number' => 5,
                                            'sorttype' => $data->first_sorttype,
                                            'dynamic_id' => $data->first_dynamic_id,
                                            'category_id' => $data->first_category_id,
                                            'content_type' => $data->first_content_type,
                                            'title' => $data->first_title,
                                            'sub_title' => $data->first_sub_title,
                                            'bg_style' => $data->first_bg_style(2),
                                            
                                        ])
                                    ])

                                    @include($_component.'grid-first-large-thumbnail', [
                                        'data' => crazy_arr([
                                            'post_number' => 9,
                                            'sorttype' => $data->second_sorttype,
                                            'dynamic_id' => $data->second_dynamic_id,
                                            'category_id' => $data->second_category_id,
                                            'content_type' => $data->second_content_type,
                                            'title' => $data->second_title,
                                            'sub_title' => $data->second_sub_title,
                                            'bg_style' => $data->second_bg_style(5),
                                            
                                        ])
                                    ])
                                </div>                                 
                                <!-- End .news -->                                 
                            </div>                             
                            <!--========== END .C0L-MD-8 ==========-->                             
                            <!--========== BEGIN .C0L-MD-4 ==========-->                             
                            <div class="col-md-4"> 
                                <!-- Begin .title-style02 -->                                 
                                <div class="title-style02"> 
                                    <h3><a href="{{$sidebar_link?$sidebar_link:'#'}}">{{$sidebar_title}}</a></h3> 
                                </div>                                 
                                <!-- End .title-style02 -->                                 
                                <!--========== BEGIN .SIDEBAR-POST ==========-->                                 
                                <div class="sidebar-post"> 
                                    <ul> 
                                        @if (count($posts = $helper->getPosts($args)))
                                            @foreach ($posts as $item)
                                                
                                        <li> 
                                            <div class="item"> 
                                                <div class="item-image">
                                                    <a class="img-link" href="{{$u = $item->getViewUrl()}}">
                                                        <img class="img-responsive img-full" src="{{$item->getThumbnail()}}" alt="{{$item->title}}">
                                                    </a>
                                                </div>                                                 
                                                <div class="item-content"> 
                                                    <h3>{{($loop->index < 9 ? '0' : '').($loop->index+1)}}</h3> 
                                                    <p class="ellipsis"><a href="{{$u}}">{{$item->title}}</a></p> 
                                                </div>                                                 
                                            </div>                                             
                                        </li>
                                        
                                        
                                        @endforeach
                                        @endif
                                    </ul>                                     
                                </div>                                 
                                <!--========== END .SIDEBAR-POST ==========-->                                 
                                <!--========== BEGIN #WEATHER ==========-->                                 
                                <div id='weather' class='sidebar-weather'> 
                                    <!-- Begin .block-title-1 -->                                     
                                    <div class="block-title-1"> 
                                        <div class='weather-city-text'></div>                                         
                                    </div>                                     
                                    <!-- End .block-title-1 -->                                     
                                    <div class='weather-card'> 
                                        <div class="temp"> 
                                            <i class="weather-icon wi"></i> 
                                            <div class='temperature'></div>                                             
                                            <button class='btn btn-primary'> 
                                                <span class="switch">C</span> 
                                            </button>                                             
                                        </div>                                         
                                        <div id='description'> 
                                            <div id='type' class='desc-text'> </div>                                             
                                            <i class="wi wi-humidity"></i> 
                                            <div id='humidity' class='desc-text'> </div>                                             
                                            <i class="wi wi-strong-wind"></i> 
                                            <div id='wind' class='desc-text'> </div>                                             
                                        </div>                                         
                                    </div>                                     
                                </div>                                 
                                <!--========== END  #WEATHER ==========-->                                 
                            </div>                             
                            <!--========== END .COL-MD-4 ==========-->                             
                        </div>                         
                        <!--========== BEGIN 24H NEWS ON-AIR ==========-->                         
                        {{-- on air --}}
                    </div>                     
                </section>                 
                <!--========== END .MODULE ==========-->                 