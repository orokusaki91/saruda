@extends('admin.layouts.master')

@section('main')
<div class="container-fluid p-3">
    <a href="{{ route('admin.home') }}" class="btn btn-formosa">
        <i class="fas fa-arrow-left"></i>
        Go on Admin Home page
    </a>
    @include('admin.flash')
    <hr />
    <h4>
        Workshop
    </h4>
    <hr />
    <div id="admin-nav">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-6 col-md-4 col-lg nav-item">
                    <a href="{{ route('admin.workshop.prehistory') }}">
                        Prehistory
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg nav-item">
                    <a href="{{ route('admin.workshop.traditions') }}">
                        Traditions
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg nav-item">
                    <a href="{{ route('admin.workshop.baby') }}">
                        Baby
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection