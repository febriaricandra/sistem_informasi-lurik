@extends('layouts.app')
@section('content')
<div class="alert alert-success" role="alert">
    <h1>Transaksi Berhasil</h1>
    <h2>silahkan cetak bukti pembayaran</h2>
    <a class="alert-link" href="{{action('FormController@downloadPDF')}}">Download Bukti Pembayaran</a>
</div>
@endsection