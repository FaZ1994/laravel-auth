<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolpress</title>

        <link href="{{asset('css/front.css') }}" rel="stylesheet">
      
    </head>
    <body class="bg-dark">
        <nav class="navbar navbar-expand-lg bg-secondary">
            @if (Route::has('login'))
            <a class="navbar-brand text-danger" href="{{ url('/admin') }}">Boolpress</a>

          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    @auth
                  <a class="nav-link text-light" href="{{ url('/admin') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">Link</a>
                </li>
              </ul>
              @else
              <!-- <form class="form-inline my-2 my-lg-0"> 
                <ul class="navbar-nav mr-auto"> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>

                    @endif


                </ul>
            </form>

               
            @endauth

            </div>
            @endif
          </nav>

    </body>
</html>
