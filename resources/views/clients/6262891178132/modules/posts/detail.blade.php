@extends($_layout.'master')
@include($_lib.'register-meta')
@section('show_breaking_news', 1)
@section('content')

@php
    $url = $article->getViewUrl();
@endphp
<div class="highlight">
@include($_template.'breakcrumb') 
</div>
			<!--========== BEGIN .CONTAINER ==========-->
			<div class="container"> </div>
			<!--========== END .CONTAINER ==========-->
			<!--========== BEGIN .MODULE ==========-->
			<section class="module">
				<div class="container">
					<!--========== BEGIN .BREAKING-NEWS ==========-->
					<!-- Begin .outer -->
					
                    @include($_template.'breaking-news') 
					<!-- End .outer -->
					<!--========== END .BREAKING-NEWS ==========-->
					<!--========== BEGIN .ROW ==========-->
					<div class="row no-gutter">
						<!--========== BEGIN .COL-MD-8 ==========-->
                        <div class="col-md-8">
                            
							<!--========== BEGIN .POST ==========-->
							<div class="post post-full clearfix">
                                @if (in_array($article->content_type, ['video', 'video_embed']) && $video = $article->getVideo())
                                <div class="video-container">
                                    <div class="fluid-width-video-wrapper" style="padding-top: 56.9984%;">
                                        <iframe src="{{$video->embed_url}}" class="video" title="Advertisement" name="fitvid1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                </div>
                                @elseif($article->feature_image)
                                    
								<div class="entry-media"> 
                                    <a href="{{$url}}">
                                        <img src="{{$article->getImage()}}" alt="{{$article->title}}" class="img-responsive img-fullwidth">
                                    </a>
                                </div>
                                
                                @endif
								<div class="entry-main">
									<div class="entry-title">
										<h4 class="entry-title"><a href="{{$url}}">{{$article->title}}</a></h4>
									</div>

									<div class="post-meta-elements">
										<div class="post-meta-author"> 
                                            <i class="fa fa-user"></i>
                                            <a href="#">{{$article->getAuthor()->name}}</a>
                                        </div>
										<div class="post-meta-date">
                                            <i class="fa fa-calendar"></i>{{$article->dateFormat('d/m/Y')}}
                                        </div>
										<div class="post-meta-comments">
                                            <i class="fa fa-comment-o"></i>
                                            <a href="#comments">
                                                @count($article->publishComments)
                                                    {{$__total}}
                                                @else
                                                    0
                                                @endcount

                                                Bình luận
                                            </a>
                                        </div>
									</div>
									<div class="entry-content">
										{!! $article->content !!}
                                    </div>
                                    <div class="entry-footer-meta">
                                        @count($article->tags)
                        
                                        <div class="post-tags"><span class="post-tags_title"><i class="fa fa-tags"></i> Thẻ :</span> 
                                            @foreach ($article->tags as $tag)
                                                <a href="{{route('client.search', ['s' => $tag->keyword])}}">{{$tag->name}}</a>{{$loop->last?'':','}}
                                            @endforeach
                                        </div>
                                        @endcount
                                
                                    </div>
                                    {{
                                        $html->getShareButtons("Chia sẻ", [
                                            'link' => $article->getViewUrl(),
                                            'title' => $article->title,
                                            'description' => $article->getShortDesc(100),
                                            'image' => $article->getFeatureImage(),
                                            
                                        ])
                                    }}
								</div>
							</div>
							<!--  End .post -->


                            @include($_template.'comments',[
                                'comments' => $article->publishComments,
                                'ref' => 'post',
                                'ref_id' => $article->id,
                                'url' => $article->getViewUrl()
                            ])
                        </div>
                        <!--========== END .COL-MD-8 ==========-->
                        <!--========== BEGIN .COL-MD-4 ==========-->
                        <div class="col-md-4">
                            @include($_template.'sidebar')
                        </div>
                        <!--========== END .COL-MD-8 ==========-->
					</div>
                    <!-- Begin .add-place -->
                    

                    @php
                        $single = $options->theme->single;
                    @endphp
                    @if ($single->show_banner && (($single->ads_type == "code" && $single->ads_code) || ($single->ads_type == "code" && $single->banner_image)))
                        
                    <div class="add-place"> 
                    
                        @if ($single->ads_type == "code")
                            {!! $single->ads_code !!}
                        @else
                            <a href="{{$single->banner_link('#')}}" target="_blank">
                                <img src="{{$single->banner_image(theme_asset('img/banner_728x90.jpg'))}}" alt="{{$single->banner_alt}}">
                            </a>
                        @endif
                            
                    
                    </div>

                    @endif
                    <!-- End .title-style05-bg -->
                    @if ($single->show_related_url)
                        
                    @php
                        $url = '#';
                        if($article->category_id && $category = $article->getCategory()){
                            $url = $category->getViewUrl();
                        }else{
                            $url = $dynamic->getViewUrl();
                        }
                    @endphp
                    <!-- End .add-place -->
					<h2 class="title-style05 style-02">Xem thêm các  <span><a href="{{$url}}">tin liên quan</a></span>
					</h2>
					<!-- Begin .title-style05-bg -->
					<div class="center-title"> <span class="title-line-left"></span>
						<h4 class="title-style05 style-01">latest # news</h4>
						<span class="title-line-right"></span>
					</div>
                    <!-- End .title-style05-bg -->
                    
                    @endif
				</div>
				<!--========== END .CONTAINER ==========-->
			</section>
			<!--========== END .MODULE ==========-->

            {!! $html->single_post->components !!}
                                
@endsection