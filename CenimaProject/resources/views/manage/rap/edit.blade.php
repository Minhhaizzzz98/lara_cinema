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
                        <input type="text" name="TenRap" class="form-control form-control-user" id="exampleFirstName"  value="{{$data->TenRap}}">
                        <p class="text-danger">{{ $errors->first('TenRap') }}</p>

                        <label class="text-dark" for="TenRap">Chọn chi nhánh: </label>
                        
                        <select class="form-control" id="exampleFirstName" name="chinhanh_id" >
                            @foreach ($list as $item)
                            @if($item->id == $data->chinhanh_id)
                              <option value="{{$item->id}}" selected>{{$item->TenChiNhanh}} </option>
                            @else
                              <option value="{{$item->id}}" >{{$item->TenChiNhanh}} </option>
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
