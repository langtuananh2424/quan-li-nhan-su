@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Bảng Lương</h1>
        <a href="{{route('luongs.create')}}" class="btn btn-primary">Thêm Lương</a>
        <table class="table">
            <thead>
            <tr>
                <th>Bậc Lương</th>
                <th>Lương Cơ Bản</th>
                <th>Hệ Số Lương</th>
                <th>Hệ Số Phụ Cấp</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($luongs as $luong)
                <tr>
                    <td>{{$luong->BACLUONG}}</td>
                    <td>{{$luong->LUONGCB}}</td>
                    <td>{{$luong->HSLUONG}}</td>
                    <td>{{$luong->HSPHUCAP}}</td>
                    <td><a href="{{route('luongs.edit', $luong->BACLUONG)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('luongs.destroy', $luong->BACLUONG)}}" method="POST" style="display: inline-block;">
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
