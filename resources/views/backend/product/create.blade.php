@extends('backend.layouts.main');

@section('content')
    <section class="content-header">
        <h1>
            Thêm Sản phẩm <a href="{{route('admin.product.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Sản phẩm</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin sản phẩm</h3>
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
                    <form role="form" action="{{route('admin.product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputSupplier">Tên tour</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên ...">
                                        @if ($errors->has('name'))
                                            <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh tour du lịch</label>
                                        <input type="file" id="image" name="image">
                                        @if ($errors->has('image'))
                                            <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('image') }}</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryOption">Danh mục tour</label>
                                        <select class="form-control" name="category_id">
                                            <option value="select"> -- chọn Danh Mục --</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category -> id}}">{{$category -> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryOption">Danh mục cha</label>
                                        <select class="form-control" name="categoryParent_id">
                                            <option value="select"> -- chọn Danh Mục --</option>
                                            @foreach($categoryParent_id as $Parent_id)
                                                <option value="{{$Parent_id -> id}}">{{$Parent_id -> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Giá gốc (vnđ)</label>
                                        <input type="text" class="form-control" id="price" name="price">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Giá khuyến mãi (vnđ)</label>
                                        <input type="text" class="form-control" id="sale" name="sale">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Ngày khởi hành</label>
                                        <input type="text" class="form-control" id="departure_day" name="departure_day"
                                              placeholder="Ngày khởi hành">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Thời gian</label>
                                        <input type="text" class="form-control" id="duration" name="duration"
                                              placeholder="Thời gian">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryOption">Phương tiện</label>
                                        <select class="form-control" name="vehicle">
                                            <option value=""> -- chọn Phương tiện --</option>
                                            <option value="Máy bay">Máy bay</option>
                                            <option value="Tàu hỏa">Tàu hỏa</option>
                                            <option value="Ô tô">Ô tô</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="categoryOption">Điểm khởi hành</label>
                                        <select class="form-control" name="location">
                                            <option value=""> -- chọn Điểm khởi hành --</option>
                                            <option value="Hà Nội">Hà Nội</option>
                                            <option value="Tp. Hồ Chí Minh">Tp. Hồ Chí Minh</option>
                                            <option value="Hải Phòng">Hải Phòng</option>
                                            <option value="Đà Nẵng">Đà Nẵng</option>
                                            <option value="Đà Lạt">Đà Lạt</option>
                                            <option value="Nha Trang">Nha Trang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí</label>
                                        <input type="number" class="form-control" id="position" name="position"
                                               value="1">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label class="col-md-6">
                                            <input type="checkbox" value="1" name="is_hot"><b>Tour hot</b>
                                        </label>
                                        <label class="col-md-6">
                                            <input type="checkbox" value="1" name="is_active"><b>Hiển thị</b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputSupplier">Tùy chỉnh liên kết Url</label>
                                <input type="text" class="form-control" id="name" name="url"
                                       placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Lịch trình</label>
                                <textarea id="editor1" name="schedule" class="form-control" rows="3"
                                          placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor2" name="description" class="form-control" rows="3"
                                          placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Điều khoản</label>
                                <textarea id="editor3" name="rule" class="form-control" rows="3"
                                          placeholder="Enter ..."></textarea>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection
@section('ckeditor_js')
    <script type="text/javascript">
        $(function () {
            $(function () {
                var _ckeditor1 = CKEDITOR.replace('schedule');
                _ckeditor1.config.height = 100;
                var _ckeditor2 = CKEDITOR.replace('description');
                _ckeditor2.config.height = 150;
                var _ckeditor3 = CKEDITOR.replace('rule');
                _ckeditor3.config.height = 150;
            })
        })
    </script>
@endsection

