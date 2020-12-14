@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-primary">QUẢN LÝ THỂ LOẠI PHIM</h1>

  

    <a href="/LoaiPhim/create" class="btn btn-primary"><i class="fa fa-film" aria-hidden="true"> Phim mới</i></a>

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
                                     <a class="btn btn-info" type="submit" href="/LoaiPhim/edit/{{$item->id}}">Chỉnh sửa</a>
                                     <a class="btn btn-danger" type="submit" href="/LoaiPhim/delete/{{$item->id}}">Xóa thể loại</a>
                                </td>
                                {{-- <td> <a class="btn btn-warning" href="{{route('positions.show',$chucvu->MaCV)}}"> <i class="fas fa-eye"></i> </a> </td>

                                <td> <a class="btn btn-success"> <i class="fas fa-user-edit"></i> </a> </td>

                                @if ($chucvu->TrangThai == 1)
                                <td>  <form method="POST" action="{{route('positions.destroy',$chucvu->MaCV)}}"> @method('DELETE') @csrf <button type="submit" class="btn btn-danger"> <i class="fa fa-lock"> </i></button> </form></td>
                                @endif

                                @if ($chucvu->TrangThai == 0)
                                <td>  <form method="POST" action="{{route('positions.destroy',$chucvu->MaCV)}}"> @method('DELETE') @csrf <button type="submit" class="btn btn-success"> <i class="fa fa-unlock"> </i></button> </form> </td>
                                @endif --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
               
            </div>
        </div>
    </div>

</div>
@endsection