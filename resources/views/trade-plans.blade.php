@extends('layouts.front')

@section('main-contentn')
<div class="uk-section">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1 uk-flex uk-flex-center">
                <div class="uk-width-3-5@m uk-margin-medium-bottom">
                    <h1 class="uk-margin-remove">Our <span class="in-highlight">Trading Plans</span></h1>
                </div>
            </div>
            <div class="uk-width-1-1 in-timeline-1">
                <hr>
                <div class="uk-grid uk-child-width-1-1 uk-child-width-1-3@m">
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                                <i class="fas fa-circle fa-lg in-icon-wrap primary-color"></i>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">Bronze</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded uk-box-shadow-small">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>$50--$200</li>
                                    <li>3.5% Roi daily</li>
                                    <li>Daily widthdrawal</li>
                                    <li>maximum of 25X</li>
                                </ul>
                                <a class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded" href="{{ url('regsiter', []) }}">Open Account</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                                <i class="fas fa-circle fa-lg in-icon-wrap primary-color"></i>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">Silver</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded uk-box-shadow-small">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>$200--$1000</li>
                                    <li>7.5% Roi daily</li>
                                    <li>Daily widthdrawal</li>
                                    <li>maximum of 20X</li>
                                </ul>
                                <a class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded" href="{{ url('regsiter', []) }}">Open Account</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="in-timeline-branch">
                            <div class="uk-flex">
                                <i class="fas fa-circle fa-lg in-icon-wrap primary-color"></i>
                                <div class="in-timeline-title uk-flex uk-flex-middle">
                                    <h4 class="uk-margin-remove-bottom">Gold</h4>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-expand">
                            <div class="uk-card uk-card-default uk-card-body uk-card-small uk-border-rounded uk-box-shadow-small">
                                <ul class="uk-list uk-list-bullet in-list-check">
                                    <li>$1000--$5000</li>
                                    <li> 10.2% Roi daily</li>
                                    <li>Daily widthdrawal</li>
                                    <li>unlimited</li>
                                </ul>
                                <a class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded" href="{{ url('regsiter', []) }}">Open Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





