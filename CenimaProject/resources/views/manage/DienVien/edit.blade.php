@extends('layout')
@section('content')


  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      
        <!-- Nested Row within Card Body -->
        <div class="col">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
                <div class="p-5">      
                    <div class="text-center">
                        <h2 class="text-dark">CHỈNH SỬA THÔNG TIN DIỄN VIÊN</h1>
                    </div>
                  <form class="user" method="POST" action="{{url('DienVien/update/'.$dienvien->id)}}">
                    @csrf
                        <div class="form-group ">
                           <label class="text-dark" for="TenDienVien">Tên diễn viên</label>
                           <input type="text" name="TenDienVien" class="form-control form-control-user" id="exampleFirstName" value="{{$dienvien->TenDienVien}}" placeholder="First Name">
                           <p class="text-danger">{{ $errors->first('TenDienVien') }}</p>
                        </div>
                        <button  class="btn btn-primary btn-user btn-block">Cập nhật</button>   
                    </form>
                   
                    <hr>
                </div>
                <a type="submit" class="btn btn-primary" href="/DienVien/index">Quay lại</a>
            </div>
        </div>
    </div>
</div>
   
@endsection
