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
                            <th>Chi nhánh</th>
                            <th>Trạng thái</th>
                            <th colspan="2">Công cụ</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        @foreach ($list as $item)

                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->TenRap }}</td>
                                <td>{{ $item->chinhanh->TenChiNhanh }}</td>
                                <td>
                                    @if($item->TrangThai == 1) 
                                        <a href="" class="btn btn-success">Đang hoạt động</a>
                                    @else 
                                        <a href="" class="btn btn-warning">Ngưng hoạt động</a>
                                    @endif
                                </td>

                                <td><a class="btn btn-primary" type="submit" href="{{url('/phim/edit/'.$item->id)}}">Sửa</a></td>
                                <td><a class="btn btn-danger" type="submit" href="{{url('/phim/delete/'.$item->id)}}">Xóa</a></td>
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