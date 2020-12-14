@extends('layout')
@section('content')

    {{-- <div class="card shadow mb-4">
        <div class="row">
            <div class="col-md-5">
                <img width="400px" height="400px" src="{{$phim->HinhAnh}}" alt="Image" class="img-fluid">
              </div>
              <div class="col-md-6">
                <h1 class="text-dark">{{$phim->TenPhim}}</h1><br>    
                <h6 class="text-dark">Đạo diễn: {{$phim->daodiens->HoTen}}</h6><br>  
                <h6 class="text-dark">Loại phim: Kinh dị</h6><br>
                <h6 class="text-dark">Diễn viên: Tường Vy, Quốc Trọng</h6><br>      
                <h6 class="text-dark">Thời lượng: {{$phim->ThoiLuong}}</h6><br>
                <h6 class="text-dark">Thể loại: Kinh dị</h6><br>
                <h6 class="text-dark">Độ tuổi: Trên 18</h6><br>
                <h6 class="text-dark">Ngày đăng kí chiếu: 16/06/2020</h6><br>
                <h6 class="text-dark">Ngày kết thúc chiếu: 17/07/2020</h6><br>
                <h6 class="text-dark">Trạng thái: Đang chiếu</h6><br>
              </div>
            </div>
        </div>
     
    </div> --}}
    <div class="site-section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="{{$phim->HinhAnh}}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-6">
              <h1 class="text-dark">{{$phim->TenPhim}}</h1>
              <p>Đạo diễn: {{$phim->daodiens->HoTen}}</p>
              <p class="mb-4">Diễn viên: Tường Vy, Quốc Trọng</p>
              <p>Thời lượng: {{$phim->ThoiLuong}} phút</p>
              <p>Thể loại: Kinh dị</p>
              <h6 class="text-dark">Độ tuổi: Trên 18</h6><br>
              <h6 class="text-dark">Ngày đăng kí chiếu: 16/06/2020</h6><br>
              <h6 class="text-dark">Ngày kết thúc chiếu: 17/07/2020</h6><br>
              <h6 class="text-dark">Trạng thái: Đang chiếu</h6><br>
              {{-- <div class="mb-1 d-flex">
                <label for="option-sm" class="d-flex mr-3 mb-3">
                  <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-sm" name="shop-sizes"></span> <span class="d-inline-block text-black">Small</span>
                </label>
                <label for="option-md" class="d-flex mr-3 mb-3">
                  <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-md" name="shop-sizes"></span> <span class="d-inline-block text-black">Medium</span>
                </label>
                <label for="option-lg" class="d-flex mr-3 mb-3">
                  <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-lg" name="shop-sizes"></span> <span class="d-inline-block text-black">Large</span>
                </label>
                <label for="option-xl" class="d-flex mr-3 mb-3">
                  <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" id="option-xl" name="shop-sizes"></span> <span class="d-inline-block text-black"> Extra Large</span>
                </label>
              </div>
              <div class="mb-5">
                <div class="input-group mb-3" style="max-width: 120px;">
                <div class="input-group-prepend">
                  <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                </div>
                <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <div class="input-group-append">
                  <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                </div>
              </div>
  
              </div>
              <p><a href="cart.html" class="buy-now btn btn-sm btn-primary">Add To Cart</a></p> --}}
  
            </div>
          </div>
        </div>
      </div>

@endsection