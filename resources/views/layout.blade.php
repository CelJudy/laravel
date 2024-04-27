<html>
    @include('menu')
    <header style="background-color: gray">
    <title>@yield('title')</title>
        @yield('head')
    </header>
    <body style="background-color: cyan">
        @yield('content')
    </body>
</html>