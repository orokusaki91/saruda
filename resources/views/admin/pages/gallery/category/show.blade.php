@extends('admin.layouts.master')

@section('main')
<div class="container-fluid p-3">
    <a href="{{ route('admin.gallery') }}" class="btn btn-formosa">
        <i class="fas fa-arrow-left"></i>
        Go back to Gallery Category
    </a>
    @include('admin.flash')
    <hr />
    <h4>
        {{ $category->name }}
    </h4>
    <hr />
    
    <a href="{{ route('admin.gallery-category.create-images', ['category' => $category->id]) }}" class="btn btn-create">
        Add Images to Category
    </a>
    <hr />
    <div class="table-responsive">
        <table id="data-table" class="table table-striped table-bordered nowrap">
            <thead>
                <th>Image</th>
                <th>Action</th>
            </thead>
            <tbody>
                @include('admin.pages.gallery.image._list')
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