<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="{{ asset('assets/img/landing-page/LOGO WE LANCER.png') }}" rel="icon" />
    <title>Welancer | {{ $title }}</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/find-freelancer.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/find-work.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
  </head>
  <body>

      <!-- Modal -->
      <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              
                <img
                src="{{ asset('assets/img/landing-page/LOGO WE LANCER.png') }}"
                alt="Welancer"
                height="40"
              />
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start" style="color: black">
              Are you sure want to logout?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a type="button" class="btn-logout" href="{{ route('logout') }}">Logout</a>
            </div>
          </div>
        </div>
      </div>

    <!-- Navbar -->
    <nav class="fixed-top navbar">
      <div class="container-fluid bg-white">
        <div class="container p-2">
          <div class="row navbar-expand-lg d-flex justify-content-between">
            <div class="col-3">
              <a class="navbar-brand fw-bold" href="/">
                <img
                  src="{{ asset('assets/img/landing-page/LOGO WE LANCER.svg') }}"
                  alt="Welancer"
                  height="40"
                  />
              </a>
            </div>
            <button class="col-2 navbar-toggler" style="border:none;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="col-lg-6 navbar-nav d-flex justify-content-center">
                <div class="mx-5"><a class="nav__item {{ Request::is('/') ? 'active' : '' }}" href="/" class="home">Home</a></div>
                <div class="mx-5"><a class="nav__item {{ Request::is('find-work') ? 'active' : '' }}" href="{{ route('find.Work') }}">Find Work</a></div>
                <div class="mx-5"><a class="nav__item {{ Request::is('find-freelancers') ? 'active' : '' }}" href="{{ route('find.freelance') }}">Find Freelance</a></div>
              </div>
              <div class="col-lg-3 navbar-dropdown">
                @auth
                <div class="navbar coldropdown">
                    <button class="btn-user dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li><span class="dropdown-item-text"> <b> Welcome, {{ Auth::user()->username }}</b></span></li>
                      <li><hr class="dropdown-divider"></li>
                      @can('isAdmin')
                      <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>                     
                      @endcan
                      <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
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
      </div>
    </nav>
    @yield('main')
    <!-- End of Navbar -->
    @include('layouts.footer')
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
