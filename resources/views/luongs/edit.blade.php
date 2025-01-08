@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Tạo mới chức vụ') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('luongs.store'),$luong->BACLUONG}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="BACLUONG">{{ __('Bậc Lương') }}</label>
                                <input type="text" class="form-control-file" id="BACLUONG" name="BACLUONG" value="{{$luong->BACLUONG}}">
                            </div>
                            <div class="form-group">
                                <label for="LUONGCB">{{ __('Lương Cơ Bản') }}</label>
                                <input type="text" class="form-control-file" id="LUONGCB" name="LUONGCB" value="{{$luong->LUONGCB}}">
                            </div>
                            <div class="form-group">
                                <label for="HSLUONG">{{ __('Hệ Số Lương') }}</label>
                                <input type="text" class="form-control-file" id="HSLUONG" name="HSLUONG" value="{{$luong->HSLUONG}}">
                            </div>
                            <div class="form-group">
                                <label for="HSPHUCAP">{{ __('Hệ Số Phụ Cấp') }}</label>
                                <input type="text" class="form-control-file" id="HSPHUCAP" name="HSPHUCAP" value="{{$luong->HSPHUCAP}}">
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
