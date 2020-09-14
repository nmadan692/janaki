<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Janaki Education hub</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

   @include('front.layouts.header-links')
</head>
<body>
<!--[if lt IE 8]>
<![endif]-->

<!-- Header Area Start -->
@include('front.layouts.header')
<!-- Header Area End -->

@yield('content')

<!-- Footer Start -->
<footer class="footer-area">
@include('front.layouts.footer')
</footer>
@include('front.layouts.footer-links')
</body>
</html>

