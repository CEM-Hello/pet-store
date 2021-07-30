@extends('frontend.main')
@section('content')


<div class="user-dash-content h-section-1">
  <div class="container">
    <div class="row">
      <div class="col-md-2">
        <img class="card-img-top my-4" style="border-radius: 50%" src="{{ (!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg') }}" height: 100% width: 100%>
        <ul class="list-group list-group-flush">
          <a href="{{ route('dashboard') }}" class="btn btn-primary btn-block mb-2">Home</a>
          <a href="{{ route('user.profile') }}" class="btn btn-primary btn-block mb-2">Profile Update</a>
          <a href="{{ route('change.password') }}" class="btn btn-primary btn-block mb-2">Change Password</a>
          <a href="{{ route('user.logout') }}" class="btn btn-danger btn-block">Log Out</a>
        </ul>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-6">
        <div class="card border-0 py-4">
          <h3 class="px-3"><span class="text-danger">Hi </span><strong>{{ Auth::user()->name }}</strong> Update Your Password</h3>
          <div class="card-body">
            <form method="POST" action="{{ route('user.password.update') }}">
              @csrf
              <div class="mb-3">
                <label for="current_password" class="fw-bold">Current Password</label>
                <input id="current_password" type="password" class="form-control" name="oldpassword" required>
              </div>
    
              <div class="mb-3">
                <label for="password" class="fw-bold">New Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
              </div>

              <div class="mb-3">
                <label for="password_confirmation" class="fw-bold">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
              </div>

              <button type="submit" class="btn btn-primary px-4">
                Update Password
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
