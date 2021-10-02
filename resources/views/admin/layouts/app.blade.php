<!DOCTYPE html>
<html>
<head>
  <title>Administrator Dashboard</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  <link href="{{ asset('admin-assets/assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('admin-assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link href="{{ asset('admin-assets/css/app.css') }}" rel="stylesheet" />
  <!-- end common css -->

  @stack('style')
  @livewireStyles
  @cloudinaryJS
</head>
<body data-base-url="{{url('/')}}" class="sidebar-dark sidebar-open">
  <script src="{{ asset('admin-assets/assets/js/spinner.js') }}"></script>

  <div class="main-wrapper" id="app">
    @include('admin.layouts.sidebar')
    <div class="page-wrapper">
      @include('admin.layouts.header')
      <div class="page-content">
        @include('admin.partials.sessionmessage')
        @yield('content')
      </div>
      @include('admin.layouts.footer')
    </div>
  </div>

    <!-- base js -->
    <script src="{{ asset('admin-assets/js/app.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{ asset('admin-assets/assets/js/template.js') }}"></script>
    <!-- end common js -->

    @stack('custom-scripts')
    @livewireScripts
</body>
</html>
