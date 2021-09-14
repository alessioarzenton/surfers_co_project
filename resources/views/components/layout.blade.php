<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">

    <title>{{ $title ?? 'Surfers Co.' }}</title>
  </head>
  <body>

    {{ $slot }}

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="js/app.js"></script>
    <script>
        AOS.init();
      </script>
  </body>
</html>
