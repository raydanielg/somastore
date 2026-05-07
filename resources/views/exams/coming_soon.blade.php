@extends('welcome')

@section('content')
<div class="container py-5 text-center" style="margin-top: 100px; min-height: 400px;">
    <h1 class="fw-800 text-uppercase" style="color: #12d1a5;">{{ $title }}</h1>
    <p class="text-secondary lead">This section is currently being updated. Please check back later.</p>
    <a href="/" class="btn btn-green mt-4">Back to Home</a>
</div>
@endsection
