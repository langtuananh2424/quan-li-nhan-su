@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Tạo mới phòng ban') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('phongbans.store',{{$phongban->MAPB}}) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="TENPB">{{ __('Tên Phòng Ban') }}</label>
                                <input type="text" class="form-control-file" id="TENPB" name="TENPB" value="{{$phongban->TENPB}}">
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
