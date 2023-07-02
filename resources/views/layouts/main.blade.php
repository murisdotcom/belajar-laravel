<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <!-- <script src="../assets/js/color-modes.js"></script> -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <!-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5"> -->
  <title>{{$title}}</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/"> -->





  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/myCss/sign-in.css')}}" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

  @yield('container')

  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>