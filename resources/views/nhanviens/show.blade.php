@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <img src="{{ $nhanvien->avatar ? asset('storage/' . $nhanvien->avatar) : asset('images/default_avatar.png') }}" alt="Avatar" class="rounded-circle img-fluid">
                        <h2 class="mt-3">{{ $nhanvien->HOTEN }}</h2>
                    </div>

                    <div class="card-body">
                        <p><strong>Email:</strong> {{ $nhanvien->EMAIL }}</p>
                        <p><strong>Giới Tính:</strong> {{ $nhanvien->GIOITINH }}</p>
                        <p><strong>Ngày Sinh:</strong> {{ $nhanvien->NGAYSINH }}</p>
                        <p><strong>Địa Chỉ:</strong> {{ $nhanvien->DIACHI }}</p>
                        <p><strong>Số Điện Thoại:</strong> {{ $nhanvien->SDT }}</p>
                        <p><strong>Tên Phòng Ban:</strong> {{ $nhanvien->phongban->TENPB }}</p>
                        <p><strong>Chức Vụ:</strong> {{ $nhanvien->chucvu->TENCV }}</p>
                        <p><strong>Trình Độ Học Vấn:</strong> {{ $nhanvien->trinhdohocvan->TENTDHV }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
