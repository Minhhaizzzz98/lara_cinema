@extends('layout')
@section('content')
<div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h2 mb-2 text-center text-success">Employees</h1>


               <!-- DataTales Example -->
               <div class="card shadow mb-4">
                    <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Add new employee
                                </h6>

                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">

                                <form  method="POST" action="{{route('employees.store')}}" enctype="multipart/form-data" >
                                    @csrf
                                     <div class="form-group">
                                        <label class="control-label"> Username </label>
                                        <input class="form-control" name="TenTK" />
                                        @error('TenTK')
                                        <div class="alert alert-danger">The Username is requied</div>
                                  @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> Password </label>
                                        <input class="form-control" name="password" type="password" />
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> RePassword </label>
                                        <input class="form-control" name="RePassword" type="password" />
                                        @error('RePassword')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> FirstName </label>
                                        <input class="form-control" name="HoNV"/>
                                        @error('HoNV')
                                        <div class="alert alert-danger">The FirstName is requied</div>
                                         @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">LastName </label>
                                        <input class="form-control" name="TenNV"/>
                                        @error('TenNV')
                                        <div class="alert alert-danger">The LastName is requied</div>
                                  @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> Position </label> <br>
                                        <select name="ChucVu">
                                            @foreach ($chucvus as $chucvu)
                                                <option value="{{$chucvu->MaCV}}">
                                                    {{$chucvu->TenCV}}
                                                </option>
                                            @endforeach
                                        <select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> Manage by </label> <br>
                                        <select name="Ma_NQL">
                                            @foreach ($nhanviens as $nhanvien)
                                                <option value="{{$nhanvien->MaNV}}">
                                                    {{$nhanvien->HoNV." ".$nhanvien->TenNV}}
                                                </option>
                                            @endforeach
                                        <select>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> Image </label>
                                        <input class="form-control" name="Anh" type="file" />

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> Birthday </label>
                                        <input class="form-control" name="NgSinh" type="date" />
                                        @error('NgSinh')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                  @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Address </label>
                                        <input class="form-control" name="DiaChi"/>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Phone </label>
                                        <input class="form-control" name="SDT"/>
                                        @error('SDT')
                                        <div class="alert alert-danger">The phone number is invalid</div>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label"> Email </label>
                                        <input class="form-control" name="Email" type="email"/>
                                        @error('Email')
                                              <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> ADD </button>
                                    </div>

                                </form>


                            </div>
                        </div>

                        <div>
                            <a class="btn btn-dark" href = "{{route('employees.index')}}">Danh sách sản phẩm</a>
                        </div>

                    </div>
                </div>



</div>
@endsection
