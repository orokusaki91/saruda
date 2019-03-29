@extends('admin.layouts.master')

@section('main')
<div class="container-fluid p-3">
    <a href="{{ route('admin.home') }}" class="btn btn-formosa">
        <i class="fas fa-arrow-left"></i>
        Go on Admin Home page
    </a>
    @include('admin.flash')
    <hr />
    <h4>
        Info & Price
    </h4>
    <hr />
    <form method="POST" action="{{ route('admin.info.update', ['text' => $info->id]) }}">
        @csrf
        <div class="row pb-md-3 align-items-center">
            <div class="col-md-12 pb-3 pb-md-0">
                <textarea name="text" id="text" cols="30" rows="10" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}">
                    {{ $info->text }}
                </textarea>

                @if ($errors->has('text'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('text') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-5 text-center text-md-left">
                <button type="submit" class="btn btn-submit">
                    Save
                </button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')
    @include('admin.tinymce')    
@endsection