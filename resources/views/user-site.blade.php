<!DOCTYPE html>
<html lang="en">
{{-- Head --}}
@include('user-site.common.head')

<body>
{{-- sweet alert --}}
@include('sweetalert::alert')

  <!-- ======= Header ======= -->
@include('user-site.common.header')
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  @include('user-site.common.sitebar')
  <!-- End Sidebar-->

  <!-- Strat Page Title -->
@yield('user-site')
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user-site.common.footer')
  <!-- End Footer -->

  <!-- Vendor JS Files -->
 @include('user-site.common.javascript')

</body>

</html>