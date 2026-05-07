@extends('welcome')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mui-like-card shadow-lg p-5 animate__animated animate__fadeInUp" style="background: #fff; border-radius: 20px;">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div class="contact-icon-box" style="width: 60px; height: 60px; font-size: 1.5rem;">
                        <i class="bi bi-speedometer2"></i>
                    </div>
                    <div>
                        <h2 class="fw-800 m-0">Dashboard</h2>
                        <p class="text-secondary m-0">Welcome back to your Somastore account.</p>
                    </div>
                </div>

                <div class="alert alert-success border-0 shadow-sm animate__animated animate__fadeIn" role="alert" style="border-radius: 12px; background: rgba(18, 209, 165, 0.1); color: #0fb994;">
                    <i class="bi bi-check-circle-fill me-2"></i> {{ __('You are logged in!') }}
                </div>

                <div class="row g-4 mt-2">
                    <div class="col-md-4">
                        <div class="class-card p-4">
                            <i class="bi bi-person-badge class-icon"></i>
                            <div class="class-name">My Profile</div>
                            <p class="small text-muted mt-2">Manage your account settings</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="class-card p-4">
                            <i class="bi bi-cloud-upload class-icon"></i>
                            <div class="class-name">My Uploads</div>
                            <p class="small text-muted mt-2">View and manage your materials</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="class-card p-4">
                            <i class="bi bi-cart-check class-icon"></i>
                            <div class="class-name">Purchases</div>
                            <p class="small text-muted mt-2">Access your bought resources</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
