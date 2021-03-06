@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Create Record
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.workshop.traditions.article.store', ['article' => $article->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label for="heading" class="col-md-2 col-form-label pt-0 py-md-2">
                                Heading
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="heading" type="text" class="form-control{{ $errors->has('heading') ? ' is-invalid' : '' }}"
                                    name="heading" value="{{ old('heading') }}" />

                                @if ($errors->has('heading'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('heading') }}</strong>
                                </span>
                                @endif
                            </div>
                            <label for="description" class="col-md-2 col-form-label pt-0 py-md-2">
                                Description
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" required>{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row pb-md-3 align-items-center">
                            <label for="image" class="col-md-2 col-form-label pt-0 py-md-2">
                                Image
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                    name="image" value="{{ old('image') }}" required />

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