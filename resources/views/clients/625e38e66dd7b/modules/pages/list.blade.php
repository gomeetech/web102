@extends($_layout.'sidebar')
@include($_lib.'register-meta')
@section('content')

                                <div class="module-title">
                                    <h3 class="title"><span class="bg-default">{{$page_title}}</span></h3>
                                </div>
                                @if (count($pages))
                                    
                                <!--========== BEGIN .NEWS ==========-->
                                <div class="news">
                                    @foreach ($pages as $post)
                                        
                                    <!-- Begin .item -->
                                    <div class="item">
                                        <div class="item-image-2">
                                            <a class="img-link" href="{{$u = $post->getViewUrl()}}">
                                                <img class="img-responsive img-full" src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <div class="title-left title-style04 underline04">
                                                <h3><a href="{{$u}}">{{$post->title}}</a></h3>
                                                <br>
                                                <div class="post-meta-elements">
                                                    <div class="post-meta-date">
                                                        <i class="fa fa-calendar"></i>{{$post->dateFormat('d/m/Y')}} 
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="last"><a href="{{$u}}">{{$post->getShortDesc(120)}}</a></p>
                                            <div><a href="{{$u}}"><span class="read-more">Xem th</span></a> </div>
                                        </div>
                                    </div>
                                    <!-- End .item -->
                                    
                                    @endforeach
                                </div>
                                <!--========== END .NEWS ==========-->
                                <!--========== BEGIN .PAGINATION ==========-->
                                {{$pages->links($_template.'pagination')}}
                                <!--========== END .PAGINATION ==========-->
                                
                                @else
                                    <div class="alert alert-warning text-center mt-4 mb-4">Không có kết quả phù hợp</div>
                                @endif
                                <!--========== BEGIN .NEWS ==========-->
                                
@endsection