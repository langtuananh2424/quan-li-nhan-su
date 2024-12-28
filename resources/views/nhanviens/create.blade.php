@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Tạo mới nhân viên') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('nhanviens.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="avatar">{{ __('Ảnh đại diện') }}</label>
                                <input type="file" class="form-control-file" id="avatar" name="avatar">
                            </div>

                            <div class="form-group">
                                <label for="HOTEN">{{ __('Họ và tên') }}</label>
                                <input id="HOTEN" type="text" class="form-control @error('HOTEN') is-invalid @enderror" name="HOTEN" value="{{ old('HOTEN') }}" required autocomplete="HOTEN" autofocus>
                                @error('HOTEN')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="NGAYSINH">{{ __('Ngày Sinh') }}</label>
                                <input type="date" class="form-control" id="NGAYSINH" name="NGAYSINH" required>
                            </div>

                            <div class="form-group">
                                <label for="GIOITINH">{{ __('Giới tính') }}</label>
                                <select class="form-control" id="GIOITINH" name="GIOITINH">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="DIACHI">{{ __('Địa Chỉ') }}</label>
                                <input type="text" class="form-control" id="DIACHI" name="DIACHI" required>
                            </div>

                            <div class="form-group">
                                <label for="SDT">{{ __('Số Điện Thoại') }}</label>
                                <input type="text" class="form-control" id="SDT" name="SDT" required>
                            </div>

                            <div class="form-group">
                                <label for="EMAIL">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="EMAIL" name="EMAIL" required>
                            </div>

                            <div class="form-group">
                                <label for="MAPB">{{ __('Phòng ban') }}</label>
                                <select class="form-control" id="MAPB" name="MAPB">
                                    @foreach($phongbans as $phongban)
                                        <option value="{{ $phongban->MAPB }}">{{ $phongban->TENPB }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="MACV">{{ __('Chức vụ') }}</label>
                                <select class="form-control" id="MACV" name="MACV">
                                    @foreach($chucvus as $chucvu)
                                        <option value="{{ $chucvu->MACV }}">{{ $chucvu->TENCV }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="MATDHV">{{ __('Trình độ học vấn') }}</label>
                                <select class="form-control" id="MATDHV" name="MATDHV">
                                    @foreach($tdhvs as $tdhv)
                                        <option value="{{ $tdhv->MATDHV }}">{{ $tdhv->TENTDHV }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="BACLUONG">{{ __('Bậc Lương') }}</label>
                                <input type="text" class="form-control" id="BACLUONG" name="BACLUONG" required>
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
