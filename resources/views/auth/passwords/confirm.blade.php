@extends('layouts.auth')

@section('content')
<div class="auth-shell">
    <div class="auth-title">
        <div class="auth-logo">W</div>
        <div>{{ __('Confirm password') }}</div>
    </div>

    <div class="auth-card">
        <div class="auth-card-inner">
            <div class="mb-3 text-secondary">
                {{ __('Please confirm your password before continuing.') }}
            </div>

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-auth-primary w-100">
                    {{ __('Confirm') }}
                </button>
            </form>

            @if (Route::has('password.request'))
                <div class="auth-footer">
                    <a class="text-decoration-none" href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
