

                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module"> 
                    <!--========== BEGIN .CONTAINER ==========-->                     
                    <div class="container"> 
                        <!--========== BEGIN .BREAKING-NEWS ==========-->                         
                        @include($_template .'breaking-news')                         
                        <!--========== END .BREAKING-NEWS ==========-->
                        @if (count($posts = $helper->getPosts(['@sorttype' => $data->slider_sort_type, '@limit' => $data->slider_number_post])))
                            
                        <!--========== BEGIN #NEWS-SLIDER ==========-->                         
                        <div id="news-slider" class="owl-carousel">
                            @php
                                $itemOrders = ['first', 'second', 'third', 'fourth'];
                                $sizes = ['574x443', '274x442', '374x215', '374x215'];
                            @endphp
                            @foreach ($posts as $post)
                                @if ($loop->index %4==0)
                                    
                                    <div class="news-slide">
                                @endif
                                <div class="news-slider-layer {{$itemOrders[$loop->index %4]}}"> 
                                    <a href="{{$post->getViewUrl()}}" target="_blank"> 
                                        <div class="content"> 
                                            @if ($cate = $post->getCategory())
                        
                                            <span class="category-tag bg-{{rand(1,6)}}">{{$cate->name}}</span>
                                            
                                            @endif 
                                            <p>{{$post->title}}</p> 
                                        </div>                                         
                                        <img src="{{$post->getImage($sizes[$loop->index %4])}}" alt="{{$post->title}}"> 
                                    </a>                                     
                                </div>                                 
                                

                                @if ($loop->index %4 == 3 || $loop->last)
                                    </div>
                                @endif
                            @endforeach

                        </div>                         
                        <!--========== END .NEWS-SLIDER ==========-->
                        
                        @endif                         
                    </div>                     
                </section>                 
                <!--========== END .MODULE ==========-->