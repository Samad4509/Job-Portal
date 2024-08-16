@extends('layouts.account')

@section('content')
<div class="account-layout border">
  <div class="account-hdr bg-primary text-white border">
    Apply for job
  </div>
  <div class="account-bdy p-3">
    <div class="row">
      <div class="col-sm-12 col-md-12 mb-5">
        <div class="card">
          <div class="card-header">
            My Profile
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-3">
                <img src="{{asset('images/user-profile.png')}}" class="img-fluid rounded-circle" alt="">
              </div>
              <div class="col-9">
                <h6 class="text-info text-capitalize">{{auth()->user()->name}}</h6>
                <p class="my-2"><i class="fas fa-envelope"></i> Email: {{auth()->user()->email}}</p>
                <a href="{{route('account.index')}}">View My profile</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-white">
              Key Job Requirements
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-3 d-flex align-items-center border p-3">
                      <img src="{{ asset($company->logo) }}" class="img-fluid" alt="Company Logo">
                  </div>
                  <div class="col-9">
                      <h2 class="text-info text-capitalize mb-0">{{ $post->job_title }}</h2>
                      <p class="text-uppercase mb-1">
                          <a href="{{ route('account.employer', ['employer' => $company]) }}" class="text-decoration-none">{{ $company->title }}</a>
                      </p>
                      <p class="mb-1"><i class="fas fa-map-marker-alt"></i> Location: {{ $post->job_location }}</p>
                      <p class="text-danger small mb-0">
                          Deadline: {{ date('l, jS \of F Y', $post->deadlineTimestamp()) }} ({{ date('d', $post->remainingDays()) }} days from now)
                      </p>
                  </div>
              </div>
              <hr class="my-3">
              <div class="mb-3 d-flex justify-content-between align-items-center">
                  <div class="my-2">
                      <a href="{{ route('post.show', ['job' => $post]) }}" class="btn btn-outline-secondary"><i class="fas fa-briefcase"></i> View Job</a>
                      <a href="{{ route('savedJob.store', ['id' => $post->id]) }}" class="btn btn-outline-secondary"><i class="fas fa-share-square"></i> Save Job</a>
                  </div>
                  <div>
                      <a href="{{ URL::previous() }}" class="btn btn-outline-danger">Cancel</a>
                  </div>
              </div>
              <form action="{{ route('account.applyJob') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="mb-3">
                      <label for="cv" class="form-label">Upload CV</label>
                      <div class="input-group">
                          <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                          <button type="submit" class="btn btn-primary">Send Application <i class="fas fa-chevron-right"></i></button>
                      </div>
                  </div>
                  <input type="hidden" name="post_id" value="{{ $post->id }}">
              </form>
          </div>
      </div>
      
      </div>
    </div>
  </div>
</div>
@endsection