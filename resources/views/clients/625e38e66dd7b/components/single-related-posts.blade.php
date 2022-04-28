@if ($article = $helper->getActiveModel('post'))

@php
	$dynamic = $helper->getActiveModel('dynamic');
    $title = $data->title($dynamic->name);
    $sub_title = "Tin liên quan";
    if($article->category_id && $category = $article->getCategory()){
        $sub_title = $category->name;
        if($category->parent_id && $parent = $category->getParent()){
            $title = $parent->name;
        }
    }
    $sub_title = $data->sub_title($sub_title);

    $args = [
        '@limit' => $data->post_number?$data->post_number:10,
        '@sort' => $data->sorttype?$data->sorttype:1
    ];
@endphp
@count($posts = $article->getRelated($args))
			<!--========== BEGIN .MODULE ==========-->
			<section class="module highlight">
				<div class="container">
					<div class="row no-gutter">
						<!--========== BEGIN .COL-MD-12 ==========-->
						<div class="col-md-12">
							<div class="module-title">
								<h3 class="title"><span class="bg-default">{{$title}}</span></h3>
								<h3 class="subtitle">{{$sub_title}}</h3>
							</div>
							<!--========== BEGIN .ARTICLE ==========-->
							<div class="article">
                                @foreach ($posts as $post)
                                    
								<div class="entry-block">
									<div class="entry-image">
                                        <a class="img-link" href="{{$u = $post->getViewUrl()}}">
                                            <img class="img-responsive img-full" src="{{$post->getThumbnail()}}" alt="{{$post->title}}">
                                        </a>
                                    </div>
									<div class="entry-content">
										<div class="title-left title-style04 underline04">
											<h3><a href="{{$u}}"><strong>{{$post->title}}</strong></a></h3>
											
										</div>
										<p><i class="fa fa-clock-o"></i> {{$post->dateFormat('d/m/Y')}} <span class="hour">{{$post->dateFormat('H:i')}}</span></p>
										<p><a href="{{$u}}">{{$post->getShortDesc(120)}}</p>
										<div> <a href="{{$u}}"><span class="read-more">Đọc tiếp</span></a> </div>
									</div>
                                </div>
                                
                                @endforeach
							</div>
							<!--========== END .ARTICLE ==========-->
						</div>
						<!--========== END .COL-MD-12 ==========-->
					</div>
				</div>
			</section>
			<!--========== END .MODULE ==========-->
@endcount
@endif