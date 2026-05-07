@extends('layouts.auth')

@section('content')
<div class="auth-shell">
    <div class="auth-title">
        <div class="auth-logo">W</div>
        <div>{{ __('Log in') }}</div>
    </div>

    <div class="auth-card">
        <div class="auth-card-inner">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="you@example.com">
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="••••••••">
                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember me') }}</label>
                    </div>

                    @if (Route::has('password.request'))
                        <a class="link-secondary text-decoration-none" href="{{ route('password.request') }}">{{ __('Forgot password?') }}</a>
                    @endif
                </div>

                <button type="submit" class="btn btn-auth-primary w-100">
                    {{ __('Continue') }}
                </button>
            </form>

            <div class="auth-divider">{{ __('or') }}</div>

            <div class="d-grid gap-2">
                <button type="button" class="btn btn-auth-provider" disabled>{{ __('Continue with Google') }}</button>
                <button type="button" class="btn btn-auth-provider" disabled>{{ __('Continue with GitHub') }}</button>
                <button type="button" class="btn btn-auth-provider" disabled>{{ __('Continue with SSO') }}</button>
            </div>

            <div class="auth-footer">
                {{ __('Don\'t have an account?') }}
                <a class="text-decoration-none" href="{{ route('register') }}">{{ __('Sign up') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
