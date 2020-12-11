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
                        <h2 class="text-dark">CHỈNH SỬA THÔNG TIN PHIM</h1>
                    </div>
                  <form class="user" method="POST" action="{{url('phim/update/'.$phim->id)}}">
                    @csrf
                        <div class="form-group ">
                           <label class="text-dark" for="TenPhim">Tên phim</label>
                           <input type="text" name="TenPhim" class="form-control form-control-user" id="exampleFirstName" value="{{$phim->TenPhim}}" placeholder="First Name">
                           <p class="text-danger">{{ $errors->first('TenPhim') }}</p>
                        </div>
                        <div class="form-group">
                            <label class="text-dark" for="NgayDKChieu">Ngày ĐK chiếu</label>
                            <input type="datetime" name="NgayDKChieu" class="form-control form-control-user" id="exampleInputEmail" value="{{$phim->NgayDKChieu}}">
                            <p class="text-danger">{{ $errors->first('NgayDKChieu') }}</p>
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="NgayKetThuc">Ngày kết thúc</label>
                          <input type="datetime" name="NgayKetThuc" class="form-control form-control-user" id="exampleInputEmail" value="{{$phim->NgayKetThuc}}">
                          <p class="text-danger">{{ $errors->first('NgayKetThuc') }}</p>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <label class="text-dark" for="ThoiLuong">Thời lượng</label>
                                <input type="number" name="ThoiLuong" class="form-control form-control-user" id="exampleInputPassword" value="{{$phim->ThoiLuong}}">
                                <p class="text-danger">{{ $errors->first('ThoiLuong') }}</p>
                            </div>
                    
                        </div>
                        <div class="form-group">
                          <label class="text-dark" for="HinhAnh">Hình ảnh</label><br>
                          <input type="file" name="HinhAnh" alt="Profile Image" onchange="previewFile(this)" value="{{$phim->HinhAnh}}">
                          <img id="previewImage" width="300px" height="200px"  src="{{$phim->HinhAnh}}" alt="">
                          <p class="text-danger">{{ $errors->first('HinhAnh') }}</p>
                        </div>
                        <button  class="btn btn-primary btn-user btn-block">Cập nhật</button>   
                    </form>
                   
                    <hr>
                </div>
                <a type="submit" class="btn btn-primary" href="/phim/index">Quay lại</a>
            </div>
        </div>
    </div>
</div>
   
@endsection
