<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Juns Site</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </head>

    <body>
            <div class="container">
                <div class="page-header">
                    @yield('header')
                </div>
            </div>

            <div class="container" style="background-color: coral">
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
        @yield('content')
        </div>
    </body>
</html>