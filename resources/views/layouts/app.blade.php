<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title>{{ env('APP_NAME')}} | @yield('Title')</title>
</head>
<body>
@yield('content')
</body>
</html>
