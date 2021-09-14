<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/app.css">

    <title>{{ $title ?? 'Surfers Co.' }}</title>
  </head>
  <body>

    {{ $slot }}

    <script src="js/app.js"></script>
  </body>
</html>
