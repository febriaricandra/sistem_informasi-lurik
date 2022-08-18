@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<h1>{{$viewData['transaksi']->getNamaPembeli()}}</h1>
<h2>{{$viewData['transaksi']->getNamaProduk()}}</h2>
@endsection