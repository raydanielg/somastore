<nav class="navbar navbar-expand-lg navbar-light navbar-landing sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
            <img src="{{ asset('logo.png') }}" alt="Somastore Logo" style="height: 40px; margin-right: 10px;">
            Somastore
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto fw-semibold">
                <!-- Schemes of Work -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="schemesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Schemes of work
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="schemesDropdown">
                        <li><a class="dropdown-item" href="#">Secondary school</a></li>
                        <li><a class="dropdown-item" href="#">Primary school</a></li>
                        <li><a class="dropdown-item" href="#">Nursery school</a></li>
                    </ul>
                </li>

                <!-- Logbooks -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="logbooksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Logbooks
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="logbooksDropdown">
                        <li><a class="dropdown-item" href="#">Secondary school</a></li>
                        <li><a class="dropdown-item" href="#">Primary school</a></li>
                        <li><a class="dropdown-item" href="#">Nursery school</a></li>
                    </ul>
                </li>

                <!-- Lesson Plans -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="lessonsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lesson Plans
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="lessonsDropdown">
                        <li><a class="dropdown-item" href="#">Secondary school</a></li>
                        <li><a class="dropdown-item" href="#">Primary school</a></li>
                        <li><a class="dropdown-item" href="#">Nursery school</a></li>
                    </ul>
                </li>

                <!-- Exams -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="examsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Exams
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="examsDropdown">
                        <li><a class="dropdown-item d-flex justify-content-between align-items-center" href="#">
                            Exam packages <span class="badge rounded-pill bg-primary ms-2" style="font-size: 8px;">NEW</span>
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Secondary exams</a></li>
                        <li><a class="dropdown-item" href="#">Primary exams</a></li>
                        <li><a class="dropdown-item" href="#">Regional exams</a></li>
                        <li><a class="dropdown-item" href="#">Topical exams</a></li>
                        <li><a class="dropdown-item" href="#">Practical exams</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="#">Subject Notes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
                <div class="d-flex gap-2">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-green shadow-sm">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn fw-bold">Log in</a>
                        <a href="{{ route('register') }}" class="btn btn-green shadow-sm">Get started</a>
                    @endauth
                </div>
        </div>
    </div>
</nav>
