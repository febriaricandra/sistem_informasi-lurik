@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<form method="POST" action="{{route('form.store')}}" enctype="multipart/form-data">
  @csrf
    <div class="form-group">
      <label>Nama Penerima</label>
      <input type="name" name="nama_pembeli" class="form-control" id="" placeholder="Nama">
    </div>
    <div class="form-group">
      <label>Email</label>
      <input type="text" name="email" class="form-control" id="" placeholder="Email">
    </div>
    <div class="form-group">
      <label>Nomor HP Penerima</label>
      <input type="number" name="no_hp" class="form-control" id="" placeholder="Nomor HP">
    </div>
    <div class="form-group">
      <label>Alamat Penerima</label>
      <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label>Kota</label>
      <input type="text" name="kota" class="form-control" id="" placeholder="Kota">
    </div>
    <div class="form-group">
      <label>Provinsi</label>
      <input type="text" name="provinsi" class="form-control" id="" placeholder="Provinsi">
    </div>
    <div class="form-group">
      <label class="col-lg-8 col-md-6 col-sm-12 col-form-label">Upload Bukti Transfer:</label>
        <div class="col-lg-10 col-md-6 col-sm-12">
          <input class="form-control" type="file" name="bukti_tf">
        </div>
    </div>
    <h1 class="bg-primary text-white m-2 rounded">
      Detail Produk
    </h1>
    @foreach($viewData['products'] as $product)
    <div class="form-group">
      <label>Nama Produk:</label>
      <input type="text" class="form-control" value="{{$product->getNamaProduk()}}" disabled> 
    </div>
    <div class="form-group">
      <label>Merk:</label>
      <input type="text" class="form-control" value="{{$product->getMerk()}}" disabled> 
    </div>
    <div class="form-group">
      <label>Ukuran:</label>
      <input type="text" class="form-control" value="{{$product->getUkuran()}}" disabled> 
    </div>
    <div class="form-group">
      <label>Harga:</label>
      <input type="text" class="form-control" value="{{$product->getHarga()}}" disabled> 
    </div>
    <div class="form-group">
      <label>Jumlah:</label>
      <input type="text" name="quantity" class="form-control" value="{{session('products')[$product->getId()]}}" disabled> 
    </div>
    <hr />
    @endforeach
    <div class="form-group">
      <label>Total:</label>
      <input type="text" name="total" class="form-control" value="{{$viewData['total']}}" disabled> 
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
@endsection