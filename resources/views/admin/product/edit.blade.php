@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('admin.product.update', ['id'=> $viewData['product']->getId()]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Produk:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="nama_produk" value="{{ $viewData['product']->getNamaProduk() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Harga:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="harga" value="{{ $viewData['product']->getHarga() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6">Ukuran</label>
                        <div class="col-lg-10 col-md-6 col-sm-12 col-form-label">
                            <input type="text" name="ukuran" value="{{old('ukuran')}}" class="form-control"> 
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Bahan:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="bahan" value="{{ $viewData['product']->getBahan() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Merk:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="merk" value="{{ $viewData['product']->getMerk() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-8 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="gambar">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Motif:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="motif" value="{{ old('motif') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-8 col-md-6 col-sm-12 col-form-label">Kode Produk:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="kode_produk" value="{{ old('kode_produk') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="keterangan" rows="3">{{ $viewData['product']->getKeterangan() }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>
@endsection