@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-success">Quản lý Phim </h1>

  

    <a href="/phim/create" class="btn btn-primary"><i class="fas fa-plus"></i> </a>

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
                            <th>Mã Phim</th>
                            <th>Tên phim</th>
                            <th> Ngày ĐK chiếu</th>
                            <th>Ngày kết thúc</th>
                            <th>Thời lượng</th>
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                            <td>Hành Động</td>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach ($phims as $item)

                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{$item->TenPhim}}</td>
                                <td>{{$item->NgayDKChieu}}</td>
                                <td>{{$item->NgayKetThuc}}</td>
                                <td>{{$item->ThoiLuong}} Phút</td>
                                <td><img width="100px" height="80px" src="{{$item->HinhAnh}}" alt=""></td>
                                <td>
                                    @php
                                    if($item->TrangThai==1){
                                     echo'Đang chiếu';
                                    }
                                    else{
                                        echo'Đã kết thúc';
                                       }
                                   @endphp
                                </td>
                               
                                
                                 <td><a class="btn btn-primary" type="submit" href="/phim/edit/{{$item->id}}">Edit</a>
                                    |<a class="btn btn-danger" type="submit" href="/phim/delete/{{$item->id}}">Delete</a>
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
                {{$phims->links()}}
            </div>
        </div>
    </div>

</div>
@endsection