@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Danh sách Hợp Đồng</h1>
        <a href="{{route('hdlds.create')}}" class="btn btn-primary">Thêm Hợp Đồng Lao Động</a>
        <a href="{{route('hdlds.SoNamLamViec')}}" class="btn btn-primary">Số năm làm việc của từng nhân viên</a>
        <a href="{{route('hdlds.HDLDSapHetHan')}}" class="btn btn-primary">HDLD Sắp hết hạn</a>
        <table class="table">
            <thead>
            <tr>
                <th>Mã Hợp Đồng</th>
                <th>Tên Nhân Viên</th>
                <th>Loại Hợp Đồng</th>
                <th>Ngày Bắt Đầu</th>
                <th>Ngày Kết Thúc</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($hdlds as $hdld)
                <tr>
                    <td>{{$hdld->MAHD}}</td>
                    <td>{{$hdld->nhanvien->HOTEN}}</td>
                    <td>{{$hdld->LOAIHD}}</td>
                    <td>{{$hdld->NGAYBD}}</td>
                    <td>{{$hdld->NGAYKT}}</td>
                    <td><a href="{{route('hdlds.edit', $hdld->MAHD)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('hdlds.destroy', $hdld->MAHD)}}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá ?')">Xoá</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection
