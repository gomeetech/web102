
<!--========== BEGIN #SIDEBAR-NEWSLETTER ==========-->
<div id="sidebar-newsletter">
    <!-- Begin .title-style01 -->
    <div class="title-style01">
        <h3><strong>{{$data->title("Nhận tin tức")}}</strong></h3> 
    </div>
    <!-- End .title-style01 -->
    <!-- Begin .sidebar-newsletter-form -->
    <div class="sidebar-newsletter-form">
        <form class="form-horizontal {{parse_classname('subcribe-form')}}" action="{{route('client.subcribe')}}"  method="POST">
            <div class="input-group">
                <input title="Newsletter" class="form-control" name="email" type="email" id="address" placeholder="{{$data->placeholder("Nhập email của bạn")}}" data-validate="validate(required, email)" required> 
                <span class="input-group-btn"> <button type="submit" class="btn btn-success">{{$data->button('Đăng ký')}}</button> </span>
            </div>
        </form>
        <span id="result" class="alertMsg"></span> 
    </div>                                     
    <!-- End .sidebar-newsletter-form -->                                     
</div>                                 
<!--========== END #SIDEBAR-NEWSLETTER ==========-->       