@extends('frontend.layouts.main')
@section('title')
    <title>Đặt tour</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/order.css">
@endsection
@section('content')
    <section class="container title direction">
        <p><a href="">Trang chủ</a> >
            <a href="">Đặt tour </a></p>
    </section>
    <section class="container booktour">

        <form action="{{route('home.cart.postOrder') }}" method="post" enctype="multipart/form-data" class="needs-validation row" >
            @csrf
            <div class="booktour-content row">
                <div class="booktour-info">
                    <h4>thông tin liên hệ</h4>
                    <p>Vietcenter sẽ liên hệ ngay với bạn để xác nhận Booking này</p>

                    <div class=" booktour-info__input">
                        <label for="email">Email</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-email.png" alt="" ></div>
                            <input type="email" name="email" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="booktour-info__input">
                        <label for="phone">Số điện thoại</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-phone.png" alt="" id="phone"></div>
                            <input type="text" name="phone" id="phone" placeholder="Điện thoại">
                        </div>
                    </div>
                    @if ($errors->has('phone'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('phone') }}</label>
                    @endif
                    <div class=" booktour-info__input">
                        <label for="fullname">Họ và tên</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-use.png" alt="" id="fullname"></div>
                            <input type="text" name="fullname" id="fullname" placeholder="Họ và tên">
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                    @endif
                    <div class="booktour-info__input">
                        <label for="date">Ngày dự kiến</label>
                        <div>
                            <div><img src="/frontend/images/ic-date-v2.png" alt="" id="phone"></div>
                            <input placeholder="dd/mm/yyyy" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date"/>
                        </div>
                    </div>
                    <div class="booktour-address booktour-info__input">
                        <label for="address">Địa chỉ</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-location.png" alt="" ></div>
                            <input type="text" placeholder="Địa chỉ" name="address" id="address">
                        </div>
                    </div>

                    <div class="col-md-12 booktour-info__input">
                        <label for="note">Yêu cầu thêm</label>
                        <textarea id="note" name="note" placeholder="Ví dụ: Nhà mình có 3 người lớn, 1 trẻ 3 tuổi..."></textarea>
                    </div>
                    <div class="col-md-12 booktour-info__check">
                        <input type="checkbox" value="" id="invalidCheck" required>
                        <span class="form-check-label" for="invalidCheck">
                              Đặt trước giữ chỗ, thanh toán sau. Dễ dàng, thuận tiện, thanh chóng !
                        </span>
                    </div>
                    <button type="submit" class=" booktour-info__btn">
                        hoàn thành
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection
