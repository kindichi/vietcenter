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

    <div class="container direction">
        <p><a href="{{route('home.index')}}">Trang chủ</a> >
            @foreach($categories as $item)
                @if($item->id == $category->parent_id)
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
            @foreach($list_tours as $tour)
                <div class="tour-card">
                    <div class="tour-card__img">
                        <a href=""><img src="{{asset($tour->image)}}" alt="{{$tour->name}}"></a>
                    </div>
                    <div class="tour-card__desc">
                        <a href="">{{$tour->name}}</a>
                        <div>
                            <div class="tour-card__desc-info">
                                <p><img src="/frontend/images/homepage/ic-departure.png" alt="ngày khởi hành"> Ngày khởi hành: <span>{{$tour->departure_day}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-location.png" alt="điểm khởi hành">Điểm khởi hành:<span>{{$tour->location}}</span></p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span>{{$tour->duration}}</span></p>
                                <p><img src="/frontend/images/homepage/ic-planes.png" alt="phương tiện">Phương tiện: <span>{{$tour->vehicle}}</span></p>
                            </div>
                            <div class="tour-card__desc-price">
                                <strong>{{number_format($tour->sale,0,",",".")}} đ</strong>
                                @if($tour->price)
                                    <strike>{{number_format($tour->price,0,",",".")}} đ</strike>
                                @endif
                                <a href="{{route('home.bookTour',['slug'=>$tour->slug])}}">đặt tour</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
