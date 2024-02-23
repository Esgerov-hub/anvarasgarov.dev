@extends('site.layouts.app')
@section('site.title')
    @lang('site.index')
@endsection
@section('site.css')
@endsection
@section('site.content')
    <section class="about-area">
        <div class="container">
            <div class="d-flex about-me-wrap align-items-start gap-24">
                <div data-aos="zoom-in">
                    <div class="about-image-box shadow-box">
                        <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                        <div class="image-inner">
                            <img src="{{ asset('site/assets/images/me2.png') }}" alt="About Me">
                        </div>
                    </div>
                </div>

                <div class="about-details" data-aos="zoom-in">
                    <h1 class="section-heading" data-aos="fade-up"><img src="{{ asset('site/assets/images/star-2.png') }}" alt="Star"> Self-summary <img src="{{ asset('site/assets/images/star-2.png') }}" alt="Star"></h1>
                    <div class="about-details-inner shadow-box">
                        <img src="{{ asset('site/assets/images/icon2.png') }}" alt="Star">
                        <h1>David Henderson</h1>
                        <p>I am a San francisco-based product designer with a focus on web design, illustration, a visual development. I have a diverse range of experience having worked across various fields and industries.</p>
                    </div>

                </div>
            </div>

            <div class="row mt-24">
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-edc-exp about-experience shadow-box">
                        <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                        <h3>EXPERIENCE</h3>

                        <ul>
                            <li>
                                <p class="date">2007 - 2017</p>
                                <h2>Framer Designer & Developer</h2>
                                <p class="type">Bluebase Designs</p>
                            </li>
                            <li>
                                <p class="date">2017 - 2023</p>
                                <h2>Front-End Developer</h2>
                                <p class="type">Larsen & Toubro</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in">
                    <div class="about-edc-exp about-education shadow-box">
                        <img src="{{ asset('site/assets/images/bg1.png') }}" alt="BG" class="bg-img">
                        <h3>EDUCATION</h3>

                        <ul>
                            <li>
                                <p class="date">2004 - 2007</p>
                                <h2>Bachelor Degree in Psychology</h2>
                                <p class="type">University of California</p>
                            </li>
                            <li>
                                <p class="date">2007 - 2009</p>
                                <h2>Master Degree in Designing</h2>
                                <p class="type">University of Texas</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
@section('site.js')
@endsection
