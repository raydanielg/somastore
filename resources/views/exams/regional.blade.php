@extends('welcome')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="scheme-header mb-5" style="margin-top: 40px; text-align: center; border-left: none;">
        <h1 class="scheme-title text-uppercase" style="color: #4b5563; font-size: 1.5rem; justify-content: center;">
            {{ $title }}
        </h1>
    </div>

    @foreach($levels as $level)
    <div class="mb-5">
        <h5 class="level-heading">
            {{ $level['name'] }} 
            @if(isset($level['badge']))
                <span class="text-secondary fw-normal ms-1" style="font-size: 0.9rem;">{{ $level['badge'] }}</span>
            @endif
        </h5>
        <div class="mui-like-card">
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
    .scheme-header { margin-bottom: 30px; }
    .scheme-title { font-weight: 700; }
    
    .level-heading { font-weight: 800; color: #555; font-size: 1.1rem; margin-bottom: 15px; text-transform: uppercase; }
    
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
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.2s ease;
    }

    .subject-mui-btn:hover {
        background-color: #f9fafb;
        border-color: #12d1a5;
        color: #12d1a5;
        transform: translateY(-2px);
    }
</style>
@endsection
