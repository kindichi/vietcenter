@extends('frontend.layouts.main')
@section('title')
    <title>Vietcenter Tourist</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    @endsection
@section('content')
    <!-- choosed tours in vietcenter -->
    <div class="tittle-tour">
        <h3>tại sao nên chọn đặt tour tại vietcenter?</h3>
        <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
        <img class="quality-banner" src="/frontend/images/homepage/chatluong.jpg" alt="quality">
    </div>

    <section>
        @foreach($categories as $item)
            @if($item->parent_id == 0 && $item->type == 1 && $item->position == 4)
                <div class="hottest-tours">
                    <div class="container tours-list">
                       <h2><a href="">{{ $item->name }}</a> </h2>
                        <section class="regular slider responsive">
                            @foreach($allTours as $tour)
                                @if($tour->categoryParent_id = $item->id)
                                    <div class="tour-card">
                                        <div class="tour-img">
                                            <a href="{{ route('home.tourDetail', ['slug'=>$tour->slug]) }}"><img src="{{ asset($tour->image) }}" alt="{{ ($tour->name) }}"></a>
                                            <div class="tour-price">
                                                <div>
                                                    <p class="new-price">{{number_format($tour->sale,0,",",".")}} đ</p>
                                                    @if($tour->price)
                                                        <p class="old-price">{{number_format($tour->price,0,",",".")}} đ</p>
                                                    @endif
                                                </div>
                                                <a href="{{route('home.tourDetail', ['slug'=>$tour->slug])}}">chi tiết </a>
                                            </div>
                                        </div>
                                        <div class="tour-info">
                                            <h4><a href="{{route('home.tourDetail', ['slug'=>$tour->slug])}}">{{$tour->name}}</a></h4>
                                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$tour->departure_day}}</span> </p>
                                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$tour->location}}</span> </p>
                                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$tour->duration}}</span>
                                            </p>
                                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$tour->vehicle}}</span>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </section>

                        <div class="tour-moreinfo">
                            <a href="{{ route('home.toursList', ['slug'=>$item->slug]) }}" class="btn-moreinfo" >xem thêm tour</a>
                        </div>

                    </div>
                </div>
            @endif
        @endforeach

        @foreach($categories as $item)
            @if($item->parent_id == 0 && $item->type == 1 && $item->position == 2)
                <div class="vn-tours">
                    <div class="container tours-list">
                        <div class="tittle-tour">
                            <h3>{{ $item->name }}</h3>
                            <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
                        </div>
                        <section class="regular slider responsive">
                            @foreach($allTours as $tour)
                                @if($tour->category_id = $item->id)
                                    <div class="tour-card">
                                        <div class="tour-img">
                                            <a href="{{ route('home.tourDetail', ['slug'=>$tour->slug]) }}"><img src="{{ asset($tour->image) }}" alt="{{ ($tour->name) }}"></a>
                                            <div class="tour-price">
                                                <div>
                                                    <p class="new-price">{{number_format($tour->sale,0,",",".")}} đ</p>
                                                    @if($tour->price)
                                                        <p class="old-price">{{number_format($tour->price,0,",",".")}} đ</p>
                                                    @endif
                                                </div>
                                                <a href="{{route('home.tourDetail', ['slug'=>$tour->slug])}}">chi tiết </a>
                                            </div>
                                        </div>
                                        <div class="tour-info">
                                            <h4><a href="{{route('home.tourDetail', ['slug'=>$tour->slug])}}">{{$tour->name}}</a></h4>
                                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$tour->departure_day}}</span> </p>
                                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>{{$tour->location}}</span> </p>
                                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$tour->duration}}</span>
                                            </p>
                                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$tour->vehicle}}</span>
                                            </p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </section>
                        <div class="tour-moreinfo">
                            <a href="{{ route('home.toursList', ['slug'=>$item->slug]) }}" class="btn-moreinfo" >xem thêm tour</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach

        @foreach($categories as $item)
            @if($item->parent_id == 0 && $item->type == 1 && $item->position == 3)
                <div class="themed-tours">
                    <div class="container tours-list">
                        <div class="tittle-tour">
                            <h3>{{$item->name}}</h3>
                            <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
                        </div>
                        <section class="regular slider responsive">
                            @foreach($categories as $item2)
                                @if($item2->parent_id == $item->id)
                                <div class="tour-card">
                                <div class="tour-img">
                                    <a href="{{ route('home.toursList', ['slug'=>$item->slug]) }}"><img src="{{asset($item2->image)}}" alt="{{$item2->name}}">{{$item2->name}}
                                        <div class="tour-price">
                                            <div>
                                                <p class="themed-tours__title">{{$item2->name}}</p>
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
            @endif
        @endforeach

    </section>

    <section class="news">
        <div class="container">
            <div class="news-vietcenter">
                @foreach($categories as $item)
                    @if($item->parent_id == $cateNews->id)
                        @if($item->position == 1)
                            <div class="news-vietcenter__title">
                                <a href="{{ route('home.newsList', ['slug' => $item->slug]) }}">{{($item->name)}}</a>
                                <p><a href="{{ route('home.newsList', ['slug' => $item->slug]) }}">Xem thêm ></a></p>
                            </div>

                                <div class="news-vietcenter__main">
                                    @foreach($articles as $news)
                                    @if($news->position == 2 && $news->category_id == $item->id)
                                          <div>
                                              <img src="{{asset($news->image)}}" alt="{{($news->title)}}">
                                          </div>
                                          <div class="news-vietcenter__main-content">
                                              <div>
                                                  <a href="{{route('home.newsDetail',['slug'=>$news->slug])}}">{{($news->title)}}</a>
                                              </div>
                                              <div class="time-view">
                                                  <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>  {{ date_format($news->created_at,"d/m/Y") }}</span>
                                                  <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                              </div>
                                              <p>{{$news->summary}}</p>
                                          </div>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="news-vietcenter__sub">
                                    <section class="regular slider responsive news-vietcenter__sub-slide">
                                            @foreach($articles as $news)
                                                @if($news->position == 1 && $news->category_id == $item->id)
                                            <div class="news-vietcenter__sub-card">
                                                <div class="news-vietcenter__sub-img">
                                                    <a href="{{route('home.newsDetail',['slug'=>$news->slug])}}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                                                </div>
                                                <div class="news-vietcenter__sub-title"><a href="{{route('home.newsDetail',['slug'=>$news->slug])}}">{{($news->title)}}</a>
                                                    <div class="time-view">
                                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                                @endif
                                            @endforeach
                                        </section>
                                </div>
                        @endif
                    @endif
                @endforeach
            </div>

            <div class="news-detail">
                <div class="accordion" id="accordionExample">
                    <div class="btn-news-detail">
                        @foreach($categories as $item)
                            @if($item->parent_id == $cateNews->id)
                                @if($item->position !=1 )
                                    <div>
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}" aria-expanded="true" aria-controls="collapse{{ $item->id }}" >{{ $item->name }}</button>
                                    </div>
                                @endif
                            @endif
                        @endforeach
                    </div>
                    @foreach($categories as $item)
                        @if($item->parent_id == $cateNews->id)
                            @if($item->position !=1 )
                                <div id="collapse{{ $item->id }}" class="collapse show" aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                                    @foreach($articles as $news)
                                        @if($news->category_id == $item->id)
                                            <div class="news-detail__card">
                                                <div class="news-detail__content">
                                                    <div class="time-view">
                                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                                    </div>
                                                    <a href="{{ route('home.newsList', ['slug' => $news->slug]) }}">{{($news->title)}}</a>
                                                </div>
                                                <div class="news-detail__img">
                                                    <a href="{{ route('home.newsList', ['slug' => $news->slug]) }}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            @endif
                        @endif
                    @endforeach
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
@section('collapseJs')
    <script>
        $(document).ready(function() {
            $(".btn-news-detail>div:first-child>button").addClass("active");
            $(".btn-news-detail>div>button").click(function() {
                $(".btn-news-detail>div>button").removeClass("active")
                $(this).toggleClass("active");
            });
        });
    </script>
@endsection
