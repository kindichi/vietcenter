@extends('backend.layouts.main');

@section('content')
    <section class="content-header">
        <h1>
            Quản lý Nhà cung cấp <a href="{{ route('admin.vendor.index') }}" class="btn bg-purple btn-flat"><i class="fa fa-tasks"></i> Danh sách</a>
        </h1>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Nhà cung cấp</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm Nhà cung cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('admin.vendor.update', ['id' => $data->id ])}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ncc">Nhà cung cấp</label>
                                    <input type="text" name="name" class="form-control" id="ncc" value="{{ $data->name }}">
                                </div>
                                @if ($errors->has('name'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('name')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ $data->email}}">
                                </div>
                                @if ($errors->has('email'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('email')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="phone">Điện thoại</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $data->phone}}">
                                </div>
                                @if ($errors->has('phone'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('phone')}} </label>
                                @endif
                                <div class="form-group">
                                     <label for="image">New Logo</label>
                                     <input type="file" id="image" name="image">
                                     <img src="{{ asset($data->image) }}" alt="" width="100" style="margin-top: 10px;">
                                </div>
                                @if ($errors->has('image'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('image')}} </label>
                                @endif
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="is_active" id="is_active"> Hiển thị
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    <input type="text" name="website"  class="form-control" id="website" value="{{ $data->website}}">
                                </div>
                                @if ($errors->has('website'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('website')}} </label>
                                @endif
                                <div class="form-group">
                                    <label>Nhập địa chỉ</label>
                                    <textarea class="form-control" id="address" name="address" rows="3" value="{{ $data->address}}"></textarea>
                                </div>
                                @if ($errors->has('address'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('address')}} </label>
                                @endif
                                <div class="form-group">
                                    <label for="position">Vị trí hiển thị</label>
                                    <input type="number" name="position" class="form-control" id="position" min="1" value="{{ $data->position}}">
                                </div>
                                @if ($errors->has('position'))
                                    <label class="text-red"> <i class="fa fa-info"></i> {{$errors->first('position')}} </label>
                                @endif
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
