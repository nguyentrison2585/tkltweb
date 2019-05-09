@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Thêm mới user</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <form role="form" method="POST" action="/admin/users/add">
                                    <div class="form-group">
                                        <label>Tên</label>
                                        <input type="text" class="form-control" name="ten">
                                    </div>
                                    <div class="form-group">
                                        <label>Giới tính</label>
                                        <input type="text" class="form-control" name="gioi_tinh">
                                    </div>
                                    <div class="form-group">
                                        <label>Quê quán</label>
                                        <input type="text" class="form-control" name="que_quan">
                                    </div>
                                    <div class="form-group">
                                        <label>Số điện thoại</label>
                                        <input type="number" class="form-control" name="so_dien_thoai">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Tài khoản</label>
                                        <input type="text" class="form-control" name="tai_khoan">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input type="text" class="form-control" name="mat_khau">
                                    </div>
                                    <div class="form-group">
                                        <label>Loại tài khoản</label>
                                        <select name="id_category" class="form-control">
                                            <option value="1">Sinh viên</option>
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
