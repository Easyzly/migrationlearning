<!doctype html>
<html lang="en">
    <header>
        @include('layouts.head')
    </header>
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</body>
</html>
