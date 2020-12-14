

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
                        <h3>Chọn thể loại phim</h3>
                  </div>
             
                  <form class="user" method="POST" action="{{url('/phim/create/add_theloai/'.request()->session()->get('id_phim_new'))}}">
                    @csrf
                        @foreach ($loaiphim as $item)
                            <div class="form-group">
                              <label class="text-dark" for="TenPhim">{{$item->TenLoaiPhim}}</label>
                              <input type="checkbox" name="theloai{{$item->id}}" value="{{$item->TenLoaiPhim}}"/>
                            </div>
                        @endforeach
              
                      <button class="btn btn-primary btn-user btn-block">Xác nhận</button>
                  </form>
                  <hr>
              </div>
          </div>
      </div>
  </div>
</div>
  @endsection
  
 