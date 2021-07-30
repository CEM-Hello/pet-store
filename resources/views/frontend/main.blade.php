<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home - Pawsitively Pets</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- build:css -->
  
  <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
  <!-- endbuild -->
  <link rel="stylesheet" href="{{asset('frontend/assets/fonts/font-awesome5.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
</head>

<body>
  @include('frontend.body.header')
  <main role="main">
   @yield('content')
  </main>
  @include('frontend.body.footer')
  
  <!-- build:js -->
  <script src="{{asset('/frontend/assets/vendor/js/jquery.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/js/popper.js')}}"></script>
  <script src="{{asset('/frontend/assets/vendor/js/bootstrap.js')}}"></script>
  <script src="{{asset('/frontend/assets/js/util/autoPadding.js')}}"></script>
  <script src="{{asset('/frontend/assets/js/util/crossPlatform.js')}}"></script>
  <script src="{{asset('/frontend/assets/js/main.js')}}"></script>
  <!-- endbuild -->

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
   @if(Session::has('message'))
   var type = "{{ Session::get('alert-type','info') }}"
   switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
      break;
  
      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
      break;
  
      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
      break;
  
      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
      break; 
   }
   @endif 
  </script>
</body>

</html>
