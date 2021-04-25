@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý Sản phẩm  <a href="{{ route('admin.tour.create') }}" class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> Thêm</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Sản phẩm</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Hình ảnh</th>
                                <th>Tour</th>
                                <th>Danh mục tour</th>
                                <th>Danh mục cha</th>
                                <th>Giá bán</th>
                                <th>Giá khuyến mãi</th>
                                <th>Ngày khởi hành</th>
                                <th>Thời gian</th>
                                <th>Phương tiện</th>
                                <th>Điểm khởi hành</th>
                                <th>Vị trí</th>
                                <th>Tour hot</th>
                                <th>Trạng thái</th>
                                <th>Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr class="item-{{ $item->id }}">
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset($item->image) }}" width="50" /></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ @$item->category->name }}</td>
                                    <td>{{ @$item->category->parent->name }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->sale }}</td>
                                    <td>{{ $item->departure_day }}</td>
                                    <td>{{ $item->duration }}</td>
                                    <td>{{ $item->vehicle }}</td>
                                    <td>{{ $item->location }}</td>
                                    <td>{{ $item->position }}</td>
                                    <td>{{ $item->is_hot == 1 ? 'Hot' : '' }}</td>
                                    <td>{{ $item->is_active == 1 ? 'Show' : 'Hide' }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.tour.edit', ['id' => $item->id ]) }}" class="btn btn-flat bg-purple"><i class="fa fa-pencil"></i></a>
                                        <button data-id="{{ $item->id }}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></button>
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
                        url: '/admin/tour/'+id, // http://webthucpham.local:8888/user/8
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
