<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
   @include('admin.nav')

    @include('admin.sidebar')      <!-- partial -->

    <!-- partial:partials/_navbar.html -->
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
      @yield('content')

        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
           <!-- partial -->
    </div>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
