@extends('frontend.layouts.main')
@section('title')
    <title>Danh sách tour</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/toursList.css">
    <link rel="stylesheet" href="/frontend/css/sidebar.css">
@endsection
@section('content')
    <div class="container direction">
        <p><a href="{{route('home.index')}}">Trang chủ</a> >
        <a href="{{route('home.services')}}">Dịch vụ</a>
        </p>
    </div>

    <section class="container tours">
        <div class="col-md-9 tours-content">

            <section class="services">
                <div class="container">
                    <div class="servicesList-title">
                        <h3><a href="/dich-vu">dịch vụ</a></h3>
                        <img src="/frontend/images/homepage/bg-title-bottom.png" alt="">
                    </div>
                    <div class="services-content">
                        <h4 style="margin-bottom: 1rem">Các dịch vụ mà Vietcenter cung cấp</h4>
                        <ul>
                            <li>- Dịch vụ hỗ trợ thủ tục cấp hộ chiếu, visa thời hạn ngắn và chi phí thấp, đặc biệt đối với quốc gia khó xin visa.</li>
                            <li>- Dịch vụ cho thuê xe du lịch.</li>
                            <li>- Dịch vụ đặt vé máy bay nội địa và quốc tế thường trực 24/24 đảm bảo nhanh và tiết kiệm nhất.</li>
                            <li>- Dịch vụ tổ chức Hội thảo & Sự kiện – MICE, cho thuê thiết bị hội thảo, hội nghị.</li>
                            <li>- Dịch vụ đặt phòng khách sạn.</li>
                        </ul>
                    </div>
                    <div class="servicesList">
                        <div class="col-md-4 servicesList-passport">
                            <div><img class="service-img" src="/frontend/images/homepage/item-cubes-1.png" alt="hộ chiếu">
                                <div class="filter bg1"></div>
                            </div>

                            <a href="/dich-vu/visa-ho-chieu" class="service-info service-info__passport">
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
                                <a class="service-info" href="/dich-vu/cho-thue-xe">
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
                                <a href="/dich-vu/ve-may-bay" class="service-info">
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
                                <a href="/dich-vu/to-chuc-su-kien" class="service-info">
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
                                <a href="/dich-vu/dat-phong-khach-san" class="service-info">
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
            @foreach($categories as $item)
                @if($item->parent_id == 0 && $item->type == 1 && $item->position == 2)
                    <div class="toursNav">
                        <div class="toursNav-title">
                            <h5>{{$item->name}}</h5>
                        </div>
                        <div class="accordion toursNav-desc" id="{{$item->slug}}">
                            @foreach($categories as $key => $item2)
                                @if($item2->parent_id == $item->id)
                                    <div class="accordion-item">
                                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#{{$item2->slug}}" aria-expanded="true" aria-controls="{{$item2->slug}}">
                                            {{$item2->name}} <i class="fas fa-chevron-down"></i>
                                        </div>
                                        <ul id="{{$item2->slug}}" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="heading{{$item2->slug}}" data-bs-parent="#{{$item->slug}}">
                                            @foreach($categories as $item3)
                                                @if($item3->parent_id == $item2->id)
                                                    <li>
                                                        <a href="{{route('home.toursList',['slug'=>$item3->slug])}}"><i class="fas fa-caret-right"></i> {{$item3->name}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endif
                @if($item->parent_id == 0 && $item->type == 1 && $item->position == 3)
                    <div class="toursNav toursNav-themed">
                        <div class="toursNav-title">
                            <h5>{{$item->name}}</h5>
                        </div>
                        <div class="accordion toursNav-desc" id="themestours">
                            <div class="accordion-item">
                                <ul class="toursNav-desc__list">
                                    @foreach($categories as $key => $item2)
                                        @if($item2->parent_id == $item->id)
                                            <li>
                                                <a href="{{route('home.toursList',['slug'=>$item2->slug])}}"><i class="fas fa-caret-right"></i>{{$item2->name}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="featuredNews">
                <div class="accordion" id="accordionExample">
                    <div class="btn-featuredNews">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" autofocus>đọc nhiều</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">bài mới</button>
                    </div>
                    <div id="collapseOne" class="collapse show featuredNews-mostviewed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        @foreach($mostViews as $item)
                            <div class="featuredNews-card">
                                <div class="news-photo">
                                    <a href="{{ route('home.newsDetail', ['slug'=>$item->slug]) }}"><img src="{{ asset($item->image) }}" alt="{{ ($item->title) }}"></a>
                                </div>
                                <div class="news-descript">
                                    <a href="{{ route('home.newsDetail', ['slug'=>$item->slug]) }}">{{ ($item->title) }}</a>
                                    <div class="time-view">
                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>  {{ date_format($item->created_at,"d/m/Y") }}</span>
                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($item->view)}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div id="collapseTwo" class="collapse featuredNews-mostviewed" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        @foreach($newestArticles as $item)
                            <div class="featuredNews-card">
                                <div class="news-photo">
                                    <a href="{{ route('home.newsDetail', ['slug'=>$item->slug]) }}"><img src="{{ asset($item->image) }}" alt="{{ ($item->title) }}"></a>
                                </div>
                                <div class="news-descript">
                                    <a href="{{ route('home.newsDetail', ['slug'=>$item->slug]) }}">{{ ($item->title) }}</a>
                                    <div class="time-view">
                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>  {{ date_format($item->created_at,"d/m/Y") }}</span>
                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($item->view)}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
