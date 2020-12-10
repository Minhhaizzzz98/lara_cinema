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
                <form class="user" method="POST" action="{{url('phim/update/'.$phim->id)}}">
                    @csrf
                        <div class="form-group ">
                           <label for="TenPhim">Tên phim</label>
                           <input type="text" name="TenPhim" class="form-control form-control-user" id="exampleFirstName" value="{{$phim->TenPhim}}" placeholder="First Name">
                           <p class="help is-danger">{{ $errors->first('TenPhim') }}</p>
                        </div>
                        <div class="form-group">
                            <label for="NgayDKChieu">Ngày ĐK chiếu</label>
                            <input type="datetime" name="NgayDKChieu" class="form-control form-control-user" id="exampleInputEmail" value="{{$phim->NgayDKChieu}}">
                            <p class="help is-danger">{{ $errors->first('NgayDKChieu') }}</p>
                        </div>
                        <div class="form-group">
                          <label for="NgayKetThuc">Ngày kết thúc</label>
                          <input type="datetime" name="NgayKetThuc" class="form-control form-control-user" id="exampleInputEmail" value="{{$phim->NgayKetThuc}}">
                          <p class="help is-danger">{{ $errors->first('NgayKetThuc') }}</p>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <label for="ThoiLuong">Thời lượng</label>
                                <input type="number" name="ThoiLuong" class="form-control form-control-user" id="exampleInputPassword" value="{{$phim->ThoiLuong}}">
                                <p class="help is-danger">{{ $errors->first('ThoiLuong') }}</p>
                            </div>
                    
                        </div>
                        <div class="form-group">
                          <label for="HinhAnh">Hình ảnh</label>
                          <input type=file name="HinhAnh" class="form-control form-control-user" id="exampleInputEmail" value="{{$phim->NgayKetThuc}}">
                          <p class="help is-danger">{{ $errors->first('HinhAnh') }}</p>
                        </div>
                        <button  class="btn btn-primary btn-user btn-block">Cập nhật</button>
                     
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
