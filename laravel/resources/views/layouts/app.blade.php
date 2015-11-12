<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        
        @include('common.bootstrap')

    </head>

    <body class="@yield('class')">
	   @yield('body')
    </body>
</html>