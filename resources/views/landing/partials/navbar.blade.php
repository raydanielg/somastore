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
                        <li><a class="dropdown-item" href="{{ route('schemes.secondary') }}">Secondary school</a></li>
                        <li><a class="dropdown-item" href="{{ route('schemes.primary') }}">Primary school</a></li>
                        <li><a class="dropdown-item" href="{{ route('schemes.nursery') }}">Nursery school</a></li>
                    </ul>
                </li>

                <!-- Logbooks -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="logbooksDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Logbooks
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="logbooksDropdown">
                        <li><a class="dropdown-item" href="{{ route('schemes.secondary') }}">Secondary school</a></li>
                        <li><a class="dropdown-item" href="{{ route('schemes.primary') }}">Primary school</a></li>
                        <li><a class="dropdown-item" href="{{ route('schemes.nursery') }}">Nursery school</a></li>
                    </ul>
                </li>

                <!-- Lesson Plans -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="lessonsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Lesson plans
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="lessonsDropdown">
                        <li><a class="dropdown-item" href="{{ route('lesson_plans.secondary') }}">Secondary school</a></li>
                        <li><a class="dropdown-item" href="{{ route('lesson_plans.primary') }}">Primary school</a></li>
                        <li><a class="dropdown-item" href="{{ route('lesson_plans.nursery') }}">Nursery school</a></li>
                    </ul>
                </li>

                <!-- Exams -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="examsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Exams
                    </a>
                    <ul class="dropdown-menu shadow-lg border-0" aria-labelledby="examsDropdown" style="min-width: 250px;">
                        <li>
                            <a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('exams.packages') }}">
                                Exam packages <span class="badge bg-primary ms-2">NEW</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('exams.series') }}">Exam series</a></li>
                        <li><a class="dropdown-item" href="{{ route('exams.secondary') }}">Secondary exams</a></li>
                        <li><a class="dropdown-item" href="{{ route('exams.primary') }}">Primary exams</a></li>
                        <li><a class="dropdown-item" href="{{ route('exams.regional') }}">Regional exams</a></li>
                        <li><a class="dropdown-item" href="{{ route('exams.topical') }}">Topical exams</a></li>
                        <li><a class="dropdown-item" href="{{ route('exams.practical') }}">Practical exams</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="{{ route('notes.index') }}">Subject Notes</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}">Contact</a></li>
            </ul>
                <div class="d-flex gap-2">
                    @auth
                        <a href="{{ route('seller.dashboard') }}" class="btn btn-green shadow-sm">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="btn fw-bold">Log in</a>
                        <a href="{{ route('register') }}" class="btn btn-green shadow-sm">Get started</a>
                    @endauth
                </div>
        </div>
    </div>
</nav>
