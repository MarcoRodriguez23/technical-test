<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Uthis Credit - @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
      <div class=" border-bottom mb-4">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-2 container">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4 fw-bold">UThis Credit</span>
          </a>
    
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
          </ul>
        </header>
      </div>

      <main class="container-fluid main-container">
          
        <div class="image"></div>

        <div>
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
