@extends('frontend.layouts.main')
@section('title')
    <title>Đặt tour</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/bookTour.css">
@endsection
@section('content')
    <section class="banner">
        @foreach($banners as $banner)
            @if($banner->position == 2)
                <img src="{{asset($banner->image)}}" class=" w-100" alt="...">
            @endif
        @endforeach
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

    <section class="container booktour">
        <p><a href="">Trang chủ</a> > <a href="">Đặt tour "Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Sao "</a></p>
        <h3>Đặt tour "Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Sao "</h3>
        <img src="/frontend/images/homepage/icon star-.png" alt="">
        <div class="booktour-content row">
            <div class="booktour-info">
                <h4>thông tin liên hệ</h4>
                <p>Vietcenter sẽ liên hệ ngay với bạn để xác nhận Booking này</p>
                <form action="" class="needs-validation row" novalidate>
                    <div class=" booktour-info__input">
                        <label for="email">Email</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-email.png" alt="" id="email"></div>

                            <input type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="booktour-info__input">
                        <label for="phone">Số điện thoại</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-phone.png" alt="" id="phone"></div>
                            <input type="text" placeholder="Điện thoại">
                        </div>
                    </div>
                    <div class=" booktour-info__input">
                        <label for="fullname">Họ và tên</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-use.png" alt="" id="fullname"></div>

                            <input type="text" placeholder="Họ và tên">
                        </div>

                    </div>
                    <div class=" booktour-info__input">
                        <label for="location">Địa chỉ</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-location.png" alt="" id="location"></div>
                            <input type="text" placeholder="Địa chỉ">
                        </div>

                    </div>
                    <div class="col-md-12 booktour-info__input">
                        <label for="moreInfo">Yêu cầu thêm</label>
                        <textarea id="moreInfo" placeholder="Ví dụ: Nhà mình có 3 người lớn, 1 trẻ 3 tuổi..."></textarea>
                    </div>
                    <div class="col-md-12 booktour-info__check">
                        <input type="checkbox" value="" id="invalidCheck" required>
                        <span class="form-check-label" for="invalidCheck">
                          Đặt trước giữ chỗ, thanh toán sau. Dễ dàng, thuận tiện, thanh chóng !
                        </span>
                    </div>
                    <button class=" booktour-info__btn">
                        hoàn thành
                    </button>
                </form>
            </div>
            <div class="booktour-payment">
                <h4>thông tin thanh toán</h4>
                <form action="" class="row">
                    <div class="booktour-info__input">
                        <label for="phone">Ngày khởi hành</label>
                        <div>
                            <div><img src="/frontend/images/ic-date-v2.png" alt="" id="phone"></div>
                            <input placeholder="dd/mm/yyyy" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" />
                        </div>
                    </div>
                    <div class="booktour-info__input">
                        <label for="numberOfPeople">Số lượng</label>
                        <div>
                            <select class="form-select" id="numberOfPeople" aria-label="Default select example">
                                <option selected value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value=">10">>10</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" value="2900000" id="price">
                    <div class="booktour-price">
                        <p>Đơn giá</p>
                        <p></p>
                    </div>
                    <div class="booktour-totalprice">
                        <p>Tổng tiền</p>
                        <p></p>
                    </div>
                    <div class="booktour-totalprice">
                        <p>Thanh toán</p>
                        <p></p>
                    </div>
                    <div class="booktour-tourinfo">
                        <h5><a href="">Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Sao</a></h5>
                        <img src="/frontend/images/booktour/da-lat-1.jpg" alt="">
                        <div>
                            <p><img src="/frontend/images/booktour/ic-location.png" alt="ngày khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span> 3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
