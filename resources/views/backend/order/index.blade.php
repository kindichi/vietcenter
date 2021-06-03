@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý Đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Đơn hàng</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Đơn hàng</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Mã đơn hàng</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Thời gian dự kiến</th>
                                <th>Yêu cầu thêm</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                                <th>Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->fullname }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->address }}</td>
                                    <td>{{ $item->date }}</td>
                                    <td>{{ $item->note }}</td>
                                    <td>{{ number_format($item->total) }} đ</td>
                                    <td>  @if ($item->order_status_id === 1)
                                            <span class="label label-info">Mới</span>
                                        @elseif ($item->order_status_id === 2)
                                            <span class="label label-warning">Đang XL</span>
                                        @elseif ($item->order_status_id === 3)
                                            <span class="label label-success">Hoàn thành</span>
                                        @else
                                            <span class="label label-danger">Hủy</span>
                                        @endif</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.order.edit', ['id' => $item->id ]) }}" class="btn btn-flat bg-purple">Chi tiết</a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {{ $data->links() }}
                    </div>
                </div>
                <!-- /.box -->
            </div>

            <!--/.col (left) -->
            <!-- right column -->

        </div>
        <!-- /.row -->
    </section>
@endsection
@section('code_js')
    <script type="text/javascript">
        $(document).ready(function() {
            // Thiết lập csrf => chổng giả mạo
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            })

            $('.btn-delete').on('click',function () {
                let id = $(this).data('id');
                let result = confirm("Bạn có chắc chắn muốn xóa ?");
                if (result) { // neu nhấn == ok , sẽ send request ajax
                    $.ajax({
                        url: '/admin/order/'+id, // http://webthucpham.local:8888/user/8
                        type: 'DELETE', // phương truyền tải dữ liệu
                        data: {
                            // dữ liệu truyền sang nếu có
                            name : 'dung'
                        },
                        dataType: "json", // kiểu dữ liệu muốn nhận về
                        success: function (res) {
                            //  PHP : $user->name
                            //  JS: res.name
                            if (res.success != 'undefined' && res.success == 1) { // xóa thành công
                                $('.item-'+id).remove();
                            }
                        },
                        error: function (e) { // lỗi nếu có
                            console.log(e);
                        }
                    });
                }
            });

            /*$( ".btn-delete" ).click(function() {
                alert( "Handler for .click() called." );
            });*/

        });
    </script>
@endsection

