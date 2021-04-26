@extends('frontend.layouts.main')
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/tour-detail.css">
@endsection
@section('content')
    <section class="container title">
        <p><a href="">Trang chủ</a> > <a href="">Tour trong nước</a></p>
    </section>

    <section class="container tour-detail">
        <div class="col-md-9">

            <div class="tourInfo">
                <div id="carouselExampleIndicators" class="carousel slide tourInfo-slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($photos as $photo)
                        <div class="carousel-item">
                            <img src="{{ asset($photo->image) }}" class="d-block w-100" alt="{{ $photo->title }}">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                    </button>
                </div>

                <div class="tourInfo-card">
                    <h4>{{$tour->name}}</h4>
                    <div class="tourInfo-card__desc">
                        <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$tour->location}}</span> </p>
                        <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$tour->duration}}</span>
                        </p>
                        <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$tour->vehicle}}</span>
                        </p>
                    </div>
                    <div class="tourInfo-card__price">
                        <p>Giá tour trọn gói</p>
                        <strong>{{number_format($tour->sale,0,",",".")}} đ</strong>
                        @if($tour->price)
                        <strike>{{number_format($tour->price,0,",",".")}} đ</strike>
                        @endif
                    </div>
                    <button>đặt tour ngay <i class="fas fa-chevron-circle-right"></i></button>
                </div>
            </div>
            <div class="tourIntro">
                <div class="accordion" id="accordionExample">
                    <div class="tourIntro-btn">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" autofocus>Giới thiệu</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Lịch trình</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">bao gồm và điều khoản</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">đánh giá</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">bình luận</button>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="collapseContent">
                            {!! $tour->description !!}
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse blognews-mostviewed tourSchedule" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion" id="schedule">
                            <div class="tourSchedule-btn">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#day1" aria-expanded="true" aria-controls="day1" autofocus>Ngày 1</button>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day2" aria-expanded="false" aria-controls="day2">Ngày 2</button>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day3" aria-expanded="false" aria-controls="day3">Ngày 3</button>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day4" aria-expanded="false" aria-controls="day4">Ngày 4</button>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#day5" aria-expanded="false" aria-controls="day5">Ngày 5</button>
                            </div>
                            <div id="day1" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#schedule">

                            </div>
                            <div id="day2" class="collapse blognews-mostviewed" aria-labelledby="headingTwo" data-bs-parent="#schedule">

                            </div>
                            <div id="day3" class="collapse" aria-labelledby="headingThree" data-bs-parent="#schedule">

                            </div>
                            <div id="day4" class="collapse blognews-mostviewed" aria-labelledby="headingFour" data-bs-parent="#schedule">
                            </div>
                            <div id="day5" class="collapse blognews-mostviewed" aria-labelledby="headingFive" data-bs-parent="#schedule">
                            </div>

                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="collapseContent">
                            {!! $tour->rule !!}
                        </div>

                    </div>
                    <div id="collapseFour" class="collapse blognews-mostviewed" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    </div>
                    <div id="collapseFive" class="collapse blognews-mostviewed" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    </div>

                </div>
            </div>

            <div class="tours tours-list">
                <h3><a href="">Các tour tương tự</a></h3>
                <section class="regular slider">
                    @foreach($sameTours as $sameTour)
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href="{{ route('home.tourDetail', ['slug'=>$sameTour->slug]) }}"><img src="{{ asset($sameTour->image) }}" alt="{{ ($sameTour->name) }}"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">{{number_format($sameTour->sale,0,",",".")}} đ</p>
                                    @if($sameTour->price)
                                        <p class="old-price">{{number_format($sameTour->price,0,",",".")}} đ</p>
                                    @endif
                                </div>
                                <a href="{{ route('home.tourDetail', ['slug'=>$sameTour->slug]) }}">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">{{ ($sameTour->name) }}</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{ ($sameTour->departure_day) }}</span> </p>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$sameTour->location}}</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{ ($sameTour->duration) }}</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>{{ ($sameTour->vehicle) }}</span>
                            </p>
                        </div>
                    </div>
                    @endforeach
                </section>

            </div>
        </div>
        <div class="col-md-3">
            <div class="hotline">
                <div class="mobile">
                    <div class="mobile-img">
                        <a href=""><img src="/frontend/images/homepage/avt-advisory.png" alt=""></a>
                    </div>
                    <div class="mobile-callto">
                        <h5>hot line tư vấn</h5>
                        <a href="tel:0968178011">0968178011</a>
                    </div>
                </div>
                <div class="advisory">
                    <p>Hoặc để lại số điện thoại cần tư vấn</p>
                    <form action="" class="form-advisory">
                        <input type="text" id="customer-phone" name="phone" placeholder="Nhập số điện thoại của bạn">
                        <button type="submit"><img src="/frontend/images/homepage/btn-advisory.png" alt=""></button>
                    </form>
                    <p>Chúng tôi sẽ liên hệ với bạn</p>
                </div>
            </div>
            <div class="list-hotels">
                <div class="list-hotels__title">
                    <h5>Đặt phòng</h5>
                </div>
                <div class="list-hotels__content">
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Phan Thiết</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Đà Lạt</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Vũng Tàu</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Hà Nội</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn TP. Hồ Chí Minh</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Đà Nẵng</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Hải Phòng</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Vĩnh Phúc</a>
                    <a href=""><i class="fas fa-caret-right"></i>Khách sạn Quảng Ninh</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/customerExperience/item-cubes-1.png" alt="passport"></a>
                </div>
                <div class="service-desc">
                    <a href="">visa - hộ chiếu</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/ve-may-bay.png" alt="passport"></a>
                </div>
                <div class="service-desc">
                    <a href="">Vé máy bay</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/dat-phong-khach-san.png" alt="passport"></a>
                </div>
                <div class="service-desc">
                    <a href="">đặt phòng khách sạn</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/to-chuc-su-kien.png" alt="passport"></a>
                </div>
                <div class="service-desc">
                    <a href="">Tổ chức sự kiện</a>
                </div>
            </div>

            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/cho-thue-xe.png" alt="passport"></a>
                </div>
                <div class="service-desc">
                    <a href="">cho thuê xe</a>
                </div>
            </div>
        </div>
    </section>
@endsection
