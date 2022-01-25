@extends('layouts.app')

@section('content')
<header>
    <!-- header content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container {{ Request::is('/')? 'uk-navbar-transparent':'' }}" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item">
                        <!-- logo begin -->
                        <a class="uk-logo" href="index.html">
                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/logo.png') }}" alt="logo" width="146" height="39" data-uk-img>
                        </a>
                        <!-- logo end -->
                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{ url('', []) }}">Home</a></li>
                            <li><a href="{{ url('about', []) }}">About</a></li>
                            <li><a href="{{ url('trading-plans', []) }}">Trading Plans</a></li>
                            <li><a href="{{ url('contact', []) }}">Contact Us</a></li>
                            <li><a href="{{ url('faq', []) }}">FAQ</a></li>
                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ url('login', []) }}" class="uk-button uk-button-text">Log in<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        <a href="{{ url('register', []) }}" class="uk-button uk-button-primary uk-border-rounded">Sign up<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header content end -->
</header>
<main>
    <!-- slideshow content begin -->
    @yield('main-contentn')
</main>
<footer>
    <!-- footer content begin -->
    <div class="uk-section">
        {{-- <div class="uk-container uk-margin-top">
            <div class="uk-grid">
                <div class="uk-width-2-3@m">
                    <div class="uk-child-width-1-2@s uk-child-width-1-3@m" data-uk-grid>
                        <div>
                            <h5>Instruments</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="#">Stock</a></li>
                                <li><a href="#">Indexes</a></li>
                                <li><a href="#">Currencies</a></li>
                                <li><a href="#">Metals<span class="uk-label uk-margin-small-left in-label-small">Popular</span></a></li>
                                <li><a href="#">Oil and gas</a></li>
                                <li><a href="#">Cryptocurrencies<span class="uk-label uk-margin-small-left in-label-small">Popular</span></a></li>
                            </ul>
                        </div>
                        <div>
                            <h5>Analytics</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="#">World Markets</a></li>
                                <li><a href="#">Trading Central<span class="uk-label uk-margin-small-left in-label-small">New</span></a></li>
                                <li><a href="#">Forex charts online</a></li>
                                <li><a href="#">Market calendar</a></li>
                                <li><a href="#">Central banks<span class="uk-label uk-margin-small-left in-label-small">New</span></a></li>
                            </ul>
                        </div>
                        <div class="in-margin-top-60@s">
                            <h5>Education</h5>
                            <ul class="uk-list uk-link-text">
                                <li><a href="#">Basic course</a></li>
                                <li><a href="#">Introductory webinar</a></li>
                                <li><a href="#">About academy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right@m">
                    <ul class="uk-list uk-link-text in-footer-socials">
                        <li><a href="#some-link" class="fb-bg"><i class="fab fa-facebook-square"></i>Facebook</a></li>
                        <li><a href="#some-link" class="tw-bg"><i class="fab fa-twitter"></i>Twitter</a></li>
                        <li><a href="#some-link" class="yt-bg"><i class="fab fa-youtube"></i>Youtube</a></li>
                        <li><a href="#some-link" class="ig-bg"><i class="fab fa-instagram"></i>Instagram</a></li>
                        <li><a href="#some-link" class="tl-bg"><i class="fab fa-telegram-plane"></i>Telegram</a></li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <hr class="uk-margin-large">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-middle">
                <div class="uk-width-2-3@m uk-text-small">
                    <ul class="uk-subnav uk-subnav-divider uk-visible@s" data-uk-margin>
                        <li><a href="#">Risk disclosure</a></li>
                        <li><a href="#">Privacy policy</a></li>
                        <li><a href="#">Return policy</a></li>
                        <li><a href="#">Customer Agreement</a></li>
                        <li><a href="#">AML policy</a></li>
                    </ul>
                    <p class="copyright-text">©2022 GlobalCrypto. All Rights Reserved.</p>
                </div>
                <div class="uk-width-1-3@m uk-flex uk-flex-right uk-visible@m">
                    <span class="uk-margin-right"><img src="img/in-lazy.gif" data-src="img/in-footer-mastercard.svg" alt="footer-payment" width="34" height="21" data-uk-img></span>
                    <span><img src="img/in-lazy.gif" data-src="img/in-footer-visa.svg" alt="footer-payment" width="50" height="16" data-uk-img></span>
                </div>
            </div>
        </div>
    </div>
    <!-- footer content end -->
@endsection
