<?php
$commentList = (isset($comments) && is_countable($comments)) ? $comments : [];
$refname = isset($ref)?$ref:null;
$refid = isset($ref_id)?$ref_id:0;
$link = isset($url)?$url:null;
$t = count($commentList);
if($user = $helper->getCurrentAccount()){
    $name = $user->name;
    $email = $user->email;
}else{
    $name = null;
    $email = null;
}

?>

                        @if ($t)
                            
							<!--  Begin .comment-section -->
							<div class="comment-section">
								<!-- Begin .title-style01 -->
								<div class="comment-title title-style01">
									<h3>{{$t}} Bình luận </h3>
                                </div>
                                @php
                                    $render = function($factory, $comments, $level = 0){
                                        $html = '';
                                        if(count($comments)){
                                            $html .= '<ul class="'.($level == 0 ? 'comments-list': 'children').'">';
                                                foreach ($comments as $key => $comment) {
                                                    $avatar = ($comment->author_id && $author = get_model_data('user', $comment->author_id)) ? get_user_avatar($author->avatar) : asset('images/default/avatar.png');

                                                    $html .= '<li>';
                                                        $html .= '

                                                        <div class="comment clearfix">
                                                            <div class="avatar"><img src="'.$avatar.'" alt="avatar" class="img-responsive"></div>
                                                            <div class="comment-content">
                                                                <div class="comment-title">
                                                                    <h5 class="comment-author">'.$comment->author_name.'</h5>
                                                                    <div class="comment-date"><i class="fa fa-calendar"></i><span
                                                                            class="day"> '.$comment->dateFormat('d / m / Y').'</span>
                                                                    </div>
                                                                </div>
                                                                <p>'.$comment->htmlMessage().'</p>
                                                                
                                                                '.($level > 2 ? '': '<button type="button" class="comment-btn btn btn-default btn-reply-comment" data-id="'.$comment->id.'" data-reply-for="'.htmlentities($comment->author_name).'">Trả lời</button>').'
                                                            </div>
                                                        </div>



                                        '.(($comment->publishChildren && count($comment->publishChildren) && $level) ? $factory($factory, $comment->publishChildren, $level+1) : '').'
                                        ';
                                                    $html .= '</li>';
                                                    if($comment->publishChildren && count($comment->publishChildren) && !$level) $html.='<li>'.$factory($factory, $comment->publishChildren, $level+1).'</li>';
                                                }
                                            $html.='</ul>';
                                        }
                                        return $html;
                                    };
                                @endphp
                                {!! $render($render, $comments) !!}
								
							</div>
                            <!--  End .comment-section -->
                            

                        @endif






							<!--  Begin .form-reply-section -->

							<div class="form-reply-section">
								<div class="comment-title title-style01">
									<h4>Để lại ý kiến</h4>
								</div>
                                <form class="form-reply ui-form {{parse_classname('comment-form')}}" method="POST" action="{{route('client.comments.post')}}" data-ajax-url="{{route('client.comments.ajax')}}">
                                    @csrf
                                    <input type="hidden" name="parent_id" id="comment-reply-id" >
                                    <input type="hidden" name="ref" value="{{$refname}}">
                                    <input type="hidden" name="ref_id" value="{{$refid}}">
									<div class="row no-gutter">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" id="comment_name" name="author_name" class="form-control inp" value="{{old('author_name', $name)}}" placeholder="Tên *" required>
											</div>
										</div>
										<div class="col-md-6">
											<input type="email" id="comment_email" name="author_email" class="form-control inp" value="{{old('author_email', $email)}}" placeholder="Email *">
										</div>
									</div>
									<div class="row no-gutter">
										<div class="col-md-12 crazy-message-content">
                                            <textarea name="message" id="comment" class="comment-message-content inp form-control " placeholder="Viết nội dung bình luận..." required>{{old('message')}}</textarea>
										</div>
									</div>
									<div class="row no-gutter mb-4">
										<div class="col-md-12">
											<button class="btn btn-primary btn-black" data-class="btn-primary">Gửi</button>
										</div>
									</div>
								</form>
							</div>
