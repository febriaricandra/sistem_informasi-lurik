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
                    <th scope="col">Bukti Transfer</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["transaksi"] as $transaksi)
                <tr>
                    <td>{{ $transaksi->getId() }}</td>
                    <td>{{$transaksi->getNamaPembeli()}}</td>
                    <td>{{ $transaksi->getEmail() }}</td>
                    <td>{{$transaksi->getNoHp()}}</td>
                    <td>{{$transaksi->getAlamat()}}</td>
                    <td>{{$transaksi->getKota()}}</td>
                    <td>{{$transaksi->getProvinsi()}}</td>
                    <td><img width="200px" src="{{asset('/storage/'.$transaksi->getBuktiTf())}}" alt=""></td>
                    <td>{{$transaksi->getTotal()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection