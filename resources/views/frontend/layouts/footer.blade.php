<div class="container-fluid text-white-50 footer pt-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <a href="{{ route('home.index') }}" class="d-inline-block mb-3">
                         <img src="{{ asset('font_dist/img/logo.png') }}" class="logo" alt="">
                    </a>
                    <p class="mb-3 text-white">From website design to full-scale digital marketing, 
                        Click Kart Digital helps brands grow, perform, and stand out in the digital world. 
                    </p>

                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-primary btn-square border-2 me-2" 
                            href="https://www.threads.com/@clickkartdigital"><i class="fa-brands fa-threads"></i>
                        </a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" 
                            href="https://www.facebook.com/clickkartdigitala"><i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" 
                            href="https://www.instagram.com/clickkartdigital/"><i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-outline-primary btn-square border-2 me-2" 
                            href="https://www.linkedin.com/company/clickkartdigital"><i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <h5 class="text-white mb-4">Quick Link</h5>
                    <a class="btn btn-link" href="{{ route('about.index') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact.index') }}">Contact Us</a>
                    <a class="btn btn-link" href="">Blogs</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Site Map</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <h5 class="text-white mb-4">Our Services</h5>
                    <a class="btn btn-link" href="{{ route('services.web-dev.index') }}">Web Design & Development</a>
                    <a class="btn btn-link" href="{{ route('services.seo.index') }}">Digital Marketing</a>
                    <a class="btn btn-link" href="{{ route('services.graphic-design.index') }}">Graphic Design</a>
                    <a class="btn btn-link" href="{{ route('services.social-media.index') }}">Social Media</a>
                    <a class="btn btn-link" href="{{ route('services.email-campaign.index') }}">Email Campaign</a>
                </div>
                <div class="col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <h5 class="text-white mb-4">Get In Touch</h5>
                    <p class="text-white"><i class="fa fa-map-marker-alt me-3"></i>Patna, Bihar, India (800001)</p>
                    <p class="text-white"><i class="fa fa-phone-alt me-3"></i>+91 1234567890</p>
                    <p class="text-white"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    
                </div>
            </div>
        </div>
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="https://clickkartdigital.com/">
                                Click Kart Digital</a> | All Right Reserved. 
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ route('home.index') }}">Home</a>
                            <a href="{{ route('contact.index') }}">Contact</a>
                            <a href="{{ route('contact.index') }}">Help</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>