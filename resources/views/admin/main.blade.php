
  @include('admin.head')
  <body>
    <div class="container-scroller">
    @include('admin.header')
      <div class="container-fluid page-body-wrapper">
        @include('admin.menu')
        <div class="main-panel">
        @yield('content')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.footer')
