

                    <div class="col-sm-6 col-md-3"> 
                        <h3 class="title-left title-style03 underline03">{{$data->title}}</h3> 
                        <div class="footer-post"> 
                            @php
                                $params = [
                                    '@limit' => $data->post_number,
                                    '@sort' => $data->sorttype
                                ];
                                if($data->dynamic_id){
                                    $params['dynamic_id'] = $data->dynamic_id;
                                }
                                if($data->category_id){
                                    $params['@category'] = $data->category_id;
                                }
                            @endphp
                            @if (count($posts = $helper->getPosts($params)))
                                <ul>
                                    @foreach ($posts as $post)
                                    <li> 
                                        <div class="item"> 
                                            <div class="item-image">
                                                <a class="img-link" href="{{$u = $post->getViewUrl()}}">
                                                    <img class="img-responsive img-full" src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                                                </a>
                                            </div>                                                     
                                            <div class="item-content"> 
                                                <p class="ellipsis"><a href="{{$u}}">{{$post->title}}</a></p> 
                                            </div>                                                     
                                        </div>                                                 
                                    </li>                                             
                                    
                                    @endforeach
                                </ul>
                            @endif
                        </div>                                     
                    </div>     