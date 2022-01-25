@extends('layouts.auth')

@section('auth-content')
<p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">Log into your account</p>
<!-- login form begin -->
<form class="uk-grid uk-form" action="{{ route('login') }}" method="POST">
    @csrf
    @if (Session::has('status'))
    <div class="alert alert-success">{{ $message }}</div>
    @endif
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
        <input class="uk-input uk-border-rounded" name="email" value="{{ old('email') }}" type="email" placeholder="Email ">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
        <input class="uk-input uk-border-rounded" value="" type="password" placeholder="Password">
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    @if (Route::has('password.request'))
    <div class="uk-margin-small uk-width-expand uk-text-small">
        <label class="uk-align-right"><a class="uk-link-reset" href="{{ route('password.request') }}">Forgot password?</a></label>
    </div>
    @endif
    <div class="uk-margin-small uk-width-1-1">
        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign in</button>
    </div>
</form>

<span class="uk-text-small">Don't have an account? <a class="uk-button uk-button-text" href="{{ url('register', []) }}">Register here</a></span>
@endsection
