<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/font-flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/dripicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/player.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/responsive.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/icon.png">
    <style>
        *:not(i) {
            font-family: 'Nunito', sans-serif !important;
        }
    </style>
</head>
<body>
<div id="loading-overlay" class="loading-overlay">
    <div class="container">
        <div class="row">
            <span class="spinner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </span>
        </div>
    </div>
</div>
@include('partials.header')
@include('partials.offcanvas')
<main>
    <div class="modal fade bs-example-modal-lg search-bg popup1" id="modalSearch" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content search-popup">
                <div class="text-center">
                    <a href="#" class="close2" data-dismiss="modal" aria-label="Close">×</a>
                </div>
                <div class="row search-outer">
                    <div class="col-md-11">
                        <input type="text" placeholder="
                        @if(\Illuminate\Support\Facades\Lang::has('header.search'))
                        {{ __('header.search') }}
                        @else
                        @endif"/>
                    </div>
                    <div class="col-md-1 text-right">
                        <a href="#">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
</main>
@include('partials.footer')
<script src="{{ asset('/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/assets/js/slick.min.js') }}"></script>
<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.meanmenu.min.js') }}"></script>
<script src="{{ asset('/assets/js/player.min.js') }}"></script>
<script src="{{ asset('/assets/js/player-init.js') }}"></script>
<script src="{{ asset('/assets/js/main.js') }}"></script>
<script src="{{ asset('/assets/js/timeCount.js') }}"></script>
@yield('js')

@if(session()->has('success'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire(
            '{{ __("verify.success") }}',
            '{{ session()->get("success") }}',
            'success'
        )
    </script>
@endif
@if(session()->has('error'))
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire(
            '{{ __("verify.error") }}',
            '{{ session()->get("error") }}',
            'error'
        )
    </script>
@endif
<script>
    $('body').click();

    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = (docViewTop + $(window).height());

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return (docViewBottom * 0.8 > elemTop) && (elemBottom >= docViewTop)
    }

    document.addEventListener('DOMContentLoaded', function () {
        var videoSection = document.getElementById('videoSection');
        var videoPlayer = document.getElementById('videoPlayer');
        var isVideoPlaying = false;

        // Intersection Observer options
        var options = {
            threshold: 0 // Trigger when any part of the video section is in view
        };

        // Callback function to handle intersection changes
        var callback = function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    if (!isVideoPlaying) {
                        videoPlayer.play();
                        isVideoPlaying = true;
                    }
                } else {
                    if (isVideoPlaying) {
                        videoPlayer.pause();
                        isVideoPlaying = false;
                    }
                }
            });
        };

        var observer = new IntersectionObserver(callback, options);
        observer.observe(videoSection);
    });
</script>
</body>
</html>
