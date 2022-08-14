@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card">
    <div class="card-header">
        Atur Produk
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor HP</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Detail Produk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["transaksi"] as $transaksi)
                <tr>
                    <td>{{ $transaksi->getId() }}</td>
                    <td>{{$transaksi->getNamaPembeli()}}</td>
                    <td>{{ $transaksi->getEmailPembeli() }}</td>
                    <td>{{$transaksi->getNomorHpPembeli()}}</td>
                    <td>{{$transaksi->getAlamatPembeli()}}</td>
                    <td>{{$transaksi->getKotaPembeli()}}</td>
                    <td>{{$transaksi->getProvinsiPembeli()}}</td>
                    <td>{{$transaksi->getTotal()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection