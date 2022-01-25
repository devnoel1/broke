@extends('layouts.app')

@section('content')
<div class="uk-section uk-padding-remove-vertical">
    <div class="uk-container uk-container-expand">
        <div class="uk-grid" data-uk-height-viewport="expand: true">
            <div class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge" style="background-image: url({{ asset('front/img/in-signin-image.jpg') }});">
            </div>
            <div class="uk-width-expand@m uk-flex uk-flex-middle">
                <div class="uk-grid uk-flex-center">
                    <div class="uk-width-3-5@m">
                        <div class="uk-text-center in-padding-horizontal@s">
                            <!-- logo begin -->
                            <a class="uk-logo" href="index.html">
                                <img src="i{{ asset('front/mg/in-lazy.gif') }}" data-src="{{ asset('front/img/in-logo-2.svg') }}" alt="logo" width="146" height="39" data-uk-img>
                            </a>
                            <!-- logo end -->
                            @yield('auth-content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
