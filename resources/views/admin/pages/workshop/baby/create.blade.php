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
                    <form method="POST" action="{{ route('admin.workshop.baby.store') }}">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label for="title" class="col-md-2 col-form-label pt-0 py-md-2">
                                Title
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                    name="title" value="{{ old('title') }}" required />

                                @if ($errors->has('title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('title') }}</strong>
                                </span>
                                @endif
                            </div>
                            <label for="price" class="col-md-2 col-form-label pt-0 py-md-2">
                                Price
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="price" type="number" min=0 step=".01" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                    name="price" value="{{ old('price') }}" required />

                                @if ($errors->has('price'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('price') }}</strong>
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