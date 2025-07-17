<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title') | Abir Hasan</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #f9f9f9;
    }
    .container {
      width: 90%;
      max-width: 1100px;
      margin: auto;
      padding: 20px 0;
    }
  </style>
</head>
<body>

  @include('components.navbar')

  <main>
    @yield('content')
  </main>

  @include('components.footer')

</body>
</html>
