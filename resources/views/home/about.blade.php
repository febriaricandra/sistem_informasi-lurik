@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15815.441941833778!2d110.7036609!3d-7.6981177!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb1dda475fb9e25b3!2sMulyatex%20Lurik%20Pedan!5e0!3m2!1sid!2sid!4v1660535340374!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="row">
        <div class="left text-center">
            <h1 class="fs-1 font-bold">Mulyatex Lurik Pedan</h1>
            <p>kami menyediakan berbagai macam kain lurik, pembuatan baju dari kain lurik, motif dan desain kain lurik</p>
        </div>
        <div class="right text-center">
            <img src="{{asset('img/Capture.PNG')}}" alt="toko kami">
        </div>
    </div>
</div>
@endsection