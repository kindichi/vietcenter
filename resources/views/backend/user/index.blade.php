@extends('backend.layouts.main');
@section('content')
    <section class="content-header">
        <h1>
            QL User <a href="{{ route('user.create') }}" class="btn bg-purple btn-flat"><i class="fa fa-plus"></i> Thêm</a>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
            <li class="active">QL Danh Sách - Nhà Cung Cấp</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Danh Sách Người Dùng</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Avatar</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Ngày Cấp</th>
                                <th>Trạng Thái</th>
                                <th>Hành Động</th>
                            </tr>

                            @foreach($data as $key => $item)
                                <tr>
                                    <td>{{ $key }}</td>
                                    <td><img src="{{ asset($item->avatar) }}" width="50" /></td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->role_id }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->is_active == 1 ? 'Show' : 'Hide' }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('user.edit', ['id' => $item->id ]) }}" class="btn btn-flat bg-purple"><i class="fa fa-pencil"></i></a>
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
