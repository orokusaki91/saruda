@extends('admin.layouts.master')

@section('main')
<div id="admin-nav">
    <div class="container-fluid p-0">
        <h1 class="text-center text-lg-left p-4">
            Admin Panel
        </h1>
        <div class="row no-gutters">
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.home-image') }}">
                    Home Image
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.workinghours') }}">
                    Working Hours
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.gallery') }}">
                    Gallery
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.workshop') }}">
                    Workshop
                </a>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.partner') }}">
                    Partners
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.info') }}">
                    Info
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('admin.lunch') }}">
                    Lunch
                </a>
            </div>
            <div class="col-6 col-md-4 col-lg nav-item">
                <a href="{{ route('logout') }}">
                    Logout
                </a>
            </div>
        </div>
    </div>
</div>
@endsection