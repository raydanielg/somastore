@extends('welcome')

@section('content')
<div class="container py-5 animate__animated animate__fadeIn">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <!-- Header Section -->
            <div class="scheme-header mb-5 text-center animate__animated animate__fadeInDown" style="border-left: none;">
                <h1 class="fw-800 text-uppercase" style="color: #111;">Contact Us</h1>
                <p class="text-secondary lead">We'd love to hear from you. Get in touch for any inquiries.</p>
            </div>

            <div class="row g-5">
                <!-- Contact Info -->
                <div class="col-md-5 animate__animated animate__fadeInLeft">
                    <div class="contact-card p-4 h-100 shadow-sm border-0">
                        <h4 class="fw-800 mb-4" style="color: #12d1a5;">Get in Touch</h4>
                        
                        <div class="d-flex align-items-start gap-3 mb-4 contact-item-box">
                            <div class="contact-icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 mb-1">Our Location</h6>
                                <p class="text-secondary small m-0">United Republic of Tanzania, Dar es Salaam.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4 contact-item-box">
                            <div class="contact-icon-box">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 mb-1">Email Us</h6>
                                <p class="text-secondary small m-0">support@somastore.co.tz</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-3 mb-4 contact-item-box">
                            <div class="contact-icon-box">
                                <i class="bi bi-telephone"></i>
                            </div>
                            <div>
                                <h6 class="fw-800 mb-1">Call Us</h6>
                                <p class="text-secondary small m-0">+255 123 456 789</p>
                            </div>
                        </div>

                        <div class="mt-5">
                            <h6 class="fw-800 mb-3">Follow Us</h6>
                            <div class="social-links">
                                <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                                <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-md-7 animate__animated animate__fadeInRight">
                    <div class="mui-like-card p-4 p-md-5 shadow-lg" style="background-color: #fff; border: 1px solid rgba(0,0,0,0.05); border-radius: 20px;">
                        <form id="contact-form">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-700 small text-uppercase">Full Name</label>
                                    <input type="text" name="name" class="form-control custom-input" placeholder="Your name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-700 small text-uppercase">Email Address</label>
                                    <input type="email" name="email" class="form-control custom-input" placeholder="Your email" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-700 small text-uppercase">Subject</label>
                                    <input type="text" name="subject" class="form-control custom-input" placeholder="What is this about?" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-700 small text-uppercase">Message</label>
                                    <textarea name="message" class="form-control custom-input" rows="5" placeholder="How can we help you?" required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-green w-100 py-3 shadow-sm text-uppercase fw-800">
                                        <i class="bi bi-send-fill me-2"></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .contact-card {
        background: #fff;
        border-radius: 20px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05) !important;
        transition: transform 0.3s ease;
    }
    .contact-card:hover {
        transform: translateY(-5px);
    }
    .contact-item-box {
        transition: all 0.3s ease;
        padding: 10px;
        border-radius: 12px;
    }
    .contact-item-box:hover {
        background: rgba(18, 209, 165, 0.05);
    }
    .contact-icon-box {
        width: 45px; height: 45px;
        background: rgba(18, 209, 165, 0.1);
        border-radius: 12px;
        display: flex; align-items: center; justify-content: center;
        color: #12d1a5;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }
    .contact-item-box:hover .contact-icon-box {
        background: #12d1a5;
        color: #fff;
        transform: scale(1.1);
    }
    .custom-input {
        border: 1px solid #eef2f7;
        padding: 12px 15px;
        border-radius: 10px;
        background: #f8fafc;
        transition: all 0.2s;
    }
    .custom-input:focus {
        border-color: #12d1a5;
        box-shadow: 0 0 0 4px rgba(18, 209, 165, 0.1);
        background: #fff;
    }
    .form-label { color: #4a5568; letter-spacing: 0.5px; }
</style>

<script>
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = this;
    const formData = new FormData(form);
    const btn = form.querySelector('button[type="submit"]');
    const originalBtnText = btn.innerHTML;

    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Sending...';

    fetch('{{ route("contact.store") }}', {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Accept': 'application/json'
        },
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                icon: 'success',
                title: 'Message Sent!',
                text: data.message,
                confirmButtonColor: '#12d1a5',
            });
            form.reset();
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'An error occurred. Please try again.',
                confirmButtonColor: '#12d1a5',
            });
        }
    })
    .catch(error => {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'An error occurred. Please try again.',
            confirmButtonColor: '#12d1a5',
        });
    })
    .finally(() => {
        btn.disabled = false;
        btn.innerHTML = originalBtnText;
    });
});
</script>
@endsection
