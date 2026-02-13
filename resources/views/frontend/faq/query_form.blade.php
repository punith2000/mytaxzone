<!-- Floating FAQ Icon -->
{{-- <div id="faqIcon">
    <i class="fas fa-question fa-lg"></i>
</div> --}}
<!-- Background Overlay -->
<div id="faqOverlay" style="display:none; position: fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.6); z-index:9998;"></div>

<div id="faqPopup" style="display: none;" class="faq-modal col-md-12 mx-auto">
  <div class="faq-content contact-main bg-white p-5 shadow rounded-4 position-relative">
    <span id="closeFaqForm" style="position:absolute; top:10px; right:15px; cursor:pointer; font-size:20px;">&times;</span>
    <h4 class="mb-3 text-center" style="color: #003399">Any Quieries?</h4>
    <br>
    <form id="faqForm" class="row g-4" method="POST" action="{{ route('faq.submit') }}">
      @csrf
      <!-- First Name -->
      <div class="col-md-12">
        {{-- <label for="name" class="form-label">Full Name</label> --}}
        <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" required>
      </div>

      <!-- Email -->
      <div class="col-md-12">
        {{-- <label for="form_email" class="form-label">Email</label> --}}
        <input type="email" id="form_email" name="email" class="form-control" placeholder="you@example.com" required>
      </div>

      <!-- Phone -->
      <div class="col-md-12">
        {{-- <label for="form_phone" class="form-label">Phone</label> --}}
        <input type="tel" id="form_phone" name="phone" class="form-control" placeholder="+91 12345 67890">
      </div>

      <!-- question -->
      <div class="col-md-12">
        {{-- <label>Question</label> --}}
        <textarea class="form-control" name="question" id="question" rows="4" placeholder="Type your question here..." required></textarea>
      </div>

      <!-- Submit Button -->
      <div class="col-md-12 text-center">
        <button type="submit" class="btn px-4 py-2" style="background-color:#003399; color:#fff; border-radius: 0.5rem;">
          Send
        </button>
      </div>
    </form>
  </div>
  <div id="responseMessage"></div>
</div>

<!-- Register popup -->
<div id="registerPopup" style="display:none; position:fixed; inset:0; background:#0008; z-index:2000;">
  <div style="max-width:420px; margin:10% auto; background:#fff; padding:20px; border-radius:12px; text-align:center; position:relative;">
    <!-- Close button -->
    <button id="closeRegisterPopup" 
            style="position:absolute; top:10px; right:10px; border:none; background:transparent; font-size:20px; cursor:pointer;">
      &times;
    </button>
    <h4>User not registered</h4>
    <p>Please register to submit questions.</p>
    <a id="registerLink" href="{{ route('frontend.user_login.register') }}" class="btn btn-primary">Go to Registration</a>
  </div>
</div>

<!-- Pricing Popup -->
<div id="pricingPopup" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.6); z-index:2000; overflow-y:auto;">
  <div style="max-width:950px; margin:5% auto; background:linear-gradient(135deg,rgba(255, 255, 255, 0.1),rgba(255, 255, 255, 0.05)); padding:40px; border-radius:20px; position:relative;">

    <button onclick="closePricingPopup()" style="position:absolute; top:15px; right:15px; border:none; background:#474747; color:#fff; font-size:18px; padding:4px 10px; border-radius:50%; cursor:pointer;">✕</button>

    <h2 style="text-align:center; color:#fff; margin-bottom:10px;">Upgrade to Continue</h2>
    <p style="text-align:center; color:#fff; margin-bottom:40px; font-size:16px;">
      Choose a plan that fits you:
    </p>

    <div class="container">
      <div class="row justify-content-center">
        <!-- Free Plan -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="price-table text-center plan-card pricing-card free" data-plan="free" style="border:2px solid #003399; border-radius:16px; padding:30px; cursor:pointer;">
            <h4 class="price-title" style="color:#003399; font-weight:700;">Free</h4>
            <ul class="list-unstyled" style="font-size:14px; line-height:1.8; color: black;">
              <li>✔ Free Domain</li>
              <li>✔ 500 MB Storage</li>
              <li>✔ 20 Database</li>
              <li>✔ Unlimited Site Licenses</li>
              <li>✔ Professional Support</li>
            </ul>
            <h2 style="color:#fd5b03; font-weight:800; font-size:36px;"><i class="bi bi-currency-rupee"></i>23</h2>
            <span style="color:#666;">/ Month</span>
            <button class="pricing-btn btn-block mt-3 get-plan-btn" onclick="selectPlan(this)" style="background:#003399; color:#fff; border-radius:30px; padding:10px 20px;">Get It Now</button>
          </div>
        </div>

        <!-- Standard Plan -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="price-table text-center plan-card pricing-card standard active" data-plan="standard" style="border:2px solid #fd5b03; border-radius:16px; padding:30px; cursor:pointer;">
            <h4 class="price-title" style="color:#003399; font-weight:700;">Standard</h4>
            <ul class="list-unstyled" style="font-size:14px; line-height:1.8; color: black;">
              <li>✔ Free Domain</li>
              <li>✔ 1 GB Storage</li>
              <li>✔ 50 Database</li>
              <li>✔ Unlimited Site Licenses</li>
              <li>✔ Premium Support</li>
            </ul>
            <h2 style="color:#fd5b03; font-weight:800; font-size:36px;"><i class="bi bi-currency-rupee"></i>88</h2>
            <span style="color:#666;">/ Month</span>
            <button class="pricing-btn btn-block mt-3 get-plan-btn" onclick="selectPlan(this)" style="background:#003399; color:#fff; border-radius:30px; padding:10px 20px;">Get It Now</button>
          </div>
        </div>

        <!-- Premium Plan -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="price-table text-center plan-card pricing-card premium" data-plan="premium" style="border:2px solid #003399; border-radius:16px; padding:30px; cursor:pointer;">
            <h4 class="price-title" style="color:#003399; font-weight:700;">Premium</h4>
            <ul class="list-unstyled" style="font-size:14px; line-height:1.8; color: black;">
              <li>✔ Free Domain</li>
              <li>✔ 5 GB Storage</li>
              <li>✔ Unlimited Database</li>
              <li>✔ Unlimited Site Licenses</li>
              <li>✔ 24/7 Priority Support</li>
            </ul>
            <h2 style="color:#fd5b03; font-weight:800; font-size:36px;"><i class="bi bi-currency-rupee"></i>139</h2>
            <span style="color:#666;">/ Month</span>
            <button class="pricing-btn btn-block mt-3 get-plan-btn" onclick="selectPlan(this)" style="background:#003399; color:#fff; border-radius:30px; padding:10px 20px;">Get It Now</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>