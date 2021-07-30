<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pawsitively Pets Admin Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <div class="text-center">
                  <img src="{{asset('assets/images/web-logo.svg')}}" alt="" class="w-50 pb-5">
                  <h1 class="card-title mb-3 text-uppercase">Employee Login</h1>
                </div>
                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label>Email *</label>
                    <input id="email" type="email" class="form-control p_input" name="email" :value="old('email')" required autofocus>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input id="password" type="password" class="form-control p_input" name="password" required autocomplete="current-password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    
                    <a href="{{ route('password.request') }}" class="forgot-pass text-danger">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-danger btn-block enter-btn">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/misc.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
  </body>
</html>