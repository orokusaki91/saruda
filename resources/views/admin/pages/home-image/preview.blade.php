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
                    <div class="row pb-md-3 align-items-center">
                        <label for="title" class="col-md-2 col-form-label pt-0 py-md-2">
                            Image Name
                        </label>
                        <div class="col-md-4 pb-3 pb-md-0">
                            <input id="title" type="text" value="{{ $image->name }}" disabled />
                        </div>
                    </div>
                    <div class="row pb-md-3 align-items-center">
                        <label for="image" class="col-md-2 col-form-label pt-0 py-md-2">
                            Image
                        </label>
                        <div class="col-md-4 pb-3 pb-md-0">
                            <img src="{{ asset($image->image_path) }}" alt="">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5 text-center text-md-left">
                            <form action="{{ route('admin.home-image.delete', ['image' => $image->id]) }}" method="POST">
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