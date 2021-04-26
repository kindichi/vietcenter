@extends('frontend.layouts.main')
@section('title')
    <title>Vietcenter Tourist</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    @endsection
@section('content')
    <!-- slide show -->
    <section class="banner">
        <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active zoomOut ">
                    <img src="/frontend/images/homepage/banner-du-lich-dong-bac.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item zoomOut">
                    <img src="/frontend/images/homepage/item-banner-slider.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <div class="search">
            <h2>bạn muốn đi du lịch ở đâu ?</h2>
            <form>
                <div>
                    <input class="search-input" type="text" id="searchInput" placeholder="Tìm kiếm điểm đến, hoạt động, tin tức du lịch....">
                    <select class="form-select search-select" aria-label="Default select example">
                        <option selected>Khởi hành từ</option>
                        <option value="1">Từ Đà Nẵng</option>
                        <option value="2">Từ Hà Nội</option>
                        <option value="3">Từ Sài Gòn</option>
                        <option value="4">Từ địa điểm khác</option>
                    </select>
                    <button type="submit" class="search-btn">tìm tour</button>
                </div>
            </form>
        </div>
    </section>

    <!-- choosed tours in vietcenter -->
    <div class="tittle-tour">
        <h3>tại sao nên chọn đặt tour tại vietcenter?</h3>
        <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
        <img class="quality-banner" src="/frontend/images/homepage/chatluong.jpg" alt="quality">
    </div>

    <section>
        <div class="hottest-tours">
            <div class="container tours-list">
                <h2><a href="/tour/tour-hot-nhat">tour hot nhất</a></h2>
                <section class="regular slider responsive">
                    @foreach($hotTours as $hotTour)
                        <div class="tour-card">
                            <div class="tour-img">
                                <a href="{{ route('home.tourDetail', ['slug'=>$hotTour->slug]) }}"><img src="{{ asset($hotTour->image) }}" alt="{{ ($hotTour->name) }}"></a>
                                <div class="tour-price">
                                    <div>
                                        <p class="new-price">{{number_format($hotTour->sale,0,",",".")}} đ</p>
                                        @if($hotTour->price)
                                            <p class="old-price">{{number_format($hotTour->price,0,",",".")}} đ</p>
                                        @endif
                                    </div>
                                    <a href="{{route('home.tourDetail', ['slug'=>$hotTour->slug])}}">chi tiết </a>
                                </div>
                            </div>
                            <div class="tour-info">
                                <h4><a href="{{route('home.tourDetail', ['slug'=>$hotTour->slug])}}">{{$hotTour->name}}</a></h4>
                                <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$hotTour->departure_day}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$hotTour->location}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$hotTour->duration}}</span>
                                </p>
                                <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$hotTour->vehicle}}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach

                </section>
                <div class="tour-moreinfo">
                    <a href="" class="btn-moreinfo">xem thêm tour</a>
                </div>
            </div>
        </div>
        <div class="vn-tours">
            <div class="container tours-list">
                <div class="tittle-tour">
                    <h3>tour trong nước</h3>
                    <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
                </div>
                <section class="regular slider responsive">
                    @foreach($vnTours as $vnTour)
                        <div class="tour-card">
                            <div class="tour-img">
                                <a href="{{ route('home.tourDetail', ['slug'=>$vnTour->slug]) }}"><img src="{{ asset($vnTour->image) }}" alt="{{ ($vnTour->name) }}"></a>
                                <div class="tour-price">
                                    <div>
                                        <p class="new-price">{{number_format($vnTour->sale,0,",",".")}} đ</p>
                                        @if($vnTour->price)
                                            <p class="old-price">{{number_format($vnTour->price,0,",",".")}} đ</p>
                                        @endif
                                    </div>
                                    <a href="{{route('home.tourDetail', ['slug'=>$vnTour->slug])}}">chi tiết </a>
                                </div>
                            </div>
                            <div class="tour-info">
                                <h4><a href="{{route('home.tourDetail', ['slug'=>$vnTour->slug])}}">{{$vnTour->name}}</a></h4>
                                <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$vnTour->departure_day}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$vnTour->location}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$vnTour->duration}}</span>
                                </p>
                                <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$vnTour->vehicle}}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach

                </section>
                <div class="tour-moreinfo">
                    <a href="" class="btn-moreinfo">xem thêm tour</a>
                </div>
            </div>
        </div>
        <div class="foreign-tours">
            <div class="container tours-list">
                <div class="tittle-tour">
                    <h3>tour nước ngoài</h3>
                    <img src="/frontend/images/homepage/icon star-2.png" alt="iconstar">
                </div>
                <section class="regular slider responsive">
                    @foreach($foreignTours as $foreignTour)
                        <div class="tour-card">
                            <div class="tour-img">
                                <a href="{{ route('home.tourDetail', ['slug'=>$foreignTour->slug]) }}"><img src="{{ asset($foreignTour->image) }}" alt="{{ ($foreignTour->name) }}"></a>
                                <div class="tour-price">
                                    <div>
                                        <p class="new-price">{{number_format($foreignTour->sale,0,",",".")}} đ</p>
                                        @if($foreignTour->price)
                                            <p class="old-price">{{number_format($foreignTour->price,0,",",".")}} đ</p>
                                        @endif
                                    </div>
                                    <a href="{{route('home.tourDetail', ['slug'=>$foreignTour->slug])}}">chi tiết </a>
                                </div>
                            </div>
                            <div class="tour-info">
                                <h4><a href="{{route('home.tourDetail', ['slug'=>$foreignTour->slug])}}">{{$foreignTour->name}}</a></h4>
                                <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$foreignTour->departure_day}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$foreignTour->location}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$foreignTour->duration}}</span>
                                </p>
                                <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$foreignTour->vehicle}}</span>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div class="tour-moreinfo">
                    <a href="" class="btn-moreinfo">xem thêm tour</a>
                </div>
            </div>
        </div>
        <div class="themed-tours">
            <div class="container tours-list">
                <div class="tittle-tour">
                    <h3>tour theo chủ đề</h3>
                    <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
                </div>
                <section class="regular slider responsive">
                    @foreach($categories as $item)
                        @if($item->parent_id == 89 && $item->is_active == 1)
                            <div class="tour-card">
                                <div class="tour-img">
                                    <a href=""><img src="{{asset($item->image)}}" alt="{{$item->name}}">{{$item->name}}
                                        <div class="tour-price">
                                            <div>
                                                <p class="themed-tours__title">{{$item->name}}</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach

                </section>
            </div>
        </div>
    </section>


    <section class="news">
        <div class="container">
            <div class="news-vietcenter">
                <div class="news-vietcenter__title">
                    <a href="">Tin Tức du lịch</a>
                    <p><a href="">Xem thêm ></a></p>
                </div>
                <div class="news-vietcenter__main">
                        <div>
                            <img src="{{asset($mainTravelNews->image)}}" alt="{{($mainTravelNews->title)}}">
                        </div>
                        <div class="news-vietcenter__main-content">
                            <div>
                                <a href="">{{($mainTravelNews->title)}}</a>
                            </div>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>  {{ date_format($mainTravelNews->created_at,"d/m/Y") }}</span>
                                <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($mainTravelNews->view)}}</span>
                            </div>
                            {!! $mainTravelNews->summary !!}
                        </div>
                </div>
                <div class="news-vietcenter__sub">
                        <section class="regular slider responsive news-vietcenter__sub-slide">
                            @foreach($travelNews as $item2)
                                @if($item2->position == 1)
                                <div class="news-vietcenter__sub-card">
                                    <div class="news-vietcenter__sub-img">
                                        <a href=""><img src="{{asset($item2->image)}}" alt="{{($item2->title)}}"></a>
                                    </div>
                                    <div class="news-vietcenter__sub-title"><a href="">{{($item2->title)}}</a>
                                        <div class="time-view">
                                            <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($item2->created_at,"d/m/Y") }}</span>
                                            <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($item2->view)}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </section>
                    </div>

            </div>
            <div class="news-detail">
                <div class="accordion" id="accordionExample">
                    <div class="btn-news-detail">
                        <div><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" autofocus>cẩm nang du lịch</button></div>
                        <div> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">kinh nghiệm du lịch</button></div>
                        <div><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">hỏi đáp du lịch</button></div>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        @foreach($travelGuides as $item)
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($item->created_at,"d/m/Y") }}</span>
                                    <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($item->view)}}</span>
                                </div>
                                <a href="">{{($item->title)}}</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="{{asset($item->image)}}" alt="{{($item->title)}}"></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        @foreach($travelExperiences as $item)
                            <div class="news-detail__card">
                                <div class="news-detail__content">
                                    <div class="time-view">
                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($item->created_at,"d/m/Y") }}</span>
                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($item->view)}}</span>
                                    </div>
                                    <a href="">{{($item->title)}}</a>
                                </div>
                                <div class="news-detail__img">
                                    <a href=""><img src="{{asset($item->image)}}" alt="{{($item->title)}}"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        @foreach($travelInquiries as $item)
                            <div class="news-detail__card">
                                <div class="news-detail__content">
                                    <div class="time-view">
                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($item->created_at,"d/m/Y") }}</span>
                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($item->view)}}</span>
                                    </div>
                                    <a href="">{{($item->title)}}</a>
                                </div>
                                <div class="news-detail__img">
                                    <a href=""><img src="{{asset($item->image)}}" alt="{{($item->title)}}"></a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="customerExperience">
        <div class="container">
            <div>
                <h3><a href="">cảm nhận khách hàng</a></h3>
                <img src="/frontend/images/homepage/bg-title-bottom.png" alt="">
            </div>
            <section class="regular slider responsive">
                @foreach($reviews as $item)
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="{{asset($item->avatar)}}" alt="{{($item->title)}}"></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">{{($item->title)}}</a>
                            {!! $item->summary !!}
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>{{($item->name)}}</strong>
                                    </p>
                                    <p>{{($item->address)}}</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="{{asset($item->image)}}" alt="{{($item->title)}}"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </section>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="servicesList-title">
                <h3><a href="">dịch vụ</a></h3>
                <img src="/frontend/images/homepage/bg-title-bottom.png" alt="">
            </div>
            <div class="servicesList">
                <div class="col-md-4 servicesList-passport">
                    <div><img class="service-img" src="/frontend/images/homepage/item-cubes-1.png" alt="hộ chiếu">
                        <div class="filter bg1"></div>
                    </div>

                    <a href="" class="service-info service-info__passport">
                        <div class="service-info__img">
                            <div> <img src="/frontend/images/homepage/ic-visa.png" alt="hộ chiếu"></div>
                        </div>
                        <h5>visa - hộ chiếu</h5>
                    </a>

                </div>
                <div class="col-md-8 row servicesList-others">
                    <div class="servicesList-others__large">
                        <div class="servicesList-others__img">
                            <img class="service-img" src="/frontend/images/homepage/cho-thue-xe.png" alt="cho thuê xe">
                            <div class="filter bg2"></div>
                        </div>
                        <a class="service-info">
                            <div class="service-info__img">
                                <div><img src="/frontend/images/homepage/ic-car.png" alt="thuê xe ô tô"></div>
                            </div>
                            <h5>cho thuê xe</h5>
                        </a>
                    </div>
                    <div>
                        <div class="servicesList-others__img"><img class="service-img" src="/frontend/images/homepage/ve-may-bay.png" alt="đặt vé máy bay">
                            <div class="filter bg3"></div>
                        </div>
                        <a href="" class="service-info">
                            <div class="service-info__img">
                                <div><img src="/frontend/images/homepage/ic-air-ticket.png" alt="dặt vé máy bay"></div>
                            </div>
                            <h5>vé máy bay</h5>
                        </a>
                    </div>
                    <div>
                        <div class="servicesList-others__img"><img class="service-img" src="/frontend/images/homepage/to-chuc-su-kien.png" alt="tổ chức sự kiện">
                            <div class="filter bg4"></div>
                        </div>
                        <a href="" class="service-info">
                            <div class="service-info__img">
                                <div><img src="/frontend/images//homepage/ic-events.png" alt="tổ chức sự kiện"></div>
                            </div>
                            <h5>tổ chức sự kiện</h5>
                        </a>
                    </div>
                    <div class="servicesList-others__large">
                        <div class="servicesList-others__img">
                            <img class="service-img" src="/frontend/images/homepage/dat-phong-khach-san.png" alt="đặt phòng khách sạn">
                            <div class="filter bg5"></div>
                        </div>
                        <a href="" class="service-info">
                            <div class="service-info__img">
                                <div><img src="/frontend/images//homepage/ic-hotel.png" alt="đặt phòng khách sạn"></div>

                            </div>
                            <h5>đặt phòng khách sạn</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
