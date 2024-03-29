@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Sửa Đánh giá <a href="{{route('admin.review.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Đánh giá</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin Đánh giá</h3>
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
                <form role="form" action="{{route('admin.review.update', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Tiêu đề</label>
                                    <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}">
                                    @if ($errors->has('title'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('title') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tour đánh giá</label>
                                    <select class="form-control" name="tour_id" id="tour_id">
                                        <option value>--chọn--</option>
                                        @foreach($tours as $tour)
                                            <option value="{{$tour->id}}" {{($data->tour_id == $tour->id) ? 'selected' : ''}}>{{$tour->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value>--chọn danh mục--</option>
                                        @foreach($categories as $item)
                                            <option value="{{$item->id}}" {{($data->category_id == $item->id) ? 'selected' : ''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Avatar</label>
                                    <input type="file" id="avatar" name="avatar">
                                    <img src="{{ asset($data->avatar) }}" alt="" width="100" style="margin-top: 10px;">
                                    @if ($errors->has('avatar'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('avatar') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh bài đánh giá</label>
                                    <input type="file" id="image" name="image">
                                    <img src="{{ asset($data->image) }}" alt="" width="100" style="margin-top: 10px;">
                                    @if ($errors->has('image'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('image') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Người đánh giá</label>
                                    <select class="form-control" id="name" name="name">
                                        <option value>--chọn người đánh giá--</option>
                                        @foreach($customers as $item)
                                            <option {{($data->name == $item->name) ? 'selected' : ''}} value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('name'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Địa chỉ</label>
                                    <input type="text" class="form-control" id="address" name="address" value="{{$data->address}}">
                                    @if ($errors->has('address'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('address') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vị trí</label>
                                    <input type="number" class="form-control" id="position" name="position"
                                           value="{{$data->position}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" {{$data->is_active == 1 ? 'checked' : ''}} name="is_active"><b>Trạng thái hiển thị</b>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <textarea id="editor1" name="summary" class="form-control" rows="3"
                                      placeholder="Enter ...">{{$data->summary}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea id="editor1" name="description" class="form-control" rows="3"
                                      placeholder="Enter ...">{{$data->description}}</textarea>
                        </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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
                var _ckeditor1 = CKEDITOR.replace('summary');
                _ckeditor1.config.height = 100;
                var _ckeditor2 = CKEDITOR.replace('description');
                _ckeditor2.config.height = 150;
            })
        })
    </script>
@endsection



