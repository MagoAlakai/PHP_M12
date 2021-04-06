<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Partidos</title>


    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">

<header class="mb-5">
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #8fc2e9;">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <a class="navbar-brand" href="#">
            <img src={{Storage::url("images/IT_logo.png")}} alt="Logo" width="80" height="24">
        </a>
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="teams">Teams</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="games">Matches</a>
          </li>
        </ul>
            <div class="d-flex align-items-center me-5">
                @if(Cookie::get('login'))
                    <h6 class="navbar-brand">{{ Cookie::get('login') }}</h6>
                @endif
                <img src={{Storage::url("images/user.png")}} alt="User"width="30" height="30">
            </div>
        {{-- <form class="d-flex" method="GET" action="{{ route('employees.job') }}">
            <input class="form-control me-2" type="search" placeholder="Search by job!" aria-label="Search by job!" id="jobFilter" name="jobFilter">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
</header>

<main role="main" class="container">

    @yield('content')

</main>

<footer class="footer mt-auto py-3" style="background-color: #8fc2e9;">
    <div class="container d-flex justify-content-center">
      <span class=" text-dark">2021 - IT Academy</span>
    </div>
  </footer>

  @include('sweetalert::alert')
</body>

</html>
