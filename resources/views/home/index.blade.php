@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img class="img-fluid rounded" src="{{asset('/img/lurik1.jpg')}}" alt="">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img class="img-fluid rounded" src="{{asset('/img/lurik2.jpg')}}" alt="">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img class="img-fluid rounded" src="{{asset('/img/lurik3.jpg')}}" alt="">
    </div>
</div>
@endsection