<html>
    <head>
        <title> NBA - @yield('title')</title>
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
              crossorigin="anonymous">
        

        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/logout">{{ auth()->user() ? "Logout" : "" }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/login">{{ auth()->user() ? "" : "Login"}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register">{{ auth()->user() ? "" : "Register"}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{ auth()->user() ? auth()->user()->name : ""}}</a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
        </ul>

    </head>
    <body>
        @section('sidebar')
            
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>