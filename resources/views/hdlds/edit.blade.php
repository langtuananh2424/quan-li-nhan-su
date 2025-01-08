@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Sửa thông tin hợp đồng') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('hdlds.update', $hdld->MAHD) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="MANV">{{ __('Mã Nhân Viên') }}</label>
                                <input type="text" class="form-control-file" id="MANV" name="MANV" value="{{$hdld->MANV}}">
                            </div>
                            <div class="form-group">
                                <label for="LOAIHD">{{ __('Loại Hợp Đồng') }}</label>
                                <input type="text" class="form-control-file" id="LOAIHD" name="LOAIHD" value="{{$hdld->LOAIHD}}">
                            </div>
                            <div class="form-group">
                                <label for="NGAYBD">{{ __('Ngày Bắt Đầu') }}</label>
                                <input type="date" class="form-control-file" id="NGAYBD" name="NGAYBD" value="{{$hdld->NGAYBD}}">
                            </div>
                            <div class="form-group">
                                <label for="NGAYKT">{{ __('Ngày Kết Thúc') }}</label>
                                <input type="date" class="form-control-file" id="NGAYKT" name="NGAYKT" value="{{$hdld->NGAYKT}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cập Nhật') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
