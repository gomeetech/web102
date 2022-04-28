@if (count($posts = $helper->getPosts(['created_at:fromDate' => -2, '@sort' => 'rand()', '@limit' => 25])))
    
<div class="outer"> 
    <div class="breaking-ribbon"> 
        <h4>Tin nóng</h4> 
    </div>                             
    <!-- Begin .newsticker -->                             
    <div class="newsticker"> 
        <ul>
            @foreach ($posts as $post)
                
            <li> 
                <h4>
                    @if ($cate = $post->getCategory())
                        
                    <span class="category">{{$cate->name}}:</span>
                    
                    @endif
                    <a href="{{$post->getViewUrl()}}"> {{$post->title}}</a>
                
                </h4> 
            </li>
            
            @endforeach                                
        </ul>                                 
        <div class="navi"> 
            <button class="up">
                <i class="fa fa-caret-left"></i>
            </button>                                     
            <button class="down">
                <i class="fa fa-caret-right"></i>
            </button>                                     
        </div>                                 
    </div>                             
    <!-- End .newsticker -->                             
</div>                         
<!-- End .outer -->    


@endif