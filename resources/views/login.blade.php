@extends('layouts.navbar')
@section('main')
    
<div class="login bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-6 d-none d-lg-block">
                                <img src="./assets/img/global/cover1.svg" class="img-fluid rounded-start" alt="welancer">
                            </div>
                            <div class="col-md-6 align-self-center">
                                <div class="card-body pt-5">
                                    <div class="header">
                                        <h1>Login</h1>
                                        <p>See what is going on with your business</p>
                                    </div>
                                     @if(session('success'))
                                    <p class="alert alert-success">{{ session('success') }}</p>
                                    @endif
                                    @if($errors->any())
                                    @foreach($errors->all() as $err)
                                    <p class="alert alert-danger">{{ $err }}</p>
                                    @endforeach
                                    @endif
                                    <form method="POST" action="{{ route('login.action') }}" class="row g-3">
                                        @csrf
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input id="email" type="text" class="form-control" name="email" required autocomplete="email" autofocus placeholder="email@email.com">
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="*********">
                                            <a style="font-size:13px;" href="#" class="text-medium-emphasis text-decoration-none">Forgot Your Password?</a>
                                        </div>
                                        <div class="col-md-12 d-grid gap-2">
                                            <button type="submit" class="sign-in">Login</button>
                                        </div>
                                        <div class="col-md-12 d-flex align-items-center d-grid gap-2 justify-content-center">
                                            <button class="sign-in-google d-flex justify-content-center align-items-center" type="submit">
                                                <img src="./assets/img/global/google.svg" alt="icon google">Continue with Google
                                            </button>
                                        </div>
                                        <div class="col-md-12">
                                            <p style="font-size:13px;" class="text-medium-emphasis text-center">Not Registered Yet? <a href="{{ route('register') }}" class="text-decoration-none">Sign Up</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    