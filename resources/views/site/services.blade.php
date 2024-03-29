@extends('site.layouts.app')
@section('site.title')
    @lang('site.index')
@endsection
@section('site.css')
@endsection
@section('site.content')
    <section class="about-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-me-box shadow-box">
                        {{--                    <a class="overlay-link" href="{{ route('site.about') }}"></a>--}}
                        <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                        <div class="img-box">
                            <img src="{{ asset('site/assets/images/me.png') }}" alt="Anvar Asgarov">
                        </div>
                        <div class="infos">
                            <h4>A WEB Developer</h4>
                            <h1>Anvar Asgarov.</h1>
                            <p>I am a Web Developer based in san Azerbaijan.</p>
                            <a  class="about-btn">
                                <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="about-credentials-wrap">
                        <div data-aos="zoom-in">
                            <div class="banner shadow-box">
                                <div class="marquee">
                                    <div>
                                    <span>LATEST WORK AND <b>FEATURED</b>
                                        <img src="{{ asset('site/assets/images/star1.svg') }}" alt="Star"> LATEST WORK AND <b>FEATURED</b>
                                        <img src="{{ asset('site/assets/images/star1.svg') }}" alt="Star"> LATEST WORK AND <b>FEATURED</b>
                                        <img src="{{ asset('site/assets/images/star1.svg') }}" alt="Star"> LATEST WORK AND <b>FEATURED</b> LATEST WORK AND
                                        <img src="{{ asset('site/assets/images/star1.svg') }}" alt="Star"> LATEST WORK AND <b>FEATURED</b> LATEST WORK AND
                                        <img src="{{ asset('site/assets/images/star1.svg') }}" alt="Star">
                                    </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="gx-row d-flex gap-24">
                            <div data-aos="zoom-in">
                                <div class="about-crenditials-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="{{ route('site.about') }}"></a>
                                    <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                                    <img src="{{ asset('site/assets/images/sign.png') }}" alt="Sign">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>more about me</h4>
                                            <h1>Credentials</h1>
                                        </div>

                                        <a href="{{ route('site.about') }}" class="about-btn">
                                            <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div data-aos="zoom-in">
                                <div class="about-project-box info-box shadow-box h-full">
                                    <a class="overlay-link" href="{{ route('site.project') }}"></a>
                                    <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                                    <img src="{{ asset('site/assets/images/my-works.png') }}" alt="My Works">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="infos">
                                            <h4>SHOWCASE</h4>
                                            <h1>Projects</h1>
                                        </div>

                                        <a href="{{ route('site.project') }}" class="about-btn">
                                            <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-24">
                <div class="col-md-12">
                    <div class="blog-service-profile-wrap d-flex gap-24">
                        <div data-aos="zoom-in">
                            <div class="about-blog-box info-box shadow-box h-full">
                                <a href="{{ asset('site/cv/cv.pdf') }}" class="overlay-link" target="_blank"></a>
                                <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                                <img src="{{ asset('site/assets/images/gfonts.png') }}" alt="GFonts">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Blog</h4>
                                        <h1>GFonts</h1>
                                    </div>

                                    <a href="{{ asset('site/cv/cv.pdf') }}" class="about-btn">
                                        <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in" class="flex-1">
                            <div class="about-services-box info-box shadow-box h-full">
                                <a href="{{ route('site.services') }}" class="overlay-link"></a>
                                <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                                <div class="icon-boxes">
                                    <i class="iconoir-camera"></i>
                                    <i class="iconoir-design-pencil"></i>
                                    <i class="iconoir-color-filter"></i>
                                    <i class="iconoir-dev-mode-phone"></i>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>specialization</h4>
                                        <h1>Services Offering</h1>
                                    </div>

                                    <a href="{{ route('site.services') }}" class="about-btn">
                                        <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div data-aos="zoom-in">
                            <div class="about-profile-box info-box shadow-box h-full">
                                <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                                <div class="inner-profile-icons shadow-box">
                                    <a href="#">
                                        <i class="iconoir-dribbble"></i>
                                    </a>
                                    <a href="#">
                                        <i class="iconoir-twitter"></i>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="infos">
                                        <h4>Stay with me</h4>
                                        <h1>Profiles</h1>
                                    </div>

                                    <a href="{{ route('site.contact') }}" class="about-btn">
                                        <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-client-box info-box shadow-box">
                        <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                        <div class="clients d-flex align-items-start gap-24 justify-content-center">
                            <div class="client-item">
                                <h1>07</h1>
                                <p>Years <br>Experience</p>
                            </div>

                            <div class="client-item">
                                <h1>+125</h1>
                                <p>CLIENTS <br>WORLDWIDE</p>
                            </div>

                            <div class="client-item">
                                <h1>+210</h1>
                                <p>Total <br>Projects</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6" data-aos="zoom-in">

                    <div class="about-contact-box info-box shadow-box">
                        <a class="overlay-link" href="{{ route('site.contact') }}"></a>
                        <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                        <img src="{{ asset('site/assets/images/icon2.png') }}" alt="Icon" class="star-icon">
                        <h1>Let's <br>work <span>together.</span></h1>
                        <a href="#" class="about-btn">
                            <img src="{{ asset('site/assets/images/icon.svg') }}" alt="Button">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@section('site.js')
@endsection
