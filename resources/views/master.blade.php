<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') || {{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Fonts -->
    <link href="{{ asset('fonts/lato/lato.css') }}" rel="stylesheet">
    <!-- CSS -->
    <!-- Bootstrap CSS

    ============================================ 
    Custom Css-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!--=========================================== -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Icon Font CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <!-- Plugins CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
    <!-- ShortCodes CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/shortcode/shortcodes.css') }}">
    <!-- Style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- Responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="{{ asset('css/style-customizer.css') }}">
    <link href="#" data-style="styles" rel="stylesheet">
    @yield('stylesheet')
    <!-- Modernizer JS
    ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css" />
   

</head>
<body>

<!-- Body main wrapper start -->
<div class="wrapper fix">
<!-- Header 1
============================================ -->
@include('layouts.header')
<!-- Hero Slide Area
============================================ -->
@yield('slider')

@yield('content')

<!-- Footer Area
============================================ -->
@include('layouts.footer')

</div>
<!-- Body main wrapper end -->



<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
<!-- Bootstrap JS
============================================ -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Plugins JS
============================================ -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="{{ asset('js/ajax-mail.js') }}"></script>
<!-- WOW JS
============================================ -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- Style Customizer JS
============================================ -->
<script src="{{ asset('js/style-customizer.js') }}"></script>
<!-- Main JS
============================================ -->
<script src="{{ asset('js/main.js') }}"></script>
<script>
    $('html').removeAttr('class');

    $('#navbarDropdown').on('click', function(event) {
        $('#menuItem').toggleClass('active');
    });
</script>
@yield('script')
</body>
</html>
