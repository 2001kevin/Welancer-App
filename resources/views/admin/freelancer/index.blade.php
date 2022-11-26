@extends('layouts.sidebar')
@section('main')
<!-- Modal Delete -->
      <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              Are you sure want to delete this data?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a type="button" class="btn-logout" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div> 
    <!-- update -->
        <div class="modal fade " id="updateFreelancer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/img/global/logo.svg') }}" alt="Welancer">
                    <span class="title-welancer ms-3">Welancer </span>
                    
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
              </div>
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="card mb-4 mx-4 mt-4">
                            <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                                <div class="card-body py-5 px-5">
                                    <div class="text-center">
                                        <h1><strong>Update Data Freelancer</strong></h1>
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
            </div>
          </div>
        </div>

      <div class="card mt-5" style="width: 65rem;">
        <div class="card-header">
          <div class="d-flex align-items-center">
              <img src="{{ asset('assets/img/global/logo.svg') }}" alt="Welancer">
              <span class="title-welancer ms-3">Welancer Data Freelance</span>
              <a href="{{ route('admin.dashboard.freelance.create') }}" class="button-create ms-auto p-2 bd-highlight">Create</a>
          </div>
        </div>
        <div class="card-body">
          <table class="table" id="dataTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>
                  <button class="button-edit" data-bs-toggle="modal" data-bs-target="#updateFreelancer"><i class="fas fa-pencil-alt"></i></button>
                  <button class="button-delete"><i class="fas fa-times" data-bs-toggle="modal" data-bs-target="#deleteModal"></i></button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>
                  <button class="button-edit"><i class="fas fa-pencil-alt"></i></button>
                  <button class="button-delete"><i class="fas fa-times"></i></button>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td >Larry the Bird</td>
                <td>sdfs</td>
                <td>@twitter</td>
                <td>
                  <button class="button-edit"><i class="fas fa-pencil-alt"></i></button>
                  <button class="button-delete"><i class="fas fa-times"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

@endsection