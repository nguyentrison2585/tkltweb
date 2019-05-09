@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Thêm điểm TOEIC</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <form role="form" method="POST" action="/admin/hoc-phan/add">
                                    <div class="form-group">
                                        <label>Mã học phần</label>
                                        <input type="text" class="form-control" name="ma_hoc_phan">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên học phần</label>
                                        <input type="text" class="form-control" name="ten_hoc_phan">
                                    </div>
                                    <div class="form-group">
                                        <label>Số tín chỉ</label>
                                        <input type="number" class="form-control" name="so_tin_chi">
                                    </div>
                                    <div class="form-group">
                                        <label>Số tín học phí</label>
                                        <input type="number" class="form-control" name="so_tin_hoc_phi">
                                    </div>
                                    <div class="form-group">
                                        <label>Hệ số</label>
                                        <input type="number" class="form-control" name="he_so">
                                    </div>
                                    <div class="form-group">
                                        <label>ID khóa viện</label>
                                        <input type="number" class="form-control" name="id_khoa_vien">
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
