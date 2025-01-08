@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Trình Độ Học Vấn</h1>
        <a href="{{route('trinhdohocvans.create')}}" class="btn btn-primary">Thêm Trình Độ Học Vấn</a>
        <table class="table">
            <thead>
            <tr>
                <th>Mã Trình Độ Học Vấn</th>
                <th>Tên Trình Độ Học Vấn</th>
                <th>Chuyên Ngành</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tdhvs as $tdhv)
                <tr>
                    <td>{{$tdhv->MATDHV}}</td>
                    <td>{{$tdhv->TENTDHV}}</td>
                    <td>{{$tdhv->CHUYENNGANH}}</td>
                    <td><a href="{{route('trinhdohocvans.edit', $tdhv->MATDHV)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{route('trinhdohocvans.destroy', $tdhv->MATDHV)}}" method="POST" style="display: inline-block;">
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
