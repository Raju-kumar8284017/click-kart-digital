<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('meta_title', 'Click Kart Digital')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="@yield('meta_keywords', 'IT Company, Website Design, Digital Marketing')" name="keywords">
    <meta content="@yield('meta_description', 'IT Company in Patna')" name="description">

    <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-03583NRXP0"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-03583NRXP0');
  </script>

    <link rel="canonical" href="{{ url()->current() }}">

     <!-- ✅ GOOGLE VERIFICATION (HERE ONLY) -->
    <meta name="google-site-verification"
          content="fghP33scEyl8kQZNba-7KVTHClaFORIISxL1zBjg6Uk">

    {{-- bing web master --}}
    <meta name="msvalidate.01" content="F5B4C58F8D45C78CFBB47F44CCF88BDA" />

    @include('frontend.layouts.link')
    @stack('styles')
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

    @stack('scripts')
  </body>
</html>