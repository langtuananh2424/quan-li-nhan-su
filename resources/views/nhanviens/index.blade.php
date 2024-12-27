@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--            <div class="col-md-12">--}}
            {{--                <form method="GET" action="{{ route('nhanviens.index') }}">--}}
            {{--                    <div class="form-group">--}}
            {{--                        <label for="birthdate">Ngày sinh:</label>--}}
            {{--                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ request('birthdate') }}">--}}
            {{--                    </div>--}}
            {{--                    <div class="form-group">--}}
            {{--                        <label for="gender">Giới tính:</label>--}}
            {{--                        <select class="form-control" id="gender" name="gender">--}}
            {{--                            <option value="">Tất cả</option>--}}
            {{--                            <option value="Nam" {{ request('gender') == 'Nam' ? 'selected' : '' }}>Nam</option>--}}
            {{--                            <option value="Nữ" {{ request('gender') == 'Nữ' ? 'selected' : '' }}>Nữ</option>--}}
            {{--                        </select>--}}
            {{--                    </div>--}}
            {{--                    <div class="form-group">--}}
            {{--                        <label for="district">Quận:</label>--}}
            {{--                        <select class="form-control" id="district" name="district">--}}
            {{--                        </select>--}}
            {{--                    </div>--}}
            {{--                    <button type="submit" class="btn btn-primary">Lọc</button>--}}
            {{--                </form>--}}
            {{--            </div>--}}
            <div class="col-md-12">
                <div class="row">
                    @foreach ($nhanviens as $nhanvien)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('storage/' . ($nhanvien->avatar ? $nhanvien->avatar : 'avatars/defaultavt.jpg')) }}" class="card-img-top" alt="Avatar">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $nhanvien->HOTEN }}</h5>
                                    <p class="card-text">
                                        <strong>Ngày sinh:</strong> {{ $nhanvien->NGAYSINH }}<br>
                                        <strong>Giới tính:</strong> {{ $nhanvien->GIOITINH }}<br>
                                        <strong>Số điện thoại:</strong> {{ $nhanvien->SDT }}<br>
                                        <strong>Email:</strong> {{ $nhanvien->EMAIL }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
