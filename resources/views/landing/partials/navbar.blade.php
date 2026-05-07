<nav class="navbar navbar-expand-lg navbar-light navbar-landing sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
            <div style="width: 35px; height: 35px; background: #111; color: #fff; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 10px;">D</div>
            Dinestan
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto fw-semibold">
                <li class="nav-item"><a class="nav-link" href="#">Schemes of work</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Logbooks</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Lesson Plans</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Exams</a></li>
            </ul>
            <div class="d-flex gap-2">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-green shadow-sm">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn fw-bold">Log in</a>
                    <a href="{{ route('register') }}" class="btn btn-green shadow-sm">Sign up</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
