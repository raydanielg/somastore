<section class="mt-5 pt-5">
    <div class="d-flex align-items-center gap-2 mb-4">
        <h4 class="section-title m-0 text-uppercase">EXAM PACKAGES</h4>
        <span class="badge-new">NEW</span>
    </div>
    <div class="row g-4">
        @php $classes = ['FORM 1', 'FORM 2', 'FORM 3', 'FORM 4', 'DARASA 7', 'STANDARD 7', 'STANDARD 6', 'DARASA 6', 'STANDARD 5', 'FORM 5']; @endphp
        @foreach($classes as $class)
        <div class="col-6 col-md-4 col-lg-2">
            <a href="#" class="card-custom fw-bold text-center p-3">
                {{ $class }}
            </a>
        </div>
        @endforeach
    </div>
</section>

<section class="mt-5 pt-5">
    <div class="d-flex align-items-center gap-2 mb-4">
        <h4 class="section-title m-0 text-uppercase">SECONDARY SCHOOL LESSON PLANS</h4>
    </div>
    <div class="mb-5">
        <h5 class="fw-bold mb-4 d-flex align-items-center">FORM 6 <span class="ms-2 badge-new px-2 py-1" style="background: rgba(18, 209, 165, 0.2); border: 1px solid #12d1a5;">LATEST</span></h5>
        <div class="row g-4">
            @php $subjects = ['Biology', 'Chemistry', 'Commerce', 'Geography', 'Economics', 'English Language', 'Physics', 'History', 'Kiswahili', 'General Studies', 'Mathematics']; @endphp
            @foreach($subjects as $sub)
            <div class="col-6 col-md-4 col-lg-3">
                <a href="#" class="card-custom fw-semibold p-3 text-center">
                    {{ $sub }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
