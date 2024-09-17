<!DOCTYPE html>
<html lang="en">
{{-- Head --}}
@include('admin-site.common.head')

<body>
  @include('sweetalert::alert')
  <!-- ======= Header ======= -->
@include('admin-site.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('admin-site.common.sitebar')
  <!-- End Sidebar-->

  <!-- Strat Page Title -->
@yield('admin-site')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('admin-site.common.footer')
  <!-- End Footer -->

  <!-- Vendor JS Files -->
 @include('admin-site.common.javascript')

</body>

</html>