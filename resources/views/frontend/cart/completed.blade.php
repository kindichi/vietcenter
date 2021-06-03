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
        <style>
            .buyother {
                display: block;
                overflow: hidden;
                background: #fff;
                line-height: 40px;
                text-align: center;
                margin: 15px auto;
                width: 300px;
                font-size: 14px;
                color: #82ae46;
                font-weight: 700;
                text-transform: uppercase;
                border: 2px solid #82ae46;
                border-radius: 5px;
            }
        </style><br>
        <h3 class="text-center"><i class="fa fa-opencart"></i>Cảm ơn bạn đã đặt hàng</h3>
        <a href="/" class="buyother"><i class="fa fa-chevron-left"></i> Về trang chủ</a>
    </div>
@endsection
