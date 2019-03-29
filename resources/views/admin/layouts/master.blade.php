<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts._header')
</head>

<body>
    <div id="admin">
        <div class="container">
            @yield('main')
        </div>
    </div>
    @include('admin.layouts._scripts')
    @yield('scripts')
</body>

</html>