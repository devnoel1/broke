@extends('layouts.auth')

@section('auth-content')
<p class="uk-text-lead uk-margin-small-top uk-margin-medium-bottom">Register New Account</p>
<!-- login form begin -->
<form class="uk-grid uk-form" action="{{ route('register') }}" method="POST">
    @csrf
    @if (Session::has('status'))
    <div class="alert alert-success">{{ $message }}</div>
    @endif
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
        <input class="uk-input uk-border-rounded" name="name" value="{{ old('name') }}" type="text" placeholder="Fullname ">
        @error('name')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
        <input class="uk-input uk-border-rounded" name="email" value="{{ old('email') }}" type="email" placeholder="Email ">
        @error('email')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
        <input class="uk-input uk-border-rounded" value="" name="password" type="password" placeholder="Password">
        @error('password')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="uk-margin-small uk-width-1-1 uk-inline">
        <span class="uk-form-icon uk-form-icon-flip fas fa-lock fa-sm"></span>
        <input class="uk-input uk-border-rounded" value="" name="password_confirmation" type="password" placeholder="Confirm Password">
    </div>

    <div class="uk-margin-small uk-width-1-1">
        <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left" type="submit" name="submit">Sign up</button>
    </div>
</form>

<span class="uk-text-small">{{ __('Already registered?') }} <a class="uk-button uk-button-text" href="{{ url('login', []) }}">Sign in</a></span>
@endsection
