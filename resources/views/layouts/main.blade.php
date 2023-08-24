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

    {{-- Bootstrap icon --}}
    <link href="{{ asset('bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet">

    {{-- Datatables --}}
    <link href="{{ asset('css/myCss/dataTables.css') }}" rel="stylesheet">

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <a class="navbar-nav nav-link {{ $active == 'home' ? 'text-primary' : '' }}" href="/">Home</a>
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'Users' ? 'active' : '' }}" href="/users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'userAccMenu' ? 'active' : '' }}" href="/userAccMenu">User Acc
                            Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active == 'Menus' ? 'active' : '' }}" href="/menus">Menus</a>
                    </li>
                </ul>
                <a href="/logout" class="btn btn-outline-primary">
                    <i class="bi bi-door-open"> Logout</i>
                </a>
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
    <script src="{{ asset('js/myScript/jQuery.min.js') }}"></script>
    <script src="{{ asset('js/myScript/dataTables.min.js') }}"></script>
    <script src="{{ asset('js/myScript/loadDataTables.js') }}"></script>
    <script src="{{ asset('js/myScript/instascan.min.js') }}"></script>
    <script src="{{ asset('js/myScript/scanData.js') }}"></script>
    @include('sweetalert::alert')

</body>

</html>
