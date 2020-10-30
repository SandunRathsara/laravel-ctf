@extends('layouts.auth')

@section('content')


<form id="login-form" action="{{ route('login') }}" method="post" role="form" style="display: block;">
    @csrf

    <div class="form-group">
        <input type="email" name="email" id="email" tabindex="1" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email" autofocus {{ __('E-Mail Address') }}>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>

    <div class="form-group">
        <input type="password" name="password" id="password" tabindex="2" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" required autocomplete="current-password" {{ __('Password') }}>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    </div>
    <div class="form-group text-center">
        <input type="checkbox" tabindex="3" class="" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" name="login-submit"  tabindex="4" class="form-control button btn-login">
                    {{ __('Login') }}
                </button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" tabindex="5" class="forgot-password">{{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>

@endsection