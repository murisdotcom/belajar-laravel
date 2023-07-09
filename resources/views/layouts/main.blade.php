<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <!-- <script src="../assets/js/color-modes.js"></script> -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5"> -->
    <title>{{ $title }}</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/myCdd/navbar-fixed.css') }}" rel="stylesheet">

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Fixed navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <a href="/logout" class="btn btn-outline-primary"><i class="bi bi-person-circle"> Logout</i></a>
                <!-- <ul class="dropdown-menu gap-1 p-2 position-relative rounded-3 mx-0 shadow w-220px" data-bs-theme="light">
          <li><a class="dropdown-item rounded-2 active" href="#">Action</a></li>
          <hr class="dropdown-divider">
          <li><a class="dropdown-item rounded-2" href="#"><i class="bi bi-chat-left"> Logout</i></a></li>
        </ul> -->
                <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-5">
        @yield('container')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @include('sweetalert::alert')

</body>

</html>
