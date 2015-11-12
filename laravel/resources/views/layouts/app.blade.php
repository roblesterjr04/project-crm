<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <!-- CSS And JavaScript -->
        
        @include('common.bootstrap')

    </head>

    <body>
	   <div id="wrapper">
		   @include('common.nav')
		   <div id="page-wrapper">
			   <div class="container-fluid">
					@yield('content')
			   </div>
		   </div>
	   </div>
    </body>
</html>