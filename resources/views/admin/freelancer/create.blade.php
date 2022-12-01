@extends('layouts.sidebar')
@section('main')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-4 mx-4 mt-4 border-0 shadow">
                    <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                        <div class="card-body py-5 px-5">
                            <div class="text-center">
                                    <h1><strong>Add Data Freelancer</strong></h1>
                                </div>
    
                                <form action="{{ route('admin.dashboard.freelance.store') }}" method="POST" class="row sign-up-form form g-3" enctype="multipart/form-data">
                                  @csrf
                                    <div class="col-md-6">
                                      <label for="Name" class="form-label">Name</label>
                                      <input type="text" class="form-control" placeholder="Name" name="name" id="name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Cattegory" class="form-label">Project Cattegory</label>
                                      <select name="cattegory" id="form-select" class="form-select">
                                        <option >Select Project Cattegory</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Cartoon Animation">Cartoon Animation</option>
                                        <option value="Fotografer">Fotografer</option>
                                        <option value="Flyers & Vouchers">Flyers & Vouchers</option>
                                        <option value="Logo Design">Logo Design</option>
                                        <option value="Content Planner">Content Planner</option>
                                        <option value="Website Design">Website Design</option>
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
                                      <input type="text" placeholder="LinkedIn" name="linkedin" class="form-control" id="linkedin" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="Instagram" class="form-label">Link Instagram</label>
                                    <input type="text" placeholder="Instagram" name="instagram" class="form-control" id="instagram" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="Image" class="form-label">Photo</label>
                                    <input type="file" placeholder="Photo" name="photo" class="form-control" id="photo" required>
                                  </div>
                                  <div class="col d-grid gap-2">
                                      <button type="submit" class="button-submit">Submit</button>
                                  </div>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection