@extends('frontend.main')
@section('content')
<div class="auth-form-container">
  <div class="form-signin">
    <div class="card">
      <div class="card-body p-4">
        <h1 class="mb-3">HELLO!</h1>

        <div class="mb-3 fw-bold">
          Don't have an account yet? <a class="color-frisbee fw-bold" href="{{ route('register') }}">
            Create your profile
          </a> to get started.
        </div>

        <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
          @csrf
          <div class="input-group mb-3">

            <input id="email" class="form-control" type="email" name="email" required autofocus
              placeholder="Email">
          </div>

          <div class="input-group mb-3">

            <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Password">
          </div>

          <div class="mb-3 fw-bold">
            Forgot your password? Reset <a class="color-frisbee fw-bold" href="{{ route('password.request') }}">
              here
            </a>.
          </div>
          <button type="submit" class="btn btn-primary w-100 px-4">
            LOG IN
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection