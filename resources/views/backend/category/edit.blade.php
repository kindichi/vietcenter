@extends('backend.layouts.main');

@section('content')
    <section class="content-header">
        <h1>
            Quản lý Danh mục<a href="{{ route('admin.category.index') }}" class="btn bg-purple btn-flat"><i class="fa fa-tasks"></i> Danh sách</a>

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
                    <form role="form" method="post" action="{{route('admin.category.update', ['id' => $data->id ])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục cha</label>
                                    <select class="form-control" name="parent_id" id="parent_id">
                                        <option>--chọn--</option>
                                        <option value="1" {{ ($data->parent_id == 1) ? 'selected' : '' }}>Combo Du lịch</option>
                                        <option value="2" {{ ($data->parent_id == 2) ? 'selected' : '' }}>Tour trong nước</option>
                                        <option value="3" {{ ($data->parent_id == 3) ? 'selected' : '' }}>Tour nước ngoài</option>
                                        <option value="4" {{ ($data->parent_id == 4) ? 'selected' : '' }}>Tour theo chủ đề</option>
                                        <option value="5" {{ ($data->parent_id == 5) ? 'selected' : '' }}>Lịch khởi hành</option>
                                        <option value="6" {{ ($data->parent_id == 6) ? 'selected' : '' }}>Tin tức</option>
                                    </select>
                                </div>
                                @if ($errors->has('parent_id'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('parent_id')}} </label>
                                @endif

                                <div class="form-group">
                                    <label for="name">Tên danh mục</label>
                                    <input value="{{ $data->name }}" type="text" name="name" class="form-control" id="name">
                                </div>
                                @if ($errors->has('name'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('name')}} </label>
                                @endif

                                <div class="form-group">
                                    <label for="imgage">Ảnh</label>
                                    <input type="file" name="image" id="image">

                                </div>
                                @if ($errors->has('image'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('image')}} </label>
                                @endif
                                <div class="checkbox">
                                    <label>
                                        <input {{ ($data->is_active == 1) ? 'checked' : '' }} type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại danh mục</label>
                                    <select class="form-control" name="type" id="type">
                                        <option value>--chọn--</option>
                                        @foreach($data as $item)
                                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                                        @endforeach
                                        <option value="1" {{ ($data->type == 1) ? 'selected' : '' }}>Sản phẩm</option>
                                        <option value="2" {{ ($data->type == 2) ? 'selected' : '' }}>Bài viết</option>
                                        <option value="3" {{ ($data->type == 3) ? 'selected' : '' }}>option 3</option>
                                        <option value="4" {{ ($data->type == 4) ? 'selected' : '' }}>option 4</option>
                                        <option value="5" {{ ($data->type == 5) ? 'selected' : '' }}>option 5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="position">Vị trí hiển thị</label>
                                    <input value="{{ $data->position }}" type="number" name="position" class="form-control" id="position" min="1">
                                </div>

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
            <!--/.col (left) -->
            <!-- right column -->

        </div>
        <!-- /.row -->
    </section>
@endsection
