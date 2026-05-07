@extends('welcome')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="scheme-header mb-5 animate__animated animate__fadeInDown" style="margin-top: 40px;">
        <h1 class="scheme-title text-uppercase">
            {{ $title }}
            <span class="scheme-year">- 2026</span>
        </h1>
        <p class="text-secondary lead">Download teaching guides for all levels.</p>
    </div>

    @foreach($levels as $level)
    <div class="mb-5 animate__animated animate__fadeInUp">
        <h5 class="level-heading">
            {{ $level['name'] }} 
            @if($level['badge'])
                <span class="mtaala-mpya-badge">{{ $level['badge'] }}</span>
            @endif
        </h5>
        <div class="mui-like-card shadow-sm">
            <div class="subject-flex-container">
                @foreach($level['subjects'] as $subject)
                <a href="#" class="subject-mui-btn text-decoration-none">
                    {{ $subject }}
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    .scheme-header { border-left: 5px solid #12d1a5; padding-left: 20px; }
    .scheme-title { font-weight: 800; font-size: 1.6rem; color: #111; margin-bottom: 5px; }
    .scheme-year { color: #12d1a5; }
    
    .level-heading { font-weight: 800; color: #555; font-size: 1.1rem; margin-bottom: 15px; }
    .mtaala-mpya-badge { color: #2e7d32; padding-left: 8px; font-weight: 700; }
    
    .mui-like-card { 
        background-color: #e5e7eb; 
        border-radius: 12px; 
        padding: 30px; 
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .subject-flex-container {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .subject-mui-btn {
        background-color: #fff;
        border: 1px solid #d1d5db;
        border-radius: 8px;
        padding: 10px 20px;
        color: #4b5563;
        font-weight: 600;
        font-size: 0.8rem;
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
