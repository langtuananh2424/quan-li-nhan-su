@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Tạo mới chức vụ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('hdlds.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="MANV">{{ __('Mã Nhân Viên') }}</label>
                                <input type="text" class="form-control-file" id="MANV" name="MANV">
                            </div>
                            <div class="form-group">
                                <label for="LOAIHD">{{ __('Loại Hợp Đồng') }}</label>
                                <input type="text" class="form-control-file" id="LOAIHD" name="LOAIHD">
                            </div>
                            <div class="form-group">
                                <label for="NGAYBD">{{ __('Ngày Bắt Đầu') }}</label>
                                <input type="date" class="form-control-file" id="NGAYBD" name="NGAYBD">
                            </div>
                            <div class="form-group">
                                <label for="NGAYKT">{{ __('Ngày Kết Thúc') }}</label>
                                <input type="date" class="form-control-file" id="NGAYKT" name="NGAYKT">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tạo mới') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
