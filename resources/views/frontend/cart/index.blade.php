@extends('frontend.layouts.main')
@section('title')
    <title>Giỏ hàng</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/cart.css">
    <link rel="stylesheet" href="/frontend/css/sidebar.css">
@endsection
@section('content')
    <div class="container direction">
        <p><a href="{{route('home.index')}}">Trang chủ</a> >
            <a href="{{route('home.cart')}}">Giỏ hàng</a>
        </p>
    </div>

    <div id="my-cart">
        @include('frontend.components.cart');
    </div>

@endsection

