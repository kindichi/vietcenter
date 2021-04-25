@extends('frontend.layouts.main')
@section('title')
    <title>Liên hệ</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/contact.css">
@endsection

@section('content')
    <!-- slide show -->
    <section class="banner">
        <img src="/frontend/images/vietcenter-banner2-1.png" class=" w-100" alt="...">
        <div class="search">
            <h2>bạn muốn đi du lịch ở đâu ?</h2>
            <form class="row g-3 ">
                <input class="search-input" type="text" id="searchInput" placeholder="Tìm kiếm điểm đến, hoạt động, tin tức du lịch....">
                <select class="form-select search-select" aria-label="Default select example">
                    <option selected>Khởi hành từ</option>
                    <option value="1">Từ Đà Nẵng</option>
                    <option value="2">Từ Hà Nội</option>
                    <option value="3">Từ Sài Gòn</option>
                    <option value="4">Từ địa điểm khác</option>
                </select>
                <button type="submit" class="search-btn">tìm tour</button>
            </form>
        </div>
    </section>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.020151064859!2d105.79384675330355!3d21.031073355052477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7b378a70d49473d1!2sViet%20Center%20Tourist!5e0!3m2!1sen!2sus!4v1618332339822!5m2!1sen!2sus" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
