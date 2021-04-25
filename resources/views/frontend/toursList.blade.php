@extends('frontend.layouts.main')
@section('title')
    <title>Danh sách tour</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/toursList.css">
@endsection
@section('content')
    <section class="banner">
        <img src="/frontend/images/customerExperience/banner-tour.png" class=" w-100" alt="...">
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

    <div class="container direction">
        <p><a href="">Trang chủ</a> > <a href="">Tour trong nước</a></p>
    </div>

    <section class="container tours">
        <div class="col-md-9 tours-content">
            <div class="tours-intro">
                <h2>Tour trong nước</h2>
                <div>
                    <img src="/frontend/images/tours/img-tour-intro.png" alt="">
                    <p>Du lịch trong nước luôn là lựa chọn tuyệt vời. Đường bờ biển dài hơn 3260km, những khu bảo tồn thiên nhiên tuyệt vời, những thành phố nhộn nhịp, những di tích lịch sử hào hùng, nền văn hóa độc đáo và hấp dẫn, cùng một danh sách dài
                        những món ăn ngon nhất thế giới, Việt Nam có tất cả những điều đó. Với lịch trình dày, khởi hành đúng thời gian cam kết, Vietcenter là công ty lữ hành uy tín nhất hiện nay tại Việt Nam, luôn sẵn sàng phục vụ du khách mọi lúc, mọi
                        nơi, đảm bảo tính chuyên nghiệp và chất lượng dịch vụ tốt nhất thị trường.</p>
                </div>
            </div>
            <div class="tours-title">
                <h3>Danh sách  <p>tour trong nước</p> </h3>
                <div class="tours-sort">
                    Sắp xếp theo
                    <select name="sapxep" id="sort">
                        <option value="cap nhat moi" selected>Cập nhật mới nhất</option>
                        <option value="hang sao">Hạng sao</option>
                        <option value="gia thap">Giá từ thấp đến cao</option>
                        <option value="gia cao">Giá từ cao đến thấp</option>
                        <option value="tu a den z">Từ A-Z</option>
                    </select>
                </div>
            </div>
            <p>Vietcenter Tourist cung cấp dịch vụ đặt phòng khách sạn, homestay nhanh chóng và tiện lợi. Với hệ thống đối tác là các khách sạn lớn trên khắp các tỉnh thành của Việt Nam. Chúng tôi tự tin mang đến cho quý khách hàng những sựa lựa chọn về
                phòng nghỉ tối ưu nhất. Hãy tìm kiếm và đặt phòng khách sạn ngay tại đây</p>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/sapa-jade-hill-2.jpg" alt="Combo Sapa khách sạn 5 sao - Tết 2020"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Combo Sapa khách sạn 5 sao - Tết 2020</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>2 ngày 1 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>1,1150,000 đ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/da-lat-1.jpg" alt="Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Saon"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Combo Đà Lạt 3 Ngày 2 Đêm Khách Sạn 3 Saon</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>2,600,000 đ</strong>
                            <strike>2,922,000 đ</strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/du-lich-ha-khau.jpg" alt="Tour Du Lịch SaPa - Tham Quan Hà Khẩu ( Trung Quốc ) 3 Ngày 2 Đêm"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du Lịch SaPa - Tham Quan Hà Khẩu ( Trung Quốc ) 3 Ngày 2 Đêm</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>2 ngày 1 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/nui-doi-quan-ba-ha-giang (1).jpg" alt="Tour Du Lịch Hà Giang - Chợ Tình Khâu Vai - Phiên Chợ Xuân 4N3Đ (Tháng Vàng Ưu Đãi)"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du Lịch Hà Giang - Chợ Tình Khâu Vai - Phiên Chợ Xuân 4N3Đ (Tháng Vàng Ưu Đãi)</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>4 ngày 3 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/du-lich-buon-me-thuot-min.jpg" alt="Tour Du Lịch Buôn Ma Thuột - Đak Lak - Hành Trình Khám Phá Núi Rừng Tây Nguyên 3N2Đ"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du Lịch Buôn Ma Thuột - Đak Lak - Hành Trình Khám Phá Núi Rừng Tây Nguyên 3N2Đ</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>Máy bay</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/hoang-su-phi.jpg" alt="Tour Du Lịch Hà Giang - Cao Nguyên Đá Đồng Văn 3 Ngày 2 Đêm"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du Lịch Hà Giang - Cao Nguyên Đá Đồng Văn 3 Ngày 2 Đêm</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/tour-du-lich-dienbien-vietcenter.png" alt="Tour Du lịch Hà Nội - Điện Biên 3 Ngày 2 Đêm"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du lịch Hà Nội - Điện Biên 3 Ngày 2 Đêm</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/du-lich-dao-ngoc-cat-ba-vietcenter.png" alt="Du Lịch Hà Nội - Cát Bà Điểm Đến Số 1 Hải Phòng 3 Ngày 2 Đêm"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Du Lịch Hà Nội - Cát Bà Điểm Đến Số 1 Hải Phòng 3 Ngày 2 Đêm</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 2 đêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/tam-chuc-ba-sao-kim-bang-ha-nam.png" alt="Tour Du Lịch Tam Chúc Ba Sao - Tham Quan Ngôi Chùa Lớn Nhất Việt Nam"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du Lịch Tam Chúc Ba Sao - Tham Quan Ngôi Chùa Lớn Nhất Việt Nam</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>1 ngày</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tour-card">
                <div class="tour-card__img">
                    <a href=""><img src="/frontend/images/homepage/vntours/du-lich-bien-lang-co.png" alt="Tour Du Lịch Hà Nội - Huế - Lăng Cô 3 Ngày 3 Đêm"></a>
                </div>
                <div class="tour-card__desc">
                    <a href="">Tour Du Lịch Hà Nội - Huế - Lăng Cô 3 Ngày 3 Đêm</a>
                    <div>
                        <div class="tour-card__desc-info">
                            <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>Hà Nội</span></p>
                            <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>3 ngày 3 êeêm</span></p>
                            <p><img src="/frontend/images/homepage/ic-oto.png" alt="phương tiện">Phương tiện: <span>ô tô</span></p>
                        </div>
                        <div class="tour-card__desc-price">
                            <strong>Liên hệ</strong>
                            <strike></strike>
                            <button>đặt phòng</button>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#" autofocus>1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
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
            <div class="toursNav">
                <div class="toursNav-title">
                    <h5>Tour trong nước</h5>
                </div>
                <div class="accordion toursNav-desc" id="vntours-nav">
                    <div class="accordion-item">
                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#vntours-north" aria-expanded="true" aria-controls="vntours-north">
                            Du lịch miền bắc <i class="fas fa-chevron-down"></i>
                        </div>
                        <ul id="vntours-north" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="headingOne" data-bs-parent="#vntours-nav">
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hà giang</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch ninh bình</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch quảng ninh</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hà nội</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch cao bằng</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hạ long</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch sapa</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch lai châu</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch mộc châu</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch thanh hóa</a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#vntours-mid" aria-expanded="false" aria-controls="vntours-mid">
                            Du lịch miền trung <i class="fas fa-chevron-down"></i>
                        </div>
                        <ul id="vntours-mid" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="headingTwo" data-bs-parent="#vntours-nav">

                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch nha trang</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch đà lạt</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch đà nẵng</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch phú yên</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch quảng nam</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch bình thuận</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch quảng bình</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hà tĩnh</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch quảng ngãi</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch quy nhơn</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch huế</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch phan thiết</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch ninh thuận</a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#vntours-south" aria-expanded="false" aria-controls="vntours-south">
                            Du lịch miền nam <i class="fas fa-chevron-down"></i>
                        </div>
                        <ul id="vntours-south" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="headingThree" data-bs-parent="#vntours-nav">
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch côn đảo</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch miền tây</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch sài gòn</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch phú quốc</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="toursNav">
                <div class="toursNav-title">
                    <h5>Tour nước ngoài</h5>
                </div>
                <div class="accordion toursNav-desc" id="foreigntours">
                    <div class="accordion-item">
                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#asiatours" aria-expanded="true" aria-controls="asiatours">
                            Du lịch châu á <i class="fas fa-chevron-down"></i>
                        </div>
                        <ul id="asiatours" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="headingOne" data-bs-parent="#foreigntours">
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch thái lan</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch trung quốc</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hàn quốc</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch dubai</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch campuchia</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch đài loan</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch maldives</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch nhật bản</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch bhutan</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hồng kông</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch nepal</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch singapore</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch indonesia</a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#eutours" aria-expanded="false" aria-controls="eutours">
                            Du lịch châu âu <i class="fas fa-chevron-down"></i>
                        </div>
                        <ul id="eutours" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="headingTwo" data-bs-parent="#foreigntours">

                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch pháp</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch thụy sĩ</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch ý</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch anh</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i> du lịch hà lan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-button collapsed toursNav-desc__btn" type="button" data-bs-toggle="collapse" data-bs-target="#americantours" aria-expanded="false" aria-controls="americantours">
                            Du lịch châu mỹ <i class="fas fa-chevron-down"></i>
                        </div>
                        <ul id="americantours" class="accordion-collapse collapse toursNav-desc__list" aria-labelledby="headingThree" data-bs-parent="#foreigntours">
                            <li class="nav-item">
                                <a href="#"><i class="fas fa-caret-right"></i>du lịch mỹ</a>
                            </li>
                            <li class="nav-item">
                                <a href="#"><i class="fas fa-caret-right"></i>du lịch canada</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="toursNav toursNav-themed">
                <div class="toursNav-title">
                    <h5>Tour theo chủ đề</h5>
                </div>
                <div class="accordion toursNav-desc" id="themestours">
                    <div class="accordion-item">
                        <ul class="toursNav-desc__list">

                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>du lịch biển đảo 2020</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>tour du lịch khuyến mại 2020</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>tour du lịch ghép đoàn 2020</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>dã ngoại - kỹ năng - sinh tồn</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>du lịch cuối tuần 2020</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>tour du lịch người cao tuổi</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>du lịch lễ hội 2020</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-caret-right"></i>du lịch học sinh - sinh viên 2020</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="mostview">
                <div class="mostview-title">
                    <h5>Xem nhiều nhất</h5>
                </div>
                <div class="mostview-content">
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/dulichdongmo.jpg" alt="Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Cuối tuần nên đi đâu ở Hà Nội? Khám phá ngay địa điểm thú vị này</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>07/05/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>432</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/bien binh tien ninh thuan.jpg" alt="Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Khu du lịch Bình Tiên Ninh Thuận, vẻ đẹp hoang sơ</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>19/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>205</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/ngam vinh lan ha.jpg" alt="Những trải nghiệm nhất định phải thử khi du lịch vịnh Lan Hạ"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Những trải nghiệm nhất định phải thử khi du lịch vịnh Lan Hạ</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>17/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>305</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/du day royal.jpg" alt="Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Những trải nghiệm khó quên khi tham gia tour du thuyền Royal Caribbean</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/03/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>405</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/content-passport.jpg" alt="Visa ở hộ chiếu cũ có hiệu lực khi thay hộ chiếu mới?"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Visa ở hộ chiếu cũ có hiệu lực khi thay hộ chiếu mới?</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>25/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>445</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/kinh-nghiem-mua-nuoc-mam-phu-quoc-lam-qua-chinh-hang-dung-gia-1.jpg" alt="Các hãng bay có cho phép mang nước mắm?"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Các hãng bay có cho phép mang nước mắm?</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>23/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>245</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/châu âu.jpg" alt="Nước nào ở Châu Âu hoàn thuế cao nhất?"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Nước nào ở Châu Âu hoàn thuế cao nhất?</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>19/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>265</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/giang-sinh-chau-au1.jpg" alt="Giáng sinh ở nước Châu Âu nào là đẹp nhất?"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Giáng sinh ở nước Châu Âu nào là đẹp nhất?</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>15/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>465</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/giay-to-can-chuan-bi-cho-tre-em-khi-di-may-bay.jpg" alt="Cho trẻ một tuổi đi nước ngoài cân giấy tờ gì?"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Cho trẻ một tuổi đi nước ngoài cân giấy tờ gì?</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>12/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>565</span>
                            </div>
                        </div>
                    </div>
                    <div class="mostview-card">
                        <div class="mostview-photo">
                            <a href=""><img src="/frontend/images/blog/content-passport.jpg" alt="Vì sao bị từ chối visa liên tục dù hồ sơ 'mạnh'?"></a>
                        </div>
                        <div class="mostview-desc">
                            <a href="">Vì sao bị từ chối visa liên tục dù hồ sơ 'mạnh'?</a>
                            <div class="time-view">
                                <img src="/frontend/images/homepage/news/ic-departure.png" alt="time"> <span>05/02/2020</span> <img src="/frontend/images/homepage/news/ic-view.png" alt="view"> <span>515</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/to-chuc-su-kien.png" alt="to chuc su kien"></a>
                </div>
                <div class="service-desc">
                    <a href="">Tổ chức sự kiện</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/ve-may-bay.png" alt="ve may bay"></a>
                </div>
                <div class="service-desc">
                    <a href="">Vé máy bay</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/dat-phong-khach-san.png" alt="dat phong khach san"></a>
                </div>
                <div class="service-desc">
                    <a href="">Đặt phòng khách sạn</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/homepage/cho-thue-xe.png" alt="cho thue xe"></a>
                </div>
                <div class="service-desc">
                    <a href="">cho thuê xe</a>
                </div>
            </div>
            <div class="service-card">
                <div class="service-img">
                    <a href=""><img src="/frontend/images/customerExperience/item-cubes-1.png" alt="ho chieu"></a>
                </div>
                <div class="service-desc">
                    <a href="">visa - hộ chiếu</a>
                </div>
            </div>

        </div>
    </section>
@endsection
