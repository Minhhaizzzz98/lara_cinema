@extends('layout')
@section('content')


  
  <!-- Modal -->
  <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5  class="modal-title" id="exampleModalLongTitle">Thêm thể loại phim</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="/LoaiPhim/create" method="POST" id="user-form" >
          {{ csrf_field() }}
             <div class="form-group">
                    <label class="text-dark" for="TenLoaiPhim">Tên thể loại </label>
                    <input id="TenTheLoai" type="text" name="TenLoaiPhim" class="form-control form-control-user" id="exampleFirstName"  placeholder="Hành động">
                    <p class="text-danger">{{ $errors->first('TenLoaiPhim') }}</p>
             </div>
             <input type="submit" id="add-data" value="Thêm" type="button" class="btn btn-primary">
         </form>
         <div class="alert alert-success" style="display: none"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
     
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5  class="modal-title" id="exampleModalLongTitle">Chỉnh sửa thể loại thể loại</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <form action="">
             <div class="form-group">
                    <label class="text-dark" for="TenLoaiPhim">Tên thể loại </label>
                    <input type="text" name="TenLoaiPhim" class="form-control form-control-user" id="exampleFirstName"  placeholder="Hành động">
                    <p class="text-danger">{{ $errors->first('TenLoaiPhim') }}</p>
             </div>
         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="button" class="btn btn-primary">Lưu lại</button>
        </div>
      </div>
    </div>
  </div>



<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-primary">QUẢN LÝ THỂ LOẠI PHIM</h1>

    <button data-toggle="modal" data-target="#add" class="btn btn-primary"><i class="fa fa-film" aria-hidden="true"> Thêm mới</i></button>

    
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center table-stripped table-hover" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã loại</th>
                            <th>Tên thể loại</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>               
                    <tbody>
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->TenLoaiPhim}}</td>
                                <td>
                                    @php
                                    if($item->TrangThai==1){
                                     echo'Sử dụng';
                                    }
                                    else{
                                        echo'Đã loại bỏ';
                                       }
                                   @endphp
                                </td>
                                   
                                 <td>
                                     <button data-toggle="modal" data-target="#edit" class="btn btn-info" type="submit">Chỉnh sửa</button>
                                     <button data-url="/LoaiPhim/delete/{{$item->id}}" id="delete" class="btn btn-danger" type="submit" >Xóa thể loại</button>
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
  $(document).ready(function()
    {
      
        
        $("#add-data").click(function(){         
           e.preventDefault();
          
           $.ajaxSetup({
               headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }

          $.ajax({
            url:"{{url('/LoaiPhim/create')}}",
            method: 'POST',
            data:{
              TenTheLoai:$('#TenTheLoai').val(),
              success: function(result){
             
              }   
            }

          })
        });
        
        $("#delete").click(function(){
          var url = $(this).attr('data-url');
         }
         $.ajax({
           url:a,
           method: 'GET',
           data:{
             success: function(result){
               window.location.reload();
             }   
           }

         })


        })


       

    //     $("#add-data").on('submit',function(e)
    //     {
    //         e.stopImmediatePropagation();

          

    //         // var form_data=$(this).serialize();
    //         // var button_action=$('#button_action').val();
    //         // var phone=$('#phone').val();

    //         var TenTheLoai=$('#TenTheLoai').val();
    //         var _token   = $('meta[name="csrf-token"]').attr('content');

    //         $.ajax({
    //             url:"/LoaiPhim/create",
    //             method:"POST",
    //             data:{
    //                 TenTheLoai:TenTheLoai,         
    //                 _token:_token
    //             },
    //             success:function(data)
    //             {
    //               toastr.success('Thêm thành công');
    //               $('#add').modal('hide');
    //               setTimeout(function(){
    //                 window.location.href="/LoaiPhim/index";
    //               },500);
    //             },
    //             error:function(jqXhr,textStatus,errorThrown)
    //             {
    //                 alert("Thêm thất bại");
    //             }
    //         });
    //     });
        
    //     $('.ad_button-delete').click(function(e)
    //     {
    //         var a=$(this).attr('data-index');
    //         console.log("click vao xoa thanh cong"+a);
    //         $.ajax({
    //             url:"/LoaiPhim/delete",
    //             method:"GET",
    //             dataType:"JSON",
    //             data:{
    //                 id:a
    //             },success:function(data)
    //             {
    //                 console.log("Thanh cong");
    //             },
    //             error:function(jqXhr,textStatus,errorThrown)
    //             {
    //                 console.log("that bai");
    //             }
    //         });
    //     });
    // });
</script>