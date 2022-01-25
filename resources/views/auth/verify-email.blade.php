@extends('layouts.auth')

@section('auth-content')
<p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom"></p>
<p> {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
@if (session('status') == 'verification-link-sent')
<div class="mb-4 font-medium text-sm text-green-600">
    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
</div>
@endif
<!-- login form begin -->
<form class="uk-grid uk-form" action="{{ route('verification.send') }}" method="POST">
    @csrf

    <div class="uk-margin-small uk-width-1-1">
        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">     {{ __('Resend Verification Email') }}}</button>
    </div>
</form>
<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button type="submit" class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left">
        {{ __('Log Out') }}
    </button>
</form>
@endsection
