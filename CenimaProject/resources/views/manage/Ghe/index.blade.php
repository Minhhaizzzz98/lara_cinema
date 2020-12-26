@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-success">QUẢN LÝ GHẾ</h1>
    

    <a href="{{url('/ghe/create')}}" class="btn btn-primary">THÊM GHẾ &nbsp;<i class="fas fa-plus"></i> </a>
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
                            <th>Mã Ghế</th>
                            <th>Giá ghế</th>
                            <th>Phòng</th>
                            <th>Trạng Thái</th>
                            <th colspan="3">Công cụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $item)
                            <tr>
                                <td>
                                    @if($item->sort < 10) 
                                        {{$item->Day.'0'.$item->sort}}
                                    @else
                                        {{$item->Day.$item->sort}}
                                    @endif
                                </td>
                                <td>{{ number_format($item->GiaGhe) }} VND</td>
                                <td>{{ $item->phong->TenPhong }}</td>
                                
                                <td>
                                    @if($item->TrangThai == 1) 
                                        <a href="{{url('/ghe/inactive/'.$item->id)}}" class="btn btn-success">Được sử dụng</a>
                                    @endif
                                    @if($item->TrangThai == 0) 
                                        <a href="{{url('/ghe/active/'.$item->id)}}" class="btn btn-warning">Ngưng sử dụng</a>
                                    @endif
                                </td>

                                <td><a class="btn btn-primary" type="submit" href="{{url('/ghe/edit/'.$item->id)}}">Sửa</a></td>
                                <td><a class="btn btn-primary" type="submit" href="{{url('/ghe/details/'.$item->id)}}">Chi tiết</a></td>
                                <td><a class="btn btn-danger" type="submit" href="{{url('/ghe/delete/'.$item->id)}}" onclick="return confirm('Bạn muốn xóa ghế@if($item->sort < 10) {{$item->Day.'0'.$item->sort}} @else {{$item->Day.$item->sort}} @endif?')">Xóa</a></td>
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