@extends('admin.admin_master')
@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h1 style="letter-spacing: 2px">Your Profile</h1>
            <div class="admin-profile-img my-5">
              <img class="img-xl rounded-circle" src="{{ (!empty($adminData->profile_photo_path))? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}">
            </div>
            <div class="admin-profile-info mb-5">
              <h2 style="letter-spacing: 2px">Admin Name: {{ $adminData->name }}</h2>
              <h3 style="letter-spacing: 2px">Admin Email: {{ $adminData->email }}</h3>
            </div>
            <a href="{{ route('admin.profile.edit') }}" type="submit" class="btn btn-danger text-uppercase">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection