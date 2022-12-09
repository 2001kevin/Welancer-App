
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
            <div class="modal-body">
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
    <nav class="navbar sticky-top">
      <div class="container-fluid bg-white ">
        <div class="container p-3 ">
        <div class="row d-flex justify-content-between">
          <div class="col-3">
            <a class="navbar-brand" href="/">
              <img
                src="{{ asset('assets/img/landing-page/LOGO WE LANCER.png') }}"
                alt="Welancer"
                height="40"
                />
            </a>
          </div>
          <div class="col-5 d-flex justify-content-center mt-2">
            <div class="col-3 "><a href="/" class="home">Home</a></div>
            <div class="col-3 "><a href="{{ route('find.Work') }}">Find Work</a></div>
            <div class="col-3 "><a href="{{ route('find.freelance') }}">Find Freelance</a></div>
          </div>
          <div class="col-3 d-flex justify-content-end">
              @auth
              <div class="dropdown">
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
  </nav>