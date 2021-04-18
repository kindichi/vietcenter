<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top__contact">
                <img src="/frontend/images/homepage/ic-phone-header-top.png" alt="">
                <a href="callto:+8496817811">0968178011</a>
                <img src="/frontend/images/homepage/ic-email-header-top.png" alt="">
                <a href="mailto:lienhe@vietcenter.vn">lienhe@vietcenter.vn</a>
            </div>
            <ul class="header-top__menu">
                <li><a href="">Đối Tác - Khách Hàng</a></li>
                <li><a href="">Dịch Vụ</a></li>
                <li><a href="">Đặt Phòng</a></li>
                <li><a href="">Giới Thiệu</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="{{route('home.contact')}}">Liên hệ</a></li>
                <li>
                    <a href=""><img src="/frontend/images/homepage/ic-en.png" alt=""></a>
                </li>
            </ul>
        </div>
    </div>
    <nav class="container navbar navbar-expand-lg header-menu">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                MENU<span><i class="fas fa-bars"></i></span>
            </button>
            <img src="/frontend/images/homepage/logo-header.png" alt="">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-menu__main">
                    <li class="nav-item">
                        <a href="#">trang chủ</a>
                    </li>
                    @foreach($categories as $item)
                        @if($item->parent_id == 0 && $item->is_active == 1)
                            <li class="nav-item">
                                <a href="">{{ $item->name }}</a>
                                <ul class="header-menu__sub">
                                    @foreach($categories as $item2)
                                        @if($item2->parent_id == $item->id)
                                        <li class="nav-item">
                                            <a href="#">{{ $item2->name }}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                    @endforeach
{{--                    <li class="nav-item header-menu__main-large">--}}
{{--                        <a href="#">tour trong nước</a>--}}
{{--                        <ul class="header-menu__sub header-menu__sub-large">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">tour đặc biệt</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch tết 2020</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch doanh nghiệp 2020</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch mua hè 2020</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">chùm tuor du lịch 1 ngày</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch 30-4 và 1-5</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch sapa - lai châu</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch trong nước tết nguyên đán 2020</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">chùm tuor du lịch tết dương lịch 2020</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch mùa đông 2020</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">tour du lịch mùng 2-9</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch tây bắc</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch đông bắc</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch miền bắc</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hà giang</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch ninh bình</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch quảng ninh</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hà nội</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch cao bằng</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hạ long</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch sapa</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch lai châu</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch mộc châu</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch thanh hóa</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch miền trung</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch nha trang</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch đà lạt</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch đà nẵng</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch phú yên</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch quảng nam</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch bình thuận</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch quảng bình</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hà tĩnh</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch quảng ngãi</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch quy nhơn</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch huế</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch phan thiết</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch ninh thuận</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch miền nam</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch côn đảo</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch miền tây</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch sài gòn</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch phú quốc</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item header-menu__main-large">--}}
{{--                        <a href="#">tour nước ngoài</a>--}}
{{--                        <ul class="header-menu__sub header-menu__sub-large">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch châu á</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch thái lan</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch trung quốc</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hàn quốc</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch dubai</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch campuchia</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch đài loan</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch maldives</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch nhật bản</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch bhutan</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hồng kông</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch nepal</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch singapore</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch indonesia</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch châu âu</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch pháp</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch thụy sĩ</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch ý</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch anh</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch hà lan</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch châu mỹ</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch mỹ</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch canada</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch châu úc</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch new zeland</a>--}}
{{--                                    </li>--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch úc</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch châu phi</a>--}}
{{--                                <ul class="header-menu__sub-desc">--}}
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="#">du lịch nam phi</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#">tour theo chủ đề</a>--}}
{{--                        <ul class="header-menu__sub header-menu__sub-themedtours">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch biển đảo 2020</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">tour du lịch khuyến mại 2020</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">tour du lịch ghép đoàn 2020</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">dã ngoại - kỹ năng - sinh tồn</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch cuối tuần 2020</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">tour du lịch người cao tuổi</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch lễ hội 2020</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">du lịch học sinh - sinh viên 2020</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#">lịch khởi hành</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#">tin tức</a>--}}
{{--                        <ul class="header-menu__sub header-menu__sub-news">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">tin tức du lịch</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">cẩm nang du lịch</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">kinh nghiệm du lịch</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="#">hỏi đáp du lịch</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
            </div>
        </div>
    </nav>

</header>
<!-- social network contact -->
<section class="socialNetwork-contact">
    <ul>
        <li class="bg-phone">
            <a href=""><img src="/frontend/images/homepage/ic-phone-fix-right.png" alt="mobile"></a>
        </li>
        <li class="bg-fb">
            <a href=""><img src="/frontend/images/homepage/ic-fb-fix-right.png" alt="facebook"></a>
        </li>
        <li class="bg-zalo">
            <a href=""><img src="/frontend/images/homepage/ic-zalo-fix-right.png" alt="zalo"></a>
        </li>
    </ul>
</section>
