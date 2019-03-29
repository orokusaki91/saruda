@extends('admin.layouts.master')

@section('main')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 p-3">
            <div class="card">
                <div class="card-header">
                    Update Day
                </div>
                <div class="card-body p-3">
                    <form method="POST" action="{{ route('admin.workinghours.update', ['day' => $day->id]) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row pb-md-3 align-items-center">
                            <label for="day_name" class="col-md-2 col-form-label pt-0 py-md-2">
                                Day name
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="day_name" type="text" class="form-control{{ $errors->has('day_name') ? ' is-invalid' : '' }}"
                                    value="{{ $day->day_name }}" disabled />

                                @if ($errors->has('day_name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('day_name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="row pb-md-3 align-items-center">
                            <label for="start" class="col-md-2 col-form-label pt-0 py-md-2">
                                Start
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="start" type="text" class="form-control{{ $errors->has('start') ? ' is-invalid' : '' }}"
                                    name="start" value="{{ $day->start }}" />

                                @if ($errors->has('start'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('start') }}</strong>
                                </span>
                                @endif
                            </div>
                            <label for="end" class="col-md-2 col-form-label pt-0 py-md-2">
                                End
                            </label>
                            <div class="col-md-4 pb-3 pb-md-0">
                                <input id="end" type="text" class="form-control{{ $errors->has('end') ? ' is-invalid' : '' }}"
                                    name="end" value="{{ $day->end }}" />
    
                                @if ($errors->has('end'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('end') }}</strong>
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