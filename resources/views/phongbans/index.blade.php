@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Bảng Lương</h1>
        <a href="{{route('phongbans.create')}}" class="btn btn-primary">Thêm Phòng Ban</a>
        <table class="table">
            <thead>
            <tr>
                <th>Mã Phòng Ban</th>
                <th>Tên Phòng Ban</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($phongbans as $phongban)
                <tr>
                    <td>{{$phongban->MAPB}}</td>
                    <td>{{$phongban->TENPB}}</td>
                    <td><a href="{{route('phongbans.edit', $phongban->MAPB)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('phongbans.destroy', $phongban->MAPB)}}" method="POST" style="display: inline-block;">
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
