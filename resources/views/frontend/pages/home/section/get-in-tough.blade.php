<!--get in touch-->
<div class="container-fluid section-bootom mb-4">
    <div class="container">
        <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="text-uppercase text-head pt-5">Get In Touch</h1>
            <p class="sub-head mb-3">
               Feel Free To Explore Feedback From Our Past Clients To Get A Clearer Sense Of The Quality And Expertise We Consistently 
               Provide At Clickkart Digial.
            </p>
        </div>
       <div class="row">
            <div class="col-md-5 d-flex flex-column justify-content-center align-items-center">
                <div class="row">
                    <div class="col">
                        <div class="text-center mx-auto pb-1 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="text-uppercase text-head head-sm pt-5">Contact Information</h4>
                            <p class="sub-head sub-head-sm mb-3">
                                Reach Out Through Any Of These Channels
                            </p>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-between my-2">
                        <span><i class="fa fa-location-dot text-secondary fa-2x mx-2"></i></span>
                        <span>NK Studio Building, 2nd Floor, Opposite Gravity Mall, Kankarbagh Main Road, Patna, Bihar 800020</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center my-2">
                        <span><i class="fa fa-phone text-secondary fa-2x mx-2"></i></span>
                        <a href="tel:9155583376" class="call-link">+91 9155583376</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center my-2">
                        <span><i class="fa fa-envelope text-secondary fa-2x mx-2"></i></span>
                        <a href="mailto:Info@Clickkartdigital.Com" class="call-link">Info@Clickkartdigital.Com</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex align-items-center my-2">
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
                </div>
            </div>
            <!-- FORM HTML -->
            <div class="col-md-7">
                <div class="card px-4 shadow-sm rounded-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <h3 class="fw-bold text-head head-sm">Send A Message</h3>
                                <p class="text-muted">Fill Out The Form Below And I’ll Get Back To You Soon</p>
                            </div>
                        </div>

                        <?php 
                            //include 'mail/mail_status.php'
                        ?>
                        <!-- Form -->
                        <form action="mail/send_mail.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 my-2">
                                    <label class="form-label">Name*</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                                </div>
                                <div class="col-md-6 my-2">
                                    <label class="form-label">Email*</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col my-2">
                                    <label class="form-label">Phone Number*</label>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-2">
                                    <label class="form-label">Message (Optional)</label>
                                    <textarea name="message" rows="4" class="form-control" placeholder="Your message"></textarea>
                                </div>
                            </div>

                            <div class="form-check mb-1">
                                <input class="form-check-input" type="checkbox" required>
                                <label class="form-check-label">
                                    I Agree To The Terms & Conditions And Privacy Policy
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100 rounded-3">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

       </div>
    </div>
</div>

<!--get in touch End-->