<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="logo/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--font-awesome-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('defaults/toastr/toastr.min.css') }}">
    <!--animate.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/simple-lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
    <!--style.css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
    <!--responsive.css-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
</head>

<body>
    @include('forntend.layouts.include.header')
    @yield('content')
    @include('forntend.layouts.include.footer')
    <!--jquery.min.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!--bootstrap.min.js-->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!--main.js-->
    <!--owl.carousel.js-->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/particles.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/particles.app.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/simple-lightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{ asset('defaults/toastr/toastr.min.js') }}"></script>
    <!-- Toastr -->
    @if (Session::has('success'))
        <script>
            toastr.success("{{ Session::get('success') }}");
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            toastr.error("{{ Session::get('error') }}");
        </script>
    @endif
    @if (Session::has('info'))
        <script>
            toastr.info("{{ Session::get('info') }}");
        </script>
    @endif

    <script>
        $(document).ready(function() {
            /*mobile menu*/
            $('.menu-icon').on('click', function() {
                console.log("Hi");
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });
            $('.mm-ci').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });


        });
    </script>
    <script>
        /*wow.js*/
        new WOW().init();
    </script>

    <script>
        /* nav*/
        $(window).scroll(function() {
            $('header').toggleClass('scrolled', $(this).scrollTop() > 70);
        });

        // scrollToTop
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '<i class="fa fa-angle-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    </script>

    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this).prev(".menu-link").find(".fa-minus").addClass("fa-minus").removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
            });
            /*mobile-menu-click*/
            $('.mmenu-btn').click(function() {
                $(this).toggleClass("menu-link-active");

            });
        });
    </script>
    @stack('scripts')
</body>

</html>
