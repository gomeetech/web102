@extends($_layout.'master')
@section('meta.robots', 'noindex,nofollow')
@section('content')         
    <!--========== BEGIN .CONTAINER ==========-->
    <div class="container">
    </div>
    <!--========== END .CONTAINER ==========--> 
    <!-- Begin .Error 404 -->
    <div class="error-404 container-fluid text-center">
      <div class="error-msg">Lỗi 404</div>
      <h2 class="medium-caption">Không tìm thấy!</h2>
      <h4>Xin lỗi! Nhưng trang bạn truy cập hiện không dược tìm thấy! Bạn có thể sử dụng mục tìm kím bên dưới</h4>
      <div class="col-sm-offset-4 col-sm-4">
        <form action="{{route('client.search')}}" class="main-search">
          <div class="input-group content-group">
            <input type="search" name="s" class="form-control" placeholder="Tìm kiếm" title="Tìm kiếm"/>
            <div class="input-group-btn">
              <button type="submit" class="btn bg-default btn-icon"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-offset-1 col-md-10">
        <p class="text-center"><a class="btn btn-default btn-lg" href="{{route('home')}}">Về trang chủ</a></p>
      </div>
    </div>
    <!-- End .Error 404 --> 
@endsection