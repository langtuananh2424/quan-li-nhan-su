@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Danh sách Chức Vụ</h1>
        <a href="{{route('chucvus.create')}}" class="btn btn-primary">Thêm chức vụ</a>
        <table class="table">
            <thead>
            <tr>
                <th>Mã Chức Vụ</th>
                <th>Tên Chức Vụ</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($chucvus as $chucvu)
                <tr>
                    <td>{{$chucvu->MACV}}</td>
                    <td>{{$chucvu->TENCV}}</td>
                    <td><a href="{{route('chucvus.edit', $chucvu->MACV)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('chucvus.destroy', $chucvu->MACV)}}" method="POST" style="display: inline-block;">
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
