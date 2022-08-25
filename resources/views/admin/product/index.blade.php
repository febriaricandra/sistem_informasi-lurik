@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Daftar Produk
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Produk:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="nama_produk" value="{{ old('nama_produk') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Harga:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="harga" value="{{ old('harga') }}" type="number" class="form-control">
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
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Merk:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="merk" value="{{ old('merk') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Bahan:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="bahan" value="{{ old('bahan') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-6 col-md-6 col-sm-12 col-form-label">Gambar:</label>
                        <div class="col-lg-12 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="gambar">
                        </div>
                    </div>
                </div>
                <div class="col">
                    &nbsp;
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
                    <div class="mb-3 row">
                        <label class="col-lg-8 col-md-6 col-sm-12 col-form-label">Stock:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="stock" value="{{ old('stock') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="keterangan" rows="3">{{ old('keterangan') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-header">
        Atur Produk
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Name</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["products"] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getStock() }}</td>
                    <td>{{$product->getKodeProduk()}}</td>
                    <td>{{ $product->getNamaProduk() }}</td>
                    <td>{{$product->getHarga()}}</td>
                    <td>
                        <a href="{{route('admin.product.edit',['id'=>$product->getId()])}}" class="btn btn-primary">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{route('admin.product.delete',$product->getId())}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
