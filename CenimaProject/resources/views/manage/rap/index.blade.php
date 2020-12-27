@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-success">QUẢN LÝ RẠP</h1>
    

    <a href="{{url('/rap/create')}}" class="btn btn-primary">THÊM RẠP &nbsp;<i class="fas fa-plus"></i> </a>
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
                            <th>Mã Rạp</th>
                            <th>Tên rạp</th>
                            <th>Địa chỉ</th>
                            <th>SĐT</th>
                            <th>Trạng thái</th>
                            <th colspan="3">Công cụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)

                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->TenRap }}</td>
                                <td>{{ $item->DiaChi }}</td>
                                <td>{{ $item->SDT }}</td>
                                <td>
                                    @if($item->TrangThai == 1) 
                                        <a href="{{url('/rap/inactive/'.$item->id)}}" class="btn btn-success">Đang hoạt động</a>
                                    @else 
                                        <a href="{{url('/rap/active/'.$item->id)}}" class="btn btn-warning">Ngưng hoạt động</a>
                                    @endif
                                </td>
                                <td><a class="btn btn-primary" type="submit" href="{{url('/rap/details/'.$item->id)}}">Chi tiết</a></td>
                                <td><a class="btn btn-primary" type="submit" href="{{url('/rap/edit/'.$item->id)}}">Sửa</a></td>
                                <td><a class="btn btn-danger" type="submit" href="{{url('/rap/delete/'.$item->id)}}" onclick="return confirm('Bạn muốn xóa {{$item->TenRap}}?')">Xóa</a></td>
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