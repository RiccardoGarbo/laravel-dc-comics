<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>  
    @vite('resources/js/app.js')
    <!--CDNS-->
    @yield('cdns')
</head>
<body> 
    <!--HEADER-->
    @yield('header')
    <!--JUMBOTRON-->
    @yield('jumbotron')
    <!--Section Main-->
    @yield('main-content')
    <!--FOOTER-->
    @yield('footer')
    <!--Script-->
    @yield('scripts')
</body>
</html>