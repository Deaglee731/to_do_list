
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Intermediate</title>
        <!-- CSS And JavaScript -->
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
            @include('layouts.navigation')
            </nav>
        </div>

        @yield('content')
    </body>
</html>