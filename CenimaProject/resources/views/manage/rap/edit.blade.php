@extends('layout')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <div class="col">
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="text-primary" style="text-transform: uppercase">SỬA {{$data->TenRap}}</h1>
                </div>
                  <form class="user" method="POST" action="{{url('/rap/update/'.$data->id)}}">
                    {{ csrf_field() }}
                      <div class="form-group">
                        <label class="text-dark" for="TenRap">Tên rạp </label>
                        <input type="text" name="TenRap" class="form-control form-control-user" id="exampleFirstName" value="{{$data->TenRap}}">
                        <p class="text-danger">{{ $errors->first('TenRap') }}</p>

                        <label class="text-dark" for="DiaChi">Địa chỉ: </label>
                        <input type="text" name="DiaChi" class="form-control form-control-user" id="exampleFirstName" value="{{$data->DiaChi}}" placeholder="Điền địa chỉ">
                        <p class="text-danger">{{ $errors->first('DiaChi') }}</p>

                        <label class="text-dark" for="SDT">SĐT: </label>
                        <input type="text" name="SDT" class="form-control form-control-user" id="exampleFirstName" value="{{$data->SDT}}" placeholder="Điền số điện thoại">
                        <p class="text-danger">{{ $errors->first('SDT') }}</p>
                      </div>
                      <button class="btn btn-primary btn-user btn-block">Cập nhật</button>
                  </form>
                  <hr>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
