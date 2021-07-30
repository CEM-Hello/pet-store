@extends('frontend.main')
@section('content')
<div class="auth-form-container">
  <div class="form-signin">
    <div class="card">
      <div class="card-body p-4">
        <h1 class="mb-3">Register</h1>

        <form method="POST" action="{{ route('register') }}">
        @csrf
          <div class="mb-3">
            <label for="name" class="form-label fw-bold">Name</label>
            <input class="form-control" id="name"  type="text" name="name" required autofocus autocomplete="name" placeholder="John Doe">
           
          </div>

          <div class="mb-3">
            <label for="email" class="form-label fw-bold">E-Mail Address</label>
            <input class="form-control" id="email" type="email" name="email" required placeholder="john@gmail.com">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label fw-bold">Password</label>
            <input class="form-control" id="password" type="password" name="password" required autocomplete="new-password">
          </div>

          <div class="mb-3">
            <label for="password_confirmation" class="form-label fw-bold">Confirm Password</label>
            <input class="form-control" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password">
          </div>
          <button type="submit" class="btn btn-primary w-100 px-4 mb-4">
            REGISTER
          </button>
        </form>
        <div class="fw-bold">
          Already have an account? Login <a class="color-frisbee fw-bold" href="{{ route('login') }}">
            here
          </a>.
        </div>
      </div>
    </div>
  </div>
</div>

@endsection