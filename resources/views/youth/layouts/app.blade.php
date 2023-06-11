<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('youth.includes.header')
</head>

<body class="theme-light">
    <div class="page">

        <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
            @include('youth.includes.navbar')
        </header>

        @include('youth.includes.messages')

        <div class="page-wrapper">
            @yield('content')

            <footer class="footer footer-transparent d-print-none">
                @include('youth.includes.footer')
            </footer>
        </div>
    </div>
</body>

</html>