@extends('frontend.layouts.main')
@section('title')
    <title>Liên hệ</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/contact.css">
@endsection

@section('content')
    <section class="container contact">
        <p><a href="">Trang chủ</a> > <a href="">Liên hệ</a></p>
        <h3>Liên hệ</h3>
        <img src="/frontend/images/homepage/icon star-.png" alt="">
        <div class="contact-content row">
            <div class="contact-address">
                <h4>địa chỉ công ty</h4>
                <p><i aria-hidden="true" class="fa fa-map-marker">&nbsp;</i>Tầng 3 Số nhà 23, Ngách 37/2 Dịch Vọng, Cầu Giấy, Hà Nội</p>
                <div>
                    <span><i aria-hidden="true" class="fa fa-phone">&nbsp;</i>024.6281.6212</span>
                    <span><i aria-hidden="true" class="fa fa-fax">&nbsp;</i>024.6281.6210</span>
                    <span><i aria-hidden="true" class="fa fa-envelope">&nbsp;</i>lienhe@vietcenter.vn</span>
                </div>
                </ul>
                {!! $setting->embedMap1 !!}
            </div>
            <div class="contact-info">
                <h4>gửi thông tin liên hệ cho chúng tôi</h4>
                <form action="{{route('home.postContact')}}" method="post" enctype="multipart/form-data" class="row">
                    @csrf
                    <input type="text" name="name" id="name" placeholder="Họ tên *">
                    @if ($errors->has('name'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                    @endif
                    <input type="text" name="address" id="address" placeholder="Địa chỉ *">
                    @if ($errors->has('address'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('address') }}</label>
                    @endif
                    <input type="text" name="phone" id="phone" placeholder="Số điện thoại *">
                    @if ($errors->has('phone'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('phone') }}</label>
                    @endif
                    <input type="email" name="email" id="email" placeholder="Email *">
                    @if ($errors->has('email'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('email') }}</label>
                    @endif
                    <input type="text" name="title" id="title" placeholder="Tiêu đề *">
                    @if ($errors->has('title'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                    @endif
                    <textarea name="content" id="content" cols="30" rows="10" placeholder="Nội dung *"></textarea>
                    @if ($errors->has('content'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('content') }}</label>
                    @endif
                    <label for="">
                        <strong>Những trường có dấu * là trường bắt buộc phải nhập thông tin</strong>
                        <button class="contact-info_btn" type="submit">Gửi đi</button>
                    </label>
                </form>
            </div>
        </div>
    </section>
@endsection
