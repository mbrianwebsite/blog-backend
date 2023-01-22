<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }} - Syamsul Huda Blog</title>
  <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link href="{{ url('/') }}/css/dashboard.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/trix.css">
  <script type="text/javascript" src="{{ url('/') }}/js/trix.js"></script>
</head>
<style>
  trix-toolbar [data-trix-button-group="file-tools"] {
    display: none;
  }
</style>

<body>

  @include('dashboard.layouts.header')

  <div class="container-fluid">
    <div class="row">

      @include('dashboard.layouts.sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        @yield('container')

      </main>
    </div>
  </div>

  <script src="{{ url('/') }}/js/bootstrap.bundle.min.js"></script>
  <script src="{{ url('/') }}/js/feather.min.js"></script>
  <script src="{{ url('/') }}/js/dashboard.js"></script>
</body>

</html>