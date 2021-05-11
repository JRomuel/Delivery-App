<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('includes.head')
<body>
    <div class="indicator"></div>
    @include('includes.preloader')
    @yield('content')

    @include('includes.footer')
    @include('includes.scripts')

</body>
</html>
