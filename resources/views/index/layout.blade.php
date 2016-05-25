<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        @yield('customer_css')
    </head>
    <body>
        @yield('content')
        <script type="text/javascript" src="/js/libs/vue.min.js"></script>
        @yield('customer_js')
    </body>
</html>
