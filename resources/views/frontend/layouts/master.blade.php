<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Click Kart Digital</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('frontend.layouts.link')
</head>

<body>
    <!-- Navbar Start -->
    @include('frontend.layouts.nav')
    <!-- Navbar End -->


    <!-- Content Start -->
    @yield('content')   
    <!-- Content End -->

    <!-- Footer Start -->
    @include('frontend.layouts.footer')
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript -->
    @include('frontend.layouts.scripts')

  </body>
</html>