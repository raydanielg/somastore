@extends('layouts.auth')

@section('content')
<div class="auth-shell">
    <div class="auth-title">
        <img src="{{ asset('logo.png') }}" alt="Logo" style="height: 50px; margin-bottom: 10px;">
        <div>{{ __('Create account') }}</div>
    </div>

    <div class="auth-card">
        <div class="auth-card-inner">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full Name">
                    @error('name')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="you@example.com">
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Min 8 characters">
                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">{{ __('Confirm password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-auth-primary w-100">
                    {{ __('Create account') }}
                </button>
            </form>

            <div class="auth-footer">
                {{ __('Already have an account?') }}
                <a class="text-decoration-none" href="{{ route('login') }}">{{ __('Log in') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
