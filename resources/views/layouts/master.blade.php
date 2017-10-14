<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab08</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
</head>
<body>
<div class="container">
    <div class="page-header">
        @yield('cabecera')
    </div>
        @yield('contenido')
</div>
</body>
</html>