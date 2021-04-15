<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>IT Academy</title>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <!-- Fontfaces CSS-->
    <link href="theme/css/font-face.css" rel="stylesheet" media="all">
    <link href="theme/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="theme/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="theme/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="theme/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="theme/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="theme/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="theme/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        @include('theme.header')
        @include('theme.sidebar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">


            <!-- MAIN CONTENT-->
            <div class="main-content">

                @yield('content')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="theme/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="theme/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="theme/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="theme/vendor/slick/slick.min.js">
    </script>
    <script src="theme/vendor/wow/wow.min.js"></script>
    <script src="theme/vendor/animsition/animsition.min.js"></script>
    <script src="theme/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="theme/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="theme/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="theme/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="theme/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="theme/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="theme/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="theme/js/main.js"></script>
    @include('sweetalert::alert')
</body>
<div class="page-wrapper">
    <div class="col-md-12">
        <div class="copyright footer">
            <p>Copyright © 2021 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
        </div>
    </div>
</div>
</html>
<!-- end document-->


{{-- <!doctype html>
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
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #737479;">
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
            @if(Auth::check())
            <li class="nav-item">
                <a class="nav-link active" href="teams">Teams</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="games">Games</a>
            </li>
            @endif
            @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link active" href="register">Register</a>
                </li>
            @endif

        </ul>
            <div class="d-flex align-items-center me-4">
                <ul class="navbar-nav me-2 mb-2 mb-md-0">

                    @if(!Auth::check())
                    <li class="nav-item">
                      <a class="nav-link active" href="login">Login</a>
                    </li>
                    @endif

                </ul>
                @if(Auth::check())
                    <h6 class="navbar-brand align-items-center mt-1">{{ Auth::user()->name}}</h6>
                @endif
                <img src={{Storage::url("images/user.png")}} alt="User"width="30" height="30">
            </div>

            @if(Auth::check())

                <form class="d-flex me-2" method="POST" action="{{ route('logout') }}">
                    <input type="hidden" name="_token" value={{csrf_token()}}>
                    <button class="btn btn-outline-light" type="submit">Log Out</button>
                </form>

            @endif
      </div>
    </div>
  </nav>
</header>

<main role="main" class="container">

    @yield('content')

</main>

<footer class="footer mt-auto py-3" style="background-color: #737479;">
    <div class="container d-flex justify-content-center">
      <span class=" text-light">2021 - IT Academy</span>
    </div>
  </footer>

  @include('sweetalert::alert')
</body>

</html> --}}
