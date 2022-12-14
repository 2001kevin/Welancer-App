
@extends('layouts.navbar')
@section('main')
    <!-- Looking For Freelance -->
    <div class="container-fluid jumbotron-freelance">
      <div class="container">
        <div class="row">
          <div class="col-7 mt-5">
            <div class="row mt-5">
              <div class="col-lg-8 col-md-12">
                <h1 class="fw-bold jumbotron-title">
                  Are you looking for Freelancers?
                </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8 col-md-12">
                <p class="jumbotron-description">
                  Hire Great Freelancers, Fast. Spacelance helps you hire elite
                  freelancers at a moment's notice
                </p>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-6 col-sm-8">
                <a
                  type="button"
                  class="btn btn-primary me-2 btn-hire fw-bold p-2"
                  href="{{ route('find.freelance') }}"
                >
                  Hire a freelancer
              </a>
              </div>
            </div>
          </div>
          <div class="col-5 jumbotron-image">
            <img
              src="./assets/img/landing-page/Working remotely.svg"
              alt="Freelance"
              width="600"
            />
          </div>
        </div>
      </div>
    </div>
    <!-- End of Looking For Freelance -->

    <!-- Procedure -->
    <div class="container bg-white p-3 rounded shadow-sm">
      <div class="row d-flex justify-content-between p-3">
        <div class="col-12 col-md-4">
          <div class="row procedure-image">
            <img
              src="./assets/img/landing-page/Lock.svg"
              alt="lock"
              height="100"
            />
          </div>
          <div class="row">
            <h4 class="card-title text-center mt-2">Create Account</h4>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-8">
              <p class="text-center mt-2 procedure-text">
                First you have to create a account here
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="row procedure-image">
            <img
              src="./assets/img/landing-page/Document.svg"
              alt="lock"
              height="100"
            />
          </div>
          <div class="row">
            <h4 class="card-title text-center mt-2">Search work</h4>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-8">
              <p class="text-center mt-2 procedure-text">
                Search the best freelance work here
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="row procedure-image">
            <img
              src="./assets/img/landing-page/protect.svg"
              alt="lock"
              height="100"
            />
          </div>
          <div class="row">
            <h4 class="card-title text-center mt-2">Save and apply</h4>
          </div>
          <div class="row d-flex justify-content-center">
            <div class="col-8">
              <p class="text-center mt-2 procedure-text">
                Apply or save and start your work
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Procedure -->

    <!-- Offering -->
    <div class="container mt-5">
      <div class="row d-flex justify-content-between">
        <div class="col-8">
          <img class="offering-image"
            src="./assets/img/landing-page/offer.svg"
            alt="offer"
            width="600"
            height="400"
          />
        </div>
        <div class="offering col-4">
          <div class="row">
            <h1 class="text-end offer-title">
              Find The Best <span>Freelancers</span> Here
            </h1>
          </div>
          <div class="row d-flex justify-content-end">
            <div class="col-10">
              <p class="offer-description text-end">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut erat
                bibendum ornare urna, cursus eget convallis. Feugiat imperdiet
                posuere justo, ultrices interdum sed orci nunc, mattis. Ipsum
                viverra viverra neque adipiscing arcu, quam dictum. Dui mi
                viverra dui, sit accumsan, tincidunt massa. Dui cras magnis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Offering -->

    <!-- Latest Freelance Work -->
    <div class="container mt-5">
      <div class="row d-flex justify-content-between pt-5">
        <div class="col-8">
          <div class="row">
            <h3 class="latest-description">The latest freelance work!</h3>
          </div>
          <div class="row">
            <h1 class="latest-title">Recently Posted <span>Works</span></h1>
          </div>
        </div>
        <div class="col-4">
          <div class="row d-flex justify-content-center">
            <div class="col-1 arrow-mark me-3">
              <button
                type="button"
                class="btn btn-light bg-white rounded-circle p-3 shadow-sm"
              >
                <img src="./assets/img/landing-page/Vector-left.svg" alt=""/>
              </button>
            </div>
            <div class="col-1 arrow-mark">
              <button
                type="button"
                class="btn btn-light vector-right rounded-circle p-3 shadow-sm"
              >
                <img src="./assets/img/landing-page/Vector-right.svg" alt=""/>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Latest Freelance Work -->

    <!-- Card Product -->
    <div class="container mt-5">
      <div class="row">
        <div class="text-center col-12 col-md-3 d-flex justify-content-center mb-2">
          <div
            class="card shadow-sm border border-0 p-2 rounded-3"
            style="width: 18rem"
          >
            <img
              src="./assets/img/landing-page/logo desain.svg"
              class="card-img-top"
              alt="logo-desain"
              height="100"
            />
            <div class="card-body">
              <h5 class="card-title">Logo Design</h5>
              <p class="card-text">
                Need a professional logo with writing underneath for our
                jewellery company
              </p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text fw-bold">Highest bid $500</p>
                </div>
                <div class="col-6">
                  <a class="apply-link" href="">Apply now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center col-12 col-md-3 d-flex justify-content-center mb-2">
          <div
            class="card shadow-sm border border-0 p-2 rounded-3"
            style="width: 18rem"
          >
            <img
              src="./assets/img/landing-page/Canva App.svg"
              class="card-img-top"
              alt="logo-desain"
              height="100"
            />
            <div class="card-body">
              <h5 class="card-title">Graphic Design</h5>
              <p class="card-text">
                We need a graphic designer with UI/UX skills for our Furniture
                company
              </p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text fw-bold">Highest bid $500</p>
                </div>
                <div class="col-6">
                  <a class="apply-link" href="">Apply now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center col-12 col-md-3 d-flex justify-content-center mb-2">
          <div
            class="card shadow-sm border border-0 p-2 rounded-3"
            style="width: 18rem"
          >
            <img
              src="./assets/img/landing-page/bar.svg"
              class="card-img-top"
              alt="logo-desain"
              height="100"
            />
            <div class="card-body">
              <h5 class="card-title">Need a SEO</h5>
              <p class="card-text">
                Need a SEO for our company who will let our company to a higher
                level
              </p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text fw-bold">Highest bid $300</p>
                </div>
                <div class="col-6">
                  <a class="apply-link" href="">Apply now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center col-12 col-md-3 d-flex justify-content-center mb-2">
          <div
            class="card shadow-sm border border-0 p-2 rounded-3"
            style="width: 18rem"
          >
            <img
              src="./assets/img/landing-page/logo desain.svg"
              class="card-img-top"
              alt="logo-desain"
              height="100"
            />
            <div class="card-body">
              <h5 class="card-title">Logo Design</h5>
              <p class="card-text">
                Need a professional logo with writing underneath for our
                jewellery company
              </p>
              <div class="row">
                <div class="col-6">
                  <p class="card-text fw-bold">Highest bid $500</p>
                </div>
                <div class="col-6">
                  <a class="apply-link" href="">Apply now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End of Card Product -->

    <!-- Category -->
    <div class="container mt-5">
      <div class="row text-center pt-5">
        <h1 class="category-title">Choose Different <span>Category</span></h1>
      </div>
    </div>

    <div class="container mt-3">
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/graphic-design-img.svg" alt="" />
          <p class="text-center category-freelance fw-bold">Graphic Design</p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img
            src="./assets/img/landing-page/cartoon-animation-img.svg"
            alt=""
          />
          <p class="text-center category-freelance fw-bold">
            Cartoon Animation
          </p>
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/ilustration-img.svg" alt="" />
          <p class="text-center category-freelance fw-bold">Illustrationn</p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/Flyers-vouchers-img.svg" alt="" />
          <p class="text-center category-freelance fw-bold">
            Flyers & Vouchers
          </p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/logo-design-img.svg" alt="" />
          <p class="text-center category-freelance fw-bold">Logo Design</p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/social-graphics-img.svg" alt="" />
          <p class="text-center category-freelance fw-bold">Social Graphics</p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/article-writing-img.svg" alt="" />
          <p class="text-center category-freelance fw-bold">Article Writing</p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
        <div class="col-lg-3 col-sm-6 col-xs-12 background-category mt-3">
          <img src="./assets/img/landing-page/video-editing-image.svg" alt="" />
          <p class="text-center category-freelance fw-bold">Video Editing</p>
          <!-- <img
            src="./assets/img/landing-page/black.svg"
            class="overlay-category"
            alt=""
          /> -->
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12 col-md-4 d-flex justify-content-center mx-auto">
          <button
            type="button"
            class="btn btn-primary me-2 btn-hire fw-bold p-3"
          >
            More Categories
          </button>
        </div>
      </div>
    </div>

    <!-- Portofolios -->
    <div class="container mt-5 text-center">
      <div class="row pt-5">
        <h3 class="portofolios-type">Logos, websites, book covers & more!</h3>
      </div>
      <div class="row">
        <h1 class="portofolios-checkout">Checkout The Best <span>Portfolios</span> Here</h1>
      </div>
    </div>

    <div class="container mt-2">
      <div class="row">
        <div class="col-12 col-md-4">
          <div class="card shadow-sm border border-0 p-2 rounded-2">
            <img src="./assets/img/landing-page/best-portofolios-1.svg" alt="best-portofolios"/>
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body d-flex flex-column justify-content-between align-items-start">
                <h5 class="card-title">Bunny.design</h5>
                <p class="card-text">UI/UX Designer</p>
              </div>

              <button type="button" class="btn btn-light vector-right p-2 shadow-sm">
                <img src="./assets/img/landing-page/Vector-right.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card shadow-sm border border-0 p-2 rounded-2">
            <img src="./assets/img/landing-page/best-portofolios-2.svg" alt="best-portofolios"/>
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body d-flex flex-column justify-content-between align-items-start">
                <h5 class="card-title">Bhaskar Tiwari</h5>
                <p class="card-text">Graphic Designer</p>
              </div>

              <button type="button" class="btn btn-light vector-right p-2 shadow-sm">
                <img src="./assets/img/landing-page/Vector-right.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card shadow-sm border border-0 p-2 rounded-2">
            <img src="./assets/img/landing-page/best-portofolios-2.svg" alt="best-portofolios"/>
            <div class="d-flex justify-content-between align-items-center">
              <div class="card-body d-flex flex-column justify-content-between align-items-start">
                <h5 class="card-title">Aksara Joshi</h5>
                <p class="card-text">Graphic Designer</p>
              </div>

              <button type="button" class="btn btn-light vector-right p-2 shadow-sm">
                <img src="./assets/img/landing-page/Vector-right.svg" alt="" />
              </button>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-6 col-md-4 d-flex justify-content-center mx-auto">
          <button type="button" style="border: none; background-color: transparent;">
            <img src="./assets/img/landing-page/page-now.svg" alt="" />
          </button>
          <button type="button" style="border: none; background-color: transparent;">
            <img src="./assets/img/landing-page/page-next.svg" alt="" />
          </button>
          <button type="button" style="border: none; background-color: transparent;">
            <img src="./assets/img/landing-page/page-next.svg" alt="" />
          </button>
        </div>
      </div>
    </div>
    <!-- End of Portofolios -->
@endsection
    