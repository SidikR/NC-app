<!DOCTYPE html>
<html lang="en">
    <head>
       @include('global.import')
        <title>Document</title>
    </head>
    <body> 
        @include('partials/navbar.lpnavbar')
        {{-- @include("partial.sidebar") --}}
        @yield('container')
        @include('partials.footer')
    </body>
</html>