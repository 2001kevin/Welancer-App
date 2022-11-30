@extends('layouts.sidebar')
@section('main')
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card mb-4 mx-4 mt-4">
                    <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                        <div class="card-body py-5 px-5">
                            <div class="text-center">
                                    <h1><strong>Add Work Data</strong></h1>
                                </div>
    
                                <form action="{{ route('admin.work.store') }}" method="POST" class="row sign-up-form form g-3" enctype="multipart/form-data">
                                  @csrf
                                    <div class="col-md-6">
                                      <label for="Name" class="form-label">Project Name</label>
                                      <input type="text" class="form-control" placeholder="Name" name="project_name" id="name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Cattegory" class="form-label">Creator</label>
                                      <select name="freelance_id" id="form-select" class="form-select">
                                        <option >Select Creator</option>
                                        @foreach ($freelancer as $freelance => $fr)
                                            <option value="{{ $fr }}">{{ $freelance }}</option>          
                                        @endforeach
                                      </select>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="Description" class="form-label">Project Description</label>
                                      <input type="text" placeholder="Project Description" name="project_description" class="form-control" id="name" required>
                                  </div>
                                  
                                  <div class="col-md-6">
                                      <label for="Email" class="form-label">Client Name</label>
                                      <input type="text" placeholder="Email" name="client_name" class="form-control" id="client_name" required>
                                  </div>
                                  <div class="col-md-6">
                                      <label for="LinkedIn" class="form-label">Client Review</label>
                                      <input type="text" placeholder="Client Review" name="client_review" class="form-control" id="client_review" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="Image" class="form-label">Photo</label>
                                    <input type="file" placeholder="Photo" name="photo" class="form-control" id="photo" required>
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