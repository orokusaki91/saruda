@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Create Partner
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.partner.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label for="name" class="col-md-2 col-form-label pt-0 py-md-2">
                                Name
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" required />

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                            <label for="image" class="col-md-2 col-form-label pt-0 py-md-2">
                                Website
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="website" type="url" class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}"
                                    name="website" value="{{ old('website') }}" required />

                                @if ($errors->has('website'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row pb-md-3 align-items-center">
                            <label for="favicon" class="col-md-2 col-form-label pt-0 py-md-2">
                                Image
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                    name="image" value="{{ old('image') }}" />

                                @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
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
            </div>
        </div>
    </div>
</div>
@endsection