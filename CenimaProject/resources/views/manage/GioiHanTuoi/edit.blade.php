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
                        <h2 class="text-dark">CHỈNH SỬA GIỚI HẠN TUỔI</h1>
                    </div>
                  <form class="user" method="POST" action="{{url('GioiHanTuoi/update/'.$gioihantuoi->id)}}">
                    @csrf
                        <div class="form-group ">
                           <label class="text-dark" for="TenGioiHan">Tên giới hạn</label>
                           <input type="text" name="TenGioiHan" class="form-control form-control-user" id="exampleFirstName" value="{{$gioihantuoi->TenGioiHan}}" placeholder="First Name">
                           <p class="text-danger">{{ $errors->first('TenGioiHan') }}</p>
                        </div>
                        <button  class="btn btn-primary btn-user btn-block">Cập nhật</button>   
                    </form>
                   
                    <hr>
                </div>
                <a type="submit" class="btn btn-primary" href="/GioiHanTuoi/index">Quay lại</a>
            </div>
        </div>
    </div>
</div>
   
@endsection
