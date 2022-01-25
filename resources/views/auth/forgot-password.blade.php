@extends('layouts.auth')

@section('auth-content')
<p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">Forget Password</p>
{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
<!-- login form begin -->
<form class="uk-grid uk-form" action="{{ route('password.email') }}" method="POST">
    @csrf
    @if (Session::has('status'))
    <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
        <input class="uk-input uk-border-rounded" name="email" value="{{ old('email') }}" type="text" placeholder="Email ">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="uk-margin-small uk-width-1-1">
        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">  {{ __('Email Password Reset Link') }}</button>
    </div>
</form>

<span class="uk-text-small">{{ __('Already registered?') }} <a class="uk-button uk-button-text" href="{{ url('login', []) }}">Sign in</a></span>
@endsection
