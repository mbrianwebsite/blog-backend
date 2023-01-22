<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <title>Syamsul Huda - {{ $title }}</title>
</head>
<body>
    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{ url('/') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>