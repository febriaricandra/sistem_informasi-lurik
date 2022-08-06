@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<form>
  <div class="form-group">
    <label>Nama Penerima</label>
    <input type="name" class="form-control" id="" placeholder="Nama">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" id="" placeholder="Email">
  </div>
  <div class="form-group">
    <label>Nomor HP Penerima</label>
    <input type="number" class="form-control" id="" placeholder="Nomor HP">
  </div>
  <div class="form-group">
    <label>Alamat Penerima</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Kota</label>
    <input type="text" class="form-control" id="" placeholder="Kota">
  </div>
  <div class="form-group">
    <label>Provinsi</label>
    <input type="text" class="form-control" id="" placeholder="Provinsi">
  </div>
  <h1 class="bg-primary text-white m-2 rounded">
    Detail Produk
  </h1>
  @foreach($viewData['products'] as $product)
  <div class="form-group">
    <label>Nama Produk:</label>
    <input type="text" class="form-control" value="{{$product->getNamaProduk()}}" disabled> 
  </div>
  <hr />
  @endforeach
  <div class="form-group">
    <label>Total:</label>
    <input type="text" class="form-control" value="{{$viewData['Total']}}" disabled> 
  </div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endsection