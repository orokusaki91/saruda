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
        Lunch
    </h4>
    <hr>
    <form method="POST" action="{{ route('admin.lunch-text.update', ['text' => $lunch_text->id]) }}">
        @csrf
        <div class="row pb-md-3 align-items-center">
            <div class="col-md-12 pb-3 pb-md-0">
                <textarea name="data" id="data" cols="30" rows="10" class="form-control{{ $errors->has('data') ? ' is-invalid' : '' }}">
                    {{ $lunch_text->data }}
                </textarea>

                @if ($errors->has('data'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('data') }}</strong>
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
    <hr />
    <a href="{{ route('admin.lunch-picture.create') }}" class="btn btn-create">
        Add New Image for Lunch
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Picture Number</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.lunch._list')
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
    @include('admin.tinymce')    
@endsection