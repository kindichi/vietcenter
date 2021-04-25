@extends('frontend.layouts.main')
@section('title')
    <title>Tin tức</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/blog.css">
@endsection
@section('content')
    <section class="banner">
        <img src="./images/blog/banner2.png" class=" w-100" alt="...">
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

    <section class="container blogs">
        <p><a href="">Trang chủ</a> > <a href="">Blog</a></p>
        <h3>Blog</h3>
        <div class="blog-content">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade blogs-slider" data-bs-ride="carousel">
                <div class="carousel-indicators blogs-slider__btn">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item blog-slide active">
                        <div class="blog-img">
                            <img src="./images/blog/mui dai lanh.jpg" alt="Biển Đại Lãnh, vẻ đẹp hoang sơ độc đáo của tỉnh Khánh Hòa">
                        </div>
                        <div class="blog-desc">
                            <p>
                                <a href="" class="blog-title">
                                    Biển Đại Lãnh, vẻ đẹp hoang sơ độc đáo của tỉnh Khánh Hòa
                                </a>
                                <span>Những du khách yêu thích trải nghiệm ngủ lều trại trên bãi biển lại có thêm một sự lựa chọn nữa với sự xuất hiện của khu du lịch Đại Lãnh (Khánh Hòa).</span>
                                <a href="" class="blog-btn">Chi tiết</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item blog-slide">
                        <div class="blog-img">
                            <img src="./images/blog/bien binh tien ninh thuan.jpg" alt="Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ">
                        </div>
                        <div class="blog-desc">
                            <p>
                                <a href="" class="blog-title">
                                    Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ
                                </a>
                                <span>Với làn nước biển xanh trong cùng bờ cát trắng trải dài, tạo thành những con đường duyên dáng nằm kề bên vườn quốc gia Núi Chúa… biển Bình Tiên tạo cho du khách một cảm giác thật yên bình và nhẹ nhàng giữa cuộc sống vội vã.</span>
                                <a href="" class="blog-btn">Chi tiết</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item blog-slide">
                        <div class="blog-img">
                            <img src="./images/blog/ong dia.jpg" alt="Khám phá bãi đá ông, địa điểm check in mới nổi tại Phan Thiết">
                        </div>
                        <div class="blog-desc">
                            <p>
                                <a href="" class="blog-title">
                                    Khám phá bãi đá ông, địa điểm check in mới nổi tại Phan Thiết
                                </a>
                                <span>Phan Thiết – địa điểm du lịch không còn quá xa lạ với những ai mê xê dịch, thích thả mình vào không gian trong lành dịu vợi của gió, cát và màu nước đại dương xanh lơ thơ tình. Nhắc đến phố biển Phan Thiết, người ta sẽ nghĩ ngay đến ‘tiểu sa mạc’ Đồi cát Đỏ, đến làng chài Mũi Né, đến bình minh trên Kê Gà hay đêm đầy sao ở Hòn Rơm mà không ngờ rằng, nơi ấy còn có Bãi đá Ông tuyệt đẹp.</span>
                                <a href="" class="blog-btn">Chi tiết</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item blog-slide">
                        <div class="blog-img">
                            <img src="./images/blog/bao-dung-passport-msquare-moi-3.jpg" alt="List 30 những vật dụng cần thiết khi đi du lịch bạn nên mang theo">
                        </div>
                        <div class="blog-desc">
                            <p>
                                <a href="" class="blog-title">
                                    List 30 những vật dụng cần thiết khi đi du lịch bạn nên mang theo
                                </a>
                                <span>Trước một chuyến du lịch xa có khá nhiều thứ mà bạn cần phải chuẩn bị. Và để không gặp phải tình trạng thiếu hụt đồ dùng thì đừng quên note lại vào sổ tay du lịch của mình list những vật dụng cần thiết khi đi du lịch được liệt kê chi tiết sau đây!</span>
                                <a href="" class="blog-btn">Chi tiết</a>
                            </p>
                        </div>
                    </div>
                    <div class="carousel-item blog-slide">
                        <div class="blog-img">
                            <img src="./images/blog/combo du lich.jpg" alt="Tổng hợp những Combo du lịch dành tặng vợ hay cho người bạn gái lý tưởng của mình">
                        </div>
                        <div class="blog-desc">
                            <p>
                                <a href="" class="blog-title">
                                    Tổng hợp những Combo du lịch dành tặng vợ hay cho người bạn gái lý tưởng của mình
                                </a>
                                <span>Tổng hợp những Combo du lịch dành tặng vợ hay cho người bạn gái lý tưởng của mình</span>
                                <a href="" class="blog-btn">Chi tiết</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row blog">
                <div class="blog-static">
                    <div class="blog-img">
                        <img src="./images/blog/chợ hoa.jpg" alt="Khám phá chợ hoa đêm Quảng An, một trong những trải nghiệm phải thử khi đến Hà Nội">
                    </div>
                    <div class="blog-desc">
                        <p><a href="" class="blog-title">
                                Khám phá chợ hoa đêm Quảng An, một trong những trải nghiệm phải thử khi đến Hà Nội
                            </a>

                            <a href="" class="blog-btn">Chi tiết</a></p>
                    </div>
                </div>
                <div class="blog-static">
                    <div class="blog-img">
                        <img src="./images/blog/chua-ong-can-tho-8.jpg" alt="Đầu năm đi lễ ở đâu? Tổng hợp nhanh những ngôi đền, chùa nổi tiếng linh thiêng cho dịp đầu xuân">
                    </div>
                    <div class="blog-desc">
                        <p><a href="" class="blog-title">
                                Đầu năm đi lễ ở đâu? Tổng hợp nhanh những ngôi đền, chùa nổi tiếng linh thiêng cho dịp đầu xuân
                            </a>
                            <a href="" class="blog-btn">Chi tiết</a></p>
                    </div>
                </div>

                <div class="blog-static">
                    <div class="blog-img">
                        <img src="./images/blog/at_le-hoi-phao-hoa-da-nang.jpg" alt="Các điểm bắn pháo hoa dịp Tết Nguyên Đán Canh Tý tại Hà Nội">
                    </div>
                    <div class="blog-desc">
                        <p>
                            <a href="" class="blog-title">
                                Các điểm bắn pháo hoa dịp Tết Nguyên Đán Canh Tý tại Hà Nội
                            </a>
                            <a href="" class="blog-btn">Chi tiết</a>
                        </p>
                    </div>
                </div>
                <div class="blog-static">
                    <div class="blog-img">
                        <img src="./images/blog/4Ky-Quan-Nui-Thung-P.jpg" alt="Khám phá thảo nguyên yên bình, xinh đẹp dưới chân núi Mắt Thần">
                    </div>
                    <div class="blog-desc">
                        <p><a href="" class="blog-title">
                                Khám phá thảo nguyên yên bình, xinh đẹp dưới chân núi Mắt Thần
                            </a>
                            <a href="" class="blog-btn">Chi tiết</a></p>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>

    <section class="container otherblogs">
        <div class="col-md-9">
            <div class="touristAttraction">
                <div class="title">
                    <h3>Điểm đến hấp dẫn</h3>
                    <a href="">Xem thêm ></a>
                </div>
                <div class="touristAttraction-content row">
                    <div class="col-md-6 touristAttraction-main">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/dulichdongmo.jpg" alt="Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>11/11/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>146</span>
                            </div>
                            <p>Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</p>
                        </div>
                    </div>
                    <div class="col-md-6 touristAttraction-subs">
                        <div class="touristAttraction-sub">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/sportdongmo.png" alt="Camping Sport Đồng Mô - Địa điểm cắm trại dã ngoại MỚI TOANH gần Hà Nội"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Camping Sport Đồng Mô - Địa điểm cắm trại dã ngoại MỚI TOANH gần Hà Nội</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>31/08/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>368</span>
                                </div>
                            </div>
                        </div>
                        <div class="touristAttraction-sub">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/nha-tuong-niem-bac-ho.jpg" alt="Thông tin giới thiệu về khu di tích K9 Đá Chông"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Thông tin giới thiệu về khu di tích K9 Đá Chông</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>24/08/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>201</span>
                                </div>
                            </div>
                        </div>
                        <div class="touristAttraction-sub">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/cam-trai-tai-Ban-Rom.jpg" alt="Top những địa điểm cắm trại luôn HOT gần Hà Nội"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Top những địa điểm cắm trại luôn HOT gần Hà Nội</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>13/05/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>365</span>
                                </div>
                            </div>
                        </div>
                        <div class="touristAttraction-sub">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/Doi-net-ve-kien-truc-van-mieu-quoc-tu-giam-01.jpg" alt="Tìm hiểu khái quát về Văn Miếu Quốc Tử Giám"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Tìm hiểu khái quát về Văn Miếu Quốc Tử Giám</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>24/08/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>201</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cuisine">

                <div class="title">
                    <h3>Ẩm thực phong phú</h3>
                    <a href="">Xem thêm ></a>
                </div>
                <div class="cuisine-content row">
                    <div class="cuisine-card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/dac-san-quy-nhon-banh-trang-nuoc-dua.jpg" alt="TOP 12 Đặc sản Quy Nhơn nhất định phải thử khi đến đây"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">TOP 12 Đặc sản Quy Nhơn nhất định phải thử khi đến đây</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>26/05/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>233</span>
                            </div>
                        </div>
                    </div>
                    <div class="cuisine-card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/bun nuoc leo.jpg" alt="Điểm mặt những món đặc sản trứ danh của tỉnh Trà Vinh"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Điểm mặt những món đặc sản trứ danh của tỉnh Trà Vinh</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>13/08/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>235</span>
                            </div>
                        </div>
                    </div>
                    <div class="cuisine-card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/so huyet.jpg" alt="Du lịch biển Sầm Sơn ăn gì? Những món ăn phải thử khi đến Sầm Sơn"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Du lịch biển Sầm Sơn ăn gì? Những món ăn phải thử khi đến Sầm Sơn</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>24/03/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>55</span>
                            </div>
                        </div>
                    </div>
                    <div class="cuisine-card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/mon-ngon-han-quoc.jpg" alt="Khám phá ẩm thực Hàn Quốc với top 7 món ăn truyền thống xứ Hàn"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Khám phá ẩm thực Hàn Quốc với top 7 món ăn truyền thống xứ Hàn</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>16/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>263</span>
                            </div>
                        </div>
                    </div>
                    <div class="cuisine-card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/bánh tôm.jpg" alt="Đến Hồ Tây ăn gì? Những địa chỉ ăn ngon quanh Hồ Tây"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Đến Hồ Tây ăn gì? Những địa chỉ ăn ngon quanh Hồ Tây</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>07/01/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>385</span>
                            </div>
                        </div>
                    </div>
                    <div class="cuisine-card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/mứt.jpg" alt="Tổng hợp những món mứt truyền thống không thể thiếu trong ngày tết cổ truyền"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Tổng hợp những món mứt truyền thống không thể thiếu trong ngày tết cổ truyền</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>05/01/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>418</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="impressiveTrip">
                <div class="title">
                    <h3>Chuyến đi ấn tượng</h3>
                    <a href="">Xem thêm ></a>
                </div>
                <div class="impressiveTrip-main">
                    <div class="blog-photo">
                        <a href=""><img src="./images/blog/dam lap an(1).jpg" alt="Du lịch vịnh biển Lăng Cô, những trải nghiệm bạn không nên bỏ lỡ"></a>
                    </div>
                    <div class="blog-descript">
                        <a href="">Du lịch vịnh biển Lăng Cô, những trải nghiệm bạn không nên bỏ lỡ</a>
                        <div class="time-view">
                            <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>04/03/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>406</span>
                        </div>
                        <p>Lăng Cô thực sự là một thiên đường du lịch với những vẻ đẹp thiên nhiên nguyên thủy và là một trong những nơi hiếm hoi có cả núi, sông, biển, đảo và đầm phà. Đến với một trong những vùng vịnh biển đẹp bậc nhất thế giới và đừng
                            bỏ lỡ những trải nghiệm có một không hai tại mảnh đất này nhé.</p>
                    </div>
                </div>
                <div class="impressiveTrip-sub">
                    <div class="impressiveTrip-sub__card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/du day.jpg" alt="Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>03/03/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>119</span>
                            </div>
                        </div>
                    </div>
                    <div class=" impressiveTrip-sub__card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/dalat.jpg" alt="Khám phá ngay cánh đồng cỏ lau “đẹp phát hờn” tại Đà Lạt"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Khám phá ngay cánh đồng cỏ lau “đẹp phát hờn” tại Đà Lạt</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>04/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>394</span>
                            </div>
                        </div>
                    </div>
                    <div class=" impressiveTrip-sub__card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/4722_Lo-trinh-tuyen-xe-bus-08-Ha-Noi.jpg" alt="Lộ trình phượt bus Hà Nội với những điểm đến cực hạt giẻ"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Lộ trình phượt bus Hà Nội với những điểm đến cực "hạt giẻ"</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>04/05/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>206</span>
                            </div>
                        </div>
                    </div>
                    <div class=" impressiveTrip-sub__card">
                        <div class="blog-photo">
                            <a href=""><img src="./images/blog/sapa.jpg" alt="Mùa đông này đi đâu ngắm tuyết rơi? Những địa điểm ngắm tuyết lãng mạn ở Việt Nam"></a>
                        </div>
                        <div class="blog-descript">
                            <a href="">Mùa đông này đi đâu ngắm tuyết rơi? Những địa điểm ngắm tuyết lãng mạn ở Việt Nam</a>
                            <div class="time-view">
                                <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>07/05/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>432</span>
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
                            <a href=""><img src="./images/homepage/hottestTour/tung-bung-le-hoi-chiang-mai.jpg" alt="Tour du lịch Thái Lan - Bangkok - Pattaya 4N3Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,890,000 đ</p>
                                    <p class="old-price">5,290,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Thái Lan - Bangkook - Pattaya 4N3Đ</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/hottestTour/du-lich-han-quoc.gif" alt="Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">16,990,000 đ</p>
                                    <p class="old-price">17,990,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/foreigntours/nuoc-nga.jpg" alt="Tour du lịch Nga - Matxcova - ST. Petersburg 8N7D"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">43,990,000 đ</p>
                                    <p class="old-price">45,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Nga - Matxcova - ST. Petersburg 8N7D</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>8 ngày 7 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/foreigntours/tour-du-lich-lao.jpg" alt="Tour du lịch Lào khám phá xử sở hoa Champa 6N5Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">6,190,000 đ</p>
                                    <p class="old-price">7,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Lào khám phá xử sở hoa Champa 6N5Đ</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/foreigntours/du-lich-Nhatban-yolotravel5840d85c2b1c6 - Copy.jpg" alt="Du Lịch Đất Nước Mặt Trời Mọc - Tết Nguyên Đán 2020"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">36,900,000 đ</p>
                                    <p class="old-price">37,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du Lịch Đất Nước Mặt Trời Mọc - Tết Nguyên Đán 2020</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/bai-dinh-1-min.jpg" alt="Trọn gói tour du lịch Ninh Bình : Bái Đính – Tràng An – Cúc Phương"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,000,000 đ</p>
                                    <p class="old-price">3,600,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Trọn gói tour du lịch Ninh Bình : Bái Đính – Tràng An – Cúc Phương</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/mu-cang-chai.jpg" alt="Tour Du Lịch Mù Cang Chải – Yên Bái 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,700,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Mù Cang Chải – Yên Bái 3 Ngày 2 Đêm</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/du-lich-ha-long-1.jpg" alt="Tour Du lịch Hạ Long – Du thuyền ( 3 ngày)"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,795,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Hạ Long – Du thuyền ( 3 ngày)</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 4 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/da-nang1.jpg" alt="Du lịch Đà Nẵng – Hội An – Cố đô Huế"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,470,000 đ</p>
                                    <p class="old-price">2,800,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du lịch Đà Nẵng – Hội An – Cố đô Huế</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 5 đêm</span>
                            </p>
                            <p><i class="fa fa-train" aria-hidden="true"></i>Phương tiện: <span>Tàu hỏa</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/tour7.jpg" alt="Tour Hà Giang mùa hoa Tam giác mạch"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,250,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Giang mùa hoa Tam giác mạch</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/cho-bac-ha-min.jpg" alt="Tour Du Lịch Y Tý – Bắc Hà 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,000,000 đ</p>
                                    <p class="old-price">2,500,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Y Tý – Bắc Hà 3 Ngày 2 Đêm</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>

                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/vntours/tour10.jpg" alt="Tour Hà Nội – Hoàng Su Phì – Simacai – Bắc Hà 3 ngày 2 đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,000,000 đ</p>
                                    <p class="old-price">2,300,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Nội – Hoàng Su Phì – Simacai – Bắc Hà 3 ngày 2 đêm</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/hottestTour/shangri-la.jpg" alt="Tour Du lịch Côn Minh - Lệ Giang Cổ Trấn - Shangri-la"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">16,990,000 đ</p>
                                    <p class="old-price">17,500,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Côn Minh - Lệ Giang Cổ Trấn - Shangri-la</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/hottestTour/Tour-du-lich-thai-lan-5-ngay-4-dem.png" alt="Tour Du Lịch Thái Lan - Xứ Sở Của Những Nụ Cười 5 Ngày 4 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">6,490,000 đ</p>
                                    <p class="old-price">6,750,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Thái Lan - Xứ Sở Của Những Nụ Cười 5 Ngày 4 Đêm</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/hottestTour/tung-bung-le-hoi-chiang-mai.jpg" alt="Tour du lịch Thái Lan - Bangkok - Pattaya 4N3Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,890,000 đ</p>
                                    <p class="old-price">5,290,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Thái Lan - Bangkook - Pattaya 4N3Đ</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="./images/homepage/hottestTour/du-lich-han-quoc.gif" alt="Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">16,990,000 đ</p>
                                    <p class="old-price">17,990,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ</a></h4>
                            <p><img src="./images/homepage/ic-location.png" alt="điểm khởi hành"> Điểm khởi hành: <span>Hà Nội</span> </p>
                            <p><img src="./images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="./images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
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
                        <a href=""><img src="./images/homepage/avt-advisory.png" alt=""></a>
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
                        <button type="submit"><img src="./images/homepage/btn-advisory.png" alt=""></button>
                    </form>
                    <p>Chúng tôi sẽ liên hệ với bạn</p>
                </div>
            </div>
            <div class="blognews">
                <div class="accordion" id="accordionExample">
                    <div class="btn-blognews">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" autofocus>đọc nhiều</button>
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">bài mới</button>
                    </div>
                    <div id="collapseOne" class="collapse show blognews-mostviewed" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/dulichdongmo.jpg" alt="Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>07/05/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>432</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/bien binh tien ninh thuan.jpg" alt="Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>19/03/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>205</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/ngam vinh lan ha.jpg" alt="Những trải nghiệm nhất định phải thử khi du lịch vịnh Lan Hạ"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Những trải nghiệm nhất định phải thử khi du lịch vịnh Lan Hạ</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>17/03/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>305</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/du day royal.jpg" alt="Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>05/03/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>405</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/content-passport.jpg" alt="Visa ở hộ chiếu cũ có hiệu lực khi thay hộ chiếu mới?"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Visa ở hộ chiếu cũ có hiệu lực khi thay hộ chiếu mới?</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>25/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>445</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/kinh-nghiem-mua-nuoc-mam-phu-quoc-lam-qua-chinh-hang-dung-gia-1.jpg" alt="Các hãng bay có cho phép mang nước mắm?"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Các hãng bay có cho phép mang nước mắm?</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>23/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>245</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/châu âu.jpg" alt="Nước nào ở Châu Âu hoàn thuế cao nhất?"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Nước nào ở Châu Âu hoàn thuế cao nhất?</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>19/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>265</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/giang-sinh-chau-au1.jpg" alt="Giáng sinh ở nước Châu Âu nào là đẹp nhất?"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Giáng sinh ở nước Châu Âu nào là đẹp nhất?</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>15/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>465</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/giay-to-can-chuan-bi-cho-tre-em-khi-di-may-bay.jpg" alt="Cho trẻ một tuổi đi nước ngoài cân giấy tờ gì?"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Cho trẻ một tuổi đi nước ngoài cân giấy tờ gì?</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>12/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>565</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/content-passport.jpg" alt="Vì sao bị từ chối visa liên tục dù hồ sơ 'mạnh'?"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Vì sao bị từ chối visa liên tục dù hồ sơ 'mạnh'?</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>05/02/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>515</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse blognews-mostviewed" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/tour1.jpg" alt="Lâu đài khổng lồ nằm dưới đáy hồ hàng nghìn năm mà không ai biết"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Lâu đài khổng lồ nằm dưới đáy hồ hàng nghìn năm mà không ai biết</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>12/12/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>432</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/tam_chuc-09_43_41_742.jpg" alt="Review về khu du lịch Tam Chúc Ba Sao Kim Bảng Tỉnh Hà Nam"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Review về khu du lịch Tam Chúc Ba Sao Kim Bảng Tỉnh Hà Nam</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>04/12/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>295</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/kinh-nghiem-sa-pa-1.jpg" alt="Review kinh nghiệm du lịch Sapa mùa đông – Trời Âu tại Việt Nam"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Review kinh nghiệm du lịch Sapa mùa đông – Trời Âu tại Việt Nam</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>17/11/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>335</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/thanh-nha-ho-3.jpg" alt="Tìm hiểu về khu di tích Thành Nhà Hồ"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Tìm hiểu về khu di tích Thành Nhà Hồ</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>05/11/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>455</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/tour2.jpg" alt="Gia Lai tổ chức lễ hội hoa dã quỳ tại núi lửa"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Gia Lai tổ chức lễ hội hoa dã quỳ tại núi lửa</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>25/10/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>545</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/tour7.jpg" alt="Rợn người vì những bí ẩn đằng sau nhiều ngôi làng bị bỏ hoang trên thế giới"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Rợn người vì những bí ẩn đằng sau nhiều ngôi làng bị bỏ hoang trên thế giới</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>23/10/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>745</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/khmai-4.jpg" alt="Free and Easy Đà Lạt (3 ngày 2 đêm)"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Free and Easy Đà Lạt (3 ngày 2 đêm)</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>19/10/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>865</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/khmai-2.jpg" alt="Tour Hà Giang mùa hoa tam giác mạch 2018: Đặt sớm giảm ngay 200.000đ"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Tour Hà Giang mùa hoa tam giác mạch 2018: Đặt sớm giảm ngay 200.000đ</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>15/09/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>965</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/tdung-2.jpg" alt="Vietcenter tuyển dụng Chuyên viên tư vấn tour nội địa"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Vietcenter tuyển dụng Chuyên viên tư vấn tour nội địa</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>12/08/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>165</span>
                                </div>
                            </div>
                        </div>
                        <div class="blognews-card">
                            <div class="blog-photo">
                                <a href=""><img src="./images/blog/khmai-1.jpg" alt="Tour Singapore – Malaysia 5 ngày 4 đêm: Giảm giá giờ chót, nhận ngay 300.000VNĐ"></a>
                            </div>
                            <div class="blog-descript">
                                <a href="">Tour Singapore – Malaysia 5 ngày 4 đêm: Giảm giá giờ chót, nhận ngay 300.000VNĐ</a>
                                <div class="time-view">
                                    <img src="./images/homepage/news/ic-departure.png" alt="time"> <span>05/08/2020</span> <img src="./images/homepage/news/ic-view.png" alt="view"> <span>1015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
