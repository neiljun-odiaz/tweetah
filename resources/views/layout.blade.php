<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | Tweetah</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}" media="screen" title="no title">
    </head>
    <body>
        <div id="app" class="container">
            @yield('content')
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
