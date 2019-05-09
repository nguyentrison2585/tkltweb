@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Phản hồi</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if ($errors->any())
                                    <div role="alert" class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <p>{{$error}}</p>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 mt-2 mb-2 offset-md-3">
                                <form action="/phan-hoi" class="pull-right" method="POST">
                                    <div class="form-group">
                                        <label>Tiêu đề</label>
                                        <input type="text" class="form-control" placeholder="Tiêu đề" name="tieu_de">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung</label>
                                        <input type="text" class="form-control" placeholder="Nội dung" name="noi_dung">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Thêm góp ý</button>
                                    </div>
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
