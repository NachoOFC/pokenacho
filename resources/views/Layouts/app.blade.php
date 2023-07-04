<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- CSS -->

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('images/infst2-icon.png') }}">

        <!-- Scripts -->
        <script src="https://unpkg.com/feather-icons"></script>

    @yield('scripts')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokenacho - @yield('title')</title>
    @vite(['resources/js/Winwheel.min.js','resources/js/TweenMax.min.js','resources/js/jQuery-2.1.4.min.js','resources/js/funciones.js'])
</head>
<body>
<div class="container">
    @include('partials.navigation')

    <main>

    @yield('content')

      <!-- <div class="row">
        <div class="col-md-6">
          <h2>Contenido de la columna 1</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum libero eget leo sollicitudin consequat. Duis eleifend ligula at feugiat dignissim. In dapibus venenatis lacus, ac venenatis purus sollicitudin vel.</p>
        </div>
        <div class="col-md-6">
          <h2>Contenido de la columna 2</h2>
          <p>Etiam faucibus nunc id velit dignissim faucibus. Nam fringilla elit et mi eleifend, eu consectetur justo tincidunt. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin luctus elit sed purus feugiat, eget scelerisque mauris euismod.</p>
        </div>
      </div> -->

    </main>

    <footer>
      <p>&copy; 2021 Mi Sitio. Todos los derechos reservados.</p>
    </footer>
  </div>
</body>

</html>
