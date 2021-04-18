@extends('frontend.layouts.main');
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
                <h2><a href="">tour hot nhất</a> </h2>
                <section class="regular slider responsive">
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/Tour-du-lich-thai-lan-5-ngay-4-dem.png" alt="Tour du lịch Hà Nội Thái Lan 5N4Đ Baiyoke + 3D + Massage Thái"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hà Nội Thái Lan 5N4Đ Baiyoke + 3D + Massage Thái</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>14/02,19/02,23/02,28/02</span> </p>
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
                                    <p class="new-price">3,890,000 đ</p>
                                    <p class="old-price">5,290,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Thái Lan - Bangkook - Pattaya 4N3Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
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
                                    <p class="new-price">16,990,000 đ</p>
                                    <p class="old-price">17,990,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span>25/01, 26/01, 27/01</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/ban-ta-van-sapa.jpg" alt="Khám phá cung đường du lịch Tây Bắc Hà Nội - Sapa - Lai Châu"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Khám phá cung đường du lịch Tây Bắc Hà Nội - Sapa - Lai Châu</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span>25/01, 26/01, 27/01</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/Myanmar1.jpg" alt="Tour Du Lịch Myanmar - Yangon - Golden Rock Khám Phá Miền Đất Phật"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">8,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Myanmar - Yangon - Golden Rock Khám Phá Miền Đất Phật</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
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
                                    <p class="new-price">6,490,000 đ</p>
                                    <p class="old-price">6,750,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Thái Lan - Xứ Sở Của Những Nụ Cười 5 Ngày 4 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/Ngam_Han_Quoc_lang_man_6.jpg" alt="Tour Du Lịch Seoul - Nami - Lotte World Trải Nghiệm Trượt Tuyết 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">12,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Seoul - Nami - Lotte World Trải Nghiệm Trượt Tuyết 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
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
                                    <p class="new-price">16,990,000 đ</p>
                                    <p class="old-price">17,500,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Côn Minh - Lệ Giang Cổ Trấn - Shangri-la</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span>14/02,19/02,03/03,10/03</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/phuong-hoang-co-tran-trung-quoc-ve-dem.jpg" alt="Tour Phượng Hoàng Cổ Trấn - Trương Gia Giới - Phù Dung Trấn 6 Ngày 5 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">11,690,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Phượng Hoàng Cổ Trấn - Trương Gia Giới - Phù Dung Trấn 6 Ngày 5 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/tour-du-lich-dai-loan.png" alt="Du Lịch Đài Loan Đài Bắc - Đài Trung - Cao Hùng 5 Ngày 4 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">11,500,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du Lịch Đài Loan Đài Bắc - Đài Trung - Cao Hùng 5 Ngày 4 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/ha-long-3-ngay-2-dem.jpg" alt="Tour Du Lịch Hạ Long - Đảo Tuần Châu 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,935,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hạ Long - Đảo Tuần Châu 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span></p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/cau-kinh-truong-gia-gioi.jpg" alt="Tour Phượng Hoàng Cổ Trấn - Trương Gia Giới - Phù Dung Trấn 6 Ngày 5 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Phượng Hoàng Cổ Trấn - Trương Gia Giới - Phù Dung Trấn 6 Ngày 5 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/Cáp-treo-fansipan-17.jpg" alt="Tour du lịch Sapa 2 ngày 1 đêm tết dương lịch 2019"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,200,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Sapa 2 ngày 1 đêm tết dương lịch 2019</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>2 ngày 1 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/a1.jpg" alt="Tour du lịch Sapa 3 ngày 2 đêm tết dương lịch 2019"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,750,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Sapa 3 ngày 2 đêm tết dương lịch 2019</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                </section>
                <div class="tour-moreinfo"><button class="btn-moreinfo">xem thêm tour</button></div>
            </div>
        </div>
        <div class="vn-tours">
            <div class="container tours-list">
                <div class="tittle-tour">
                    <h3>tour trong nước</h3>
                    <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
                </div>
                <section class="regular slider responsive">
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/cho-bac-ha-min.jpg" alt="Tour Du Lịch Y Tý – Bắc Hà 3 Ngày 2 Đêm"></a>
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
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
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
                                    <p class="new-price">2,000,000 đ</p>
                                    <p class="old-price">2,300,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Nội – Hoàng Su Phì – Simacai – Bắc Hà 3 ngày 2 đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour7.jpg" alt="Tour Hà Giang mùa hoa Tam giác mạch"></a>
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
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/sapa-jade-hill-2.jpg" alt="Combo Sapa khách sạn 5 sao - Tết 2020"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,190,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Combo Sapa khách sạn 5 sao - Tết 2020</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span>25/01, 26/01, 27/01</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>2 ngày 1 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/da-lat-1.jpg" alt="Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Sao"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,199,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Sao</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-ha-khau.jpg" alt="Tour Du Lịch SaPa - Tham Quan Hà Khẩu ( Trung Quốc ) 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch SaPa - Tham Quan Hà Khẩu ( Trung Quốc ) 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/nui-doi-quan-ba-ha-giang (1).jpg" alt="Tour Du Lịch Hà Giang - Chợ Tình Khâu Vai - Phiên Chợ Xuân 4N3Đ (Tháng Vàng Ưu Đãi)"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hà Giang - Chợ Tình Khâu Vai - Phiên Chợ Xuân 4N3Đ (Tháng Vàng Ưu Đãi)</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-buon-me-thuot-min.jpg" alt="Tour Du Lịch Buôn Ma Thuột - Đak Lak - Hành Trình Khám Phá Núi Rừng Tây Nguyên 3N2Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Buôn Ma Thuột - Đak Lak - Hành Trình Khám Phá Núi Rừng Tây Nguyên 3N2Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/hoang-su-phi.jpg" alt="Tour Du Lịch Hà Giang - Cao Nguyên Đá Đồng Văn 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,250,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hà Giang - Cao Nguyên Đá Đồng Văn 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour-du-lich-dienbien-vietcenter.png" alt="Tour Du lịch Hà Nội - Điện Biên 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Hà Nội - Điện Biên 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span></p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-dao-ngoc-cat-ba-vietcenter.png" alt="Du Lịch Hà Nội - Cát Bà Điểm Đến Số 1 Hải Phòng 3 Ngày 2 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du Lịch Hà Nội - Cát Bà Điểm Đến Số 1 Hải Phòng 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span></p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tam-chuc-ba-sao-kim-bang-ha-nam.png" alt="Tour Du Lịch Tam Chúc Ba Sao - Tham Quan Ngôi Chùa Lớn Nhất Việt Nam"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Tam Chúc Ba Sao - Tham Quan Ngôi Chùa Lớn Nhất Việt Nam</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>1 ngày đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-bien-lang-co.png" alt="Tour Du Lịch Hà Nội - Huế - Lăng Cô 3 Ngày 3 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,850,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hà Nội - Huế - Lăng Cô 3 Ngày 3 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 3 đêm</span>
                            </p>
                            <p><i class="fa fa-train" aria-hidden="true"></i>Phương tiện: <span>Tàu hỏa</span>
                            </p>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-da-nag.png" alt="Tour Hà Nội - Đà Nẵng - Hội An - Huế - Quảng Bình 5 Ngày 6 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,750,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Nội - Đà Nẵng - Hội An - Huế - Quảng Bình 5 Ngày 6 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 6 đêm</span>
                            </p>
                            <p><i class="fa fa-train" aria-hidden="true"></i>Phương tiện: <span>Tàu hỏa</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/ve-may-bay-da-lat.png" alt="Tour Du Lịch Hà Nội - Nha Trang - Đà Lạt 7 Ngày 6 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hà Nội - Nha Trang - Đà Lạt 7 Ngày 6 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>7 ngày 6 đêm</span>
                            </p>
                            <p><i class="fa fa-train" aria-hidden="true"></i>Phương tiện: <span>Tàu hỏa</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour-du-lich-dao-ngoc-xanh-vietcenter.jpg" alt="Tour Du Lịch Đảo Ngọc Xanh Phú Thọ 1 Ngày"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Đảo Ngọc Xanh Phú Thọ 1 Ngày</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>1 ngày </span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/sai-gon.jpg" alt="Tour Du Lịch Xuyên Việt Khởi Hành Từ Hà Nội 11 Ngày 10 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">7,395,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Xuyên Việt Khởi Hành Từ Hà Nội 11 Ngày 10 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>11 ngày 10 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-phu-quoc-vietcenter.jpg" alt="Tour Hà Nội - Hồ Chí Minh - Phú Quốc 4 Ngày 3 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">2,589,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Hà Nội - Hồ Chí Minh - Phú Quốc 4 Ngày 3 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour-du-lich-phan-thiet-mui-ne.png" alt="Tour Du Lịch Hà Nội - Nha Trang - Mũi Né 5 Ngày 4 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,790,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hà Nội - Nha Trang - Mũi Né 5 Ngày 4 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour-du-lich-nha-trang.png" alt="Tour Du Lịch Nha Trang - Đà Lạt 5 Ngày 4 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,850,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Nha Trang - Đà Lạt 5 Ngày 4 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/du-lich-ba-na-hill.png" alt="Tour Du Lịch Huế - Đà Nẵng - Bà Nà - Hội An - Cù Lao Chàm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">4,059,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Huế - Đà Nẵng - Bà Nà - Hội An - Cù Lao Chàm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/1den-ong-hoang-bay-bao-ha-21.jpg" alt="Du Lịch Đền Dâu Quán Cháo - Đền Sòng Sơn - Đền Cô Chín - Đền Bà Triệu - Đền Ông Hoàng Mười - Chùa Hương Tích"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,750,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du Lịch Đền Dâu Quán Cháo - Đền Sòng Sơn - Đền Cô Chín - Đền Bà Triệu - Đền Ông Hoàng Mười - Chùa Hương Tích</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>2 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/tour-ha-long-cat-ba.jpg" alt="Tour Khám Phá Hạ Long 3 Ngày 2 Đêm Khởi Hành Hàng Tuần"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Khám Phá Hạ Long 3 Ngày 2 Đêm Khởi Hành Hàng Tuần</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>


                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/Du-lich-hoang-su-phi-ha-giang.jpg" alt="Tour Du Lịch Sapa 2 Ngày 1 Đêm Khởi Hành Liên Tục Từ Hà Nội"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,200,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Sapa 2 Ngày 1 Đêm Khởi Hành Liên Tục Từ Hà Nội</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
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
                                    <p class="new-price">2,470,000 đ</p>
                                    <p class="old-price">2,800,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du lịch Đà Nẵng – Hội An – Cố đô Huế</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 5 đêm</span>
                            </p>
                            <p><i class="fa fa-train" aria-hidden="true"></i>Phương tiện: <span>Tàu hỏa</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/ha-giang2.jpg" alt="Tour Du Lịch Hà Giang – Đồng Văn – Yên Minh 3 Ngày 2 Đêm (Tour Tiết Kiệm)"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Hà Giang – Đồng Văn – Yên Minh 3 Ngày 2 Đêm (Tour Tiết Kiệm)</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/a1.jpg" alt="Tour du lịch Sapa 3 ngày 2 đêm từ Hà Nội"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">1,750,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Sapa 3 ngày 2 đêm từ Hà Nội</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/da-lat2.jpg" alt="Tour du lịch Đà Lạt 4 ngày 3 đêm từ Hà Nội"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Đà Lạt 4 ngày 3 đêm từ Hà Nội</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/den-ha-tuyen-quang-min.jpg" alt="Du lịch đền chùa Tuyên Quang"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du lịch đền chùa Tuyên Quang</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>1 ngày đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/Sam-son-min.jpg" alt="Du lịch biển Sầm Sơn 2 Ngày 1 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du lịch biển Sầm Sơn 2 Ngày 1 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>2 ngày 1 đêm</span>
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
                                    <p class="new-price">2,795,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du lịch Hạ Long – Du thuyền ( 3 ngày)</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 4 đêm</span>
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
                                    <p class="new-price">2,700,000 đ</p>
                                    <p class="old-price">3,000,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Mù Cang Chải – Yên Bái 3 Ngày 2 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/vntours/bai-dinh-1-min.jpg" alt="Trọn gói tour du lịch Ninh Bình : Bái Đính – Tràng An – Cúc Phương"></a>
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
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>
                </section>
                <div class="tour-moreinfo"><button class="btn-moreinfo">xem thêm tour</button></div>
            </div>
        </div>
        <div class="foreign-tours">
            <div class="container tours-list">
                <div class="tittle-tour">
                    <h3>tour nước ngoài</h3>
                    <img src="/frontend/images/homepage/icon star-2.png" alt="iconstar">
                </div>
                <section class="regular slider responsive">
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/tung-bung-le-hoi-chiang-mai.jpg" alt="Tour du lịch Thái Lan - Bangkok - Pattaya 4N3Đ"></a>
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
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/Wat-Phra-Singh.jpg" alt="Tour du lịch Chiang Mai - Chiang Rai 4N3Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">8,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Chiang Mai - Chiang Rai 4N3Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
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
                                    <p class="new-price">16,990,000 đ</p>
                                    <p class="old-price">17,990,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Hàn Quốc Tết Canh Tý 2020: HN - Seoul - Lotte World - trượt tuyết 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span>25/01, 26/01, 27/01</span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/lao.jpg" alt="Tour du lịch khám phá 3 nước Đông Dương Lào - Campuchia - Thái Lan 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">7,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch khám phá 3 nước Đông Dương Lào - Campuchia - Thái Lan 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/nuoc-nga.jpg" alt="Tour du lịch Nga - Matxcova - ST. Petersburg 8N7D"></a>
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
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span>25/01, 26/01, 27/01</span> </p>
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
                                    <p class="new-price">6,190,000 đ</p>
                                    <p class="old-price">7,900,000 đ</p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Lào khám phá xử sở hoa Champa 6N5Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>Ô tô</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/Myanmar1.jpg" alt="Tour Du Lịch Myanmar - Yangon - Golden Rock Khám Phá Miền Đất Phật"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">8,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Myanmar - Yangon - Golden Rock Khám Phá Miền Đất Phật</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/lasvegas-vietcenter.png" alt="Tour du Lịch Bờ Tây Nước Mỹ - Los Angeles - Las Vegas 7 Ngày 6 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">39,000,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du Lịch Bờ Tây Nước Mỹ - Los Angeles - Las Vegas 7 Ngày 6 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-chau-my-vietcenter.png" alt="Tour Du Lịch Khám Phá Bờ Đông - Bờ Tây Nước Mỹ 10 Ngày 9 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">65,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Khám Phá Bờ Đông - Bờ Tây Nước Mỹ 10 Ngày 9 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/nga.jpg" alt="Tour du Lịch Khám Phá Đất Nước Nga xinh Đẹp 9 Ngày 8 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">45,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du Lịch Khám Phá Đất Nước Nga xinh Đẹp 9 Ngày 8 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>9 ngày 8 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/Myanmar3.jpg" alt="Tour Du Lịch Myanmar Đất Nước Của Những Ngôi Chùa Vàng 4N3Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">8,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Myanmar Đất Nước Của Những Ngôi Chùa Vàng 4N3Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>


                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/3.jpg" alt="Tour Liên Tuyến Úc: Sydney - Auckland - Melbourne"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">81,700,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Liên Tuyến Úc: Sydney - Auckland - Melbourne</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-uc.png" alt="Tour Khám Phá Australia: SYDNEY - MELBOURNE"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">47,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Khám Phá Australia: SYDNEY - MELBOURNE</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>7 ngày 6 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/4.jpg" alt="Tour Khám Phá Australia Xinh Đẹp 5N4Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">39,390,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Khám Phá Australia Xinh Đẹp 5N4Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>5 ngày 4 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/tour-du-lich-nam-phi-vietcenter.png" alt="Khám Phá Vẻ Đẹp Hoang Sơ Của Nam Phi 8N7Đ"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">Liên hệ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Khám Phá Vẻ Đẹp Hoang Sơ Của Nam Phi 8N7Đ</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>8 ngày 7 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-phap-vietcenter.png" alt="Đón Tết Nguyên Đán 2020 Tại Châu Âu Với Hành Trình 10 Ngày 9 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">59,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Đón Tết Nguyên Đán 2020 Tại Châu Âu Với Hành Trình 10 Ngày 9 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/tour-cambodia-vietcenter.png" alt="Tour Du Lịch Cambodia - Thái Lan 6 Ngày 5 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">8,789,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Cambodia - Thái Lan 6 Ngày 5 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-ha-lan-vietcenter.png" alt="Tour Du Lịch 5 Quốc Gia Pháp - Lux - Đức - Bỉ - Hà Lan 9 Ngày 8 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">49,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch 5 Quốc Gia Pháp - Lux - Đức - Bỉ - Hà Lan 9 Ngày 8 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>9 ngày 8 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/tour-thuy-si-vietcenter.png" alt="Tour Du Lịch Pháp - Thụy Sĩ - Ý 10 Ngày 9 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">57,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Pháp - Thụy Sĩ - Ý 10 Ngày 9 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-phap-vietcenter.png" alt="Tour Du Lịch Pháp - Bỉ - Hà Lan - Đức  9 Ngày 8 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">52,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Pháp - Bỉ - Hà Lan - Đức  9 Ngày 8 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>9 ngày 8 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-mong-co.png" alt="Tour Du Lịch Khám Phá Thảo Nguyên Mông Cổ 7 Ngày 6 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">35,980,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Du Lịch Khám Phá Thảo Nguyên Mông Cổ 7 Ngày 6 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>7 ngày 6 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/gm_151211_3Y.jpg" alt="Du Lịch Đặc Biệt Đón Tết Nguyên Đán 2020 Tại Châu Âu"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">60,900,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Du Lịch Đặc Biệt Đón Tết Nguyên Đán 2020 Tại Châu Âu</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-Nhatban-yolotravel5840d85c2b1c6 - Copy.jpg" alt="Du Lịch Đất Nước Mặt Trời Mọc - Tết Nguyên Đán 2020"></a>
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
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>10 ngày 9 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/hottestTour/cau-kinh-truong-gia-gioi.jpg" alt="Tour Phượng Hoàng Cổ Trấn - Trương Gia Giới - Phù Dung Trấn 6 Ngày 5 Đêm"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">6,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour Phượng Hoàng Cổ Trấn - Trương Gia Giới - Phù Dung Trấn 6 Ngày 5 Đêm</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/foreigntours/du-lich-thai-lan-5ngay-4dem.png" alt="Tour du lịch Thái Lan: Bangkok - Pattaya 5 ngày 4 đêm - Khởi hành từ Hà Nội"></a>
                            <div class="tour-price">
                                <div>
                                    <p class="new-price">3,990,000 đ</p>
                                    <p class="old-price"></p>
                                </div>
                                <a href="">chi tiết </a>
                            </div>
                        </div>
                        <div class="tour-info">
                            <h4><a href="">Tour du lịch Thái Lan: Bangkok - Pattaya 5 ngày 4 đêm - Khởi hành từ Hà Nội</a></h4>
                            <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành:<span></span> </p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>6 ngày 5 đêm</span>
                            </p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span>
                            </p>
                        </div>
                    </div>

                </section>
                <div class="tour-moreinfo"><button class="btn-moreinfo">xem thêm tour</button></div>
            </div>
        </div>
        <div class="themed-tours">
            <div class="container tours-list">
                <div class="tittle-tour">
                    <h3>tour theo chủ đề</h3>
                    <img src="/frontend/images/homepage/icon star-.png" alt="iconstar">
                </div>
                <section class="regular slider responsive">
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/themed-tours/du-lich-do-son-vietcenter.jpg" alt="">Du lịch biển đảo 2020</a>
                            <div class="tour-price">
                                <div>
                                    <p class="themed-tours__title">Du lịch biển đảo 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/themed-tours/tour-du-lich-cho-nguoi-cao-tuoi.jpg" alt="">tour du lịch người cao tuổi</a>
                            <div class="tour-price">
                                <div>
                                    <p class="themed-tours__title">tour du lịch người cao tuổi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/themed-tours/du-lich-hoc-sinh-sinh-vien.png" alt="">du lịch học sinh - sinh viên 2020</a>
                            <div class="tour-price">
                                <div>
                                    <p class="themed-tours__title">du lịch học sinh - sinh viên 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tour-card">
                        <div class="tour-img">
                            <a href=""><img src="/frontend/images/homepage/themed-tours/du-lich-den-do.gif" alt="">du lịch lễ hội 2020</a>
                            <div class="tour-price">
                                <div>
                                    <p class="themed-tours__title">du lịch lễ hội 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="news">
        <div class="container">
            <div class="news-vietcenter">
                <div class="news-vietcenter__title">
                    <a href="">Tin vietcenter</a>
                    <p><a href="">Xem thêm ></a></p>
                </div>
                <div class="news-vietcenter__main">
                    <div><img src="/frontend/images/homepage/news/10-anh-cap-online-giai-dap-nong-2-15574110481241162182307.jpg" alt="Top 5 chương trình tour du lịch dành cho người cao tuổi lý tưởng năm 2020"></div>
                    <div class="news-vietcenter__main-content">
                        <div>
                            <a href="">Top 5 chương trình tour du lịch dành cho người cao tuổi lý tưởng năm 2020</a></div>
                        <div class="time-view">
                            <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>18/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>3997</span>
                        </div>
                        <p>
                            Top 5 chương trình tour du lịch dành cho người cao tuổi lý tưởng năm 2020
                        </p>
                    </div>
                </div>
                <div class="news-vietcenter__sub">
                    <section class="regular slider responsive news-vietcenter__sub-slide">
                        <div class="news-vietcenter__sub-card">
                            <div class="news-vietcenter__sub-img">
                                <a href=""><img src="/frontend/images/homepage/data-image.jpg" alt="Tour du lịch dành cho những người độc thân 2021"></a>
                            </div>
                            <div class="news-vietcenter__sub-title"><a href="">Tour du lịch dành cho những người độc thân 2021</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>18/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>1241</span>
                                </div>
                            </div>

                        </div>
                        <div class="news-vietcenter__sub-card">
                            <div class="news-vietcenter__sub-img">
                                <a href=""><img src="/frontend/images/homepage/data-image (1).jpg" alt="Bảng báo giá Tour du lịch lệ hội xuân Canh Tý 2020"></a>
                            </div>
                            <div class="news-vietcenter__sub-title"><a href="">Bảng báo giá Tour du lịch lệ hội xuân Canh Tý 2020</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>11/12/2019</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>691</span>
                                </div>
                            </div>

                        </div>
                        <div class="news-vietcenter__sub-card">
                            <div class="news-vietcenter__sub-img">
                                <a href=""><img src="/frontend/images/homepage/data-image (2).jpg" alt="[Tin chuyên ngành] Nhân lực ngành du lịch: Cầu tăng, cung chưa đáp ứng"></a>
                            </div>
                            <div class="news-vietcenter__sub-title"><a href="">[Tin chuyên ngành] Nhân lực ngành du lịch: Cầu tăng, cung chưa đáp ứng</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>11/09/2019</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>1862</span>
                                </div>
                            </div>

                        </div>
                        <div class="news-vietcenter__sub-card">
                            <div class="news-vietcenter__sub-img">
                                <a href=""><img src="/frontend/images/homepage/data-image.jpg" alt="Tour du lịch dành cho những người độc thân 2021"></a>
                            </div>
                            <div class="news-vietcenter__sub-title"><a href="">Tour du lịch dành cho những người độc thân 2021</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>18/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>1241</span>
                                </div>
                            </div>

                        </div>
                        <div class="news-vietcenter__sub-card">
                            <div class="news-vietcenter__sub-img">
                                <a href=""><img src="/frontend/images/homepage/data-image (1).jpg" alt="Bảng báo giá Tour du lịch lệ hội xuân Canh Tý 2020"></a>
                            </div>
                            <div class="news-vietcenter__sub-title"><a href="">Bảng báo giá Tour du lịch lệ hội xuân Canh Tý 2020</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>11/12/2019</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>691</span>
                                </div>
                            </div>

                        </div>
                        <div class="news-vietcenter__sub-card">
                            <div class="news-vietcenter__sub-img">
                                <a href=""><img src="/frontend/images/homepage/data-image (2).jpg" alt="[Tin chuyên ngành] Nhân lực ngành du lịch: Cầu tăng, cung chưa đáp ứng"></a>
                            </div>
                            <div class="news-vietcenter__sub-title"><a href="">[Tin chuyên ngành] Nhân lực ngành du lịch: Cầu tăng, cung chưa đáp ứng</a>
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>11/09/2019</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>1862</span>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <div class="news-detail">
                <div class="accordion" id="accordionExample">
                    <div class="btn-news-detail">
                        <div><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" autofocus>tin tức du lịch</button></div>
                        <div> <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">cẩm nang du lịch</button></div>
                        <div><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">kinh nghiệm du lịch</button></div>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>21/10/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>375</span>
                                </div>
                                <a href="">Địa điểm tổ chức sự kiện lý tưởng cho học sinh sinh viên tại Hà Nội</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/DJI_0451.jpg" alt="Địa điểm tổ chức sự kiện lý tưởng cho học sinh sinh viên tại Hà Nội"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>03/06/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>361</span>
                                </div>
                                <a href="">Tìm hiểu về di tích lịch sử nhà tù Phú Quốc</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/nha-tu-phu-quoc(1).jpg" alt="Tìm hiểu về di tích lịch sử nhà tù Phú Quốc"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>01/06/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>274</span>
                                </div>
                                <a href="">Sự bổ ích của những chuyến tham quan du lịch đối với học sinh</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/du-lich-hoc-sinh-vietcenter9.png" alt="Sự bổ ích của những chuyến tham quan du lịch đối với học sinh"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>384</span>
                                </div>
                                <a href="">Top 10 bức tượng Phật lớn nhất thế giới</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/Wat-Muang-1.jpg" alt="Top 10 bức tượng Phật lớn nhất thế giới"></a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>09/06/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>275</span>
                                </div>
                                <a href="">Cẩm nang du lịch Campuchia mới nhất 2020</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/kinh-nghiem-du-lich-campuchia.jpg" alt="Cẩm nang du lịch Campuchia mới nhất 2020"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>13/04/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>2361</span>
                                </div>
                                <a href="">Giá vé và lịch mở cửa vào Văn Miếu Quốc Tử Giám 2020</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/Vanmieu.jpg" alt="Giá vé và lịch mở cửa vào văn Miếu Quốc Tử Giám 2020"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>03/04/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>374</span>
                                </div>
                                <a href="">Du lịch biển Việt Nam và những điều cần biết</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/du lich bien viet nam 2.jpg" alt="Du lịch biển Việt Nam và những điều cần biết"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>384</span>
                                </div>
                                <a href="">Top 10 địa điểm du lịch hè Miền Bắc lý tưởng không thể bỏ qua</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/Mai-Chau-Ecolodge.jpg" alt="Top 10 địa điểm du lịch hè Miền Bắc lý tưởng không thể bỏ qua"></a>
                            </div>
                        </div>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>09/06/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>306</span>
                                </div>
                                <a href="">Top 5 địa chỉ đổi tiền Hà Trung UY TÍN và GIÁ TỐT NHẤT</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/doi-tien-pho-ha-trung.jpg" alt="Top 5 địa chỉ đổi tiền Hà Trung UY TÍN và GIÁ TỐT NHẤT"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>13/04/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>2481</span>
                                </div>
                                <a href="">Review kinh nghiệm du lịch Côn Đảo mới nhất 2020</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/tour-du-lich-con-dao-3ngay-2dem.png" alt="Review kinh nghiệm du lịch Côn Đảo mới nhất 2020"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>16/04/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>3374</span>
                                </div>
                                <a href="">Top 22 Trò chơi team building trong nhà và ngoài trời vui nhộn nhất 2020</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/tro-choi-team-building-gop-nuoc-qua-mang.jpg" alt="Top 22 Trò chơi team building trong nhà và ngoài trời vui nhộn nhất 2020"></a>
                            </div>
                        </div>
                        <div class="news-detail__card">
                            <div class="news-detail__content">
                                <div class="time-view">
                                    <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>01/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>3984</span>
                                </div>
                                <a href="">Tổng hợp kinh nghiệm du lịch Đại Nam Văn Hiến</a>
                            </div>
                            <div class="news-detail__img">
                                <a href=""><img src="/frontend/images/homepage/news/khu du lich dai nam van hien.jpg" alt="Tổng hợp kinh nghiệm du lịch Đại Nam Văn Hiến"></a>
                            </div>
                        </div>
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
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="/frontend/images/homepage/tour-du-lich-cho-doanh-nghiep.png" alt=""></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">Dịch vụ chu đáo nhiệt tình</a>
                            <p>Chúng tôi đã lựa chọn Vietcenter Tourist tổ chức cho chuyến du lịch Singapore vừa rồi. Chúng tôi thấy dịch vụ của các bạn rất chuyên nghiệp, chu đáo. Hướng dẫn viên nhiệt tình theo suốt đoàn. Cảm ơn Qúy Công ty
                            </p>
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>Nguyễn Hoàng</strong>
                                    </p>
                                    <p>MZG Group</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="/frontend/images/homepage/mzgroup.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="/frontend/images/homepage/avt-feedback-2.png" alt=""></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">Viet Center thật tuyệt vời</a>
                            <p>Dịch vụ chu đáo và chuyên nghiệp. Chúng tôi hoàn toàn yên tâm và tin tưởng sử dụng dịch vụ của Vietcenter cho những chuyến đi du lịch lần sau. Xin cảm ơn Qúy công ty.</p>
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>Hoàng Đức Chính</strong>
                                    </p>
                                    <p>Hùng Thắng Company</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="/frontend/images/homepage/hungthang.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="/frontend/images/homepage/avt-feedback-3.png" alt=""></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">Hỗ trợ nhiệt tình, chu đáo</a>
                            <p>Năm nay, lễ hội hoa tam giác mạch khai mạc ngày 10/11. Đường hoa tại phố cổ Đồng Văn kéo dài tới tháng 12 là điểm mới của lễ hội năm nay. </p>
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>Nguyễn Như Xuân</strong>
                                    </p>
                                    <p>ADC Việt Nam</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="/frontend/images/homepage/adcvietnam.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="/frontend/images/homepage/tour-du-lich-cho-doanh-nghiep.png" alt=""></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">Dịch vụ chu đáo nhiệt tình</a>
                            <p>Chúng tôi đã lựa chọn Vietcenter Tourist tổ chức cho chuyến du lịch Singapore vừa rồi. Chúng tôi thấy dịch vụ của các bạn rất chuyên nghiệp, chu đáo. Hướng dẫn viên nhiệt tình theo suốt đoàn. Cảm ơn Qúy Công ty
                            </p>
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>Nguyễn Hoàng</strong>
                                    </p>
                                    <p>MZG Group</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="/frontend/images/homepage/mzgroup.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="/frontend/images/homepage/avt-feedback-2.png" alt=""></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">Viet Center thật tuyệt vời</a>
                            <p>Dịch vụ chu đáo và chuyên nghiệp. Chúng tôi hoàn toàn yên tâm và tin tưởng sử dụng dịch vụ của Vietcenter cho những chuyến đi du lịch lần sau. Xin cảm ơn Qúy công ty.</p>
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>Hoàng Đức Chính</strong>
                                    </p>
                                    <p>Hùng Thắng Company</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="/frontend/images/homepage/hungthang.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customerExperience-card">
                    <div>
                        <div class="customerExperience-card__img">
                            <a href=""><img src="/frontend/images/homepage/avt-feedback-3.png" alt=""></a>
                        </div>
                        <div class="customerExperience-card__desc">
                            <a href="">Hỗ trợ nhiệt tình, chu đáo</a>
                            <p>Năm nay, lễ hội hoa tam giác mạch khai mạc ngày 10/11. Đường hoa tại phố cổ Đồng Văn kéo dài tới tháng 12 là điểm mới của lễ hội năm nay. </p>
                            <div class="customerExperience-card__desc-infoUser d-flex">
                                <div>
                                    <p>
                                        <strong>Nguyễn Như Xuân</strong>
                                    </p>
                                    <p>ADC Việt Nam</p>
                                </div>
                                <div class="customerExperience-card__desc-infoUser__avt">
                                    <a href=""><img src="/frontend/images/homepage/adcvietnam.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
