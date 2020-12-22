@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-primary">QUẢN LÝ DIỄN VIÊN</h1>

  

    <a href="/LoaiPhim/create" class="btn btn-primary"><i class="fa-user-friends" aria-hidden="true">Thêm diễn viên</i></a>

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
                                     <a class="btn btn-info" type="submit" href="/DienVien/edit/{{$item->id}}">Chỉnh sửa</a>
                                     <a class="btn btn-danger" type="submit" href="/DienVien/delete/{{$item->id}}">Xóa diễn viên</a>
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