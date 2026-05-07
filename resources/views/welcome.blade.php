<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Digital Education</title>
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .landing-page { background: #e7e1d8; position: relative; overflow-x: hidden; min-height: 100vh; }
        .landing-page::before {
            content: ''; position: fixed; inset: -40%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(18, 209, 165, 0.1) 0 2px, transparent 3px),
                radial-gradient(circle at 60% 20%, rgba(18, 209, 165, 0.08) 0 2px, transparent 3px),
                repeating-linear-gradient(145deg, transparent 0 18px, rgba(18, 209, 165, 0.2) 18px 19px, transparent 19px 36px);
            opacity: 0.3; transform: rotate(-6deg); pointer-events: none; z-index: 0;
        }
        .navbar-landing { background: rgba(255, 255, 255, 0.8) !important; backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.05); }
        .hero-section { padding: 120px 0 80px; position: relative; z-index: 1; text-align: center; }
        .btn-green { background: #12d1a5; color: #062a21; font-weight: 700; border-radius: 12px; padding: 12px 30px; border: none; }
        .btn-green:hover { background: #0fb994; color: #062a21; }
        .card-custom { background: rgba(255,255,255,0.7); backdrop-filter: blur(8px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.4); transition: transform 0.3s; color: #333; text-decoration: none; display: flex; align-items: center; justify-content: center; min-height: 80px; }
        .card-custom:hover { transform: translateY(-5px); color: #000; box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .section-title { font-weight: 800; color: #111; margin-bottom: 30px; }
        .badge-new { background: #12d1a5; color: #062a21; font-weight: 700; font-size: 10px; padding: 4px 8px; border-radius: 6px; }
        footer { background: rgba(255,255,255,0.8); backdrop-filter: blur(10px); padding: 60px 0 30px; border-top: 1px solid rgba(0,0,0,0.05); margin-top: 100px; }
        .display-4 { font-weight: 800; line-height: 1.1; }
    </style>
</head>
<body class="landing-page">
    @include('landing.partials.navbar')

    <main class="container py-5" style="position: relative; z-index: 1;">
        @include('landing.partials.hero')
        @include('landing.partials.content')
    </main>

    @include('landing.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
