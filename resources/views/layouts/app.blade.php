<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.includes.head')
</head>
<body>
@include('layouts.includes.header')

<div id="wrapper">
    @include('layouts.sidebar')
    <div class="container-fluid">
        @yield('content')
    </div>
</div>
<li class="nav-item mt-auto">
    <div class="footer">
        @include('layouts.includes.footer')
    </div>
</li>

@include('common.delete')
</body>
</html>

