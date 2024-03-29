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
            @foreach($categories as $item)
                    @if($item->id == $category->parent_id)
                        @foreach($categories as $item1)
                            @if($item->parent_id == $item1->id)
                            <a href="{{route('home.toursList',['slug'=>$item1->slug])}}">{{$item1->name}}</a> >
                            @endif
                        @endforeach
                    <a href="{{route('home.toursList',['slug'=>$item->slug])}}">{{$item->name}}</a> >
                    @endif
            @endforeach
            <a href="{{route('home.toursList',['slug'=>$category->slug])}}">{{$category->name}}</a>
        </p>
    </div>

    <section class="container tours">
        <div class="col-md-9 tours-content">
            <div class="tours-intro">
                <h2>{{$category->name}}</h2>
                <div>
                    <img src="{{asset($category->image)}}" alt="">
                    {!! $category->description !!}
                </div>
            </div>
            <div class="tours-title">
                <h3>Danh sách tour <p>{{$category->name}}</p> </h3>
                <div class="tours-sort">
                    <label for="sort">Sắp xếp</label>
                    <select name="sap-xep" class="filter_sort">
                        <option value="tat-ca">-- Tất cả ---</option>
                        <option value="moi-nhat" {{ ($filter_sort == 'moi-nhat' ? 'selected' : '') }} >Cập nhật mới nhất</option>
                        <option value="gia-thap-den-cao" {{ ($filter_sort == 'gia-thap-den-cao' ? 'selected' : '') }} >Giá từ thấp đến cao</option>
                        <option value="gia-cao-den-thap" {{ ($filter_sort == 'gia-cao-den-thap' ? 'selected' : '') }}>Giá từ cao đến thấp</option>
                        <option value="tu-a-den-z" {{ ($filter_sort == 'tu-a-den-z' ? 'selected' : '') }}>Thứ tự từ A đến Z</option>

                    </select>
                </div>
            </div>
            @if($category->slug != 'tour-hot-nhat')
                @foreach($list_tours as $tour)
                <div class="tour-card">
                    <div class="tour-card__img">
                        <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}"><img src="{{asset($tour->image)}}" alt="{{$tour->name}}"></a>
                    </div>
                    <div class="tour-card__desc">
                        <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}">{{$tour->name}}</a>
                        <div>
                            <div class="tour-card__desc-info">
                                <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$tour->departure_day}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>{{$tour->location}}</span></p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$tour->duration}}</span></p>
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
                            <div class="tour-card__desc-price">
                                <strong>{{number_format($tour->sale,0,",",".")}} đ</strong>
                                @if($tour->price)
                                    <strike>{{number_format($tour->price,0,",",".")}} đ</strike>
                                @endif
                                <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}">chi tiết</a>
                                <a href="{{route('home.cart.add-to-cart',['id'=>$tour->id])}}" title="Thêm vào giỏ hàng" >thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            @if($category->slug == 'tour-hot-nhat')
                @foreach($hot_tours as $tour)
                <div class="tour-card">
                    <div class="tour-card__img">
                        <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}"><img src="{{asset($tour->image)}}" alt="{{$tour->name}}"></a>
                    </div>
                    <div class="tour-card__desc">
                        <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}">{{$tour->name}}</a>
                        <div>
                            <div class="tour-card__desc-info">
                                <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$tour->departure_day}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>{{$tour->location}}</span></p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$tour->duration}}</span></p>
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
                            <div class="tour-card__desc-price">
                                <strong>{{number_format($tour->sale,0,",",".")}} đ</strong>
                                @if($tour->price)
                                    <strike>{{number_format($tour->price,0,",",".")}} đ</strike>
                                @endif
                                <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}">chi tiết</a>
                                <a href="{{route('home.cart.add-to-cart',['id'=>$tour->id])}}" title="Thêm vào giỏ hàng" >thêm vào giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            <div class="pages">
                {{ $list_tours->links() }}
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
                    <form action="{{route('home.promotion')}}" method="post" enctype="multipart/form-data" class="form-advisory">
                        @csrf
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
@section('sort')
    <script>

        var pathname = window.location.pathname; // danh-muc/dien-thoai , /danh-muc/tablet
        var urlParams = new URLSearchParams(window.location.search); // khoi tao
        $(document).on('change', '.filter_sort', function () {
            var sort = $(this).val();
            if (sort === 'tat-ca') {
                urlParams.delete('sap-xep');
            } else {
                urlParams.set('sap-xep', sort);
            }
            // chuyển hướng trang
            window.location.href = pathname + "?"+decodeURIComponent(urlParams.toString());
        });
    </script>

@endsection
