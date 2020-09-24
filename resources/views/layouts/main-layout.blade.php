<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lavarel es3</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
     <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      @include('parts.header')
    </header>
    <div class="container">
      @yield('content')
    </div>
    <footer>
    @include('parts.footer')
    </footer>
  </body>
</html>
