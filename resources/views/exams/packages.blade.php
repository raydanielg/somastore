@extends('welcome')

@section('content')
<div class="container py-5 animate__animated animate__fadeIn">
    <!-- Header Section -->
    <div class="scheme-header mb-5 animate__animated animate__fadeInDown" style="margin-top: 40px;">
        <h1 class="scheme-title text-uppercase" style="color: green;">
            {{ $title }}
            <span class="badge rounded-pill bg-primary ms-2 animate__animated animate__pulse animate__infinite" style="font-size: 0.8rem; vertical-align: middle; padding: 8px 15px;">NEW</span>
        </h1>
        <p class="text-secondary lead">Download comprehensive exam packages for all grade levels.</p>
    </div>

    <div class="mui-like-card shadow-sm animate__animated animate__fadeInUp">
        <div class="subject-flex-container">
            @foreach($classes as $class)
            <a href="#" class="subject-mui-btn text-decoration-none">
                {{ $class }}
            </a>
            @endforeach
        </div>
    </div>
</div>

<style>
    .scheme-header { border-left: 5px solid #12d1a5; padding-left: 20px; }
    .scheme-title { font-weight: 800; font-size: 1.8rem; display: flex; align-items: center; }
    
    .mui-like-card { 
        background-color: #e5e7eb; 
        border-radius: 12px; 
        padding: 40px; 
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .subject-flex-container {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }

    .subject-mui-btn {
        background-color: #fff;
        border: 1px solid #d1d5db;
        border-radius: 12px;
        padding: 12px 25px;
        color: #4b5563;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.2s ease;
        box-shadow: 0 1px 2px rgba(0,0,0,0.05);
    }

    .subject-mui-btn:hover {
        background-color: #f9fafb;
        border-color: #12d1a5;
        color: #12d1a5;
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(18, 209, 165, 0.15);
    }
</style>
@endsection
