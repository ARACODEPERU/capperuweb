
<!DOCTYPE html>
<html class="" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CAP PERU || Sitio Web</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/capperu/assets/img/fevicon-cap.png') }}">

    <!-- CSS
    ========================= -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/bootstrap.min.css') }}">

    <!-- Fonts CSS -->
    <!-- <link rel="stylesheet" href="assets/css/material-design-iconic-font.min.css"> -->

    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/plugins.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('themes/webpage/assets/css/style.css') }}">

    <!-- Modernizer JS -->
    <script src="{{ asset('themes/webpage/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
</head>

<body>

    @yield('content')
    <x-floating-bubble />
    <!-- JS
============================================ -->

    <!-- jquery -->
    <script src="{{ asset('themes/webpage/assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('themes/webpage/assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
    <!-- Popper JS -->
    <script src="{{ asset('themes/webpage/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('themes/webpage/assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('themes/webpage/assets/js/plugins.js') }}"></script>
    <!-- Ajax Mail -->
    <script src="{{ asset('themes/webpage/assets/js/ajax-mail.js') }}"></script>
    <!-- Main JS -->
    <script src="{{ asset('themes/webpage/assets/js/main.js') }}"></script>


</body>

</html>
