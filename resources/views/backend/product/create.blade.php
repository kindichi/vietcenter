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
                                        <label for="exampleInputSupplier">Tên sản phẩm</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Tên ...">
                                        @if ($errors->has('name'))
                                            <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Ảnh sản phẩm</label>
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
                                        <label for="categoryOption">Danh mục sản phẩm</label>
                                        <select class="form-control" name="category_id">
                                            <option value="select"> -- chọn Danh Mục --</option>
                                            @foreach($dataCategory as $category)
                                                <option value="{{$category -> id}}">{{$category -> name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="stock">Số lượng trong kho</label>
                                        <input type="text" class="form-control" id="stock" name="stock">
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
                            <br>


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
                                        <label class="col-md-4">
                                            <input type="checkbox" value="1" name="is_active"><b>Trạng thái hiển thị</b>
                                        </label>
                                        <label >
                                            <input type="checkbox" value="1" name="is_hot"><b>Sản phẩm nổi bật</b>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                            </div>

                            <div class="form-group">
                                <label for="exampleInputSupplier">Tùy chỉnh liên kết Url</label>
                                <input type="text" class="form-control" id="name" name="url" placeholder="">
                            </div>

                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea id="editor2" name="summary" class="form-control" rows="3"
                                          placeholder="Enter ..."></textarea>
                            </div>

                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea id="editor1" name="description" class="form-control" rows="3"
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
{{--    <section class="content">--}}
{{--        <div class="row">--}}
{{--            <!-- left column -->--}}
{{--            <div class="col-md-12">--}}
{{--                <!-- general form elements -->--}}
{{--                <div class="box box-primary">--}}
{{--                    <div class="box-header with-border">--}}
{{--                        <h3 class="box-title">Thông tin sản phẩm</h3>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-6">--}}
{{--                            @if ($errors->any())--}}
{{--                                <div class="alert alert-warning alert-dismissible">--}}
{{--                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
{{--                                    <h4><i class="icon fa fa-warning"></i> Cảnh báo !</h4>--}}
{{--                                    <ul>--}}
{{--                                        @foreach ($errors->all() as $error)--}}
{{--                                            <li>{{ $error }}</li>--}}
{{--                                        @endforeach--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            @endif--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- /.box-header -->--}}
{{--                    <!-- form start -->--}}
{{--                    <form role="form" method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="box-body">--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="name">Tên sản phẩm</label>--}}
{{--                                    <input type="text" name="name" class="form-control" id="name" placeholder="Sản phẩm">--}}
{{--                                </div>--}}
{{--                                @if ($errors->has('name'))--}}
{{--                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('name')}} </label>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="imgage">Ảnh sản phẩm</label>--}}
{{--                                    <input type="file" name="image" id="image">--}}

{{--                                </div>--}}
{{--                                @if ($errors->has('image'))--}}
{{--                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('image')}} </label>--}}
{{--                                @endif--}}
{{--                            </div>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Danh mục cha</label>--}}
{{--                                    <select class="form-control" name="parent_id" id="parent_id">--}}
{{--                                        <option>--chọn--</option>--}}
{{--                                       --}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                @if ($errors->has('parent_id'))--}}
{{--                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('parent_id')}} </label>--}}
{{--                                @endif--}}




{{--                                <div class="checkbox">--}}
{{--                                    <label>--}}
{{--                                        <input type="checkbox" name="is_active" id="is_active"> Hiển thị--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label>Loại danh mục</label>--}}
{{--                                    <select class="form-control" name="type" id="type">--}}
{{--                                        <option value>--chọn--</option>--}}
{{--                                        <option value="1">Sản phẩm</option>--}}
{{--                                        <option value="2">Dịch vụ</option>--}}
{{--                                        <option value="3">Bài viết</option>--}}
{{--                                        <option value="4">option 4</option>--}}
{{--                                        <option value="5">option 5</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="position">Vị trí hiển thị</label>--}}
{{--                                    <input type="number" name="position" class="form-control" id="position" min="1" value="1">--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- /.box-body -->--}}

{{--                        <div class="box-footer">--}}
{{--                            <button type="submit" class="btn btn-primary">Thêm</button>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <!-- /.box -->--}}


{{--            </div>--}}
{{--            <!--/.col (left) -->--}}
{{--            <!-- right column -->--}}

{{--        </div>--}}
{{--        <!-- /.row -->--}}
{{--    </section>--}}
@endsection

