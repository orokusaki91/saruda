@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Add New Image
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.lunch-picture.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label class="col-md-2 col-form-label pt-0 py-md-2">
                                Image
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" required/>

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
