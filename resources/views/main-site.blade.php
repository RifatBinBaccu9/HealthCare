<!DOCTYPE html>
<html lang="en">

<!-- Head section start -->
 @include('main-site.common.head')
<!-- Head section end -->

<body>
    {{-- sweet alert --}}
    @include('sweetalert::alert')
    
    <!-- Topbar Start -->
   @include('main-site.common.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('main-site.common.navbar')
    <!-- Navbar End -->


   <!-- mane content strat -->
    @yield('main-site')
   <!-- mane content end -->
    

    <!-- Footer Start -->
    @include('main-site.common.footer')
    <!-- Footer End -->


    <!-- JavaScript Libraries -->
    @include('main-site.common.javaScript')
</body>

</html>