@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Hồ sơ cá nhân</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <table class="table table-striped">
                                    <tr>
                                        <td class="text-left">Mã sinh viên</td>
                                        <td class="text-right">{{$data->tai_khoan}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Họ tên</td>
                                        <td class="text-right">{{$data->ten}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Giới tính</td>
                                        <td class="text-right">{{$data->gioi_tinh}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Ngày sinh</td>
                                        <td class="text-right">{{$data->ngay_sinh}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Quê quán</td>
                                        <td class="text-right">{{$data->que_quan}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Số điện thoại</td>
                                        <td class="text-right">{{$data->so_dien_thoai}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left">Email</td>
                                        <td class="text-right">{{$data->email}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
