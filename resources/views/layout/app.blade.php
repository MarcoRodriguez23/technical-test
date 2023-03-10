<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Uthis Credit - @yield('title')</title>
      
    <!-- Fonts and styles -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="{{asset('images/icon.png')}}" type="image/x-icon">
  </head>

  <body>

    <div class=" border-bottom mb-4">
      <header class="d-flex flex-wrap justify-content-center py-3 mb-2 container">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4 fw-bold me-5 me-md-0">UThis Credit</span>
        </a>
  
        <ul class="nav nav-pills">
          @if (session('cliente_id'))
            <form method="POST" action="{{route('logout')}}" class="nav-item">
              @csrf
              <button type="submit" class="nav-link active">
                  Cerrar Sesión
              </button>
            </form>
          @else
            <li class="nav-item"><a href="{{route('login.index')}}" class="nav-link active">Solicitar prestamo</a></li>
          @endif
        </ul>
      </header>
    </div>

    <main class="container-fluid main-container">
      <!--div para colocar la imagen de la izquierda-->  
      <div class="image"></div>

      <!--div para la parte derecha, titulo y formularios-->  
      <div class="mt-5 my-md-auto mx-4">
        <h1 class="mx-auto my-0 text-center">
          @yield('title')
        </h1>
        <div class="p-4">
          @yield('main')
        </div>
      </div>

    </main>

    <footer class="d-flex flex-wrap justify-content-center align-items-center py-2 mt-4 border-top">
      <span class="mb-3 mb-md-0 text-muted">© 2023 UThis Credit, Inc</span>
    </footer>

  </body>
</html>
