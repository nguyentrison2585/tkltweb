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
                                <form role="form" method="POST" action="/admin/diem-toeic/add">
                                    <div class="form-group">
                                        <label>Mã sinh viên</label>
                                        <input type="number" class="form-control" name="ma_sinh_vien">
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm nghe</label>
                                        <input type="number" class="form-control" name="diem_nghe">
                                    </div>
                                    <div class="form-group">
                                        <label>Điểm đọc</label>
                                        <input type="number" class="form-control" name="diem_doc">
                                    </div>
                                    <div class="form-group">
                                        <label>Ngày thi</label>
                                        <input type="text" class="form-control" name="ngay_thi">
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
