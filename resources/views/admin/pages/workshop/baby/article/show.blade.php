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
    <hr>
    <a href="{{ route('admin.workshop.baby') }}" class="btn btn-formosa">
        <i class="fas fa-arrow-left"></i>
        Go back on Baby page
    </a>
    @include('admin.flash')
    <hr />
    <h4>
        Baby Articles
    </h4>
    <hr />
    <a href="{{ route('admin.workshop.baby.article.create', ['article' => $article->id]) }}" class="btn btn-create">
        Create New Record
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Picture</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.workshop.baby.article._list')
            </tbody>
        </table>
    </div>
</div>
@endsection