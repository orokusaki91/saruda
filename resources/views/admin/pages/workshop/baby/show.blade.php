@extends('admin.layouts.master')

@section('main')
<div class="container-fluid p-3">
    <a href="{{ route('admin.home') }}" class="btn btn-formosa">
        <i class="fas fa-arrow-left"></i>
        Go on Admin Home page
    </a>
    <hr>
    <a href="{{ route('admin.workshop') }}" class="btn btn-formosa">
        <i class="fas fa-arrow-left"></i>
        Go back on Workshop page
    </a>
    @include('admin.flash')
    <hr />
    <h4>
        Baby
    </h4>
    <hr />
    <a href="{{ route('admin.workshop.baby.create') }}" class="btn btn-create">
        Create New Record
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.workshop.baby._list')
            </tbody>
        </table>
    </div>
    <hr>
    <div class="container">
        <div class="text-center">
            @if ($pdf !== null)
                <a href="{{ route('downloadPDF', ['pdf' => $pdf->id]) }}">Look Prehistory PDF</a>
            @endif
        </div>
        <div class="card">
            <div class="card-body p-3">
                <form method="POST" action="{{ route('admin.workshop.baby.pdf.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row pb-md-3 align-items-center">
                        <label for="pdf" class="col-md-2 col-form-label pt-0 py-md-2">
                            PDF
                        </label>
                        <div class="col-md-4 pb-3 pb-md-0">
                            <input id="pdf" type="file" class="form-control{{ $errors->has('pdf') ? ' is-invalid' : '' }}"
                                name="pdf" value="{{ old('pdf') }}" required />

                            @if ($errors->has('pdf'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('pdf') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-5 text-center text-md-left">
                            <button type="submit" class="btn btn-submit">
                                @if ($pdf === null)
                                    Save
                                @else
                                    Change PDF
                                @endif
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection