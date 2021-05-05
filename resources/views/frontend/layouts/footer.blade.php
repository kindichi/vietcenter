<footer>
    <nav class="container footer-menu">
        <ul class="d-flex">
            <li><a href="{{route('home.index')}}">Trang chủ</a></li>
            @foreach($categories as $item)
                @if($item->parent_id == 0 && $item->position == 1 && $item->type == 3)
                    @foreach($categories as $item2)
                        @if($item2->parent_id == $item->id)
                            <li>
                                <a href="{{ route('home.newsList', ['slug' => $item2->slug]) }}">{{ $item2->name }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            <li><a href="/lien-he">Liên hệ</a></li>
        </ul>
    </nav>
    <div class="promotional-news">
        <h3>đăng ký nhận tin khuyến mãi</h3>
        <form action="{{route('home.promotion')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="email" placeholder="Nhập email của bạn">
            <button type="submit">đăng ký</button>
        </form>

    </div>
    <div class="container vietcenter-info">
        <div class="col-md-3">
            <a href=""><img src="/frontend/images/homepage/vietcenter-foooter.gif" alt=""></a>
            <p><img src="/frontend/images/homepage/vote-star-v1.png" alt=""><span>16,668</span><span>Đánh giá</span></p>
            <ul class="vietcenter-info__socialNetwork">
                <li>
                    <a href=""><img src="/frontend/images/homepage/ic-fb-ft.png" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="/frontend/images/homepage/ic-tw-ft.png" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="/frontend/images/homepage/ic-gp-ft.png" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="/frontend/images/homepage/ic-rss-ft.png" alt=""></a>
                </li>
                <li>
                    <a href=""><img src="/frontend/images/homepage/ic-yt-ft.png" alt=""></a>
                </li>
            </ul>
        </div>
        @foreach($categories as $item)
            @if($item->parent_id == 0 && $item ->type == 5)
                <div class="col-md-3 vietcenter-info__card">
                    <h4>{{ $item->name }}</h4>
                    <ul>
                        @foreach($categories as $item2)
                            @if($item2->parent_id == $item->id)
                                <li>
                                    <a href="{{ route('home.info', ['slug' => $item2->slug]) }}"> <i class="fas fa-angle-right"></i> {{ $item2->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            @endif
        @endforeach
        <div class="col-md-3 vietcenter-info__card">
            <h4>địa chỉ công ty</h4>
            <ul>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <a href="{{$setting->linkMap1}}"></i>{{$setting->address1}}</a>
                </li>
                <li><i class="fas fa-phone-alt"></i> <a href=""> {{$setting->phone}}</a></li>
                <li><i class="fas fa-fax"></i> <a href=""> {{$setting->fax}}</a></li>
                <li><i class="fas fa-envelope"></i> <a href="mailto:{{$setting->email}}"> {{$setting->email}}</a></li>
            </ul>
        </div>
    </div>
    <div class="licenseInfo">
        <div class="container d-flex">
            <div class="licenseInfo-content">
                <p>{{$setting->company}}</p>
                <p>Giấy phép kinh doanh số 0103011405 Sở kế hoạch và đầu tư Thành phố Hà Nội cấp ngày 15/11/2008.</p>
                <p>Coppyright &copy; 2011-2018. All Rights Reserved by Vietcenter Tourist. Thiết kế và điều hành bởi <a href="https://vietcenter.vn" target="_blank">Vietcenter Tourist</a></p>
                <p>
                    <a class="dmca-badge" href="//www.dmca.com/Protection/Status.aspx?ID=8a134d68-4a6e-49f4-8a82-04f5eb97d95c" title="DMCA.com Protection Status"><img alt="DMCA.com Protection Status" src="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=8a134d68-4a6e-49f4-8a82-04f5eb97d95c" /></a>
                    <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js">
                    </script>
                </p>
            </div>
            <div class="licenseInfo-logo">
                <img src="/frontend/images/homepage/bo-cong-thuong.png" alt="thông báo bộ công thương">
            </div>
        </div>
    </div>
</footer>
