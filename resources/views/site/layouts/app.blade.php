<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anvar Asgarov- @yield('site.title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('site/cdn.jsdelivr.net/gh/iconoir-icons/iconoir%40main/css/iconoir.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    @yield('site.css')
</head>
<body>
<main class="main-homepage">
    <!-- Header -->
    <header class="header-area">
        <div class="container">
            <div class="gx-row d-flex align-items-center justify-content-between">
                <a href="{{ route('site.index') }}" class="logo">
                    <img src="{{ asset('site/assets/images/logo.svg') }}" alt="Logo">
                </a>

                <nav class="navbar">
                    <ul class="menu">
                        {{--                        <li class="active"><a href="index.html">Home</a></li>--}}
                        <li><a href="{{ route('site.about') }}">@lang('site.about')</a></li>
                        <li><a href="{{ route('site.project') }}">@lang('site.project')</a></li>
                        <li><a href="{{ route('site.services') }}">@lang('site.services')</a></li>
                    </ul>
                    <a href="{{ route('site.contact') }}" class="theme-btn">@lang('site.contact')</a>
                </nav>

                <a href="{{ route('site.contact') }}" class="theme-btn">@lang('site.contact')</a>

                <div class="show-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <!-- About -->
@yield('site.content')
<!-- Footer -->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-content text-center">
                <a href="{{ route('site.index') }}" class="logo">
                    <img src="{{ asset('site/assets/images/logo.svg') }}" alt="Logo">
                </a>
                <ul class="footer-menu">
                    <li><a href="{{ route('site.index') }}">@lang('site.index')</a></li>
                    <li><a href="{{ route('site.about') }}">@lang('site.about')</a></li>
                    <li><a href="{{ route('site.project') }}">@lang('site.project')</a></li>
                    <li><a href="{{ route('site.contact') }}">@lang('site.contact')</a></li>
                </ul>
                <p class="copyright">
                    &copy; {{--@lang('site.copyright')--}}All rights reserved by <span>Anvar Asgarov</span>
                </p>
            </div>
        </div>
    </footer>
</main>
<script src="{{ asset('site/assets/js/jquery-3.6.4.js') }}"></script>
<script src="{{ asset('site/assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('site/assets/js/aos.js') }}"></script>
<script src="{{ asset('site/assets/js/main.js') }}"></script>
</body>
</html>
