@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Điểm TOEIC</div>

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
                            <div class="col-md-3 mt-2 mb-2 offset-md-8">
                                <form action="/tra-cuu-tkb" class="pull-right" method="GET">
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
                                        <th scope="col">Thời gian</th>
                                        <th scope="col">Tuần học</th>
                                        <th scope="col">Phòng học</th>
                                        <th scope="col">Mã lớp</th>
                                        <th scope="col">Loại lớp</th>
                                        <th scope="col">Mã học phần</th>
                                        <th scope="col">Tên lớp</th>
                                        <th scope="col">Ghi chú</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($items))
                                        @foreach($items as $item)
                                            <tr>
                                                <th scope="row">{{ $item->thoi_gian_hoc }}</th>
                                                <td>{{ $item->tuan_hoc }}</td>
                                                <td>{{ $item->phong_hoc }}</td>
                                                <td>{{ $item->ma_lop }}</td>
                                                <td>{{ $item->loai_lop }}</td>
                                                <td>{{ $item->ma_hoc_phan }}</td>
                                                <td>{{ $item->ten_hoc_phan }}</td>
                                                <td>{{ $item->ghi_chu }}</td>
                                            </tr>
                                        @endforeach
                                    @endif
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
