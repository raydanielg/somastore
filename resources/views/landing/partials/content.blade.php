        <!-- Exam Packages Section -->
        <section class="mt-5 pt-5">
            <div class="section-header">
                <div class="d-flex align-items-center gap-3">
                    <h3 class="fw-800 m-0">EXAM PACKAGES</h3>
                    <span class="badge-new">NEW</span>
                </div>
                <p class="text-secondary mt-2">Access comprehensive exam collections for all levels.</p>
            </div>
            <div class="row g-4">
                @php 
                    $examLevels = [
                        ['name' => 'Form 4', 'count' => '120+ Exams', 'icon' => 'bi-journal-check', 'route' => route('exams.packages')],
                        ['name' => 'Form 2', 'count' => '95+ Exams', 'icon' => 'bi-journal-check', 'route' => route('exams.packages')],
                        ['name' => 'Class 7', 'count' => '150+ Exams', 'icon' => 'bi-journal-check', 'route' => route('exams.packages')],
                        ['name' => 'Class 4', 'count' => '80+ Exams', 'icon' => 'bi-journal-check', 'route' => route('exams.packages')],
                    ];
                @endphp
                @foreach($examLevels as $level)
                <div class="col-6 col-md-3">
                    <a href="{{ $level['route'] }}" class="class-card">
                        <i class="bi {{ $level['icon'] }} class-icon"></i>
                        <div class="class-name">{{ $level['name'] }}</div>
                        <div class="exam-count">{{ $level['count'] }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Lesson Plans Section -->
        <section class="mt-5 pt-5">
            <div class="section-header">
                <h3 class="fw-800 m-0 text-uppercase">Lesson Plans</h3>
                <p class="text-secondary mt-2">Professional teaching guides from Nursery to Form Six.</p>
            </div>
            <div class="row g-4">
                @php 
                    $planLevels = [
                        ['name' => 'Secondary', 'desc' => 'Form 1 - Form 6', 'icon' => 'bi-mortarboard', 'route' => route('lesson_plans.secondary')],
                        ['name' => 'Primary', 'desc' => 'Standard 1 - 7', 'icon' => 'bi-book', 'route' => route('lesson_plans.primary')],
                        ['name' => 'Nursery', 'desc' => 'KG & Pre-unit', 'icon' => 'bi-palette', 'route' => route('lesson_plans.nursery')],
                    ];
                @endphp
                @foreach($planLevels as $level)
                <div class="col-md-4">
                    <a href="{{ $level['route'] }}" class="class-card">
                        <i class="bi {{ $level['icon'] }} class-icon"></i>
                        <div class="class-name">{{ $level['name'] }}</div>
                        <div class="exam-count">{{ $level['desc'] }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Subject Notes Section -->
        <section class="mt-5 pt-5">
            <div class="section-header">
                <h3 class="fw-800 m-0 text-uppercase">Lesson Notes</h3>
                <p class="text-secondary mt-2">Simplified study materials for better understanding.</p>
            </div>
            <div class="row g-4">
                @php 
                    $noteLevels = [
                        ['name' => 'Secondary Notes', 'desc' => 'All Subjects', 'icon' => 'bi-file-earmark-text', 'route' => route('notes.index')],
                        ['name' => 'Primary Notes', 'desc' => 'New Curriculum', 'icon' => 'bi-file-earmark-text', 'route' => route('notes.index')],
                        ['name' => 'Nursery Notes', 'desc' => 'Basic Skills', 'icon' => 'bi-file-earmark-text', 'route' => route('notes.index')],
                    ];
                @endphp
                @foreach($noteLevels as $level)
                <div class="col-md-4">
                    <a href="{{ $level['route'] }}" class="class-card">
                        <i class="bi {{ $level['icon'] }} class-icon"></i>
                        <div class="class-name">{{ $level['name'] }}</div>
                        <div class="exam-count">{{ $level['desc'] }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>

        <!-- Schemes of Work Section -->
        <section class="mt-5 pt-5" id="schemes-section">
            <div class="section-header">
                <h3 class="fw-800 m-0 text-uppercase">Schemes of Work</h3>
                <p class="text-secondary mt-2">Well-organized teaching schedules for educators.</p>
            </div>
            <div class="row g-4">
                @php 
                    $schemeLevels = [
                        ['name' => 'Secondary Schemes', 'desc' => 'Form 1 - 6', 'icon' => 'bi-calendar3', 'route' => route('schemes.secondary')],
                        ['name' => 'Primary Schemes', 'desc' => 'Standard 1 - 7', 'icon' => 'bi-calendar3', 'route' => route('schemes.primary')],
                        ['name' => 'Nursery Schemes', 'desc' => 'Pre-Primary', 'icon' => 'bi-calendar3', 'route' => route('schemes.nursery')],
                    ];
                @endphp
                @foreach($schemeLevels as $level)
                <div class="col-md-4">
                    <a href="{{ $level['route'] }}" class="class-card">
                        <i class="bi {{ $level['icon'] }} class-icon"></i>
                        <div class="class-name">{{ $level['name'] }}</div>
                        <div class="exam-count">{{ $level['desc'] }}</div>
                    </a>
                </div>
                @endforeach
            </div>
        </section>
