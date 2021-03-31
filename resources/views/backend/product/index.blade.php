@extends('backend.layouts.main');

@section('content')
    <section class="content-header">
        <h1>
            Quản lý Sản phẩm  <a href="{{ route('admin.product.create') }}" class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> Thêm</a>

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
                                <th>Logo</th>
                                <th>Nhà cung cấp</th>
                                <th>Số lượng</th>
                                <th>Giá bán</th>
                                <th>Giá khuyến mãi</th>
                                <th>Thương hiệu</th>
                                <th>Nhà cung cấp</th>
                                <th>Trạng thái</th>
                                <th>Hành Động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td><img src="{{ asset($item->image) }}" width="50" /></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ $item->price }}</td>
                                    <td>{{ $item->sale }}</td>
                                    <td>{{ $item->brand_id }}</td>
                                    <td>{{ $item->vendor_id }}</td>
                                    <td>{{ $item->is_active == 1 ? 'Show' : 'Hide' }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.vendor.edit', ['id' => $item->id ]) }}" class="btn btn-flat bg-purple"><i class="fa fa-pencil"></i></a>
                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
