<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Somastore') }} - Digital Education</title>
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .landing-page { background: #e7e1d8; position: relative; overflow-x: hidden; min-height: 100vh; }
        
        .typing-container {
            color: #12d1a5;
            min-height: 1.2em;
            display: inline-block;
        }

        .cursor {
            display: inline-block;
            width: 3px;
            background-color: #12d1a5;
            margin-left: 5px;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
        .landing-page::before {
            content: ''; position: fixed; inset: -40%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(18, 209, 165, 0.1) 0 2px, transparent 3px),
                radial-gradient(circle at 60% 20%, rgba(18, 209, 165, 0.08) 0 2px, transparent 3px),
                repeating-linear-gradient(145deg, transparent 0 18px, rgba(18, 209, 165, 0.2) 18px 19px, transparent 19px 36px);
            opacity: 0.3; transform: rotate(-6deg); pointer-events: none; z-index: 0;
        }
        .navbar-landing { background: rgba(255, 255, 255, 0.95) !important; backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.05); }
        .nav-link { color: #444 !important; transition: color 0.2s; }
        .nav-link:hover { color: #12d1a5 !important; }
        .dropdown-menu { border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-radius: 12px; padding: 10px; margin-top: 10px; background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(10px); }
        .dropdown-item { border-radius: 8px; padding: 8px 15px; font-weight: 500; color: #555; }
        .dropdown-item:hover { background-color: rgba(18, 209, 165, 0.1); color: #0fb994; }
        .dropdown-divider { opacity: 0.05; }
        .navbar-toggler { border: none; padding: 0; }
        .navbar-toggler:focus { box-shadow: none; }
        .hero-section { padding: 120px 0 80px; position: relative; z-index: 1; text-align: center; }
        .btn-green { background: #12d1a5; color: #062a21; font-weight: 700; border-radius: 12px; padding: 12px 30px; border: none; }
        .btn-green:hover { background: #0fb994; color: #062a21; }
        .card-custom { background: rgba(255,255,255,0.7); backdrop-filter: blur(8px); border-radius: 20px; border: 1px solid rgba(255,255,255,0.4); transition: transform 0.3s; color: #333; text-decoration: none; display: flex; align-items: center; justify-content: center; min-height: 80px; }
        .card-custom:hover { transform: translateY(-5px); color: #000; box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .section-header { border-left: 5px solid #12d1a5; padding-left: 15px; margin-bottom: 35px; }
        .class-card { background: rgba(255,255,255,0.7); backdrop-filter: blur(8px); border-radius: 15px; border: 1px solid rgba(255,255,255,0.4); padding: 25px 15px; text-align: center; transition: all 0.3s ease; color: #333; text-decoration: none; display: block; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.02); }
        .class-card:hover { transform: translateY(-10px); background: #fff; box-shadow: 0 15px 30px rgba(18, 209, 165, 0.15); color: #0fb994; border-color: #12d1a5; }
        .class-icon { font-size: 2rem; color: #12d1a5; margin-bottom: 15px; display: block; }
        .class-name { font-weight: 700; font-size: 1.1rem; text-transform: uppercase; letter-spacing: 0.5px; }
        .badge-new { 
            background: linear-gradient(45deg, #12d1a5, #0fb994); 
            color: #fff; 
            font-weight: 800; 
            font-size: 10px; 
            padding: 5px 10px; 
            border-radius: 20px; 
            text-transform: uppercase;
            letter-spacing: 1px;
            box-shadow: 0 4px 10px rgba(18, 209, 165, 0.3);
            animation: pulse-green 2s infinite;
        }
        @keyframes pulse-green {
            0% { transform: scale(1); box-shadow: 0 0 0 0 rgba(18, 209, 165, 0.4); }
            70% { transform: scale(1.05); box-shadow: 0 0 0 10px rgba(18, 209, 165, 0); }
            100% { transform: scale(1); box-shadow: 0 0 0 0 rgba(18, 209, 165, 0); }
        }
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
    <script>
        const textElement = document.getElementById('typing-text');
        const phrases = [
            'Marketplace of Knowledge',
            'Smarter way to Learn',
            'Connect Teachers & Students',
            'Share Educational Materials',
            'Transform Knowledge into Income'
        ];
        
        let phraseIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        let typeSpeed = 100;

        function type() {
            const currentPhrase = phrases[phraseIndex];
            
            if (isDeleting) {
                textElement.textContent = currentPhrase.substring(0, charIndex - 1);
                charIndex--;
                typeSpeed = 50;
            } else {
                textElement.textContent = currentPhrase.substring(0, charIndex + 1);
                charIndex++;
                typeSpeed = 150;
            }

            if (!isDeleting && charIndex === currentPhrase.length) {
                isDeleting = true;
                typeSpeed = 2000; // Pause at end
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                phraseIndex = (phraseIndex + 1) % phrases.length;
                typeSpeed = 500;
            }

            setTimeout(type, typeSpeed);
        }

        document.addEventListener('DOMContentLoaded', type);
    </script>
</body>
</html>
