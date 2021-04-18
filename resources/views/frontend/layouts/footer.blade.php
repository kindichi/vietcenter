<footer>
    <nav class="container footer-menu">
        <ul class="d-flex">
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Kinh nghiệm du lịch</a></li>
            <li><a href="">Video du lịch</a></li>
            <li><a href="">Hình ảnh du lịch</a></li>
            <li><a href="">Tư vấn du lịch</a></li>
            <li><a href="">Review du lịch</a></li>
            <li><a href="">Liên hệ</a></li>
            <li><a href="">Site map</a></li>
        </ul>
    </nav>
    <div class="promotional-news">
        <h3>đăng ký nhận tin khuyến mãi</h3>
        <input type="text" placeholder="Nhập email của bạn">
        <button type="submit">đăng ký</button>
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
        <div class="col-md-3 vietcenter-info__card">
            <h4>thông tin cần biết</h4>
            <ul>
                <li>
                    <a href=""> <i class="fas fa-angle-right"></i> Hướng dẫn thanh toán</a>
                </li>
                <li><a href=""><i class="fas fa-angle-right"></i> Điều khoản</a></li>
                <li><a href=""><i class="fas fa-angle-right"></i> Bảo mật thông tin</a></li>
                <li><a href=""><i class="fas fa-angle-right"></i> Bảo hiểm du lịch</a></li>
            </ul>
        </div>
        <div class="col-md-3 vietcenter-info__card">
            <h4>thông tin hữu ích</h4>
            <ul>
                <li><a href=""><i class="fas fa-angle-right"></i> Tin VietCenter</a></li>
                <li><a href=""><i class="fas fa-angle-right"></i> Góc truyền thông</a></li>
                <li><a href=""><i class="fas fa-angle-right"></i> Tuyển dụng</a></li>
                <li><a href=""><i class="fas fa-angle-right"></i> Cảm nhận khách hàng</a></li>
            </ul>
        </div>
        <div class="col-md-3 vietcenter-info__card">
            <h4>địa chỉ công ty</h4>
            <ul>
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <a href=""></i>{{$setting->address}}</a>
                </li>
                <li><i class="fas fa-phone-alt"></i> <a href=""> {{$setting->phone}}</a></li>
                <li><i class="fas fa-fax"></i> <a href=""> 024.6281.6210</a></li>
                <li><i class="fas fa-envelope"></i> <a href=""> lienhe@vietcenter.vn</a></li>
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