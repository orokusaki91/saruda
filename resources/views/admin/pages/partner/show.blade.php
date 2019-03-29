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
        Partners
    </h4>
    <hr />
    <a href="{{ route('admin.partner.create') }}" class="btn btn-create">
        Create New Partner
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Name</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.partner._list')
            </tbody>
        </table>
    </div>
</div>
@endsection