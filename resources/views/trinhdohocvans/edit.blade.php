@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    @if(session(key:'success'))
                        <div class="alert alert-success">{{session(key:'success')}}</div>
                    @endif
                    <div class="card-header">{{ __('Sửa trình độ học vấn') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('trinhdohocvans.store', $tdhv->MATDHV) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="TENTDHV">{{ __('Tên Trình Độ Học Vấn') }}</label>
                                <input type="text" class="form-control-file" id="TENTDHV" name="TENTDHV" value="{{$tdhv->TENTDHV}}">
                            </div>
                            <div class="form-group">
                                <label for="CHUYENNGANH">{{ __('Chuyên Ngành') }}</label>
                                <input type="text" class="form-control-file" id="CHUYENNGANH" name="CHUYENNGANH" value="{{$tdhv->CHUYENNGANH}}>
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
