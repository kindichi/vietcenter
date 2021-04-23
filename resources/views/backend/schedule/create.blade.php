@extends('backend.layouts.main');

@section('content')
    <section class="content-header">
        <h1>
            Thêm Lịch trình <a href="{{route('admin.schedule.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Lịch trình</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin Lịch trình</h3>
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
                <form role="form" action="{{route('admin.schedule.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Title ...">
                                    @if ($errors->has('title'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục Sản phẩm</label>
                                    <select class="form-control" name="product_id" id="product_id">
                                        <option value>--chọn--</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}">{{$product->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position"
                                           value="1">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active"><b>Trạng thái hiển thị</b>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea id="editor1" name="content" class="form-control" rows="3"
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
                var _ckeditor1 = CKEDITOR.replace('content');
                _ckeditor1.config.height = 150;

            })
        })
    </script>
@endsection

