@extends($_layout.'sidebar')
@include($_lib.'register-meta')
@section('content')


                                <div class="module-title">
                                    <h3 class="title"><span class="bg-default">{{$page_title}}</span></h3>
                                    {{-- <h3 class="subtitle">{{$sub_title}}</h3> --}}
                                </div>
                                <div class="alert alert-warning text-center mt-4 mb-4">Không có kết quả phù hợp</div>
                                <!--========== BEGIN .NEWS ==========-->
                                
@endsection