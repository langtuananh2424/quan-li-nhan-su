@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Sửa thông tin nhân viên') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('nhanviens.update', $nhanvien->MANV) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="avatar"> {{__('Avatar')}}</label>
                                @if ($nhanvien->avatar)
                                    <div class="mt-4">
                                        <img src="{{ asset('storage/' . $nhanvien->avatar) }}" alt="Avatar" class="rounded-circle" style="width: 120px; height: 120px;">
                                    </div>
                                @else
                                    <div class="mt-4">
                                        <img src="{{ asset('storage/' . 'defaultavt.jpg')}}" alt="Avatar" class="rounded-circle" style="width: 120px; height: 120px;">
                                    </div>
                                @endif
                                <input id="avatar" name="avatar" type="file" class="mt-1 block w-full" value="{{$nhanvien->avatar}}"/>
                            </div>

                            <div class="form-group">
                                <label for="HOTEN">{{ __('Họ và tên') }}</label>
                                <input id="HOTEN" type="text" class="form-control @error('HOTEN') is-invalid @enderror" name="HOTEN" value="{{$nhanvien->HOTEN}}" required autocomplete="HOTEN" autofocus>
                                @error('HOTEN')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="NGAYSINH">{{ __('Ngày Sinh') }}</label>
                                <input type="date" class="form-control" id="NGAYSINH" name="NGAYSINH" value="{{$nhanvien->NGAYSINH}}" required>
                            </div>

                            <div class="form-group">
                                <label for="GIOITINH">{{ __('Giới tính') }}</label>
                                <select class="form-control" id="GIOITINH" name="GIOITINH">
                                    <option>{{$nhanvien->GIOITINH}}</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Khác</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="DIACHI">{{ __('Địa Chỉ') }}</label>
                                <input type="text" class="form-control" id="DIACHI" name="DIACHI" value="{{$nhanvien->DIACHI}}" required>
                            </div>

                            <div class="form-group">
                                <label for="SDT">{{ __('Số Điện Thoại') }}</label>
                                <input type="text" class="form-control" id="SDT" name="SDT" value="{{$nhanvien->SDT}}" required>
                            </div>

                            <div class="form-group">
                                <label for="EMAIL">{{ __('Email') }}</label>
                                <input type="email" class="form-control" id="EMAIL" name="EMAIL" value="{{$nhanvien->EMAIL}}" required>
                            </div>

                            <div class="form-group">
                                <label for="MAPB">{{ __('Phòng ban') }}</label>
                                <select class="form-control" id="MAPB" name="MAPB">
                                    <option value="{{$nhanvien->MAPB}}">{{$nhanvien->phongban->TENPB}}</option>
                                    @foreach($phongbans as $phongban)
                                        <option value="{{ $phongban->MAPB }}">{{ $phongban->TENPB }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="MACV">{{ __('Chức vụ') }}</label>
                                <select class="form-control" id="MACV" name="MACV">
                                    <option value="{{$nhanvien->MACV}}">{{$nhanvien->chucvu->TENCV}}</option>
                                    @foreach($chucvus as $chucvu)
                                        <option value="{{ $chucvu->MACV }}">{{ $chucvu->TENCV }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="MATDHV">{{ __('Trình độ học vấn') }}</label>
                                <select class="form-control" id="MATDHV" name="MATDHV">
                                    <option value="{{$nhanvien->MATDHV}}">{{$nhanvien->trinhdohocvan->TENTDHV}}</option>
                                    @foreach($tdhvs as $tdhv)
                                        <option value="{{ $tdhv->MATDHV }}">{{ $tdhv->TENTDHV }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="BACLUONG">{{ __('Bậc Lương') }}</label>
                                <input type="text" class="form-control" id="BACLUONG" name="BACLUONG" value="{{$nhanvien->BACLUONG}}" required>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sửa') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
