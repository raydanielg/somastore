<footer>
    <div class="container">
        <div class="row g-4">
            <!-- Brand Column -->
            <div class="col-lg-4 col-md-12">
                <div class="trusted-badge">
                    <i class="bi bi-shield-check"></i>
                    TRUSTED EDUCATION PLATFORM
                </div>
                <a href="/" class="footer-logo">Somastore</a>
                <p class="footer-desc">
                    Somastore is a modern education platform that connects teachers and students in a digital marketplace of knowledge. 
                    Empowering educators with innovative tools and resources.
                </p>
                <div class="social-links">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                </div>

                <div class="contact-info">
                    <h6 class="text-dark fw-bold mb-3">Contact</h6>
                    <div class="contact-item">
                        <i class="bi bi-geo-alt"></i>
                        United Republic of Tanzania
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-envelope"></i>
                        support@somastore.co.tz
                    </div>
                    <div class="contact-item">
                        <i class="bi bi-telephone"></i>
                        +255 123 456 789
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-6">
                <h6 class="footer-title text-uppercase">Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Home</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> About Us</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Core Features</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> How It Works</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Testimonials</a></li>
                </ul>
            </div>

            <!-- Resources -->
            <div class="col-lg-2 col-6">
                <h6 class="footer-title text-uppercase">Resources</h6>
                <ul class="footer-links">
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Guidelines</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Materials</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> News</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Research</a></li>
                    <li><a href="#"><i class="bi bi-chevron-right"></i> Staff Portal</a></li>
                </ul>
            </div>

            <!-- Support & Legal -->
            <div class="col-lg-4 col-md-12">
                <div class="row">
                    <div class="col-6">
                        <h6 class="footer-title text-uppercase">Support</h6>
                        <ul class="footer-links">
                            <li><a href="{{ route('contact.index') }}"><i class="bi bi-chevron-right"></i> Contact Us</a></li>
                            <li><a href="{{ route('login') }}"><i class="bi bi-chevron-right"></i> Login</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Help Center</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> FAQs</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <h6 class="footer-title text-uppercase">Legal</h6>
                        <ul class="footer-links">
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Privacy Policy</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Terms of Service</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Cookie Policy</a></li>
                            <li><a href="#"><i class="bi bi-chevron-right"></i> Data Protection</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-5">
                    <h6 class="text-dark fw-bold mb-3">Stay Updated</h6>
                    <p class="small text-muted mb-3">Subscribe for announcements, new features, and updates.</p>
                    <form id="newsletter-form" class="subscribe-form">
                        @csrf
                        <input type="email" name="email" class="subscribe-input" placeholder="Your email address" required>
                        <button type="submit" class="subscribe-btn">
                            <i class="bi bi-send-fill me-2"></i> Subscribe
                        </button>
                    </form>
                </div>

                <script>
                    document.getElementById('newsletter-form').addEventListener('submit', function(e) {
                        e.preventDefault();
                        const form = this;
                        const formData = new FormData(form);
                        const btn = form.querySelector('.subscribe-btn');
                        const originalBtnText = btn.innerHTML;

                        btn.disabled = true;
                        btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Subscribing...';

                        fetch('{{ route("newsletter.subscribe") }}', {
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
                                    title: 'Success!',
                                    text: data.message,
                                    confirmButtonColor: '#12d1a5',
                                });
                                form.reset();
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: data.message,
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
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="m-0">© 2026 Somastore. All Rights Reserved. | <a href="/" class="text-secondary text-decoration-none">Home</a> | <a href="{{ route('seller.dashboard') }}" class="text-secondary text-decoration-none">Seller Panel</a></p>
                </div>
                <div class="col-md-6 text-center text-md-end mt-3 mt-md-0">
                    <p class="m-0">Made by <a href="#" class="text-dark fw-bold text-decoration-none">Zerixa technologies</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
