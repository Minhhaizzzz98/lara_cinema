@extends('layout')
@section('content')
<div class="container-fluid">
     <!-- Page Heading -->
     <h1 class="h2 mb-2 text-center text-success">Position</h1>


               <!-- DataTales Example -->
               <div class="card shadow mb-4">
                    <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Add new position
                                </h6>

                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">

                                <form  method="POST" action="{{route('positions.store')}}"  >
                                    @csrf
                                     <div class="form-group">
                                        <label class="control-label"> Name </label>
                                        <input class="form-control" name="TenCV" />
                                        @error('TenCV')
                                        <div class="alert alert-danger"> The Name is invalid</div>
                                  @enderror


                                        <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"> ADD </button>
                                    </div>

                                </form>


                            </div>


                        <div>
                            <a class="btn btn-dark" href = "{{route('positions.index')}}">List of positions</a>
                        </div>

                    </div>
                </div>



</div>
@endsection
