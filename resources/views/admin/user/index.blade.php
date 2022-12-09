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
              Are you sure want to delete this user?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <a type="button" class="btn-logout" href="#">Delete</a>
            </div>
          </div>
        </div>
      </div> 
      
      <div class="card shadow mb-4 border-0" style="width: 65rem;">
        <div class="card-body">
          <div class="d-flex align-items-center mb-4">
            <img src="{{ asset('assets/img/global/logo.svg') }}" alt="Welancer">
            <span class="title-welancer ms-3">Welancer User Data</span>
          </div>
          <table class="table" id="dataTable">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                      <button class="button-edit" data-bs-toggle="modal" data-bs-target="#updateFreelancer-{{ $user->user_id }}"><i class="fas fa-pencil-alt"></i></button>
                    </td>
                  </tr>                  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          
        <!-- update -->
        @foreach ($users as $user)
         <div class="modal fade " id="updateFreelancer-{{ $user->user_id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                             <div class="card mb-4 mx-4 mt-4 border-0 shadow">
                             <img src="{{ asset('assets/img/global/cover2.svg') }}" style="border-top-left-radius: 13px; border-top-right-radius: 15px;" class="card-img-top d-none d-lg-block"  alt="Backgorund Image">
                                 <div class="card-body py-5 px-5">
                                     <div class="text-center">
                                         <h1><strong>Update Data Freelancer</strong></h1>
                                     </div>
         
                                     <form action="{{ route('admin.update', $user->user_id) }}" method="POST" class="row sign-up-form form g-3">
                                      @csrf
                                         <div class="">
                                             <label for="role" class="form-label">Current Role</label>
                                             <input type="text" class="form-control" placeholder="Name" name="name" 
                                                  id="Name" value="{{ $user->role }}" readonly>
                                         </div>
                                         <div class="">
                                             <label for="Cattegory" class="form-label">New Role</label>
                                             <select name="role" id="role" class="form-select">
                                               <option >Select New Role</option>
                                               <option value="admin">admin</option>
                                               <option value="user">user</option>
                                             </select>
                                         </div>
                                         <div class="col d-grid gap-2">
                                             <button type="submit" class="button-submit">Submit Change</button>
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
@endsection