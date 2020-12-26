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
                      <h1 class="text-primary">THÊM DIỄN VIÊN MỚI</h1>
                  </div>
             
                  <form class="user" method="POST" action="{{url('/DienVien/create')}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                         <label class="text-dark" for="TeNDienVien">Tên diễn viên </label>
                         <input type="text" name="TenDienVien" class="form-control form-control-user" id="exampleFirstName" s>
                         <p class="text-danger">{{ $errors->first('TenDienVien') }}</p>
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