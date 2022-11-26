@extends('layouts.sidebar')
@section('main')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-4 mx-4 mt-4">
                    <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                        <div class="card-body py-5 px-5">
                            <div class="text-center">
                                    <h1><strong>Add Data Freelancer</strong></h1>
                                </div>
    
                                <form action="" method="POST" class="row sign-up-form form g-3">
                                  <div class="col-md-6">
                                      <label for="Name" class="form-label">Name</label>
                                      <input type="text" class="form-control" placeholder="Name" name="name" id="Name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Cattegory" class="form-label">Project Cattegory</label>
                                      <select name="select" id="form-select" class="form-select">
                                        <option >Select Project Cattegory</option>
                                        <option value="">Graphic Design</option>
                                        <option value="">Cartoon Animation</option>
                                        <option value="">Fotografer</option>
                                        <option value="">Flyers & Vouchers</option>
                                        <option value="">Logo Design</option>
                                        <option value="">Content Planner</option>
                                        <option value="">Website Design</option>
                                      </select>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Description" class="form-label">Description</label>
                                      <input type="text" placeholder="Description" name="description" class="form-control" id="name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Experience" class="form-label">Experience</label>
                                      <input type="text" placeholder="Experience" name="experience" class="form-control" id="experience" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Email" class="form-label">Email</label>
                                      <input type="Email" placeholder="Email" name="email" class="form-control" id="email" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="LinkedIn" class="form-label">Link LinkedIn</label>
                                      <input type="text" placeholder="LinkedIn" name="LinkedIn" class="form-control" id="linkedin" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="Instagram" class="form-label">Link Instagram</label>
                                    <input type="text" placeholder="Instagram" name="Instagram" class="form-control" id="instagram" required>
                                </div>
                                  <div class="col-md-6 d-grid gap-2">
                                      <button type="submit" class="button-submit">Submit</button>
                                  </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection