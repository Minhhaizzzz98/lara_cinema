@extends('layout')
@section('content')
<form method="POST" action="{{url('/product/create')}}">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Tên</label>
      <input type="text" name="TenPhim" class="form-control">
      @if ($errors->has('TenPhim'))
      <span class="error">{{ $errors->first('TenPhim') }}</span>
      @endif
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Image</label>
        <input type="text" name="IMAGE" class="form-control">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Price</label>
      <input type="text" name="PRICE" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Status</label>
    <input type="text" name="STATUS" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Group_Product</label>
    <input type="text" name="GROUP_PRODUCT" class="form-control">
  </div>
    
    <a href="/product/store" type="submit" class="btn btn-primary">Create</a>
  </form>
@endsection
