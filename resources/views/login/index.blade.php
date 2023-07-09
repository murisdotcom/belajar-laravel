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
  <main class="form-signin w-100 m-auto">
    <form>
      <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>

      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus>
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <!-- <div class="form-check text-start my-3">
      <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
      <label class="form-check-label" for="flexCheckDefault">
        Remember me
      </label>
    </div> -->
      <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
      <p class="mt-5 text-center text-body-secondary">muris.com &copy;2023</p>
    </form>
  </main>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</htmcd \