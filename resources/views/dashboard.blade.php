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
        <div class="card border-0">
          <h3 class=""><span class="text-danger">Hi </span><strong>{{ Auth::user()->name }}</strong> Welcome</h3>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
