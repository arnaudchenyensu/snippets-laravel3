<!doctype html>
<html>
<head>
    <title></title>

    {{ HTML::style('css/style.css')}}

    @yield('stylesheets')
</head>
<body>

    @yield('container')

    {{ HTML::script('js/vendors/jquery.js')}}
    {{ HTML::script('js/vendors/tabby.js')}}

    @yield('scripts')

    <script>
        $('textarea').tabby();
        prettyPrint();
    </script>

</body>
</html>