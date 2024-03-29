@extends('layouts.front')


@section('main-contentn')
<div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
    <div id="particles-js" class="uk-light in-slideshow uk-background-contain" data-src="{{ asset('front/img/in-equity-decor-1.svg') }}" data-uk-img data-uk-slideshow>
        <hr>
        <ul class="uk-slideshow-items">
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text">
                            <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span class="uk-label uk-label-success in-label-small">New</span>Trade the markets directly with leading trading platforms.</p>
                            <h1 class="uk-heading-small">The world's most <span class="in-highlight">powerful</span> trade app.</h1>
                            <p class="uk-text-lead uk-visible@m">Get the most accurate market data, alerts, conversions, tools and more — all within the same app.</p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s" data-uk-grid data-market="TSLA,GOOGL,AAPL">
                                <div>
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-symbol-tesla.svg') }}" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">TSLA<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-symbol-google.svg') }}" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">GOOGL<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ ("front/img/in-symbol-apple.svg") }}" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">AAPL<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-equity-slide-1.png') }}" alt="image-slide" width="652" height="746" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
            <li class="uk-flex uk-flex-middle">
                <div class="uk-container">
                    <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                        <div class="uk-width-1-2@s in-slide-text">
                            <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span class="uk-label uk-label-success in-label-small">New</span>Trade the markets directly with leading trading platforms.</p>
                            <h1 class="uk-heading-small">Reach out to new trading <span class="in-highlight">experience</span>.</h1>
                            <p class="uk-text-lead uk-visible@m">Bring your trading ventures go around the world, way beyond the space of your trading account.</p>
                            <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s" data-uk-grid data-market="MCD,AMZN,MSFT">
                                <div>
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-symbol-mcdonalds.svg') }}" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">MCD<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-symbol-amazon.svg') }}" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">AMZN<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-visible@m">
                                    <div class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                        <div class="in-symbol-logo">
                                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-symbol-microsoft.svg') }}" alt="ticker" width="28" height="28" data-uk-img>
                                        </div>
                                        <div class="in-price">
                                            <h6 class="uk-margin-remove">MSFT<span class="uk-text-small"></span></h6>
                                            <p class="uk-margin-remove"><span class="fas fa-spinner fa-xs"></span>loading...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="in-slide-img">
                            <img src="{{ asset('front/img/in-lazy.gif') }}" data-src="{{ asset('front/img/in-equity-slide-2.png') }}" alt="image-slide" width="652" height="746" data-uk-img>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="uk-container">
            <div class="uk-position-relative" data-uk-grid>
                <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
            </div>
        </div>
    </div>
