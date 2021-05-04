@extends('frontend.layouts.main')
@section('title')
    <title>Đặt tour</title>
@endsection
@section('mycss')
    <link rel="stylesheet" href="/frontend/css/index.css">
    <link rel="stylesheet" href="/frontend/css/booktour.css">
@endsection
@section('content')
    <section class="container title direction">
        <p><a href="">Trang chủ</a> >
            @foreach($categories as $item)
                @if($item->id == $category->parent_id)
                    <a href="{{route('home.toursList',['slug'=>$item->slug])}}">{{$item->name}}</a> >
                @endif
            @endforeach
            <a href="{{route('home.toursList',['slug'=>$category->slug])}}">{{$category->name}}</a> >
            <a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}">Đặt tour "{{$tour->name}}"</a></p>
    </section>
    <section class="container booktour">
        <h3>Đặt tour "{{$tour->name}}"</h3>
        <img src="/frontend/images/homepage/icon star-.png" alt="">
        <form action="{{route('home.postBookTour', ['slug'=>$tour->slug]) }}" method="post" enctype="multipart/form-data" class="needs-validation row" >
         @csrf
            <div class="booktour-content row">
                <div class="booktour-info">
                    <h4>thông tin liên hệ</h4>
                    <p>Vietcenter sẽ liên hệ ngay với bạn để xác nhận Booking này</p>

                    <div class=" booktour-info__input">
                            <label for="email">Email</label>
                            <div>
                                <div><img src="/frontend/images/ic-frm-email.png" alt="" ></div>
                                <input type="email" name="email" id="email" placeholder="Email">
                            </div>
                    </div>
                    <div class="booktour-info__input">
                        <label for="phone">Số điện thoại</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-phone.png" alt="" id="phone"></div>
                            <input type="text" name="phone" id="phone" placeholder="Điện thoại">
                        </div>
                    </div>
                    @if ($errors->has('phone'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('phone') }}</label>
                    @endif
                    <div class=" booktour-info__input">
                        <label for="fullname">Họ và tên</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-use.png" alt="" id="fullname"></div>
                            <input type="text" name="name" id="name" placeholder="Họ và tên">
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                    @endif
                    <div class=" booktour-info__input">
                        <label for="address">Địa chỉ</label>
                        <div>
                            <div><img src="/frontend/images/ic-frm-location.png" alt="" ></div>
                            <input type="text" placeholder="Địa chỉ" name="address" id="address">
                        </div>
                    </div>
                    <div class="col-md-12 booktour-info__input">
                        <label for="moreInfo">Yêu cầu thêm</label>
                        <textarea id="moreInfo" name="moreInfo" placeholder="Ví dụ: Nhà mình có 3 người lớn, 1 trẻ 3 tuổi..."></textarea>
                    </div>
                    <div class="col-md-12 booktour-info__check">
                        <input type="checkbox" value="" id="invalidCheck" required>
                        <span class="form-check-label" for="invalidCheck">
                              Đặt trước giữ chỗ, thanh toán sau. Dễ dàng, thuận tiện, thanh chóng !
                        </span>
                    </div>
                    <button type="submit" class=" booktour-info__btn">
                        hoàn thành
                    </button>
                </div>
                <div class="booktour-payment">
                    <h4>thông tin thanh toán</h4>
                    <div class="booktour-info__input">
                            <label for="phone">Ngày dự kiến</label>
                            <div>
                                <div><img src="/frontend/images/ic-date-v2.png" alt="" id="phone"></div>
                                <input placeholder="dd/mm/yyyy" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" name="date"/>
                            </div>
                        </div>
                        <div class="booktour-info__input">
                            <label for="amount">Số lượng</label>
                            <div>
                                <input type="number" name="amount" style="width: 10rem" class="form-control" id="amount" min="1" value="1">
                            </div>
                        </div>
                        @if ($errors->has('amount'))
                            <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('amount') }}</label>
                        @endif
                        <input type="hidden" value="{{$tour->sale}}" id="price">
                        <div class="booktour-price">
                            <p>Đơn giá</p>
                            <p></p>
                        </div>
                        <div class="booktour-totalprice">
                            <p>Tổng tiền</p>
                            <p></p>
                        </div>
                        <div class="booktour-totalprice">
                            <p>Thanh toán</p>
                            <p></p>
                        </div>
                        <div class="booktour-tourinfo">
                            <h5><a href="{{route('home.tourDetail',['slug'=>$tour->slug])}}">{{$tour->name}}</a></h5>
                            <img src="{{asset($tour->image)}}" alt="">
                            <div>
                                <p><img src="/frontend/images/booktour/ic-location.png" alt="ngày khởi hành"> Điểm khởi hành: <span>{{$tour->location}}</span> </p>
                                <p><img src="/frontend/images/homepage/ic-time.png" alt="thời gian">Thời gian:<span> {{$tour->duration}}</span>
                                </p>
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
                        </div>
                </div>
            </div>
        </form>
    </section>
@endsection
@section('booktour')
    <script>
        $(document).ready(function() {
            a = $("#price").val();
            b = Number(a).toLocaleString('en');
            $('.booktour-price>p:last-child').text(b + " đ");
            $('.booktour-totalprice>p:last-child').text(b + " đ");
        })
    </script>
    <script>
        $(document).ready(function() {
            $("#amount").change(function() {
                let a, b, c;
                a = $("#amount").val();
                b = $("#price").val();
                if (!isNaN(a)) {
                    c = Number(a * b).toLocaleString('en');
                    $('.booktour-totalprice>p:last-child').html(c + " đ");
                } else {
                    $('.booktour-totalprice>p:last-child').html("Liên hệ");
                }

                console.log(c);
            });

        });
    </script>
@endsection
