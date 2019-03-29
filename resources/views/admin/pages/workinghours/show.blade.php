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
        Working Hours
    </h4>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>&nbsp;</th>
                <th>Day</th>
                <th>Working Time</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.workinghours._list')
            </tbody>
        </table>
    </div>
</div>
@endsection