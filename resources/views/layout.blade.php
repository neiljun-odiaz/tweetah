<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | Tweetah</title>
    </head>
    <body>
        <div id="app" class="container">
            @yield('content')

            @{{ hello }}
        </div>
        <script src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
