                                <!--========== BEGIN #SIDEBAR-SOCIAL-BUTTONS ==========-->                                 
                                <div class="sidebar-social-icons"> 
                                    <!-- Begin .title-style01 -->                                     
                                    <div class="title-style01"> 
                                        <h3><strong>{{$data->title}}</strong></h3> 
                                    </div>                                     
                                    <!-- End .title-style01 -->
                                    <ul> 
                                        @php
                                            $contacts = $options->theme->contacts;
                                        @endphp
                                        @foreach (['facebook', 'twitter', 'youtube', 'linkedin', 'instagram', 'pinterest', 'tumblr'] as $item)
                                            @if ($social = $data->get($item, $contacts->get($item, $siteinfo->get($item))))
                                                <li><a class="{{$item}}" href="{{$social}}"><i class="fa fa-{{$item}}"></i></a></li>
                                            @endif
                                        @endforeach
                                    </ul>                                     
                                </div>                                 
                                <!--========== END #SIDEBAR-SOCIAL-BUTTONS ==========-->    