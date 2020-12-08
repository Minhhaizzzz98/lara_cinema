@extends('layout')
@section('content')

  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="col">
            {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
            <div class="col-lg-8">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Chỉnh sửa thông tin phim</h1>
                    </div>
                    <form class="user">
                        <div class="form-group ">
                           <label for="TenPhim">Tên phim</label>
                           <input type="text" class="form-control form-control-user" id="exampleFirstName" value="{{$phim->TenPhim}}" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label for="NgayDKChieu">Ngày ĐK chiếu</label>
                            <input type="datetime" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{$phim->NgayDKChieu}}">
                        </div>
                        <div class="form-group">
                          <label for="NgayKetThuc">Ngày kết thúc</label>
                          <input type="datetime" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{$phim->NgayKetThuc}}">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="ThoiLuong">Thời lượng</label>
                                <input type="number" class="form-control form-control-user"
                            id="exampleInputPassword" placeholder="Password" value="{{$phim->ThoiLuong}}">
                            </div>
                    
                        </div>
                        <div class="form-group">
                          <label for="HinhAnh">Hình ảnh</label>
                          <input type="file" class="form-control form-control-user" id="exampleInputEmail" placeholder="{{$phim->NgayKetThuc}}">
                        </div>
                        <a href="login.html" class="btn btn-primary btn-user btn-block">Update</a>
                     
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
