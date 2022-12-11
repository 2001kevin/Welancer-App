@extends('layouts.navbar') 
@section('main')
<!-- Jumbotron Find Freelance -->
<div class="container-fluid jumbotron-find-freelance">
    <br><br><br><br>
    <div class="container mt-4">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-8 col-sm-12 freelancer-title">
                <h1 style="color: black">Find <span style="color: #4640de">Freelancers</span></h1>
                <h2 class="jumbotron-text">Your Worker</h2>
                <form action="/find-freelancer" method="GET">
                    <div
                        class="row bg-white d-flex align-items-center rounded justify-content-between shadow-sm p-2 mt-4 mb-3 ms-1"
                    >
                    
                            <input
                            class="col-9 border-0 jumbotron-input fs-5"
                            type="text"
                            placeholder="Search Freelancer"
                            name="keyword"
                            />
                            <button
                                type="submit"
                                class="btn btn-primary col-3 rounded-circle search-button"
                            >
                                <img
                                    src="{{ asset('assets/img/find-freelancer/image 5.svg') }}"
                                    alt=""
                                />
                                
                            </button>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 freelancer-cover">
                <img src="./assets/img/find-freelancer/Other 13.svg" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- End of Jumbotron Find Freelance -->

<!-- Card Freelancer -->
@foreach($freelancers as $fr)
<div class="container mt-5">
    <div class="row mb-5">
        <div class="col-10 mx-auto">
            <div class="card border border-0 shadow-sm">
                <div class="card-body">
                    <div
                        class="row p-3 border-bottom d-flex justify-content-around"
                    >
                        <div
                            class="col-2 freelance-profile rounded-circle d-flex align-items-center"
                        >
                            <img
                                src="{{url('photos')}}/{{ $fr->photo}}"
                                class="img-fluid"
                                alt=""
                            />
                        </div>

                        <div class="col-8">
                            <div class="row">
                                <h4>{{$fr->name}}</h4>
                                <h5 class="freelance-category">
                                    {{$fr->cattegory }}
                                </h5>
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
                    <div class="card mt-3 mb-3 shadow border-0">
                        <div class="card-body">
                            <div class="row d-flex justify-content-around mt-2 ">
                                <h5 class="freelance-city">Name :</h5>
                                <p class="freelance-city">{{$fr->name}}</p>
                            </div>
                            <div class="row d-flex justify-content-around mt-2 ">
                                <h5 class="freelance-city">Cattegory : </h5>
                                <p class="freelance-city">{{$fr->cattegory}}</p>
                            </div>
                            <div class="row d-flex justify-content-around mt-2 ">
                                <h5 class="freelance-city">Experience : </h5>
                                <p class="freelance-city">{{$fr->experience}}</p>
                            </div>
                            <div class="row d-flex justify-content-around mt-2 ">
                                <h5 class="freelance-city">Description : </h5>
                                <p class="freelance-city">{{$fr->description}}</p>
                            </div>
                            <div
                                class="row d-flex border-bottom justify-content-around mt-2"
                            >
                                <h5 class="freelance-city">Experience :</h5>
                                <p class="freelance-city">{{$fr->experience}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-around mt-3 p-3">
                        <div class="col-2">
                            <a href="{{$fr->email}}"
                                ><img
                                    src="./assets/img/find-freelancer/gmail.png"
                                    width="45px"
                                    height="45px"
                            /></a>
                        </div>
                        <div class="col-2">
                            <a href="{{$fr->linkedin}}"
                                ><img
                                    src="./assets/img/find-freelancer/linkedin.png"
                                    width="45px"
                                    height="45px"
                            /></a>
                        </div>
                        <div class="col-2">
                            <a href="{{$fr->instagram}}"
                                ><img
                                    src="./assets/img/find-freelancer/instagram.png"
                                    width="45px"
                                    height="45px"
                            /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach


<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="row d-flex justify-content-center">
                <div class="col-1 me-5">
                    {{-- {{$freelancers->links()}} --}}
                    <button
                        type="button"
                        class="btn btn-light bg-white rounded-circle p-3 shadow-sm"
                    >
                        <img
                            src="./assets/img/landing-page/Vector-left.svg"
                            alt=""
                        />
                    </button>
                </div>
                <div class="col-1">
                    <button
                        type="button"
                        class="btn btn-light vector-right rounded-circle p-3 shadow-sm"
                    >
                        <img
                            src="./assets/img/landing-page/Vector-right.svg"
                            alt=""
                        />
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Card Freelancer -->

@endsection
