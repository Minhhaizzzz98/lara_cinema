@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-success">Brand</h1>

    <br>
    <br>

    <a href="{{route('employees.create')}}" class="btn btn-primary"><i class="fas fa-user-plus"></i> </a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center table-stripped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Number of Rooms</th>
                            <th>Phone</th>
                            <th>Managed by</th>
                            <th colspan="3"> Options</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Number of Rooms</th>
                            <th>Phone</th>
                            <th>Managed by</th>
                            <th colspan="3"> Options</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($chinhanhs as $chinhanh)


                            <tr>
                            <td>{{$chinhanh->TenChiNhanh}} </td>
                            <td> {{$chinhanh->DiaChi}} </td>
                            <td>{{$chinhanh->SoLuongRap}} </td>
                            <td>{{$chinhanh->SDT}} </td>
                            <td> {{$chinhanh->HoNV.' '.$chinhanh->TenNV}}</td>



                            <td> <a class="btn btn-warning" href="{{route('chinhanhs.show',$chinhanh->MaNV)}}"> <i class="fas fa-eye"></i> </a> </td>

                                <td> <a class="btn btn-success" href="{{route('chinhanhs.edit',$chinhanh->MaNV)}}"> <i class="fas fa-user-edit"></i> </a> </td>

                                @if ($chinhanh->TrangThai == 1)
                                <td>  <form method="POST" action="{{route('chinhanhs.destroy',$chinhanh->MaNV)}}"> @method('DELETE') @csrf <button type="submit" class="btn btn-danger"> <i class="fa fa-lock"> </i></button> </form></td>
                                @endif

                                @if ($chinhanh->TrangThai == 0)
                                <td>  <form method="POST" action="{{route('chinhanhs.destroy',$chinhanh->MaNV)}}"> @method('DELETE') @csrf <button type="submit" class="btn btn-success"> <i class="fa fa-unlock"> </i></button> </form> </td>
                                @endif

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
