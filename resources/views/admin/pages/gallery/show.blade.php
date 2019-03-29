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
        Gallery
    </h4>
    <hr />
    <a href="{{ route('admin.gallery.create') }}" class="btn btn-create">
        Add New Image to Gallery
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Title</th>
                <th>Category</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.gallery.image._list')
            </tbody>
        </table>
    </div>
    <hr class="mt-4">
    <h4>
        Gallery Category
    </h4>
    <hr />
    <a href="{{ route('admin.gallery-category.create') }}" class="btn btn-create">
        Add New Image to Gallery Category
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table1" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Title</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.gallery.category._list')
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $('#data-table1').DataTable();
    </script>    
@endsection