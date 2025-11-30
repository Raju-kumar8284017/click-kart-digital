<div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom border-2 border-white">
                <a href="{{ route('home.index') }}" class="navbar-brand">
                    <img src="{{ asset('font_dist/img/logo.png') }}" class="logo" alt="">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="{{ route('home.index') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('about.index') }}" class="nav-item nav-link">About</a>

                        <div class="nav-item dropdown mega-dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu mega-menu0 bg-light p-4 mt-2">
                                <div class="container-fluid">
                                    <div class="row">
                                         <div class="col-md-4">
                                            <h6 class="text-uppercase mb-3">Marketing</h6>
                                            <a href="{{ route('services.seo.index') }}" class="dropdown-item">SEO</a>
                                            <a href="{{ route('services.social-media.index') }}" class="dropdown-item">Social Media</a>
                                            <a href="{{ route('services.email-campaign.index') }}" class="dropdown-item">Email Campaigns</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="text-uppercase mb-3">Design Services</h6>
                                            <a href="{{ route('services.web-design.index') }}" class="dropdown-item">Web Design</a>
                                            <a href="{{ route('services.ui-ux-design.index') }}" class="dropdown-item">UI/UX Design</a>
                                            <a href="{{ route('services.graphic-design.index') }}" class="dropdown-item">Graphic Design</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="text-uppercase mb-3">Development</h6>
                                            <a href="{{ route('services.web-dev.index') }}" class="dropdown-item">Web Development</a>
                                            <a href="{{ route('services.mobile-app.index') }}" class="dropdown-item">Mobile Apps</a>
                                            <a href="{{ route('services.custom-software.index') }}" class="dropdown-item">Custom Software</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('technologies.index') }}" class="nav-item nav-link">Technologies</a>

                        <div class="nav-item dropdown mega-dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Industries</a>
                            <div class="dropdown-menu mega-menu2 bg-light p-4 mt-2">
                                <div class="container-fluid">
                                    <div class="row">
                                         <div class="col-md-4">
                                            <h6 class="text-uppercase mb-3">Industries we serve</h6>
                                            <a href="#" class="dropdown-item">Healthcare</a>
                                            <a href="#" class="dropdown-item">Education</a>
                                            <a href="#" class="dropdown-item">Finance & Banking</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="dropdown-item">Real Estate</a>
                                            <a href="#" class="dropdown-item">Travel & Hospitality</a>
                                            <a href="#" class="dropdown-item">Food & Restaurants</a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#" class="dropdown-item">Fashion & Beauty</a>
                                            <a href="#" class="dropdown-item">E-commerce</a>
                                            <a href="#" class="dropdown-item">Corporate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="project.html" class="nav-item nav-link">Pricing</a>
                        <a href="contact.html" class="btn btn-light rounded-pill ms-2">Get in Touch</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>