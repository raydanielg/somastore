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
        .landing-page::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background-image: linear-gradient(180deg, #f5f5dc 50%, #fff 100%);
            background-size: 100% 100px;
            background-position: 0 100px;
            background-repeat: no-repeat;
            z-index: -1;
        }
        .navbar-landing { background: rgba(255, 255, 255, 0.95) !important; backdrop-filter: blur(10px); border-bottom: 1px solid rgba(0,0,0,0.05); }
        .nav-link { color: #444 !important; transition: color 0.2s; }
        .nav-link:hover { color: #12d1a5 !important; }
        .dropdown-menu { border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-radius: 12px; padding: 10px; margin-top: 10px; background: rgba(255, 255, 255, 0.98); backdrop-filter: blur(10px); }
        .nav-item.dropdown:hover > .dropdown-menu {
            display: block;
            margin-top: 0;
        }
        .dropdown-toggle::after {
            transition: transform 0.2s;
        }
        .nav-item.dropdown:hover .dropdown-toggle::after {
            transform: rotate(180deg);
        }
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
        footer { 
            background: #e7e1d8; 
            color: #333; 
            padding: 80px 0 30px; 
            margin-top: 100px;
            position: relative;
            overflow: hidden;
        }
        footer::before {
            content: ''; position: absolute; inset: -40%;
            background: 
                radial-gradient(circle at 20% 30%, rgba(18, 209, 165, 0.1) 0 2px, transparent 3px),
                radial-gradient(circle at 60% 20%, rgba(18, 209, 165, 0.08) 0 2px, transparent 3px),
                repeating-linear-gradient(145deg, transparent 0 18px, rgba(18, 209, 165, 0.2) 18px 19px, transparent 19px 36px);
            opacity: 0.3; transform: rotate(-6deg); pointer-events: none; z-index: 0;
        }
        footer .container { position: relative; z-index: 1; }
        .footer-logo { font-size: 1.8rem; font-weight: 800; margin-bottom: 20px; display: block; color: #111; text-decoration: none; }
        .footer-desc { color: #555; font-size: 0.9rem; line-height: 1.6; margin-bottom: 25px; }
        .footer-title { font-size: 1.1rem; font-weight: 700; margin-bottom: 25px; color: #111; position: relative; }
        .footer-links { list-style: none; padding: 0; }
        .footer-links li { margin-bottom: 12px; }
        .footer-links a { color: #555; text-decoration: none; font-size: 0.9rem; transition: all 0.2s; display: flex; align-items: center; }
        .footer-links a:hover { color: #12d1a5; padding-left: 5px; }
        .footer-links a i { font-size: 0.7rem; margin-right: 10px; color: #12d1a5; }
        .social-links { display: flex; gap: 15px; margin-bottom: 30px; }
        .social-icon { width: 36px; height: 36px; background: rgba(0,0,0,0.05); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #111; text-decoration: none; transition: all 0.3s; border: 1px solid rgba(0,0,0,0.05); }
        .social-icon:hover { background: #12d1a5; color: #fff; transform: translateY(-3px); }
        .trusted-badge { background: rgba(18, 209, 165, 0.1); color: #0fb994; padding: 6px 15px; border-radius: 50px; font-size: 0.75rem; font-weight: 700; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px; border: 1px solid rgba(18, 209, 165, 0.2); }
        .contact-info { color: #555; font-size: 0.9rem; margin-top: 40px; }
        .contact-item { display: flex; align-items: center; gap: 12px; margin-bottom: 15px; }
        .contact-item i { color: #12d1a5; }
        .subscribe-form { background: #fff; padding: 5px; border-radius: 12px; display: flex; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .subscribe-input { background: transparent; border: none; padding: 10px 15px; color: #111; flex: 1; font-size: 0.9rem; }
        .subscribe-input:focus { outline: none; }
        .subscribe-btn { background: #12d1a5; color: #fff; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 700; transition: all 0.2s; }
        .subscribe-btn:hover { background: #0fb994; }
        .footer-bottom { border-top: 1px solid rgba(0,0,0,0.05); padding-top: 30px; margin-top: 60px; color: #777; font-size: 0.85rem; }
        .scheme-header { margin-bottom: 40px; padding-bottom: 20px; border-bottom: 2px solid #eef2f7; }
        .scheme-title { font-weight: 800; font-size: 1.5rem; color: #111; display: flex; align-items: center; gap: 10px; }
        .scheme-year { color: #12d1a5; font-weight: 700; }
        .level-title { font-weight: 800; font-size: 1.2rem; color: #333; margin: 30px 0 20px; display: flex; align-items: center; gap: 10px; }
        .mtaala-mpya { color: #12d1a5; font-size: 0.9rem; font-weight: 700; }
        .subject-card { background: #fff; border-radius: 12px; border: 1px solid #eef2f7; padding: 20px; transition: all 0.3s ease; height: 100%; box-shadow: 0 2px 10px rgba(0,0,0,0.02); }
        .subject-card:hover { border-color: #12d1a5; box-shadow: 0 10px 25px rgba(18, 209, 165, 0.1); transform: translateY(-3px); }
        .subject-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 15px; }
        .subject-btn { 
            width: 100%; 
            padding: 12px 15px; 
            background: #fff; 
            border: 1px solid #d1d9e6; 
            border-radius: 8px; 
            color: #4a5568; 
            font-weight: 600; 
            font-size: 0.9rem; 
            text-align: left; 
            transition: all 0.2s;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .subject-btn:hover { 
            border-color: #12d1a5; 
            color: #0fb994; 
            background: rgba(18, 209, 165, 0.02);
        }
        .subject-btn::after {
            content: '\F285';
            font-family: 'bootstrap-icons';
            font-size: 0.8rem;
            opacity: 0;
            transition: all 0.2s;
        }
        .subject-btn:hover::after {
            opacity: 1;
            transform: translateX(3px);
        }
    </style>
</head>
<body class="landing-page">
    @include('landing.partials.navbar')

    <main class="container py-5" style="position: relative; z-index: 1;">
        @if(Route::currentRouteName() == 'home' || Route::currentRouteName() == 'welcome' || Request::is('/'))
            @include('landing.partials.hero')
        @endif
        @yield('content')
        @if(Route::currentRouteName() == 'home' || Route::currentRouteName() == 'welcome' || Request::is('/'))
            @include('landing.partials.content')
        @endif
    </main>

    @include('landing.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
