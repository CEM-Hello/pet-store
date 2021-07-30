@extends('admin.admin_master')
@section('content')
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h1 style="letter-spacing: 2px" class="mb-5">Edit Profile</h1>
            <form class="forms-sample" method="POST" action="{{ route('admin.profile.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="inputName">Admin User Name</label>
                <input type="text" class="form-control" name="name" placeholder="User Name" value="{{ $editData->name }}">
              </div>
              <div class="form-group">
                <label for="inputEmail1">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $editData->email }}">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Profile Image</label>
                    <input type="file" name="profile_photo_path" class="form-control" id="image">
                  </div>
                </div>
                <div class="col-md-6">
                  <img id="showImage" src="{{ (!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.jpg') }}" alt="" style="width: 100px; height: 100px;">
                </div>
              </div>
              <button type="submit" class="btn btn-danger mr-2" value="Update">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  $(document).ready(function() {
    $('#image').change(function(e) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#showImage').attr('src',e.target.result);
      }
      reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>
@endsection