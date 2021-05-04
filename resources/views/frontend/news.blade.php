@extends('frontend.layouts.main')
@section('title')
    <title>Tin tức</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/news.css">
    <link rel="stylesheet" href="/frontend/css/sidebar.css">
@endsection
@section('content')
    <section class="container direction">
        <p><a href="">Trang chủ</a> > <a href="">{{$cateNews->name}}</a></p>
    </section>

    <section class="container otherNewsTravel">
        <div class="col-md-9">
            @foreach($listNews as $item)
                @if($item['cateNews']->position == 1)
                    <div class="travelNews">
                        <div class="title">
                            <h3>{{$item['cateNews']->name}}</h3>
                            <a href="{{route('home.newsList',['slug' => $item['cateNews']->slug])}}">Xem thêm ></a>
                        </div>
                        <div class="travelnews-content">
                            <div id="carouselExampleIndicators" class="carousel slide carousel-fade travelnews-slides" data-bs-ride="carousel">
                                <div class="carousel-indicators travelnews-slides__btn">
                                    <?php $i=0  ?>
                                    @foreach($item['mainTravelNews'] as $item1)
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" aria-current="true" aria-label="Slide{{$i+1}}"></button>
                                                    <?php $i++  ?>
                                    @endforeach
                                </div>
                                <div class="carousel-inner">
                                    @foreach($item['mainTravelNews'] as $item1)
                                        <div class="carousel-item travelnews-slide">
                                            <div class="news-img">
                                                <img src="{{asset($item1->image)}}" alt="{{($item1->title)}}">
                                            </div>
                                            <div class="news-content">
                                                <a href="{{route('home.newsDetail',['slug'=>$item1->slug])}}" class="news-title">{{($item1->title)}}</a>
                                                <span>{!! $item1->summary !!}</span>
                                                <a href="{{route('home.newsDetail',['slug'=>$item1->slug])}}" class="news-btn">Chi tiết</a>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row new">
                                @foreach($item['travelNews'] as $item2)
                                    <div class="news-static">
                                        <div class="news-img">
                                            <img src="{{asset($item2->image)}}" alt="{{($item2->title)}}">
                                        </div>
                                        <div class="news-content">
                                            <a href="{{route('home.newsDetail',['slug'=>$item2->slug])}}" class="news-title">{{($item2->title)}}</a>
                                            <a href="{{route('home.newsDetail',['slug'=>$item2->slug])}}" class="news-btn">Chi tiết</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
            </div>
                @endif
                @if($item['cateNews']->position == 2)
                    <div class="travelGuide">
                        <div class="title">
                            <h3>{{$item['cateNews']->name}}</h3>
                            <a href="{{route('home.newsList',['slug' => $item['cateNews']->slug])}}">Xem thêm ></a>
                        </div>
                    <div class="travelGuide-content row">
                        <div class="col-md-6 travelGuide-main">
                            @foreach($item['mainNews'] as $news)
                                <div class="news-photo">
                                    <a href="{{route('home.newsDetail',['slug' => $news->slug])}}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                                </div>
                                <div class="news-descript">
                                    <a href="{{route('home.newsDetail',['slug' => $news->slug])}}">{{($news->title)}}</a>
                                    <div class="time-view">
                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                    </div>
                                    {!! ($news->summary)!!}
                                </div>
                            @endforeach
                        </div>
                        <div class="col-md-6 travelGuide-subs">
                            @foreach($item['othersNews'] as $news)
                                <div class="travelGuide-sub">
                                    <div class="news-photo">
                                        <a href="{{route('home.newsDetail',['slug' => $news->slug])}}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                                    </div>
                                    <div class="news-descript">
                                        <a href="{{route('home.newsDetail',['slug' => $news->slug])}}">{{($news->title)}}</a>
                                        <div class="time-view">
                                            <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                            <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                @if($item['cateNews']->position == 3)
                    <div class="travelExperience">
                        <div class="title">
                            <h3>{{$item['cateNews']->name}}</h3>
                            <a href="{{route('home.newsList',['slug' => $item['cateNews']->slug])}}">Xem thêm ></a>
                        </div>
                        <div class="travelExperience-content row">
                            @foreach($item['expNews'] as $news)
                                <div class="travelExperience-card">
                                    <div class="news-photo">
                                        <a href="{{route('home.newsDetail',['slug' => $news->slug])}}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                                    </div>
                                    <div class="news-descript">
                                        <a href="{{route('home.newsDetail',['slug' => $news->slug])}}">{{($news->title)}}</a>
                                        <div class="time-view">
                                            <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                            <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                @endif
                @if($item['cateNews']->position == 4)
                    <div class="travelInquiries">
                        <div class="title">
                            <h3>{{$item['cateNews']->name}}</h3>
                            <a href="{{route('home.newsList',['slug' => $item['cateNews']->slug])}}">Xem thêm ></a>
                        </div>

                    <div class="travelInquiries-main">
                        @foreach($item['mainNews'] as $news)
                            <div class="news-photo">
                                <a href="{{route('home.newsDetail',['slug' => $news->slug])}}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                            </div>
                            <div class="news-descript">
                                <a href="{{route('home.newsDetail',['slug' => $news->slug])}}">{{($news->title)}}</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                    <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                </div>
                                <p>{{$news->summary}}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="travelInquiries-sub">
                        @foreach($item['othersNews'] as $news)
                            <div class="travelInquiries-sub__card">
                                <div class="news-photo">
                                    <a href="{{route('home.newsDetail',['slug' => $news->slug])}}"><img src="{{asset($news->image)}}" alt="{{($news->title)}}"></a>
                                </div>
                                <div class="news-descript">
                                    <a href="{{route('home.newsDetail',['slug' => $news->slug])}}">{{($news->title)}}</a>
                                    <div class="time-view">
                                        <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>{{ date_format($news->created_at,"d/m/Y") }}</span>
                                        <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>{{($news->view)}}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                @endif
            @endforeach
            <div class="tourPromotion tours-list">
                    <h3><a href="">tour khuyến mại</a></h3>
                    <section class="regular slider responsive">
                        @foreach($saleTours as $tour)
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
                                    <p>
                                        @if($tour->vehicle == 'Máy bay')
                                            <img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">
                                        @elseif($tour->vehicle == 'Ô tô')
                                            <img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">
                                        @elseif($tour->vehicle == 'Tàu hỏa')
                                            <img src="/frontend/images/homepage/ic-train.png" alt="phương tiện">
                                        @endif
                                        Phương tiện: <span>{{$tour->vehicle}}</span>
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
                    <p>Hoặc để lại số điện thoại</p>
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
            @foreach($categories as $item)
                @if($item->parent_id == 0 && $item->type == 2)
                    @foreach($categories as $item2)
                        @if($item2->parent_id == $item->id)
                            <div class="service-card">
                                <div class="service-img">
                                    <a href="{{route('home.serviceDetail',['slug'=>$item2->slug])}}"><img src="{{asset($item2->image)}}" alt="{{$item2->name}}"></a>
                                </div>
                                <div class="service-desc">
                                    <a href="{{route('home.serviceDetail',['slug'=>$item2->slug])}}">{{$item2->name}}</a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
    </section>

@endsection
@section('carousel')
    <script>
        $(document).ready(function() {
            $(".travelnews-slides>.carousel-inner>div:first").addClass("active");
            $(".carousel-indicators>button:first").addClass("active");
        })
    </script>
@endsection
