@extends('layout')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="col">
          {{-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> --}}
          <div class="col-lg-6">
              <div class="p-5">
                  <div class="text-center">
                      <h1 class="text-primary">Thêm phim mới</h1>
                  </div>
             
                  <form class="user" method="POST" action="{{url('/phim/create/')}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                         <label class="text-dark" for="TenPhim">Tên phim</label>
                         <input type="text" name="TenPhim" class="form-control form-control-user" id="exampleFirstName"  placeholder="Kẻ sát nhân">
                         <p class="text-danger">{{ $errors->first('TenPhim') }}</p>
                      </div>
                      <div class="form-group">
                          <label class="text-dark" for="NgayDKChieu">Ngày ĐK chiếu</label>
                          <input type="datetime-local" name="NgayDKChieu" class="form-control form-control-user" id="exampleInputEmail" >
                          <p class="text-danger">{{ $errors->first('NgayDKChieu') }}</p>
                      </div>
                      <div class="form-group">
                        <label class="text-dark" for="NgayKetThuc">Ngày kết thúc</label>
                        <input type="datetime-local" name="NgayKetThuc" class="form-control form-control-user" id="exampleInputEmail" >
                        <p class="text-danger">{{ $errors->first('NgayKetThuc') }}</p>
                      </div>
                      <div class="form-group">
        
                        <label class="text-dark">Giới hạn tuổi :</label>
                        <select name="GioiHanTuoi" id="">
                            @foreach ($gioihantuoi as $item)
                             <option name="GioiHanTuoi">{{$item->TenGioiHan}} </option>
                            @endforeach   
                        </select>
                     
                      </div>

                      <div class="form-group row">
                          <div class="col-sm-5 mb-3 mb-sm-0">
                            <label class="text-dark" for="ThoiLuong">Thời lượng</label>
                            <input type="number" min="0" name="ThoiLuong" class="form-control form-control-user"id="exampleInputPassword" >
                            <p class="text-danger">{{$errors->first('ThoiLuong')}}</p>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="text-dark" for="HinhAnh">Hình ảnh</label>
                        <input type="file" name="HinhAnh" alt="Profile Image" onchange="previewFile(this)" id="exampleInputEmail" />
                        <img id="previewImage" width="300px" height="200px" alt="">
                        <p class="text-danger">{{ $errors->first('HinhAnh') }}</p>
                      </div>
                      <button class="btn btn-primary btn-user btn-block">Thêm mới</button>
                  </form>
                  <hr>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
