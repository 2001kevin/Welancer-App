@extends('layouts.sidebar')
@section('main')

      <div class="card mt-5 shadow border-0 mb-4" style="width: 65rem;">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
              <img src="{{ asset('assets/img/global/logo.svg') }}" alt="Welancer">
              <span class="title-welancer ms-3">Welancer Work Data</span>
              <a href="{{ route('admin.work.create') }}" class="button-create ms-auto p-2 bd-highlight">Create</a>
          </div>
          <table class="table" id="dataTable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Project Name</th>
                <th scope="col">Creator</th>
                <th scope="col">Project Description</th>
                <th scope="col">Client Name</th>
                <th scope="col">Client Review</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($works as $work)
                <tr>
                  <th scope="row">{{ $loop->index+1 }}</th>
                  <td>{{ $work->project_name }}</td>
                  <td>{{ $work->freelance->name }}</td>
                  <td>{{ Str::limit($work->project_description, 10) }}</td>
                  <td>{{ $work->client_name }}</td>
                  <td>{{ Str::limit($work->client_review, 10) }}</td>
                  <td>
                    <button class="button-edit" data-bs-toggle="modal" data-bs-target="#updateFreelancer-{{ $work->work_id }}"><i class="fas fa-pencil-alt"></i></button>
                    <button class="button-delete"><i class="fas fa-times" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $work->work_id }}"></i></button>
                  </td>
                </tr>       
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    @foreach ($works as $work)
          <!-- update -->
        <div class="modal fade " id="updateFreelancer-{{ $work->work_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                                    <form action="{{ route('admin.work.update', $work->work_id) }}" method="POST" class="row sign-up-form form g-3" enctype="multipart/form-data">
                                        @csrf
                                          <div class="col-md-6">
                                            <label for="Name" class="form-label">Project Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="project_name" id="name" value="{{ $work->project_name }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Cattegory" class="form-label">Creator</label>
                                            <select name="freelance_id" id="form-select" class="form-select">
                                              <option >Select Creator</option>
                                              @foreach ($freelancer as $freelance => $fr)
                                                  <option {{ $work->freelance_id == $fr ? 'selected' : '' }} value="{{ $fr }}">{{ $freelance }}</option>          
                                              @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="Description" class="form-label">Project Description</label>
                                            <input type="text" placeholder="Project Description" name="project_description" class="form-control" value="{{ $work->project_description }}" id="name" required>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="Email" class="form-label">Client Name</label>
                                            <input type="text" placeholder="Email" name="client_name" class="form-control" id="client_name" value="{{ $work->client_name }}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="LinkedIn" class="form-label">Client Review</label>
                                            <input type="text" placeholder="Client Review" name="client_review" class="form-control" value="{{ $work->client_review }}" id="client_review" required>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="Image" class="form-label">Photo</label>
                                          <input type="file" placeholder="Photo" name="photo" class="form-control" id="photo">
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
    @foreach ($works as $work)
        <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal-{{ $work->work_id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <form action="{{ route('admin.work.delete', $work->work_id) }}" method="post">
                @csrf
                <button type="submit" class="btn-logout border-0" >Delete</button>
              </form>
            </div>
          </div>
        </div>
      </div> 
    @endforeach
@endsection