<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('layout.partials.head')

</head>
<body>
    <div id="app">


        @include('layout.partials.nav')

        @include('layout.partials.header')

        <main role="main">
        @yield('content')
        </main>

        @include('layout.partials.footer')

        @include('layout.partials.footer-scripts')
    </div>
</body>
</html>
