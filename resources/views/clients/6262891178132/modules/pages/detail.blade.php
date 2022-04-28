@extends($_layout.'master')
@include($_lib.'register-meta')
@section('show_breaking_news', 1)
@section('content')

@php
    $url = $article->getViewUrl();
@endphp
                @include($_template.'breakcrumb') 
        <div class="container"> </div>


        <div class="module">
            <div class="container">
                <!--========== BEGIN .POST ==========-->
                <div class="post post-full clearfix">
                    <h2 class="title-style05 style-02"><span><a href="{{$url}}">{{$article->title}}</a></span></h2>
                    <div class="entry-main">
                        
                        {{-- <div class="post-meta-elements">
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
                        </div> --}}
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
                        {{-- {{
                            $html->getShareButtons("Chia sẻ", [
                                'link' => $article->getViewUrl(),
                                'title' => $article->title,
                                'description' => $article->getShortDesc(100),
                                'image' => $article->getFeatureImage(),
                                
                            ])
                        }} --}}
                    </div>
                </div>
            </div>
            {!! $html->single_page->components !!}
        </div>         
@endsection