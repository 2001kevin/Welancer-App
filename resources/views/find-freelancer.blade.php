@extends('layouts.navbar')
@section('main')
    <!-- Jumbotron Find Freelance -->
    <div class="container-fluid jumbotron-find-freelance">
      <div class="container mt-4">
        <div class="row d-flex justify-content-between">
          <div class="col-7 freelancer-title">
            <h1>Find <span style="color: #4640de;">Freelancers</span></h1>
            <h2 class="jumbotron-text">Your Worker</h2>
            <div
              class="row bg-white d-flex align-items-center rounded justify-content-between shadow-sm p-2 mt-4 mb-3 ms-1"
            >
              <input
                class="col-11 border border-0 jumbotron-input fs-5"
                type="text"
                placeholder="Search Freelance"
              />
              <button
                type="button"
                class="btn btn-primary col-1 rounded-circle search-button"
              >
                <img src="./assets/img/find-freelancer/image 5.svg" alt="" />
              </button>
            </div>
            <div class="col-3 ms-1">
              <select
                class="form-select filter-freelance p-2"
                aria-label="Default select example"
              >
                <option selected>Kategori</option>
                <option value="content planner">Content Planner</option>
                <option value="photographer">Photographer</option>
                <option value="videographer">Videographer</option>
                <option value="sales">Sales</option>
              </select>
            </div>
          </div>
          <div class="col-4 freelancer-cover">
            <img src="./assets/img/find-freelancer/Other 13.svg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- End of Jumbotron Find Freelance -->

    <!-- Card Freelancer -->
    <div class="container">
      <div class="row mb-5">
        <div class="col-10 mx-auto">
          <div class="card border border-0 shadow-sm">
            <div class="card-body">
              <div class="row p-3 border-bottom d-flex justify-content-around">
                <div
                  class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                >
                  <img
                    src="./assets/img/find-freelancer/Instagram Old.svg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-8">
                  <div class="row">
                    <h4>Don Vito Corleone</h4>
                    <h5 class="freelance-category">Photographer</h5>
                  </div>
                </div>
                <div class="col-2 freelance-bookmark">
                  <img
                    src="./assets/img/find-freelancer/Bookmark Outline.svg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                  <h5 class="freelance-city">City</h5>
                  <h4>Medan</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Work</h5>
                  <h4>215 Foto</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Rating</h5>
                  <h4>4,7</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-10 mx-auto">
          <div class="card border border-0 shadow-sm">
            <div class="card-body">
              <div class="row p-3 border-bottom d-flex justify-content-around">
                <div
                  class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                >
                  <img
                    src="./assets/img/find-freelancer/SMS.svg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-8">
                  <div class="row">
                    <h4>Michael Corleone</h4>
                    <h5 class="freelance-category">Content Planner</h5>
                  </div>
                </div>
                <div class="col-2 freelance-bookmark">
                  <img
                    src="./assets/img/find-freelancer/Bookmark Outline.svg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                  <h5 class="freelance-city">City</h5>
                  <h4>Jakarta</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Work</h5>
                  <h4>320 File</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Rating</h5>
                  <h4>4,9</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-10 mx-auto">
          <div class="card border border-0 shadow-sm">
            <div class="card-body">
              <div class="row p-3 border-bottom d-flex justify-content-around">
                <div
                  class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                >
                  <img
                    src="./assets/img/find-freelancer/Instagram Old.svg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-8">
                  <div class="row">
                    <h4>Bruce Wayne</h4>
                    <h5 class="freelance-category">Videographer</h5>
                  </div>
                </div>
                <div class="col-2 freelance-bookmark">
                  <img
                    src="./assets/img/find-freelancer/Bookmark Outline.svg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                  <h5 class="freelance-city">City</h5>
                  <h4>Cirebon</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Work</h5>
                  <h4>82 Video</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Rating</h5>
                  <h4>4,0</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-10 mx-auto">
          <div class="card border border-0 shadow-sm">
            <div class="card-body">
              <div class="row p-3 border-bottom d-flex justify-content-around">
                <div
                  class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                >
                  <img
                    src="./assets/img/find-freelancer/Literature.svg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-8">
                  <div class="row">
                    <h4>Sherlock Holmes</h4>
                    <h5 class="freelance-category">UI/UX Designer</h5>
                  </div>
                </div>
                <div class="col-2 freelance-bookmark">
                  <img
                    src="./assets/img/find-freelancer/Bookmark Outline.svg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                  <h5 class="freelance-city">City</h5>
                  <h4>Bali</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Work</h5>
                  <h4>173 File</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Rating</h5>
                  <h4>4,2</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-10 mx-auto">
          <div class="card border border-0 shadow-sm">
            <div class="card-body">
              <div class="row p-3 border-bottom d-flex justify-content-around">
                <div
                  class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                >
                  <img
                    src="./assets/img/find-freelancer/Literature.svg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-8">
                  <div class="row">
                    <h4>Hermione Granger</h4>
                    <h5 class="freelance-category">Logo Designer</h5>
                  </div>
                </div>
                <div class="col-2 freelance-bookmark">
                  <img
                    src="./assets/img/find-freelancer/Bookmark Outline.svg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                  <h5 class="freelance-city">City</h5>
                  <h4>Semarang</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Work</h5>
                  <h4>98 Foto</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Rating</h5>
                  <h4>4,0</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-10 mx-auto">
          <div class="card border border-0 shadow-sm">
            <div class="card-body">
              <div class="row p-3 border-bottom d-flex justify-content-around">
                <div
                  class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                >
                  <img
                    src="./assets/img/find-freelancer/Literature.svg"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="col-8">
                  <div class="row">
                    <h4>Jo March</h4>
                    <h5 class="freelance-category">Graphic Designer</h5>
                  </div>
                </div>
                <div class="col-2 freelance-bookmark">
                  <img
                    src="./assets/img/find-freelancer/Bookmark Outline.svg"
                    alt=""
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="row d-flex justify-content-around mt-3 p-3">
                <div class="col-2">
                  <h5 class="freelance-city">City</h5>
                  <h4>Pontianak</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Work</h5>
                  <h4>340 Foto</h4>
                </div>
                <div class="col-2">
                  <h5 class="freelance-city">Rating</h5>
                  <h4>4,8</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="row d-flex justify-content-center">
            <div class="col-1">
              <button
                type="button"
                class="btn btn-light bg-white rounded-circle p-3 shadow-sm"
              >
                <img src="./assets/img/landing-page/Vector-left.svg" alt="" />
              </button>
            </div>
            <div class="col-1">
              <button
                type="button"
                class="btn btn-light vector-right rounded-circle p-3 shadow-sm"
              >
                <img src="./assets/img/landing-page/Vector-right.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Card Freelancer -->

    <!-- Footer -->
    <footer>
      <div class="first-footer container-fluid bg-white mt-5">
        <div class="container pt-5">
          <div class="footer-info row d-flex justify-content-around">
            <div class="col-4">
              <div class="row mb-3">
                <a class="navbar-brand" href="#">
                  <img
                    src="./assets/img/landing-page/LOGO WE LANCER.svg"
                    alt="Welancer"
                    height="40"
                  />
                </a>
              </div>
              <div class="row">
                <p>
                  Powerful Freelance Marketplace System with ability to change the
                  Users (Freelancers & Customers)
                </p>
              </div>
              <div class="row">
                <button
                  type="button"
                  class="btn col-1 rounded-circle contact-button"
                >
                  <img src="./assets/img/find-freelancer/Instagram.svg" alt="" />
                </button>
                <button
                  type="button"
                  class="btn col-1 rounded-circle contact-button"
                >
                  <img src="./assets/img/find-freelancer/Twitter.svg" alt="" />
                </button>
                <button
                  type="button"
                  class="btn col-1 rounded-circle contact-button"
                >
                  <img src="./assets/img/find-freelancer/Facebook.svg" alt="" />
                </button>
              </div>
            </div>
            <div class="col-2 d-flex flex-column for-customer">
                <h5 class="mb-4">Customers</h5>
                <a href="#">Find Freelancers</a>
                <a href="#">Post Project</a>
            </div>
            <div class="col-2 d-flex flex-column for-freelance">
                <h5 class="mb-4">Freelance</h5>
                <a href="#">Find Work</a>
                <a href="#">Create Account</a>
            </div>
            <div class="col-2 d-flex flex-column call-us">
                <h5 class="mb-4">Call Us</h5>
                <div class="row">
                  <div class="col-1">
                    <img
                      src="./assets/img/find-freelancer/carbon_location.svg"
                      alt=""
                    />
                  </div>
                  <div class="col-10">
                    <p>Indonesia</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-1">
                    <img src="./assets/img/find-freelancer/Call.svg" alt="" />
                  </div>
                  <div class="col-10">
                    <p>+6281230000</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-1">
                    <img src="./assets/img/find-freelancer/Message.svg" alt="" />
                  </div>
                  <div class="col-10">
                    <p>welancer@gmail.com</p>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="second-footer container-fluid bg-white">
        <div class="text-center p-3" style="color: #9D9D9D;">
          Copyright &copy; 2022 Welancer. All right reserved
      </div>
      </div>
    </footer>
    <!-- End of Footer -->

@endsection
