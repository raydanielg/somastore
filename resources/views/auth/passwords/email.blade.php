@extends('layouts.auth')

@section('content')
<div class="auth-shell">
    <div class="auth-title">
        <div class="auth-logo">W</div>
        <div>{{ __('Reset password') }}</div>
    </div>

    <div class="auth-card">
        <div class="auth-card-inner">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-auth-primary w-100">
                    {{ __('Send reset link') }}
                </button>
            </form>

            <div class="auth-footer">
                <a class="text-decoration-none" href="{{ route('login') }}">{{ __('Back to login') }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
