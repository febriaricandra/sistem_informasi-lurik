@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    @foreach($viewData["products"] as $product)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{asset('/storage/'.$product->getGambar())}}" class="card-img-top img-card">
            <div class="card-body d-flex flex-column"> 
                <h1 class="fs-3 text-uppercase">{{$product->getNamaProduk()}}</h1>
                <h2 class="fs-6 opacity-50">Rp.{{$product->getHarga()}}</h2>
                <div class="">
                    <a class="btn btn-primary text-white" href="{{route('product.show', ['id'=>$product->getId()])}}">Check Product</a>    
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
<!-- 
route('product.show', ['id'=> $product->getId()]) // $product->getNamaProduk()

    -->