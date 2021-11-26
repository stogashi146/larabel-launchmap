<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
<html>
    <head>
        <meta charset='utf-8'>
        <title>Lunchmap</title>
        <style>body {padding: 80px;}</style>
    </head>
    <body>
        <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
            <a class='navbar-brand' href={{route('shop.list')}}>Lunchmap</a>
        </nav>
        <div class='container'>
            @yield('content')
        </div>
    </body>
</html>