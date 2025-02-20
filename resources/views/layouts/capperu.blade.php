<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CAP | Sitio Web</title>
    <!--fivicon icon-->
    <link rel="icon" href="{{ asset('themes/capperu/assets/img/fevicon-cap.png') }}">
    <!--fivicon icon
    <link rel="icon" href="assets/img/fevicon.png">
    -->

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     --}}
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/bootstrap.min.css') }}"> 
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/magnific.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/slick-slide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/aracode.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/capperu/assets/css/responsive.css') }}">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

</head>

<body class='sc5'>

    <!-- COOKIES -->

<div id="cookie-consent" class="cookiesMessage_cookiesDisclaimer__pF8_x">
    <h5 class="cookiesMessage_cookiesDisclaimerHeader__y_YCo">USO DE COOKIES</h5>
    <p class="cookiesMessage_cookiesDisclaimerBody__nxps1">Usamos cookies propias y de terceros para funciones esenciales
        de este sitio y mejorar tu experiencia al navegar por <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>.
        Revisa nuestro<!-- --> <a target="_blank" href="{{ route('cookies_policy') }}">Aviso de Cookies</a> para obtener
        más información al respecto.</p>
    <div class="cookiesMessage_cookiesDisclaimerButton__NwcdV">
        <button id="accept-cookies" class="cookiesMessage_cookiesDisclaimerButtonAccept__u3I5b"
            type="button">Aceptar</button>
    </div>
</div>
<style>
    .cookiesMessage_cookiesDisclaimer__pF8_x {
        display: flex;
        flex-direction: column;
        gap: 18px;
        font-family: Barlow, sans-serif;
        background-color: hsla(0, 0%, 100%, .9);
        position: fixed;
        color: #464646;
        bottom: 0;
        width: 100%;
        padding: 1rem 6rem;
        z-index: 999999;
        box-sizing: border-box;
    }
</style>

<script>
    document.getElementById('cookie-consent').style.display = "none";
    document.addEventListener('DOMContentLoaded', function() {
        const cookieConsent = document.getElementById('cookie-consent');
        const acceptButton = document.getElementById('accept-cookies');
        var consent = localStorage.getItem('cookieConsent');
        if (!(consent === 'true')) {
            cookieConsent.style.display = "block";
        }

        function showCookieConsent() {
            if (localStorage.getItem('cookieConsent') !== 'true') {
                cookieConsent.classList.remove('hidden');
                setTimeout(() => {
                    cookieConsent.style.transform = 'translateY(0)';
                    cookieConsent.style.opacity = '1';
                }, 100);
            }
        }

        function hideCookieConsent() {
            cookieConsent.style.transform = 'translateY(100%)';
            cookieConsent.style.display = 'none';
            setTimeout(() => {
                cookieConsent.classList.add('hidden');
            }, 300);
        }

        function acceptCookies() {
            localStorage.setItem('cookieConsent', 'true');
            hideCookieConsent();
        }

        acceptButton.addEventListener('click', acceptCookies);

        showCookieConsent();
    });
</script>

<!-- Fin de Cookies -->

    <script src="{{ asset('themes/capperu/assets/js/capperu-carrito.js') }}"></script>
    @yield('content')

    <!-- back-to-top end -->
    {{-- <div class="back-to-top">
        <span class="back-top"><i class="fas fa-angle-double-up"></i></span>
    </div> --}}

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- all plugins here -->
    <script src="{{ asset('themes/capperu/assets/js/jquery.3.6.min.js') }}"></script>
    {{-- <script src="{{ asset('themes/capperu/assets/js/bootstrap.min.js') }}"></script> --}}
    <script src="{{ asset('themes/capperu/assets/js/imageloded.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/counterup.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/waypoint.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/magnific.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/ripple.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/owl.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/slick-slider.min.js') }}"></script>
    <script src="{{ asset('themes/capperu/assets/js/wow.min.js') }}"></script>

    <!-- main js  -->
    <script src="{{ asset('themes/capperu/assets/js/main.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script> --}}
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    
    <!--script para javascript para que carga el modal -->
    <script>
            
        $(document).ready(function()
        {
            $("#Modal").modal("show");
        });
    </script> 

</body>

</html>
