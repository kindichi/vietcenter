@extends('frontend.layouts.main')
@section('title')
    <title>Tin tức</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/news.css">
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

    <section class="container direction">

        <p><a href="">Trang chủ</a> > <a href="">{{$cateNews->name}}</a></p>


    </section>

    <section class="container otherNewsTravel">
        <div class="col-md-9">
            <div class="travelNews">
                @foreach($categories as $item)
                    @if($cateNews->id == $item->parent_id && $item->position ==1)
                        <div class="title">
                                <h3>{{$item->name}}</h3>
                                <a href="{{route('home.newsList',['slug' => $item->slug])}}">Xem thêm ></a>
                    </div>
                     @endif
                @endforeach
                <div class="travelnews-content">
                    <div id="carouselExampleIndicators" class="carousel slide carousel-fade travelnews-slides" data-bs-ride="carousel">
                        <div class="carousel-indicators travelnews-slides__btn">
                            @foreach($categories as $item)
                                @if($cateNews->id == $item->parent_id && $item->position ==1)
                                    <?php $i=0  ?>
                                    @foreach($articles as $key => $article)
                                        @if($article->category_id = $item->id && $article->position == 3 )
                                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" aria-current="true" aria-label="Slide1"></button>
                                                <?php $i++  ?>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($categories as $item)
                                @if($cateNews->id == $item->parent_id && $item->position ==1)
                                    @foreach($articles as $key => $article)
                                        @if($article->category_id = $item->id && $article->position == 3 )
                                            <div class="carousel-item travelnews-slide">
                                                <div class="news-img">
                                                    <img src="{{asset($article->image)}}" alt="{{($article->title)}}">
                                                </div>
                                                <div class="news-content">

                                                        <a href="{{route('home.newsDetail',['slug'=>$article->slug])}}" class="news-title">
                                                            {{($article->title)}}
                                                        </a>
                                                        <span>{!! $article->summary !!}</span>
                                                        <a href="{{route('home.newsDetail',['slug'=>$article->slug])}}" class="news-btn">Chi tiết</a>

                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>

                    <div class="row new">
                        <div class="news-static">
                            <div class="news-img">
                                <img src="/frontend/images/blog/chợ hoa.jpg" alt="Khám phá chợ hoa đêm Quảng An, một trong những trải nghiệm phải thử khi đến Hà Nội">
                            </div>
                            <div class="news-content">
                                <p><a href="" class="news-title">
                                        Khám phá chợ hoa đêm Quảng An, một trong những trải nghiệm phải thử khi đến Hà Nội
                                    </a>

                                    <a href="" class="news-btn">Chi tiết</a></p>
                            </div>
                        </div>
                        <div class="news-static">
                            <div class="news-img">
                                <img src="/frontend/images/blog/chua-ong-can-tho-8.jpg" alt="Đầu năm đi lễ ở đâu? Tổng hợp nhanh những ngôi đền, chùa nổi tiếng linh thiêng cho dịp đầu xuân">
                            </div>
                            <div class="news-content">
                                <p><a href="" class="news-title">
                                        Đầu năm đi lễ ở đâu? Tổng hợp nhanh những ngôi đền, chùa nổi tiếng linh thiêng cho dịp đầu xuân
                                    </a>
                                    <a href="" class="news-btn">Chi tiết</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="travelGuide">
                <div class="title">
                    <h3>Cẩm nang du lịch</h3>
                    <a href="">Xem thêm ></a>
                </div>
                <div class="travelGuide-content row">
                    <div class="col-md-6 travelGuide-main">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/dulichdongmo.jpg" alt="Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>11/11/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>146</span>
                            </div>
                            <p>Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</p>
                        </div>
                    </div>
                    <div class="col-md-6 travelGuide-subs">
                        <div class="travelGuide-sub">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/sportdongmo.png" alt="Camping Sport Đồng Mô - Địa điểm cắm trại dã ngoại MỚI TOANH gần Hà Nội"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Camping Sport Đồng Mô - Địa điểm cắm trại dã ngoại MỚI TOANH gần Hà Nội</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>31/08/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>368</span>
                                </div>
                            </div>
                        </div>
                        <div class="travelGuide-sub">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/nha-tuong-niem-bac-ho.jpg" alt="Thông tin giới thiệu về khu di tích K9 Đá Chông"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Thông tin giới thiệu về khu di tích K9 Đá Chông</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>24/08/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>201</span>
                                </div>
                            </div>
                        </div>
                        <div class="travelGuide-sub">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/cam-trai-tai-Ban-Rom.jpg" alt="Top những địa điểm cắm trại luôn HOT gần Hà Nội"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Top những địa điểm cắm trại luôn HOT gần Hà Nội</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>13/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>365</span>
                                </div>
                            </div>
                        </div>
                        <div class="travelGuide-sub">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/Doi-net-ve-kien-truc-van-mieu-quoc-tu-giam-01.jpg" alt="Tìm hiểu khái quát về Văn Miếu Quốc Tử Giám"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Tìm hiểu khái quát về Văn Miếu Quốc Tử Giám</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>24/08/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>201</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="travelExperience">
                <div class="title">
                    <h3>Kinh nghiệm du lịch</h3>
                    <a href="">Xem thêm ></a>
                </div>
                <div class="travelExperience-content row">
                    <div class="travelExperience-card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/dac-san-quy-nhon-banh-trang-nuoc-dua.jpg" alt="TOP 12 Đặc sản Quy Nhơn nhất định phải thử khi đến đây"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">TOP 12 Đặc sản Quy Nhơn nhất định phải thử khi đến đây</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>26/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>233</span>
                            </div>
                        </div>
                    </div>
                    <div class="travelExperience-card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/bun nuoc leo.jpg" alt="Điểm mặt những món đặc sản trứ danh của tỉnh Trà Vinh"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Điểm mặt những món đặc sản trứ danh của tỉnh Trà Vinh</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>13/08/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>235</span>
                            </div>
                        </div>
                    </div>
                    <div class="travelExperience-card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/so huyet.jpg" alt="Du lịch biển Sầm Sơn ăn gì? Những món ăn phải thử khi đến Sầm Sơn"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Du lịch biển Sầm Sơn ăn gì? Những món ăn phải thử khi đến Sầm Sơn</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>24/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>55</span>
                            </div>
                        </div>
                    </div>
                    <div class="travelExperience-card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/mon-ngon-han-quoc.jpg" alt="Khám phá ẩm thực Hàn Quốc với top 7 món ăn truyền thống xứ Hàn"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Khám phá ẩm thực Hàn Quốc với top 7 món ăn truyền thống xứ Hàn</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>16/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>263</span>
                            </div>
                        </div>
                    </div>
                    <div class="travelExperience-card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/bánh tôm.jpg" alt="Đến Hồ Tây ăn gì? Những địa chỉ ăn ngon quanh Hồ Tây"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Đến Hồ Tây ăn gì? Những địa chỉ ăn ngon quanh Hồ Tây</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>07/01/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>385</span>
                            </div>
                        </div>
                    </div>
                    <div class="travelExperience-card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/mứt.jpg" alt="Tổng hợp những món mứt truyền thống không thể thiếu trong ngày tết cổ truyền"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Tổng hợp những món mứt truyền thống không thể thiếu trong ngày tết cổ truyền</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/01/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>418</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="travelInquiries">
                <div class="title">
                    <h3>Hỏi đáp du lịch</h3>
                    <a href="">Xem thêm ></a>
                </div>
                <div class="travelInquiries-main">
                    <div class="news-photo">
                        <a href=""><img src="/frontend/images/blog/dam lap an(1).jpg" alt="Du lịch vịnh biển Lăng Cô, những trải nghiệm bạn không nên bỏ lỡ"></a>
                    </div>
                    <div class="news-descript">
                        <a href="">Du lịch vịnh biển Lăng Cô, những trải nghiệm bạn không nên bỏ lỡ</a>
                        <div class="time-view">
                            <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>04/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>406</span>
                        </div>
                        <p>Lăng Cô thực sự là một thiên đường du lịch với những vẻ đẹp thiên nhiên nguyên thủy và là một trong những nơi hiếm hoi có cả núi, sông, biển, đảo và đầm phà. Đến với một trong những vùng vịnh biển đẹp bậc nhất thế giới và đừng
                            bỏ lỡ những trải nghiệm có một không hai tại mảnh đất này nhé.</p>
                    </div>
                </div>
                <div class="travelInquiries-sub">
                    <div class="travelInquiries-sub__card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/du day.jpg" alt="Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>03/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>119</span>
                            </div>
                        </div>
                    </div>
                    <div class=" travelInquiries-sub__card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/dalat.jpg" alt="Khám phá ngay cánh đồng cỏ lau “đẹp phát hờn” tại Đà Lạt"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Khám phá ngay cánh đồng cỏ lau “đẹp phát hờn” tại Đà Lạt</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>04/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>394</span>
                            </div>
                        </div>
                    </div>
                    <div class=" travelInquiries-sub__card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/4722_Lo-trinh-tuyen-xe-bus-08-Ha-Noi.jpg" alt="Lộ trình phượt bus Hà Nội với những điểm đến cực hạt giẻ"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Lộ trình phượt bus Hà Nội với những điểm đến cực "hạt giẻ"</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>04/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>206</span>
                            </div>
                        </div>
                    </div>
                    <div class=" travelInquiries-sub__card">
                        <div class="news-photo">
                            <a href=""><img src="/frontend/images/blog/sapa.jpg" alt="Mùa đông này đi đâu ngắm tuyết rơi? Những địa điểm ngắm tuyết lãng mạn ở Việt Nam"></a>
                        </div>
                        <div class="news-descript">
                            <a href="">Mùa đông này đi đâu ngắm tuyết rơi? Những địa điểm ngắm tuyết lãng mạn ở Việt Nam</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>07/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>432</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tourPromotion tours-list">
                <h3><a href="">tour khuyến mại</a></h3>
                <section class="regular slider responsive">
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/tung-bung-le-hoi-chiang-mai.jpg" alt="Tour du lịch Thái Lan - Bangkok - Pattaya 4N3Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">3,890,000 đ</p>
                                    <p class="old-price">5,290,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Thái Lan - Bangkook - Pattaya 4N3Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/du-lich-han-quoc.gif" alt="Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">16,990,000 đ</p>
                                    <p class="old-price">17,990,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/nuoc-nga.jpg" alt="Tour du lịch Nga - Matxcova - ST. Petersburg 8N7D"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">43,990,000 đ</p>
                                    <p class="old-price">45,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Nga - Matxcova - ST. Petersburg 8N7D</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>8 ngày 7 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/tour-du-lich-lao.jpg" alt="Tour du lịch Lào khám phá xử sở hoa Champa 6N5Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">6,190,000 đ</p>
                                    <p class="old-price">7,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Lào khám phá xử sở hoa Champa 6N5Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-Nhatban-yolotravel5840d85c2b1c6 - Copy.jpg" alt="Du Lịch Đất Nước Mặt Trời Mọc - Tết Nguyên Đán 2020"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">36,900,000 đ</p>
                                    <p class="old-price">37,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du Lịch Đất Nước Mặt Trời Mọc - Tết Nguyên Đán 2020</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/bai-dinh-1-min.jpg" alt="Trọn gói tour du lịch Ninh Bình : Bái Đính – Tràng An – Cúc Phương"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">3,000,000 đ</p>
                                    <p class="old-price">3,600,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Trọn gói tour du lịch Ninh Bình : Bái Đính – Tràng An – Cúc Phương</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/mu-cang-chai.jpg" alt="Tour Du Lịch Mù Cang Chải – Yên Bái 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">2,700,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Mù Cang Chải – Yên Bái 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-ha-long-1.jpg" alt="Tour Du lịch Hạ Long – Du thuyền ( 3 ngày)"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">2,795,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Hạ Long – Du thuyền ( 3 ngày)</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/da-nang1.jpg" alt="Du lịch Đà Nẵng – Hội An – Cố đô Huế"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">2,470,000 đ</p>
                                    <p class="old-price">2,800,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du lịch Đà Nẵng – Hội An – Cố đô Huế</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 5 đêm</span>
                            </p>
                            <p><i class="fa fa-train" aria-hidden="true"></i>Phương tiện: <span>Tàu hỏa</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour7.jpg" alt="Tour Hà Giang mùa hoa Tam giác mạch"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">2,250,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Giang mùa hoa Tam giác mạch</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/cho-bac-ha-min.jpg" alt="Tour Du Lịch Y Tý – Bắc Hà 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">2,000,000 đ</p>
                                    <p class="old-price">2,500,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Y Tý – Bắc Hà 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>

                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour10.jpg" alt="Tour Hà Nội – Hoàng Su Phì – Simacai – Bắc Hà 3 ngày 2 đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">2,000,000 đ</p>
                                    <p class="old-price">2,300,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Nội – Hoàng Su Phì – Simacai – Bắc Hà 3 ngày 2 đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/shangri-la.jpg" alt="Tour Du lịch Côn Minh - Lệ Giang Cổ Trấn - Shangri-la"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">16,990,000 đ</p>
                                    <p class="old-price">17,500,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Côn Minh - Lệ Giang Cổ Trấn - Shangri-la</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/Tour-du-lich-thai-lan-5-ngay-4-dem.png" alt="Tour Du Lịch Thái Lan - Xứ Sở Của Những Nụ Cười 5 Ngày 4 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">6,490,000 đ</p>
                                    <p class="old-price">6,750,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Thái Lan - Xứ Sở Của Những Nụ Cười 5 Ngày 4 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/tung-bung-le-hoi-chiang-mai.jpg" alt="Tour du lịch Thái Lan - Bangkok - Pattaya 4N3Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">3,890,000 đ</p>
                                    <p class="old-price">5,290,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Thái Lan - Bangkook - Pattaya 4N3Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/du-lich-han-quoc.gif" alt="Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="news-price">16,990,000 đ</p>
                                    <p class="old-price">17,990,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
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
            <div class="featuredNews">
                <div class="accordion" id="accordionExample">
                    <div class="btn-featuredNews">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" autofocus>đọc nhiều</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">bài mới</button>
                    </div>
                    <div id="collapseOne" class="collapse show featuredNews-mostviewed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/dulichdongmo.jpg" alt="Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>07/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>432</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/bien binh tien ninh thuan.jpg" alt="Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>19/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>205</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/ngam vinh lan ha.jpg" alt="Những trải nghiệm nhất định phải thử khi du lịch vịnh Lan Hạ"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Những trải nghiệm nhất định phải thử khi du lịch vịnh Lan Hạ</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>17/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>305</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/du day royal.jpg" alt="Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>405</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/content-passport.jpg" alt="Visa ở hộ chiếu cũ có hiệu lực khi thay hộ chiếu mới?"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Visa ở hộ chiếu cũ có hiệu lực khi thay hộ chiếu mới?</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>25/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>445</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/kinh-nghiem-mua-nuoc-mam-phu-quoc-lam-qua-chinh-hang-dung-gia-1.jpg" alt="Các hãng bay có cho phép mang nước mắm?"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Các hãng bay có cho phép mang nước mắm?</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>23/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>245</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/châu âu.jpg" alt="Nước nào ở Châu Âu hoàn thuế cao nhất?"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Nước nào ở Châu Âu hoàn thuế cao nhất?</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>19/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>265</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/giang-sinh-chau-au1.jpg" alt="Giáng sinh ở nước Châu Âu nào là đẹp nhất?"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Giáng sinh ở nước Châu Âu nào là đẹp nhất?</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>15/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>465</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/giay-to-can-chuan-bi-cho-tre-em-khi-di-may-bay.jpg" alt="Cho trẻ một tuổi đi nước ngoài cân giấy tờ gì?"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Cho trẻ một tuổi đi nước ngoài cân giấy tờ gì?</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>12/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>565</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/content-passport.jpg" alt="Vì sao bị từ chối visa liên tục dù hồ sơ 'mạnh'?"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Vì sao bị từ chối visa liên tục dù hồ sơ 'mạnh'?</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>515</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse featuredNews-mostviewed" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/tour1.jpg" alt="Lâu đài khổng lồ nằm dưới đáy hồ hàng nghìn năm mà không ai biết"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Lâu đài khổng lồ nằm dưới đáy hồ hàng nghìn năm mà không ai biết</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>12/12/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>432</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/tam_chuc-09_43_41_742.jpg" alt="Review về khu du lịch Tam Chúc Ba Sao Kim Bảng Tỉnh Hà Nam"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Review về khu du lịch Tam Chúc Ba Sao Kim Bảng Tỉnh Hà Nam</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>04/12/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>295</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/kinh-nghiem-sa-pa-1.jpg" alt="Review kinh nghiệm du lịch Sapa mùa đông – Trời Âu tại Việt Nam"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Review kinh nghiệm du lịch Sapa mùa đông – Trời Âu tại Việt Nam</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>17/11/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>335</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/thanh-nha-ho-3.jpg" alt="Tìm hiểu về khu di tích Thành Nhà Hồ"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Tìm hiểu về khu di tích Thành Nhà Hồ</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/11/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>455</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/tour2.jpg" alt="Gia Lai tổ chức lễ hội hoa dã quỳ tại núi lửa"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Gia Lai tổ chức lễ hội hoa dã quỳ tại núi lửa</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>25/10/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>545</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/tour7.jpg" alt="Rợn người vì những bí ẩn đằng sau nhiều ngôi làng bị bỏ hoang trên thế giới"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Rợn người vì những bí ẩn đằng sau nhiều ngôi làng bị bỏ hoang trên thế giới</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>23/10/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>745</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/khmai-4.jpg" alt="Free and Easy Đà Lạt (3 ngày 2 đêm)"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Free and Easy Đà Lạt (3 ngày 2 đêm)</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>19/10/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>865</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/khmai-2.jpg" alt="Tour Hà Giang mùa hoa tam giác mạch 2018: Đặt sớm giảm ngay 200.000đ"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Tour Hà Giang mùa hoa tam giác mạch 2018: Đặt sớm giảm ngay 200.000đ</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>15/09/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>965</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/tdung-2.jpg" alt="Vietcenter tuyển dụng Chuyên viên tư vấn tour nội địa"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Vietcenter tuyển dụng Chuyên viên tư vấn tour nội địa</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>12/08/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>165</span>
                                </div>
                            </div>
                        </div>
                        <div class="featuredNews-card">
                            <div class="news-photo">
                                <a href=""><img src="/frontend/images/blog/khmai-1.jpg" alt="Tour Singapore – Malaysia 5 ngày 4 đêm: Giảm giá giờ chót, nhận ngay 300.000VNĐ"></a>
                            </div>
                            <div class="news-descript">
                                <a href="">Tour Singapore – Malaysia 5 ngày 4 đêm: Giảm giá giờ chót, nhận ngay 300.000VNĐ</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/08/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>1015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
