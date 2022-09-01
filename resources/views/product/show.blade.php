@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/storage/'.$viewData["product"]->getGambar()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title fs-1 text-uppercase">
                    {{ $viewData["product"]->getNamaProduk() }}
                </h5>
                <h5 class="card-subtitle opacity-50">Harga: (Rp.{{ $viewData["product"]->getHarga() }})</h5>
                <p class="card-text">Dekripsi:<br/>{{ $viewData["product"]->getKeterangan() }}</p>
                <p class="card-text">Bahan: {{$viewData["product"]->getBahan()}}</p>
                <p class="card-text">Merk: {{$viewData["product"]->getMerk()}}</p>
                <p class="card-text">Stok: {{$viewData["product"]->getStock()}}</p>
                <p class="card-text">
                    <form method="POST" action="{{route('cart.add', ['id'=>$viewData["product"]->getId()])}}">
                        <div class="row">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">Jumlah</div>
                                    <input type="number" min="1" max="{{$viewData["product"]->getStock()}}" class="form-control quality-input" name="quantity" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn bg-primary text-white" type="submit">Add to cart</button>
                            </div>
                        </div>
                    </form>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection