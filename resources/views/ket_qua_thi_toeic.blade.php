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
                                <form action="/ket-qua-thi-toeic" class="pull-right" method="GET">
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
                                        <th scope="col">Mã sinh viên</th>
                                        <th scope="col">Điểm đọc</th>
                                        <th scope="col">Điểm nghe</th>
                                        <th scope="col">Ngày thi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($items))
                                        @foreach($items as $item)
                                            <tr>
                                                <th scope="row">{{ $item->id }}</th>
                                                <td>{{ $item->ma_sinh_vien }}</td>
                                                <td>{{ $item->diem_doc }}</td>
                                                <td>{{ $item->diem_nghe }}</td>
                                                <td>{{ $item->ngay_thi }}</td>
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
