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

    <!-- Favicons -->
    <link rel="icon" type="image/png" href="{{ asset('images/infst2-icon.png') }}">

    <!-- Scripts -->
    <script src="https://unpkg.com/feather-icons"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index INFST2</title>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        .jumbotron {
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        p {
            color: #777;
            font-size: 1.25rem;
        }

        footer {
            margin-top: 2rem;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        @include('partials.navigation')

        <main>
            <div class="jumbotron">
                <h1 class="display-4">Bienvenidas gordaaas</h1>
                <p class="lead">Se hicieron muy dependientes de mí, puerkas, quieren que les haga todo.</p>
            </div>
        </main>

        <footer>
            <p>&copy; Todos los derechos reservados.</p>
        </footer>
    </div>
</body>
</html>
