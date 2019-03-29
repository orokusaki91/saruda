@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Update Category
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.gallery-category.update', ['category' => $category->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label for="name" class="col-md-2 col-form-label pt-0 py-md-2">
                                Name
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ $category->name }}" required />

                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
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
                    <div class="form-group row mb-0 mt-5">
                        <div class="col-md-6 offset-md-5 text-center text-md-left">
                            <form action="{{ route('admin.gallery-category.delete', ['category' => $category->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    Delete this record!
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