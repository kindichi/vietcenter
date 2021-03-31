@extends('backend.layouts.main');

@section('content')
    <section class="content-header">
        <h1>
            QL Nhà cung cấp <a href="{{ route('admin.vendor.create') }}" class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> Thêm</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">QL Nhà cung cấp</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Danh sách Nhà cung cấp</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Logo</th>
                                    <th>Nhà cung cấp</th>
                                    <th>Email</th>
                                    <th>Điện thoại</th>
                                    <th>Website</th>
                                    <th>Địa chỉ</th>
                                    <th>Trạng Thái</th>
                                    <th>Hành Động</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td><img src="{{ asset($item->image) }}" width="50" /></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->website }}</td>
                                    <td>{{ $item->address }}</td>
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
            <!-- /.col -->
        </div>
    </section>
@endsection
