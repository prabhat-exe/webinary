<footer class="text-white pt-5 pb-4 mt-auto" style="background-color: #2c2f48;">
    <div class="container">
        <div class="row mb-4">
            <!-- Company Info -->
            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                <h4 class="fw-bold">WEBINARY</h4>
                <p class="small text-white-50">Innovating the future, one line at a time.</p>
                
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white-50 text-decoration-none d-block py-1">Home</a>
                    </li>
                    <li><a href="{{ route('portfolio') }}"
                            class="text-white-50 text-decoration-none d-block py-1">Portfolio</a></li>
                    <li><a href="{{ route('contact') }}"
                            class="text-white-50 text-decoration-none d-block py-1">Contact</a></li>
                </ul>
            </div>

            <!-- Optional: Domain Expertise -->
            <div class="col-md-4 text-center text-md-start">
                <h5 class="mb-3">Domain Expertise</h5>
                <ul class="list-unstyled text-white-50 small">
                    <li>🛒 E-commerce Development</li>
                    <li>📱 Mobile App Development</li>
                    <li>🌐 Custom Web Applications</li>
                    <li>⚙️ API Integrations</li>
                    <li>🔒 Cybersecurity Consulting</li>
                </ul>
            </div>
        </div>
        <div class="mt-3">
            <a href="https://facebook.com" target="_blank" class="text-white me-3" title="Facebook">
                <i class="bi bi-facebook fs-5"></i>
            </a>
           
            <a href="https://instagram.com" target="_blank" class="text-white me-3" title="Instagram">
                <i class="bi bi-instagram fs-5"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" class="text-white me-3" title="LinkedIn">
                <i class="bi bi-linkedin fs-5"></i>
            </a>
           
        </div>

        <!-- Footer Bottom -->
        <div class="text-center text-white-50 small border-top pt-3">
            © {{ now()->year }} WEBINARY Company. All rights reserved.
        </div>
    </div>
</footer>
