@extends('layouts.navbar')
@section('main')
<div class="container-fluid jumbotron-find-freelance">
	<br><br><br><br>
    <div class="container mt-4">
        <div class="row d-flex justify-content-between">
            <div class="col-lg-8 col-sm-12 freelancer-title">
                <h1 style="color: black">Find <span style="color: #4640de">Work</span></h1>
                <h2 class="jumbotron-text">Your Worker</h2>
                <form action="{{ route('find.works') }}" method="GET">
					<div
						class="row bg-white d-flex align-items-center rounded justify-content-between shadow-sm p-2 mt-4 mb-3 ms-1"
					>
					
							<input
								class="col-9 border-0 jumbotron-input fs-5"
								type="text"
								placeholder="Search Work"
								name="keyword"
							/>
							<button
								type="submit"
								class="btn btn-primary col-3 rounded-circle search-button"
							>
								<img
									src="{{ asset('assets/img/find-freelancer/image 5.svg') }}"
									alt=""
								/>
								
							</button>
					</div>
                </form>
            </div>
            <div class="col-lg-4 freelancer-cover">
                <img src="{{ asset('assets/img/find-freelancer/Other 13.svg') }}" alt="" />
            </div>
        </div>
    </div>
</div>
<!-- End of Jumbotron Find Freelance -->
 @foreach ($works as $work)
	 <article class="postcard light blue mt-5">
			<a class="postcard__img_link" href="#">
				<img class="postcard__img" src="./photos/{{ $work->photo }}" alt="Image Title" />
			</a>
			<div class="postcard__text t-dark">
				<h1 class="postcard__title blue"><a href="#">{{ $work->project_name }}</a></h1>
				<div class="postcard__subtitle small">
					<time>
						<i class="fas fa-calendar-alt mr-2 me-2"></i>{{ $work->created_at }}
					</time>
				</div>
				<div class="postcard__bar"></div>
				<h4>Project Description</h4>
				<div class="postcard__preview-txt">{{ $work->project_description }}</div>
				<h4 class="mt-3">Client Review</h4>
				<div class="postcard__preview-txt">{{ $work->client_review }}</div>
				<ul class="postcard__tagbox">
					<li class="tag__item"><i class="fa-solid fa-pen me-2"></i>{{ $work->client_name }}</li>
				</ul>
			</div>
		</article> 
 @endforeach
@endsection