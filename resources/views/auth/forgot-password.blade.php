@extends('frontend.main')
@section('content')
<div class="auth-form-container">
  <div class="form-signin">
    <div class="card">
      <div class="card-body p-4">
        <h2 class="mb-3">Password Reset</h2>
        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
        <form method="POST" action="{{ route('password.email') }}">
          @csrf

          <div class="input-group mb-3">

            <input id="email" name="email" type="email" class="form-control" required autofocus
              placeholder="email" value="">
          </div>
          <button type="submit" class="btn btn-primary w-100 px-4">
            RESET PASSWORD
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection