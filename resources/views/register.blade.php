@extends('layouts.navbar')
@section('main')
    <div class="register bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 mx-4 mt-4">
                        <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                        <div class="card-body py-5 px-5">
                            <div class="text-center">
                                <h1><strong>Sign Up</strong></h1>
                            </div>
                            @if($errors->any())
                                @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                                @endforeach
                            @endif
                            <form action="{{ route('register.action') }}" method="POST" class="row sign-up-form form g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="FirstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="first name" 
                                        name="first_name" id="FirstName" value="{{ old('first_name') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="LastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="last name" 
                                        name="last_name" id="LastName" value="{{ old('last_name') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="UserName" class="form-label">Username</label>
                                    <input type="text" placeholder="username" name="username" 
                                        class="form-control" id="UserName" value="{{ old('username') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Email" class="form-label">Email</label>
                                    <input type="email" placeholder="email" name="email" 
                                        class="form-control" id="Email" value="{{ old('email') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Password" class="form-label">Password</label>
                                    <input type="password" placeholder="password" name="password" class="form-control" id="Password" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="Password_C" class="form-label">Confirm Password</label>
                                    <input type="password" placeholder="confirm password" name="password_confirmation" class="form-control" id="Password_C" required>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck" style="font-size:13px;">
                                        I agree with <a href="#">Privacy and Policy</a>
                                    </label>
                                    </div>
                                </div>
                                <div class="col-md-6 d-grid gap-2">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                                <div class="col-md-6" style="font-size:13px; color: #828282;">
                                    <p class="text-center">Already have account? <a href="{{ route('login') }}">Sign in</a></p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection