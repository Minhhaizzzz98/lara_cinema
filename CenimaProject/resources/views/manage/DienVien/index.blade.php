@extends('layout')
@section('content')

 <!-- Modal -->
 <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5  class="modal-title" id="exampleModalLongTitle">Thêm diễn viên cho phim</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form  id="form-add" >
          @csrf
             <div class="form-group">
                    <label class="text-dark">Chọn phim cần thêm diễn viên:</label><br>
                    <select class="phim" name="phim" id="roleType"  >
                        <option value="s">Chọn phim</option>
                    </select>
                    <p class="text-danger">{{ $errors->first('TenLoaiPhim') }}</p>
             </div>
             <div class="form-group">
                <label class="text-dark">Nhập tên diễn viên</label>
                <input id="DienVien" type="text" name="DienVien" class="form-control form-control-user" >
                <p class="text-danger">{{ $errors->first('TenLoaiPhim') }}</p>
         </div>
             <button type="submit" id="add-data" class="btn btn-primary">Thêm mới</button>
         </form>
         <div class="alert alert-success" style="display: none"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-primary">QUẢN LÝ DIỄN VIÊN</h1>
    <button onclick="loadRoleTypes()"data-toggle="modal" data-target="#add" class="btn btn-primary"><i class="fas fa-user" aria-hidden="true"> Thêm diễn viên</i></button>
   
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center table-stripped table-hover" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã diễn viên</th>
                            <th>Tên diễn viên</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach ($list as $item)

                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->TenDienVien}}</td>             
                                 <td>
                                    <a href="javascript:void(0)" data-toggle="modal" onclick="suaDienVien({{$item->id}})" data-target="#add" class="btn btn-info" type="submit">Chỉnh sửa</a>|
                                     <a href="javascript:void(0)"  class="btn btn-danger" onclick="xoaDienvien({{$item->id}})" >Xóa diễn viên</a>
                                </td>
                           
                            </tr>
                        @endforeach

                    </tbody>
                </table>
               
            </div>
        </div>
    </div>

</div>

@endsection

<script>
    function loadRoleTypes()
    {      
            $('#roleType').empty();
            $.get('/Phim/get', function(Phim){ 
                    var array=JSON.parse(Phim);  
                    for(var i=0;i<array.length;i++)
                    {
                        $('#roleType').append('<option value='+array[i].id+'>'+array[i].id+': '+array[i].TenPhim+'</option>');     
                    }
            });   
    }

</script>

<script>
     $(document).ready(function(){
        $("select.phim").change(function(){
            var selectedValue = $(".phim").children("option:selected").val();
            alert(selectedValue);
        });
     });
</script>