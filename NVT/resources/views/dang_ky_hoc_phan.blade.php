@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Đăng ký học phần</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if ($errors->any())
                                    <div role="alert" class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <p>{{$error}}</p>
                                        @endforeach
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mt-3 mb-3">
                            <div class="col-12">
                                <form action="/dang-ky-hoc-phan" method="GET" class="form-inline">
                                    <div class="form-group mr-5">
                                        <label class="mr-2">Học kỳ</label>
                                        <select name="hoc_ky" class="form-control">
                                            <option value="20181" {{ (isset($_GET['hoc_ky']) && $_GET['hoc_ky'] == '20181') ? 'selected' : '' }}>
                                                20181
                                            </option>
                                            <option value="20172" {{ (isset($_GET['hoc_ky']) && $_GET['hoc_ky'] == '20172') ? 'selected' : '' }}>
                                                20172
                                            </option>
                                            <option value="20171" {{ (isset($_GET['hoc_ky']) && $_GET['hoc_ky'] == '20171') ? 'selected' : '' }}>
                                                20171
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group ml-5 mr-5">
                                        <label class="mr-2">Mã học phần</label>
                                        <input type="text" name="ma_hoc_phan" class="form-control"
                                               value="{{ isset($_GET['ma_hoc_phan']) ? $_GET['ma_hoc_phan'] : '' }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th scope="col">Mã lớp</th>
                                        <th scope="col">Mã học phần</th>
                                        <th scope="col">Tên học phần</th>
                                        <th scope="col">Số tín chỉ</th>
                                        <th scope="col">Số tín học phí</th>
                                        <th scope="col">Hệ số</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($item))
                                        <tr>
                                            <th>{{ $item->ma_lop }}</th>
                                            <th>{{ $item->ma_hoc_phan }}</th>
                                            <td>{{ $item->ten_hoc_phan }}</td>
                                            <td>{{ $item->so_tin_chi }}</td>
                                            <td>{{ $item->so_tin_hoc_phi }}</td>
                                            <td>{{ $item->he_so }}</td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                                @if(!empty($item))
                                    <!-- <h4 class="pull-right">Tổng số TC đã đăng ký: {{$count_tc}}</h4> -->
                                    <form action="/dang-ky-hoc-phan" method="POST">
                                        <input type="hidden" name="ma_hoc_phan"
                                               value="{{ isset($_GET['ma_hoc_phan']) ? $_GET['ma_hoc_phan'] : '' }}">
                                        <input type="hidden" name="hoc_ky"
                                               value="{{ isset($_GET['hoc_ky']) ? $_GET['hoc_ky'] : '' }}">
                                        <button class="btn btn-primary">Đăng ký</button>
                                        @csrf
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
