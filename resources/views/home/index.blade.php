@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<section class="d-flex flex-row justify-content-center align-items-center">
    <div class="div">
        <h1>Mulyatex Lurik Pedan</h1>
        <p>Online shop kain dan penjualan segala jenis kain lurik</p>
        <div class="d-flex">
            <a style="margin-right: 4px;" class="text-decoration-none fw-bold text-secondary" href="{{route('product.index')}}">Produk Kami</a>
            <a class="text-decoration-none fw-bold" href="{{route('home.about')}}">Tentang Kami</a>
        </div>
    </div>
    <div class="div">
        <div class="row">
            <div class="col-lg-4">
                <img width="200px" src="{{asset('/img/lurik2.jpg')}}" class="img-fluid p-2">
                <img width="200px" src="{{asset('/img/lurik3.jpg')}}" class="img-fluid p-2">
            </div>
            <img width="100px" class="col-lg-8" src="{{asset('/img/lurik1.jpg')}}" class="img-fluid" alt="">
        </div>
    </div>
</section>
@endsection