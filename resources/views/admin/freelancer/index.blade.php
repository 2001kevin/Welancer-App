@extends('layouts.sidebar')
@section('main')
<div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="{{ asset('assets/img/global/burger.svg') }}" class="mb-2" alt="">
                        </button>
                    </div>
                    <button class="btn-notif d-block d-md-none"><img src="../assets/img/global/bell.svg" alt=""></button>
                </div>

            
            </div>
      <div class="card border-0 shadow mb-4" style="width: 65rem;">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
              <img src="{{ asset('assets/img/global/logo.svg') }}" alt="Welancer">
              <span class="title-welancer ms-3">Welancer Freelance Data</span>
              <a href="{{ route('admin.dashboard.freelance.create') }}" class="button-create ms-auto p-2 bd-highlight">Create</a>
          </div>
            <table class="table table-borderless border-0" id="dataTable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">description</th>
                <th scope="col">Cattegory</th>
                <th scope="col">experience</th>
                <th scope="col">email</th>
                <th scope="col">linkedin</th>
                <th scope="col">instagram</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($freelancers as $fr)
                <tr>
                  <th scope="row">{{ $loop->index+1 }}</th>
                  <td>{{ Str::limit($fr->name, 10) }}</td>
                  <td>{{ Str::limit($fr->description, 10) }}</td>
                  <td>{{ Str::limit($fr->cattegory, 10) }}</td>
                  <td>{{ $fr->experience }}</td>
                  <td>{{ Str::limit($fr->email, 10) }}</td>
                  <td>{{ Str::limit($fr->linkedin,10 )}}</td>
                  <td>{{ Str::limit($fr->instagram,10) }}</td>
                  <td>
                    <button class="button-edit" data-bs-toggle="modal" data-bs-target="#updateFreelancer-{{ $fr->freelance_id }}"><i class="fas fa-pencil-alt"></i></button>
                    <button class="button-delete"><i class="fas fa-times" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $fr->freelance_id }}"></i></button>
                  </td>
                </tr>                 
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      @foreach ($freelancers as $fr)
          <!-- update -->
        <div class="modal fade " id="updateFreelancer-{{ $fr->freelance_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <div class="card mb-4 mx-4 mt-4 shadow-lg border-0">
                              <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                                <div class="card-body py-5 px-5">
                                    <div class="text-center">
                                        <h1><strong>Update Data Freelancer</strong></h1>
                                    </div>      
                                    <form action="{{ route('admin.dashboard.freelance.update', $fr->freelance_id ) }}" method="POST" enctype="multipart/form-data" class="row sign-up-form form g-3">
                                      @csrf
                                        <div class="col-md-6">
                                            <label for="Name" class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name" id="Name" value="{{ $fr->name }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Cattegory" class="form-label">Project Cattegory</label>
                                          <select name="cattegory" id="cattegory" class="form-select">
                                              <option >Select Project Cattegory</option>
                                              <option {{ $fr->cattegory == 'Graphic Design' ? 'selected' : '' }} value="Graphic Design">Graphic Design</option>
                                              <option {{ $fr->cattegory == 'Cartoon Animation' ? 'selected' : '' }} value="Cartoon Animation">Cartoon Animation</option>
                                              <option {{ $fr->cattegory == 'Fotografer' ? 'selected' : '' }} value="Fotografer">Fotografer</option>
                                              <option {{ $fr->cattegory == 'Flyers & Vouchers' ? 'selected' : '' }} value="Flyers & Vouchers">Flyers & Vouchers</option>
                                              <option {{ $fr->cattegory == 'Logo Design' ? 'selected' : '' }} value="Logo Design">Logo Design</option>
                                              <option {{ $fr->cattegory == 'Content Planner' ? 'selected' : '' }} value="Content Planner">Content Planner</option>
                                              <option {{ $fr->cattegory == 'Website Design' ? 'selected' : '' }} value="Website Design">Website Design</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Description" class="form-label">Description</label>
                                            <input type="text" placeholder="Description" name="description" class="form-control" id="description" value="{{ $fr->description }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Experience" class="form-label">Experience</label>
                                            <input type="text" placeholder="Experience" name="experience" class="form-control" id="experience" value="{{ $fr->experience }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Email" class="form-label">Email</label>
                                            <input type="Email" placeholder="Email" name="email" class="form-control" id="email" value="{{ $fr->email }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="LinkedIn" class="form-label">Link LinkedIn</label>
                                            <input type="text" placeholder="LinkedIn" name="linkedin" class="form-control" id="linkedin" value="{{ $fr->linkedin }}" required>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="Instagram" class="form-label">Link Instagram</label>
                                          <input type="text" placeholder="Instagram" name="instagram" class="form-control" id="instagram" value="{{ $fr->instagram }}" required>
                                      </div>
                                      <div class="col-md-6">
                                    <label for="Image" class="form-label">Photo</label>
                                    <input type="file" placeholder="Photo" name="photo" class="form-control" id="photo" >
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
      @endforeach
      
      @foreach ($freelancers as $fr)
          <!-- Modal Delete -->
      <div class="modal fade" id="deleteModal-{{ $fr->freelance_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form action="{{ route('admin.dashboard.freelance.delete', $fr->freelance_id) }}" method="POST">
                @csrf
                <button type="submit" class="btn-logout border-0">Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div> 

      @endforeach
      
    @endsection