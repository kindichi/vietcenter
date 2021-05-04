@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm Khách hàng <a href="{{route('admin.customer.index')}}" class="btn btn-primary">Danh sách </a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/admin"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Quản lý Khách hàng</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <!-- left column -->
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Thông tin Khách hàng</h3>
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
                <form role="form" action="{{route('admin.customer.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên khách hàng</label>
                                    <select class="form-control" name="name" id="name">
                                        <option value>--Chọn khách hàng--</option>
                                        @foreach($bookTours as $item)
                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('name'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('name') }}</label>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tour đã tham gia</label>
                                    <select class="form-control" name="tour_id" id="tour_id">
                                        <option value>--Chọn Tour--</option>
                                        @foreach($bookTours as $item)
                                            @foreach($tours as $tour)
                                                @if($item->tour_id == $tour->id)
                                                <option value="{{$tour->id}}">{{$tour->name}}</option>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày bắt đầu</label>
                                    <input type="date" class="form-control" id="dateStart" name="dateStart">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ngày kết thúc</label>
                                    <input type="date" class="form-control" id="dateEnd" name="dateEnd">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputSupplier">Số người tham gia</label>
                                    <input type="number" class="form-control" id="amount" name="amount" >
                                    @if ($errors->has('amount'))
                                        <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{ $errors->first('address') }}</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">


                        </div>
                        <div class="row">


                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" value="1" name="is_active"><b>Trạng thái hiển thị</b>
                                    </label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Ghi chú</label>
                            <textarea id="editor1" name="summary" class="form-control" rows="3"
                                      placeholder="Ghi chú"></textarea>
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


