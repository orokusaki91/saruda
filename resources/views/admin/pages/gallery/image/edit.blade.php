@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Preview Image
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.gallery.update', ['image' => $image->id]) }}">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label for="name" class="col-md-2 col-form-label pt-0 py-md-2">
                                Image Name
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $image->name }}" required />

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="category_id" class="col-md-2 col-form-label pt-0 py-md-2">
                                Category
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <select name="category_id" id="category_id" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ $image->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row pb-md-3 align-items-center">
                            <img src="{{ asset($image->image_path) }}" alt="{{ asset($image->image_path) }}">
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-5 text-center text-md-left">
                                <button type="submit" class="btn btn-submit">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group row mb-0 mt-5">
                        <div class="col-md-6 offset-md-5 text-center text-md-left">
                            <form action="{{ route('admin.gallery.delete', ['image' => $image->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Delete this picture!
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection