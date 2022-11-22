<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="./assets/img/landing-page/LOGO WE LANCER.png" rel="icon" />
    <title>Welancer | {{ $title }}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/landing-page.css" />
    <link rel="stylesheet" href="./assets/css/index.css" />
  </head>
  <body>
    <!-- Navbar -->
    <div class="container-fluid bg-white">
      <div class="container p-3">
        <div class="row d-flex justify-content-between">
          <div class="col-3">
            <a class="navbar-brand" href="/">
              <img
                src="./assets/img/landing-page/LOGO WE LANCER.svg"
                alt="Welancer"
                height="40"
              />
            </a>
          </div>
          <div class="col-5 d-flex justify-content-center mt-2">
            <div class="col-3"><a href="#" class="home">Home</a></div>
            <div class="col-3"><a href="#">Find Work</a></div>
            <div class="col-3"><a href="#">Find Freelance</a></div>
          </div>
          <div class="col-3 d-flex justify-content-end">
              @auth
                <div class="dropdown">
                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><span class="dropdown-item-text"> <b> Welcome, {{ Auth::user()->username }}</b></span></li>
                    @can('isAdmin')
                      <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>                     
                    @endcan
                    <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                  </ul>
                </div>
              @endauth
              @guest
                  <a href="/login" class="btn btn-primary btn-login me-2 ">
                    Login
                  </a>
                  <a href="/register" class="btn btn-outline-primary btn-register">
                    Register
                  </a>
              @endguest  
          </div>
        </div>
      </div>
    </div>
    @yield('main')
    <!-- End of Navbar -->
  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