</div>
<!-- slideshow content end -->
<!-- section content begin -->
<div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h4>Popular products</h4>
            </div>
        </div>
        <div class="uk-grid-match uk-grid-medium uk-child-width-1-4@m uk-child-width-1-2@s uk-margin-bottom" data-uk-grid>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name red">EQ</span>
                        <h5 class="uk-margin-remove">Stocks</h5>
                    </div>
                    <p>Access 19,000+ stocks across core and emerging markets on 40+ exchanges worldwide.</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name green">LQ</span>
                        <h5 class="uk-margin-remove">Listed Options</h5>
                    </div>
                    <p>Access 1,200+ listed options across equities, indices, interest rates, energy, metals and more.</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name blue">FU</span>
                        <h5 class="uk-margin-remove">Futures</h5>
                    </div>
                    <p>Access 300+ futures covering equity indices, energy, metals, agriculture, rates and more.</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
            <div>
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded">
                    <div class="uk-flex uk-flex-middle">
                        <span class="in-product-name"><i class="fas fa-ellipsis-h fa-xs"></i></span>
                        <h5 class="uk-margin-remove">More products</h5>
                    </div>
                    <p>Explore the full range of cash and leveraged products</p>
                    <a href="#" class="uk-button uk-button-text uk-float-right uk-position-bottom-right">Explore<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-2 uk-background-contain uk-background-center" data-src="{{ asset('front/img/in-equity-2-bg.png') }}" data-uk-img>
    <div class="uk-container uk-margin-top">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <span class="uk-label uk-label-warning">Fast execution, low latency<i class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></span>
                <h1 class="uk-margin-top">Your premium choice for trading currencies & stocks online</h1>
                <p class="uk-text-lead uk-margin-medium-top">Harness the power of technology to make a quicker, smarter and more precise decision on CFD currency pairs, stocks, commodities and more</p>
            </div>
            <div class="uk-width-3-4@m uk-margin-medium-top">
                <img class="uk-align-center" src="img/in-lazy.gif" data-src="{{ asset('front/img/in-equity-2-img.png') }}" alt="image" width="758" height="334" data-uk-img>
            </div>
            <div class="uk-width-2xlarge@m uk-margin-medium-top">
                <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center in-feature-box" data-uk-grid>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="img/in-lazy.gif" data-src="{{ asset('front/img/in-equity-2-icon-1.svg') }}" alt="icon-1" width="35" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Trading calculators</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="img/in-lazy.gif" data-src="{{ asset('front/img/in-equity-2-icon-2.svg') }}" alt="icon-2" width="38" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Market analysis</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="img/in-lazy.gif" data-src="{{ asset('front/img/in-equity-2-icon-3.svg') }}" alt="icon-3" width="42" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Market reviews</p>
                    </a>
                    <a href="#">
                        <span class="in-icon-wrap">
                            <img src="img/in-lazy.gif" data-src="{{ asset('front/img/in-equity-2-icon-4.svg') }}" alt="icon-4" width="42" height="42" data-uk-img>
                        </span>
                        <p class="uk-margin-top">Trading academy</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-3 in-offset-top-20">
    <div class="uk-container uk-margin-large-bottom">
        <div class="uk-grid uk-flex uk-flex-middle">
            <div class="uk-width-expand@m">
                <h1 class="uk-margin-small-bottom">Tight spreads and <span class="in-highlight">ultra-fast</span> execution</h1>
                <h3 class="uk-margin-top uk-text-warning">Best market prices available so you can receive excellent conditions.</h3>
                <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                <ul class="uk-list in-list-check">
                    <li>Negative balance protection</li>
                    <li>Segregated and supervised client funds</li>
                    <li>Instant deposit & fast withdrawal</li>
                </ul>
            </div>
            <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
                    <div id="tradingview-widget"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section in-equity-4">
    <div class="uk-container uk-margin-top uk-margin-medium-bottom">
        <div class="uk-grid uk-child-width-1-2@m in-testimonial-2" data-uk-grid>
            <div class="uk-width-1-1@m uk-text-center">
                <h1>More than <span class="in-highlight">1,000</span> traders joined</h1>
            </div>
            <div>
                <div class="uk-background-contain uk-background-top-left" data-src="{{ asset('front/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-right">
                            <div class="uk-background-primary uk-border-pill">
                                <img class="uk-align-center uk-border-pill" src="img/in-lazy.gif" data-src="{{ asset('front/img/blockit/in-team-1.png') }}" alt="client-1" width="100" height="100" data-uk-img>
                            </div>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom">Angela Nannenhorn</h5>
                            <p class="uk-text-muted uk-margin-remove-top">from United Kingdom</p>
                        </div>
                    </div>
                    <blockquote>
                        <p>Very convenience for trader, spread for gold is relatively low compare to other broker</p>
                    </blockquote>
                </div>
            </div>
            <div>
                <div class="uk-background-contain uk-background-top-left" data-src="{{ asset('front/img/in-equity-4-blob-2.svg') }}" data-uk-img>
                    <div class="uk-flex uk-flex-middle">
                        <div class="uk-margin-right">
                            <div class="uk-background-primary uk-border-pill">
                                <img class="uk-align-center uk-border-pill" src="img/in-lazy.gif" data-src="{{ asset('front/img/blockit/in-team-8.png') }}" alt="client-2" width="100" height="100" data-uk-img>
                            </div>
                        </div>
                        <div>
                            <h5 class="uk-margin-remove-bottom">Wade Palmer</h5>
                            <p class="uk-text-muted uk-margin-remove-top">from Germany</p>
                        </div>
                    </div>
                    <blockquote>
                        <p>One of the best Crypto brokers, I have been using! their trading conditions are excellent</p>
                    </blockquote>
                </div>
            </div>
            <div class="uk-width-1-1@m uk-text-center">
                <a href="#" class="uk-button uk-button-text">See more traders stories from all over the world<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
<!-- section content begin -->
<div class="uk-section uk-section-primary uk-preserve-color in-equity-6 uk-background-contain uk-background-center" data-src="{{ asset('front/img/in-equity-decor-2.svg') }}" data-uk-img>
    <div class="uk-container uk-margin-small-bottom">
        <div class="uk-grid uk-flex uk-flex-center">
            <div class="uk-width-2xlarge@m uk-text-center">
                <h1>Ready to get started?</h1>
                <p class="uk-text-lead">Global access to crypto markets from a single account</p>
            </div>
            <div class="uk-width-3-4@m uk-margin-medium-top">
                <div class="uk-flex uk-flex-center uk-flex-middle button-app">
                    <div>
                        <a href="{{ url('regsiter', []) }}" class="uk-button uk-button-secondary uk-border-rounded">Open your account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- section content end -->
@endsection
