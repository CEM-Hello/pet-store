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
            <h1 style="letter-spacing: 2px" class="mb-5">Update Password</h1>
            <form class="forms-sample" method="POST" action="{{ route('update.change.password') }}">
              @csrf
              <div class="form-group">
                <label for="current_password">Current Password</label>
                <input id="current_password" type="password" class="form-control" name="oldpassword" required>
              </div>
              <div class="form-group">
                <label for="password">New Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
              </div>
              <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
              </div>
              <button type="submit" class="btn btn-danger mr-2" value="Update">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection