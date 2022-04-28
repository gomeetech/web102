   

                                                   
                    <div class="col-sm-6 col-md-3"> 
                        <h3 class="title-left title-style03 underline03">{{$data->title}}</h3> 
                        <div class="tagcloud">
                            @if (count($tags = $helper->getTags(['@sort'=> $data->sorttype, '@limit' => $data->tag_number])))
                                @foreach ($tags as $tag)
                                    <a href="{{route('client.posts.tag', ['tag' => $tag->slug])}}">{{$tag->name}}</a>
                                @endforeach
                            @endif
                        </div>                                     
                    </div>     