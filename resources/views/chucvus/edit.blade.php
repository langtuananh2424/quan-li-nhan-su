@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Sửa chức vụ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('chucvus.update',$chucvu->MACV) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="TENCV">{{ __('Tên Chức Vụ') }}</label>
                                <input type="text" class="form-control-file" id="TENCV" name="TENCV" value="{{$chucvu->TENCV}}">
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
