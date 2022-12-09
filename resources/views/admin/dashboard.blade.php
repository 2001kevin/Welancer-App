@extends('layouts.sidebar')
@section('main')

            <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="../assets/img/global/burger.svg" class="mb-2" alt="">
                        </button>
                        <h2 class="nav-title">Overview</h2>
                    </div>
                    <button class="btn-notif d-block d-md-none"><img src="../assets/img/global/bell.svg" alt=""></button>
                </div>

                <div class="d-flex justify-content-between align-items-center nav-input-container">
                    <div class="nav-input-group">
                        <input type="text" class="nav-input" placeholder="Search people, team, project">
                        <button class="btn-nav-input"><img src="../assets/img/global/search.svg" alt=""></button>
                    </div>

                    <button class="btn-notif d-none d-md-block"><img src="../assets/img/global/bell.svg" alt=""></button>
                </div>
            </div>

            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <h2 class="content-title">Statistics</h2>
                        <h5 class="content-desc mb-4">Your business growth</h5>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-between align-items-start">
                                    <h5 class="content-desc">Works</h5>

                                    <h3 class="statistics-value">{{ $worksCount }}</h3>
                                </div>

                            </div>

                            <div class="statistics-list">
                                <img class="statistics-image" src="../assets/img/home/history/photo-4.png" alt="">
                                <img class="statistics-image" src="../assets/img/home/history/photo-3.png" alt="">
                                <img class="statistics-image" src="../assets/img/home/history/photo.png" alt="">
                                <img class="statistics-image" src="../assets/img/home/history/photo-1.png" alt="">
                                <img class="statistics-image" src="../assets/img/home/history/photo-2.png" alt="">
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-between align-items-start">
                                    <h5 class="content-desc">Freelancers</h5>

                                    <h3 class="statistics-value">{{ $freelancersCount }}</h3>
                                </div>

                              
                            </div>

                            <div class="statistics-list">
                                <div class="statistics-icon award">
                                    <img src="../assets/img/home/team/award.svg" alt="">
                                </div>
                                <div class="statistics-icon globe">
                                    <img src="../assets/img/home/team/globe.svg" alt="">
                                </div>
                                <div class="statistics-icon target">
                                    <img src="../assets/img/home/team/target.svg" alt="">
                                </div>
                                <div class="statistics-icon box">
                                    <img src="../assets/img/home/team/box.svg" alt="">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-between align-items-start">
                                    <h5 class="content-desc">Users</h5>

                                    <h3 class="statistics-value">{{ $usersCount }}</h3>
                                </div>

                           
                            </div>

                            <div class="statistics-list">
                                <div class="statistics-icon one">
                                    <span>SK</span>
                                </div>
                                <div class="statistics-icon two">
                                    <span>DW</span>
                                </div>
                                <div class="statistics-icon three">
                                    <span>FJ</span>
                                </div>
                                <div class="statistics-icon four">
                                    <span>AP</span>
                                </div>
                                <div class="statistics-icon five">
                                    <span>ML</span>
                                </div>
                                <!-- <img src="./assets/img/home/icon-1.png" alt=""><img src="./assets/img/home/icon-2.png" alt=""><img src="./assets/img/home/icon-3.png" alt=""><img src="./assets/img/home/icon-4.png" alt=""><img src="./assets/img/home/icon-5.png" alt=""> -->
                            </div>

                        </div>
                    </div>

                </div>

                <div class="row mt-5">
                    <div class="col-12 col-lg-6">
                        <h2 class="content-title">Freelancers</h2>
                        <h5 class="content-desc mb-4">Freelancers Tracking</h5>
                        @foreach ($freelancers as $freelancer)
                            <div class="document-card">
                                <div class="document-item">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <img class="document-icon" src="{{ asset('assets/img/landing-page/LOGO WE LANCER.svg') }}" alt="">
                                        <div class="d-flex flex-column justify-content-between align-items-start">
                                            <h2 class="document-title">{{ $freelancer->name }}</h2>
                                            <span class="document-desc">Created At {{ $freelancer->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        @endforeach
                    </div>

                    <div class="col-12 col-lg-6">
                        <h2 class="content-title">Works</h2>
                        <h5 class="content-desc mb-4">Works Tracking</h5>
                        @foreach ($works as $work)
                            <div class="document-card">
                                <div class="document-item">
                                    <div class="d-flex justify-content-start align-items-center">
                                        <img class="document-icon" src="{{ asset('assets/img/landing-page/LOGO WE LANCER.svg') }}" alt="">
                                        <div class="d-flex flex-column justify-content-between align-items-start">
                                            <h2 class="document-title">{{ $work->project_name }}</h2>
                                            <span class="document-desc">Created At {{ $work->created_at }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        @endforeach

                        </div>
                    </div>
                </div>

            </div>
        </div>
@endsection
