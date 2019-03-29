@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Add New Images to {{ $category->name }}
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.gallery-category.store-images', ['category' => $category->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label class="col-md-2 col-form-label pt-0 py-md-2">
                                Images
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="image" type="file" class="form-control{{ $errors->has('images') ? ' is-invalid' : '' }}" name="images[]" multiple="" />

                                @if ($errors->has('images'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('images') }}</strong>
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
