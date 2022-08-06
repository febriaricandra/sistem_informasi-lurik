@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card">
    <div class="card-header">
        Produk dalam keranjang
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <th scope="col">id</th>
                <th scope="col">Nama produk</th>
                <th scope="col">Merk</th>
                <th scope="col">Bahan</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
            </thead>
            <tbody>
                @foreach($viewData["products"] as $product)
                <tr>
                    <td>{{$product->getId()}}</td>
                    <td>{{$product->getNamaProduk()}}</td>
                    <td>{{$product->getMerk()}}</td>
                    <td>{{$product->getBahan()}}</td>
                    <td>{{$product->getUkuran()}}</td>
                    <td>{{$product->getHarga()}}</td>
                    <td>{{session('products')[$product->getId()]}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Total Bayar:</b>{{$viewData['total']}}</a>
                <a href="{{route('form.index')}}" class="btn btn-primary text-white mb-2">Beli</a>
                <a href="{{route('cart.delete')}}">
                    <button class="btn btn-danger mb-2">
                        Hapus Produk dalam Keranjang
                    </button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection