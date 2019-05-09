@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Đổi mật khẩu</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                @if ($errors->any())
                                    <div class="alert-danger mt-2 mb-2 pt-2 pb-2">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form role="form" method="POST" action="/change-password">
                                    <div class="form-group">
                                        <label>Mật khẩu hiện tại</label>
                                        <input type="password" class="form-control" name="current_password">
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu mới</label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label>Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" name="password_confirmation">
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
