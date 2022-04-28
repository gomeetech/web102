

                <!--========== BEGIN .MODULE ==========-->                 
                <section class="module"> 
                    <div class="container"> 
                        <div class="row no-gutter"> 
                            <!--========== BEGIN .COL-MD-8 ==========-->                             
                            <div class="col-md-8"> 
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
                                            'bg_style' => $data->second_bg_style(9),
                                            
                                        ])
                                    ])              
                                </div>                                 
                                <!--========== BEGIN NEWS==========-->                                 
                                
                            </div>                             
                            <!--========== END .C0L-MD-8 ==========-->                             
                            <!--========== BEGIN .C0L-MD-4 ==========-->                             
                            <div class="col-md-4"> 
                         
                                <!--========== BEGIN .CALENDAR ==========-->                                 
                                <div id='calendar'></div>                                 
                                <!--========== END .CALENDAR ==========-->                                 
                                <!--========== BEGIN #SIDEBAR-NEWSLETTER ==========-->                                 
                                <div id="sidebar-newsletter"> 
                                    <!-- Begin .title-style01 -->                                     
                                    <div class="title-style01"> 
                                        <h3><strong>Nhận tin tức</strong></h3> 
                                    </div>                                     
                                    <!-- End .title-style01 -->                                     
                                    <!-- Begin .sidebar-newsletter-form -->                                     
                                    <div class="sidebar-newsletter-form"> 
                                        <form class="form-horizontal {{parse_classname('subcribe-form')}}" action="{{route('client.subcribe')}}"  method="POST"> 
                                            <div class="input-group"> 
                                                <input title="Newsletter" class="form-control" name="email" type="email" id="address" placeholder="Nhập email của bạn" data-validate="validate(required, email)" required> 
                                                <span class="input-group-btn"> <button type="submit" class="btn btn-success">Đăng ký</button> </span> 
                                            </div>                                             
                                        </form>                                         
                                        <span id="result" class="alertMsg"></span> 
                                    </div>                                     
                                    <!-- End .sidebar-newsletter-form -->                                     
                                </div>                                 
                                <!--========== END #SIDEBAR-NEWSLETTER ==========-->                                 
                                <!--========== BEGIN #SIDEBAR-SOCIAL-BUTTONS ==========-->                                 
                                <div class="sidebar-social-icons"> 
                                    <!-- Begin .title-style01 -->                                     
                                    <div class="title-style01"> 
                                        <h3><strong>Kết nới</strong> với chúng tôi</h3> 
                                    </div>                                     
                                    <!-- End .title-style01 -->
                                    @php
                                        $contacts = $options->theme->contacts;
                                    @endphp
                                    <ul> 
                                        @foreach (['facebook', 'twitter', 'youtube', 'linkedin', 'instagram', 'pinterest', 'tumblr'] as $item)
                                            @if ($social = $contacts->get($item, $siteinfo->get($item)))
                                                <li><a class="{{$item}}" href="{{$social}}"><i class="fa fa-{{$item}}"></i></a></li>
                                            @endif
                                        @endforeach
                                    </ul>                                     
                                </div>                                 
                                <!--========== END #SIDEBAR-SOCIAL-BUTTONS ==========-->                                 
                            </div>                             
                            <!--========== END .C0L-MD-4 ==========-->                             
                        </div>                         
                    </div>                     
                </section>                 
                <!--========== END .MODULE ==========-->                 