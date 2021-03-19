@extends('backend.layouts.main');
@section('content2')
    <section class="content-header">
        <h1>
            Quản lý Danh mục
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Danh mục</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin danh mục</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option>option 1</option>
                                        <option>option 2</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="ncc">Tên danh mục</label>
                                    <input type="text" name="name" class="form-control" id="ncc" placeholder="Nhà cung cấp" required>
                                </div>

                                <div class="form-group">
                                    <label for="imgage">Ảnh</label>
                                    <input type="file" name="image" id="image">

                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option>Sản phẩm</option>
                                        <option>Bài viết</option>
                                        <option>option 3</option>
                                        <option>option 4</option>
                                        <option>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="position">Vị trí hiển thị</label>
                                    <input type="number" name="position" class="form-control" id="position" min="1" value="1">
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
