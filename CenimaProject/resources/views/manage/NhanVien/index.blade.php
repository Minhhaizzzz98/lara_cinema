@extends('layout')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-2 text-center text-success">Employees</h1>

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
                            <th>Image</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Position</th>
                            <th colspan="3"> Options</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Position</th>
                            <th colspan="3"> Options</th>
                        </tr>
                    </tfoot>
                    <tbody>

                        @foreach ($nhanviens as $nhanvien)


                            <tr>
                            <td> <img width="auto" height="100px" src="{{asset('images/nhanviens/'.$nhanvien->Anh)}}" /> </td>
                            <td>{{$nhanvien->HoNV}}</td>
                                <td>{{$nhanvien->TenNV}}</td>
                                <td>{{$nhanvien->TenCV}}</td>
                            <td> <a class="btn btn-warning" href="{{route('employees.show',$nhanvien->MaNV)}}"> <i class="fas fa-eye"></i> </a> </td>

                                <td> <a class="btn btn-success" href="{{route('employees.edit',$nhanvien->MaNV)}}"> <i class="fas fa-user-edit"></i> </a> </td>

                                @if ($nhanvien->isLocked == 0)
                                <td>  <form method="POST" action="{{route('employees.destroy',$nhanvien->MaNV)}}"> @method('DELETE') @csrf <button type="submit" class="btn btn-danger"> <i class="fa fa-lock"> </i></button> </form></td>
                                @endif

                                @if ($nhanvien->isLocked == 1)
                                <td>  <form method="POST" action="{{route('employees.destroy',$nhanvien->MaNV)}}"> @method('DELETE') @csrf <button type="submit" class="btn btn-success"> <i class="fa fa-unlock"> </i></button> </form> </td>
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
