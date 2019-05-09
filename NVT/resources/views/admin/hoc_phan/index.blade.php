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
                            <div class="col-md-1 mt-2 mb-2 pull-left text-center">
                                <a href="/admin/hoc-phan/add" class="btn btn-info">Thêm học phần</a>
                            </div>
                            <div class="col-md-3 mt-2 mb-2 offset-md-8">
                                <form action="/admin/hoc-phan" class="pull-right" method="GET">
                                    <div class="input-group mb-2">
                                        <input type="text" class="form-control" placeholder="Mã học phần" name="ma_hoc_phan">
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
                                        <th scope="col">Mã học phần</th>
                                        <th scope="col">Tên học phần</th>
                                        <th scope="col">Số tín chỉ</th>
                                        <th scope="col">Số tín học phí</th>
                                        <th scope="col">Hệ số</th>
                                        <th scope="col">ID khóa viện</th>
                                        <th scope="col">Sửa</th>
                                        <th scope="col">Xóa</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                    <tr>
                                        <th scope="row">{{ $item->ma_hoc_phan }}</th>
                                        <td>{{ $item->ten_hoc_phan }}</td>
                                        <td>{{ $item->so_tin_chi }}</td>
                                        <td>{{ $item->so_tin_hoc_phi }}</td>
                                        <td>{{ $item->he_so }}</td>
                                        <td>{{ $item->id_khoa_vien }}</td>
                                        <td><a href="{{ '/admin/hoc-phan/'.$item->ma_hoc_phan }}"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="{{ '/admin/hoc-phan/'.$item->ma_hoc_phan.'/delete' }}"><i class="fa fa-trash"></i></a></td>
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
