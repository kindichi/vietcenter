@extends('backend.layouts.main');

@section('content2')
    <section class="content-header">
        <h1>
            Quản lý Sản phẩm
            <small>Preview</small>
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
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tensp">Tên sản phẩm</label>
                                    <input type="text" name="name" class="form-control" id="tensp" placeholder="Tên sản phẩm" required>
                                </div>
                                <div class="form-group">
                                    <label for="loaisp">Phân loại</label>
                                    <input type="text" name="category_id" class="form-control" id="loaisp" placeholder="Loại sản phẩm" required>
                                </div>
                                <div class="form-group">
                                    <label for="hangsx">Hãng sản xuất</label>
                                    <input type="text" name="brand_id" class="form-control" id="hangsx" placeholder="Hãng sản xuất" required>
                                </div>
                                <div class="form-group">
                                    <label for="ncc">Nhà cung cấp</label>
                                    <input type="text" name="vendor_id" class="form-control" id="ncc" placeholder="Nhà cung cấp" required>
                                </div>

                                <div class="form-group">
                                    <label for="imgage">Ảnh sản phẩm</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="form-group">
                                    <label for="color">Màu sắc</label>
                                    <input type="text" name="color" class="form-control" id="color" placeholder="Màu sắc" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="description">Mô tả sản phẩm</label>
                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Mô tả"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="position">Vị trí hiển thị</label>
                                    <input type="number" name="position" class="form-control" id="position" min="1" value="1">
                                </div>
                                <div class="form-group">
                                    <label for="price">Giá sản phẩm</label>
                                    <input type="text" name="price" class="form-control" id="price" placeholder="Màu sắc" required>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (left) -->
            <!-- right column -->

        </div>
        <!-- /.row -->
    </section>
@endsection
