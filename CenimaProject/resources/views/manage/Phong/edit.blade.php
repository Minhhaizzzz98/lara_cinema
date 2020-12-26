@extends('layout')
@section('content')

<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <div class="col">
        <div class="col-lg-6">
            <div class="p-5">
                <div class="text-center">
                    <h1 class="text-primary">SỬA PHÒNG {{ $data->TenPhong }}</h1>
                </div>
                <form class="user" method="POST" action="{{url('/phong/update/'.$data->id)}}">
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label class="text-dark" for="TenPhong">Tên phòng: </label>
                    <input type="text" name="TenPhong" class="form-control form-control-user" id="exampleFirstName" placeholder="Nhập tên phòng" value="{{$data->TenPhong}}">
                    <p class="text-danger">{{ $errors->first('TenPhong') }}</p>
                    
                    <label class="text-dark" for="Day">Rạp: </label>
                    <select class="form-control" id="exampleFirstName" name="rap_id" >
                        @foreach ($rap as $item)
                            @if($item->id == $data->rap_id)
                                <option value="{{$item->id}}" selected>{{$item->TenRap}}</option>
                            @else
                                <option value="{{$item->id}}">{{$item->TenRap}}</option>
                            @endif
                        @endforeach   
                    </select>
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
