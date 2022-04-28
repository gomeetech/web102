@extends($_layout.'master')
@section('title', 'Liên hệ')
@include($_lib.'register-meta')
@section('content')

@php
    $contacts = $options->theme->contacts;
@endphp

			<!--========== BEGIN .MODULE ==========-->
			<section class="module-top">
				<div class="container">
					<div class="row">
						<!-- Begin .contact-us -->
						<div class="contact-us">
							<div class="col-xs-12 col-sm-5 col-md-5">
								<div class="form-group">
                                    @if ($contacts->title || $contacts->description)
                                        
									<div class="title-left title-style04 underline04">
										<h3>{{$contacts->title}}</h3>
                                    </div>
                                    @if ($arr = $helper->nl2array($contacts->description))
                                        @foreach ($arr as $text)
                                            <p>{{$text}}</p>
                                        @endforeach
                                    @endif
                                    @endif
									<div class="title-left title-style04 underline04">
										<h3>Thông tin liên hệ</h3>
									</div>
									<ul>
										<li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Địa chỉ:</span> {{$contacts->address($siteinfo->address('172 Bà Triệu, Tp. Hòa Bình'))}}</li>
										<li><i class="fa fa-phone" aria-hidden="true"></i><span>Điện thoại:</span> <a href="tel:{{$phone = $contacts->phone_number($siteinfo->phone_number('+84 945 786 960'))}}">{{$phone}}</a></li>
										<li><i class="fa fa-envelope-o" aria-hidden="true"></i><span>E-mail:</span> <a href="mailto:{{$email = $contacts->email($siteinfo->email('doanln16@gmail.com'))}}">{{$email}}</a></li>
										<li><i class="fa fa-globe" aria-hidden="true"></i><span>Website:</span> <a href="{{$u = route('home')}}">{{$u}}</a></li>
									</ul>
								</div>
							</div>
							<!-- Begin .contact-form -->
							<div class="col-xs-12 col-sm-7 col-md-7">
								<div class="title-left title-style04 underline04">
									<h3>Gửi liên hệ</h3>
								</div>
                                <form id="contact-form" method="post" action="{{route('client.contacts.ajax-send')}}">
                                    @csrf
                                    {{-- <input type="hidden" name="response_type" value="text"> --}}
									<div class="messages"></div>
									<div class="controls">
										<div class="row no-gutter">
											<div class="col-md-12">
												<div class="form-group">
													<label for="form_name">Họ tên *</label>
                                                    <input id="form_name" type="text" name="name" class="form-control inp" placeholder="Nhập họ tên *" data-error="Hõ tên không được bỏ trống" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											
										</div>
										<div class="row no-gutter">
											<div class="col-md-6">
												<div class="form-group">
													<label for="form_email">Email *</label>
													<input id="form_email" type="email" name="email" class="form-control" placeholder="Nhập email của bạn *" data-error="Email không hợp lệ." required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label for="form_phone">Điện thoại (tùy chọn)</label>
													<input id="form_phone" type="tel" name="phone_number" class="form-control" placeholder="Không bắt buộc">
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<div class="row no-gutter">
											<div class="form-group">
												<label for="form_message">Nội dung liên hệ *</label>
												<textarea id="form_message" name="message" class="form-control" placeholder="Nhập nội dung *" rows="4" data-error="Vui lòng nhap76 nội dung"  required></textarea>
												<div class="help-block with-errors"></div>
											</div>

											<div class="row">
												<div class="col-md-12">
													<input type="submit" class="btn btn-success btn-send"
														value="Gửi liên hệ">
												</div>
											</div>
										</div>
										<div class="row no-gutter">
											<div class="col-md-12">
												<p class="text-muted"><strong>*</strong> Những trường bắc buộc điền</p>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- End .contact-form -->
						</div>
						<!-- End .contact-us -->
					</div>
				</div>
			</section>
            <!--========== END .MODULE ==========-->
            @if ($contacts->show_map)
                
			<!-- Begin Google Map  -->
			<div class="google-map-area">
				<div class="container-fluid">
                    @if ($contacts->map_type == 'code')
                        <div class="map-embed">
                            {!! $contacts->map_code !!}
                        </div>
                    @else
                        
                    <div id="map-canvas" data-lat="{{$contacts->lat}}" data-long="{{$contacts->lat}}" data-=""></div>
                    
                    @endif
				</div>
			</div>
            <!-- End Google Map -->
            
            @endif

@endsection

@section('js')
<script src="{{theme_asset('js/validator.js')}}"></script>
<script src="{{theme_asset('js/contact.js')}}"></script>

@if ($contacts->show_map && $contacts->map_type != 'code')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAhvyGCRCkTlvboC92nONMJ0dS38tevYUc"></script>
    <!-- JavaScripts ============================================= -->
    <script src="{{theme_asset('js/google-map.js')}}"></script>

@endif

@endsection