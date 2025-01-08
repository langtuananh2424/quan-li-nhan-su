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
                        <form method="POST" action="{{ route('luongs.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="BACLUONG">{{ __('Bậc Lương') }}</label>
                                <input type="text" class="form-control-file" id="BACLUONG" name="BACLUONG">
                            </div>
                            <div class="form-group">
                                <label for="LUONGCB">{{ __('Lương Cơ Bản') }}</label>
                                <input type="text" class="form-control-file" id="LUONGCB" name="LUONGCB">
                            </div>
                            <div class="form-group">
                                <label for="HSLUONG">{{ __('Hệ Số Lương') }}</label>
                                <input type="text" class="form-control-file" id="HSLUONG" name="HSLUONG">
                            </div>
                            <div class="form-group">
                                <label for="HSPHUCAP">{{ __('Hệ Số Phụ Cấp') }}</label>
                                <input type="text" class="form-control-file" id="HSPHUCAP" name="HSPHUCAP">
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
