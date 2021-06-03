@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Sửa thông tin Đơn hàng <a href="{{route('admin.order.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Đơn hàng</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Sửa thông tin Đơn hàng</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-warning"></i> Cảnh báo !</h4>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.order.update', ['id' => $order->id ])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-header with-border">
                        <button type="submit" class="btn btn-info btn-flat">
                            <i class="fa fa-edit"></i>
                            Cập nhật
                        </button>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td style="width: 180px"><label for="">Mã ĐH :</label></td>
                                <td>{{ $order->code }}</td>
                                <td style="margin-left: 50px"><label>Ngày Đặt Hàng:</label></td>
                                <td>{{ $order->created_at }}</td>
                            </tr>
                            <tr>
                                <td><label for="">Họ tên :</label></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date" value="{{ $order->fullname }}">
                                    </div>
                                </td>
                                <td><label>Mã giảm giá</label></td>
                                <td>{{ $order->coupon }}</td>
                            </tr>
                            <tr>
                                <td><label>SĐT :</label> </td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date" value="{{ $order->phone }}">
                                    </div>
                                </td>
                                <td><label>Tạm tính</label></td>
                                <td>{{ number_format($order->total) }}</td>
                            </tr>
                            <tr>
                                <td><label>Email :</label></td>
                                <td>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date" value="{{ $order->email }}">
                                    </div>
                                </td>
                                <td><label>Khuyến mại</label></td>
                                <td>{{ number_format($order->discount) }} đ</td>
                            </tr>
                            <tr>
                                <td><label>Địa chỉ :</label> </td>
                                <td colspan="">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="date" value="{{ $order->address }}">
                                    </div>
                                </td>
                                <td><label>Thành tiền</label></td>
                                <td style="color: red">{{ number_format($order->total - $order->discount) }} đ</td>

                            </tr>
                            <tr>
                                <td><label>Ngày dự kiến khởi hành:</label> </td>
                                <td colspan="">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date" value="{{ $order->date }}">
                                    </div>
                                </td>
                                <td><label>Trạng thái ĐH</label></td>
                                <td style="color: red">
                                    <select class="form-control " name="order_status_id" style="max-width: 150px;display: inline-block;">
                                        <option value="0">-- chọn --</option>
                                        @foreach($order_status as $status)
                                            <option {{ ($order->order_status_id == $status->id ? 'selected':'') }} value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label>Ghi chú :</label> </td>
                                <td colspan="3">
                                    <div class="form-group">
                                        <textarea name="note" class="form-control" rows="3" placeholder="">{{ $order->note }}</textarea>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </form>

            </div>
            <!-- /.box -->
            <div class="box">

                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>TT</th>
                            <th style="max-with:200px">Tour</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>

                            <th>Giá</th>
                            <th>Thành tiền</th>
                            <th class="text-center"></th>
                        </tr>
                        </tbody>
                        <!-- Lặp một mảng dữ liệu pass sang view để hiển thị -->
                        @foreach($order->details as $key => $item)
                            <tr class=""> <!-- Thêm Class Cho Dòng -->
                                <td>{{ $key }}</td>
                                <td>
                                    <a target="_blank" href="{{route('admin.tour.edit', ['id'=> $item->tour_id])}}">
                                        {{$item->name}}
                                    </a>
                                </td>
                                <td>
                                @if ($item->image) <!-- Kiểm tra hình ảnh tồn tại -->
                                    <img src="{{asset($item->image)}}" width="100" height="100">
                                    @endif
                                </td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ number_format($item->price) }} đ</td>

                                <td style="color:red;">{{ number_format($item->price * $item->qty) }} đ</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection


