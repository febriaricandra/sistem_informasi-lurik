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
                    <th scope="col">Hapus Transaksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["transaksi"] as $transaksi)
                <tr>
                    <td>{{ $transaksi->getId() }}</td>
                    <td><a href="{{route('admin.transaksi.show',$transaksi->getId())}}">{{$transaksi->getNamaPembeli()}}</a></td>
                    <td>{{ $transaksi->getEmail() }}</td>
                    <td>{{$transaksi->getNoHp()}}</td>
                    <td>{{$transaksi->getAlamat()}}</td>
                    <td>{{$transaksi->getKota()}}</td>
                    <td>{{$transaksi->getProvinsi()}}</td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#myModal-{{$transaksi->getId()}}">
                            <img width="100px" src="{{asset('/storage/'.$transaksi->getBuktiTf())}}" alt="">
                        </button>
                        <div class="modal fade" id="myModal-{{$transaksi->getId()}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <img width="600px" src="{{asset('/storage/'.$transaksi->getBuktiTf())}}" alt="">
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>{{$transaksi->getTotal()}}</td>
                    <td>
                        <form action="{{ route('admin.transaksi.delete', $transaksi->getId()) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
<!--
    
-->