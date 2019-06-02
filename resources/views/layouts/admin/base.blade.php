<!DOCTYPE html>
<html lang="fr">
    <head>
        @include('layouts.admin.head')
    </head>
    <body class="@yield('body-class')">
	<div id="app">
	    @yield('content')
            
            <script>
		$(document).ready(function () {
		    $.ajaxSetup({headers: {'X-CSRF-TOKEN': "{{csrf_token()}}"}});
		});
	    </script>
	    @stack('script')

        </div>
    </body>

</html>