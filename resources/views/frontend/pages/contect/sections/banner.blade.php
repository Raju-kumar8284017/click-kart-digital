<!-- CONTACT US SECTION -->
<section class="py-5" style="background:#f8f9fa;">
  <div class="container">
    <h2 class="text-center fw-bold mb-4" style="color:#222;">Contact Us</h2>
    <p class="text-center mb-5" style="color:#555;">
      Have a project in mind or need assistance? Our team is here to help you.
      Reach out through the form below or connect using our contact details.
    </p>

    <div class="row g-4">

      <!-- Contact Info -->
      <div class="col-lg-5">
        <div class="p-4 shadow rounded bg-white">
          <h4 class="fw-bold" style="color:#222;">Get in Touch</h4>
          <p style="color:#555;">We respond within 24 hours.</p>

          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-geo-alt fs-3 me-3" style="color:#007bff;"></i>
            <p class="mb-0" style="color:#444;">Patna, Bihar, India</p>
          </div>

          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-telephone fs-3 me-3" style="color:#007bff;"></i>
            <p class="mb-0" style="color:#444;">+91 7061458916</p>
          </div>

          <div class="d-flex align-items-start mb-3">
            <i class="bi bi-envelope fs-3 me-3" style="color:#007bff;"></i>
            <p class="mb-0" style="color:#444;">info@clickkartdigital.com</p>
          </div>

          <div class="d-flex align-items-start">
            <i class="bi bi-globe fs-3 me-3" style="color:#007bff;"></i>
            <p class="mb-0" style="color:#444;">www.clickkartdigital.com</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="col-lg-7">
        <div class="p-4 shadow rounded bg-white">
          <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold" style="color:#222;">Full Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-semibold" style="color:#222;">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Your email" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold" style="color:#222;">Phone Number</label>
                <input type="text" name="phone" class="form-control" placeholder="Your phone number" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold" style="color:#222;">Message</label>
                <textarea name="message" class="form-control" rows="5"
                    placeholder="Write your message..." required></textarea>
            </div>

            <button class="btn btn-primary px-4 py-2 fw-bold">
                Send Message
            </button>
        </form>

        </div>
      </div>

    </div>
  </div>
</section>
