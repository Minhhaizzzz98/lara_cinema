@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-success">QUẢN LÝ GHẾ</h1>
    

    <a href="{{url('/phong/create')}}" class="btn btn-primary">THÊM PHÒNG &nbsp;<i class="fas fa-plus"></i> </a>
    <br/>
    <br/>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center table-stripped table-hover" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã Phòng</th>
                            <th>Tên phòng</th>
                            <th>Rạp</th>
                            <th>Ghế</th>
                            <th>Trạng Thái</th>
                            <th colspan="3">Công cụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->TenPhong }}</td>
                                <td>{{ $item->rap->TenRap }}</td>
                                <td>
                                    <p>Sử dụng được: {{ $item->ghes->where('TrangThai', '1')->count() }} </p>
                                    <p>Cần sửa: {{ $item->ghes->where('TrangThai', '0')->count() }}</p>
                                </td>
                                <td>
                                    @if($item->TrangThai == 1) 
                                        <a href="{{url('/phong/inactive/'.$item->id)}}" class="btn btn-success">Được sử dụng</a>
                                    @endif
                                    @if($item->TrangThai == 0) 
                                        <a href="{{url('/phong/active/'.$item->id)}}" class="btn btn-warning">Ngưng sử dụng</a>
                                    @endif
                                </td>

                                <td><a class="btn btn-primary" type="submit" href="{{url('/phong/edit/'.$item->id)}}">Sửa</a></td>
                                <td><a class="btn btn-primary" type="submit" href="{{url('/phong/details/'.$item->id)}}">Chi tiết</a></td>
                                <td><a class="btn btn-danger" type="submit" href="{{url('/phong/delete/'.$item->id)}}" onclick="return confirm('Bạn muốn xóa phòng {{ $item->TenPhong }}')">Xóa</a></td>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            {{ $list->links() }}
        </div>
        
    </div>

</div>
@endsection