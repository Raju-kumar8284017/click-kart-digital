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
        <textarea name="message" class="form-control" rows="5" placeholder="Write your message..." required></textarea>
    </div>

    <button class="btn btn-primary px-4 py-2 fw-bold w-100">
        Send Message
    </button>
</form>
