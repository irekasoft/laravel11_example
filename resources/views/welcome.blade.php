<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Example</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="p-10">

  <center>
    <?php echo \Illuminate\Foundation\Inspiring::quote(); ?>
  </center  >

  <div id="Welcome" data-message="123"></div>
  @vite(['resources/react/Welcome.jsx'])

</body>

</html>
