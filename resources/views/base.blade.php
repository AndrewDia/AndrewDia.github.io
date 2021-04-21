<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/@yield('cssForThisPage').css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <title>@yield('title')</title>
</head>
<body>
@include('header')
@yield('content')
@include('footer')
</body>
</html>

