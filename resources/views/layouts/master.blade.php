<html>
    <head>
        <title> NBA - @yield('title')</title>
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
              crossorigin="anonymous">
        <a href="#">Logout   </a>
        
    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>