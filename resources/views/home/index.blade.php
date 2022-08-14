@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<section class="d-flex flex-row justify-content-center align-items-center">
    <div class="div">
        <h1>Sistem Informasi Penjualan Kain Lurik</h1>
        <p>Sistem ini guna menunjang usaha kelas menengah kebawah</p>
        <div class="d-flex">
            <a class="mx-2 text-decoration-none fw-bold text-secondary" href="{{route('product.index')}}">Produk Kami</a>
            <a class="text-decoration-none fw-bold" href="{{route('home.about')}}">Tentang Kami</a>
        </div>
    </div>
    <div class="div">
        <div class="row">
            <div class="col-lg-4">
                <img src="{{asset('/img/lurik2.jpg')}}" class="img-fluid p-2">
                <img src="{{asset('/img/lurik3.jpg')}}" class="img-fluid p-2">
            </div>
            <img class="col-lg-8" src="{{asset('/img/lurik1.jpg')}}" class="img-fluid" alt="">
        </div>
    </div>
</section>
@endsection