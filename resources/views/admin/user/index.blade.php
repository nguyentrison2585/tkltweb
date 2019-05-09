@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-1 mt-2 mb-2 pull-left text-center">
                                <a href="/admin/users/add" class="btn btn-info">Thêm user</a>
                            </div>
                            <div class="col-md-3 mt-2 mb-2 offset-md-8">
                                <form action="/admin/users" class="pull-right" method="GET">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Mã sinh viên" name="ma_sv">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary">Tìm kiếm</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Ngày sinh</th>
                                        <th scope="col">Giới tính</th>
                                        <th scope="col">Quê quán</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Tài khoản</th>
                                        <th scope="col">Loại tài khoản</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->ten }}</td>
                                        <td>{{ $user->ngay_sinh }}</td>
                                        <td>{{ $user->gioi_tinh }}</td>
                                        <td>{{ $user->que_quan }}</td>
                                        <td>{{ $user->so_dien_thoai }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->tai_khoan }}</td>
                                        <td>{{ ($user->id_category === 1) ? 'Sinh viên' : 'Admin' }}</td>
                                        <td><a href="{{ '/admin/users/'.$user->id }}"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="{{ '/admin/users/'.$user->id.'/delete' }}"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
