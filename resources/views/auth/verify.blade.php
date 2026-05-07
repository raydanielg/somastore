@extends('layouts.auth')

@section('content')
<div class="auth-shell">
    <div class="auth-title">
        <div class="auth-logo">W</div>
        <div>{{ __('Verify email') }}</div>
    </div>

    <div class="auth-card">
        <div class="auth-card-inner">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <div class="mb-3 text-secondary">
                {{ __('Before proceeding, please check your email for a verification link.') }}
            </div>

            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-auth-primary w-100">
                    {{ __('Resend verification email') }}
                </button>
            </form>

            <div class="auth-footer">
                <a class="text-decoration-none" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
