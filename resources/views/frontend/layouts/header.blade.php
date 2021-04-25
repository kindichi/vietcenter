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
                <li><a href="">Lịch khởi hành</a></li>
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
                        <a href="{{ route('home.index') }}">trang chủ</a>
                    </li>
                    @foreach($categories as $item)
                        @if($item->parent_id == 0 && $item->is_active == 1 && $item->position == 1 && $item->type == 1)
                            <li class="nav-item">
                                <a href="{{ route('home.toursList', ['slug' => $item->slug]) }}">{{ $item->name }}</a>
                                <ul class="header-menu__sub">
                                    @foreach($categories as $item2)
                                        @if($item2->parent_id == $item->id)
                                        <li class="nav-item">
                                            <a href="{{ route('home.toursList', ['slug' => $item2->slug]) }}">{{ $item2->name }}</a>
                                        </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @endif
                        @if($item->parent_id == 0 && $item->is_active == 1 && $item->position == 1 && $item->type == 3)
                                <li class="nav-item">
                                    <a href="{{ route('home.news') }}">{{ $item->name }}</a>
                                    <ul class="header-menu__sub">
                                        @foreach($categories as $item2)
                                            @if($item2->parent_id == $item->id)
                                                <li class="nav-item">
                                                    <a href="{{ route('home.newsList', ['slug' => $item2->slug]) }}">{{ $item2->name }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                    @endforeach
                    <li class="nav-item">
                        <a href="{{route('home.contact')}}">Liên hệ</a>
                    </li>
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
