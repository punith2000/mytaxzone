<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    <title>Contact MyTaxZone | Tax & Business Service Experts</title>
    <meta name="keywords" content="contact mytaxzone, tax help, gst support, accounting consultant, business services contact, financial advisory, compliance assistance, tax consultant contact"/>
    <meta name="description" content="Get in touch with MyTaxZone for expert help in tax filing, accounting, GST, payroll, and business compliance. Start your hassle-free journey today."/>
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    {{-- <title>@yield('title', 'MyTaxZone')</title> --}}

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-mtz.png') }}" />

    <!-- inject css start -->

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/lightslider.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/spacing.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/base.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/shortcodes.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!--== color-customizer -->
    <link href="#" data-style="styles" rel="stylesheet" />
    <link href="{{ asset('assets/css/color-customize/color-customizer.css') }}" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap icons link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- inject css end -->
  </head>

  <body>
    <!-- page wrapper start -->

    <div class="page-wrapper">
      <!-- preloader start -->

      <div id="ht-preloader">
        <div class="clear-loader">
          <div class="loader"></div>
        </div>
      </div>

      <!-- preloader end -->

      <!--header start-->

      @include('frontend.partials.header')

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto">

            <!-- Home -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('cms') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                data-bs-toggle="dropdown"
                >Services</a
              >
              <div class="dropdown-menu">
                <ul class="list-unstyled">
                  <li>
                    <a href="{{ route('business_services') }}"
                      >Business Services</a
                    >
                  </li>
                  {{-- <li>
                    <a href="software-research.html"
                      >Software & Research</a
                    >
                  </li> --}}
                  <li>
                    <a href="{{ route('finance_services') }}"
                      >Finance and Restructuring</a
                    >
                  </li>
                  {{-- <li>
                    <a href="energy-environment.html"
                      >Energy & Environment</a
                    >
                  </li> --}}
                  <li>
                    <a href="{{ route('investment_services') }}"
                      >Investment Planning</a
                    >
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('blog') }}">Blogs</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" href="{{ route('contact') }}">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('faq') }}">FAQ?</a>
            </li>
          </ul>
        </div>
        <div class="right-nav align-items-center d-flex justify-content-end">
          <div id="faqIcon" class="btn me-1 me-sm-2">
            <span>Have any queries?</span>
          </div>
          @include('frontend.faq.query_form')
          {{-- <div class="search-icon me-1 me-sm-2">
            <a id="search" href="javascript:void(0)">
              <i class="flaticon-search"></i>
            </a>
          </div> --}}
          {{-- <div class="profile">
            <a class="dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-fluid rounded-circle" src="{{ asset('assets/images/thumbnail/01.png') }}" alt=""/>
            </a>
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li>
                  <a href="{{ route('frontend.user_login.login') }}" class="logout">Logout</a>
                </li>
              </ul>
            </div>
          </div> --}}
        </div>
      </nav>
    </div>
  </div>
</div>
</div>
</header>

<div class="search-input" id="search-input-box">
<div class="container">
<form class="d-flex justify-content-between search-inner">
  <input
    type="text"
    class="form-control"
    id="search-input"
    placeholder="Search Here"
  />
  <button type="submit" class="btn"></button>
  <span
    class="flaticon-close"
    id="close-search"
    title="Close Search"
  ></span>
</form>
</div>
</div>

      <!--header end-->

      <!--page title start-->

<section class="page-banner page-title parallaxie" data-bg-img="{{ asset('assets/images/bg/Contact.webp') }}">
  <div class="container">
    <div class="row">
      <div class="overlay"></div>
      <div class="col">
        <h1 class="banner-title">Contact us</h1>
      </div>
    </div>
  </div>
</section>

<!--page title end-->

<!--body content start-->

<div class="page-content">

  <!--contact start-->
  
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="contact-main bg-white p-5 shadow rounded-4">
            @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif
            <form id="contact-form" class="row g-4" method="POST" action="{{ route('contact.store') }}">
              @csrf
              <!-- Name -->
              <div class="col-md-6">
                <label for="form_name" class="form-label">Full Name</label>
                <input type="text" id="form_name" name="name" class="form-control" placeholder="Your name" required>
              </div>
        
              <!-- Email -->
              <div class="col-md-6">
                <label for="form_email" class="form-label">Email</label>
                <input type="email" id="form_email" name="email" class="form-control" placeholder="you@example.com" required>
              </div>
        
              <!-- Phone -->
              <div class="col-md-6">
                <label for="form_phone" class="form-label">Phone</label>
                <input type="tel" id="form_phone" name="phone" class="form-control" placeholder="+91 12345 67890">
              </div>
        
              <!-- Subject -->
              <div class="col-md-6">
                <label for="form_subject" class="form-label">Subject</label>
                <input type="text" id="form_subject" name="subject" class="form-control" placeholder="Brief subject" required>
              </div>
        
              <!-- Message -->
              <div class="col-md-12">
                <label for="form_message" class="form-label">Message</label>
                <textarea id="form_message" name="message" rows="4" class="form-control" placeholder="Your message..." required></textarea>
              </div>
        
              <!-- Submit Button -->
              <div class="col-md-12 text-center">
                <button type="submit" class="btn px-4 py-2" style="background-color:#003399; color:#fff; border-radius: 0.5rem;">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="section-title">
            <h6>Contact Us</h6>
            <h2 class="title">Describe your project and leave us your contact info</h2>
            <p>Get in touch and let us know how we can help. Fill out the form and we’ll be in touch as soon as possible.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="contact-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="contact-media"> <i class="flaticon-paper-plane"></i>
            <h4 class="text-theme">Address:</h4>
            <p class="mb-3">See Our Branch Office</p>
            <div class="mb-3">
              <h6 class="font-w-5">India Office:</h6>
              <span class="text-black">423B, Road Wordwide Country, India</span>
            </div>
            <div>
              <h6 class="font-w-5">India Office:</h6>
              <span class="text-black">423B, Road Wordwide Country, India</span>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="contact-media"> <i class="flaticon-email"></i>
            <h4 class="text-theme">Email Us</h4>
            <p class="mb-3">Email us for general queries, including marketing and partnership opportunities.</p> <a href="mailto:dummy@gmail.com"> dummy@gmail.com</a>
            <a href="mailto:dummy@gmail.com"> dummy@gmail.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
          <div class="contact-media"> <i class="flaticon-phone"></i>
            <h4 class="text-theme">Call Us</h4>
            <p class="mb-3">Call us to speak to a member of our team.</p> <a href="tel:+912345678900">+91-234-567-8900</a>
            <a href="tel:+912345678900">+91-234-567-8900</a>
            <a href="tel:+912345678900">+91-234-567-8900</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div class="map iframe-h-2">
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>
  </div>
  
  <!--contact end-->
  
  </div>
  
  <!--body content end-->

  <!--footer start-->

  @include('frontend.partials.footer')

  <!--footer end-->
</div>

<!-- page wrapper end -->

<!--color-customizer start-->

{{-- <div class="color-customizer closed">
  <div class="color-button">
    <a class="opener" href="#"> <i class="fas fa-spinner fa-spin"></i> </a>
  </div>
  <div class="clearfix color-chooser text-center">
    <ul class="colorChange clearfix">
      <li
        class="theme-default selected"
        title="theme-default"
        data-style="color-1"
      ></li>
      <li class="theme-2" title="theme-2" data-style="color-2"></li>
      <li class="theme-3" title="theme-3" data-style="color-3"></li>
      <li class="theme-4" title="theme-4" data-style="color-4"></li>
    </ul>
  </div>
</div> --}}

<!--color-customizer end-->

{{-- FAQ --}}
{{-- @include('frontend.faq.query_form') --}}

{{-- Chatbot --}}
@include('frontend.faq.chatbot')

<!--back-to-top start-->

<div class="scroll-top">
  <a class="smoothscroll" href="#top"><i class="flaticon-top"></i></a>
</div>

<!--back-to-top end-->

<!-- inject js start -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function() {
      let isSubmitting = false; 

      $('#faqForm').on('submit', function(e) {
          e.preventDefault(); 

          if (isSubmitting) return;
          isSubmitting = true;

          $.ajax({
              url: "{{ route('faq.submit') }}",
              type: "POST",
              data: $(this).serialize(),
              success: function(response) {
                  if (response.success) {
                      alert(response.message || "Your question has been submitted successfully.");
                      $('#faqForm')[0].reset();

                      // hide popup after success
                      $('#faqPopup').hide();
                  } else {
                      alert("Error: " + (response.message || "Something went wrong."));
                  }
              },
              error: function(xhr) {
                  let response = xhr.responseJSON;
                  if (xhr.status === 403) {
                      if (response.error === "not_registered") {
                          $('#faqPopup').hide();
                          $('#registerPopup').show();
                      } else if (response.error === "limit_exceeded") {
                          $('#faqPopup').hide();
                          $('#pricingPopup').show();
                      } else if (response.error === "name_mismatch") {
                          alert(response.message);
                      }
                  } else {
                      alert("Unexpected error: " + (response?.message || "Please try again."));
                  }
              },
              complete: function() {
                  isSubmitting = false; 
              }
          });
      });

      // Icon open
      $('#faqIcon').on('click', function() {
          $('#faqPopup').css("display","flex");
      });

      // Close button
      $('#closeFaqForm').on('click', function() {
          $('#faqPopup').hide();
      });

      // Click outside
      $(window).on('click', function(e) {
          if (e.target.id === 'faqPopup') {
              $('#faqPopup').hide();
          }
      });
  });
</script>

<script>
  function openPopup(userStatus, hasPlan) {
    // Hide both first
    document.getElementById('registerPopup').style.display = 'none';
    document.getElementById('pricingPopup').style.display = 'none';

    if (!userStatus) {
      document.getElementById('registerPopup').style.display = 'block';
    } else if (userStatus && !hasPlan) {
      document.getElementById('pricingPopup').style.display = 'block';
    } else {
      // Show actual FAQ form popup
      document.getElementById('faqFormPopup').style.display = 'block';
    }
  }

  // Close popup when clicking the close button
  document.getElementById('closeRegisterPopup').addEventListener('click', function() {
    document.getElementById('registerPopup').style.display = 'none';
  });

  function closePricingPopup() {
    document.getElementById('pricingPopup').style.display = 'none';
  }
</script>

<script>
  // Highlight selected plan
  document.querySelectorAll('.plan-card').forEach(card => {
    card.addEventListener('click', function () {
      document.querySelectorAll('.plan-card').forEach(c => c.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // Handle Get It Now button click
  document.querySelectorAll('.get-plan-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.stopPropagation(); // prevent double triggering
      const selectedPlan = this.closest('.plan-card').dataset.plan;

      // Call your payment API here
      startPayment(selectedPlan);
    });
  });

  function startPayment(plan) {
    console.log("Triggering payment for plan:", plan);
    // Example: Laravel route call or API fetch
    // fetch(`/subscribe/${plan}`, { method: 'POST' })
    //   .then(res => res.json())
    //   .then(data => console.log("Payment started", data));
    alert("Payment flow started for " + plan + " plan!");
  }
</script>

<!-- faq-icon -->
<script>
  document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
      const item = button.closest('.faq-item');
      const allItems = document.querySelectorAll('.faq-item');
  
      allItems.forEach(i => {
        if (i !== item) {
          i.classList.remove('active');
        }
      });
  
      item.classList.toggle('active');
    });
  });
</script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const faqPopup = document.getElementById("faqPopup");
    const faqOverlay = document.getElementById("faqOverlay");
    const openBtn = document.getElementById("faqIcon"); // or any trigger button
    const closeBtn = document.getElementById("closeFaqForm");
  
    let scrollPosition = 0;

    // Open popup
    if (openBtn) {
      openBtn.addEventListener("click", function () {
        document.body.style.position = "fixed";
            document.body.style.top = `-${scrollPosition}px`;
            document.body.style.left = "0";
            document.body.style.right = "0";
        document.body.style.overflow = "hidden"; // disable background scroll
      });
    }
  
    // Close popup
    if (closeBtn) {
      closeBtn.addEventListener("click", function () {
        faqPopup.style.display = "none";
        faqOverlay.style.display = "none";
        document.body.style.position = "";
        document.body.style.top = "";
        document.body.style.left = "";
        document.body.style.right = "";
        document.body.style.overflow = "";

        window.scrollTo(0, scrollPosition); // restore scroll position
        document.body.style.overflow = "auto"; // re-enable scroll
      });
    }
  
    // Close when clicking outside modal
    faqOverlay.addEventListener("click", function () {
      faqPopup.style.display = "none";
      faqOverlay.style.display = "none";
      document.body.style.overflow = "auto";
    });
  });
</script>  

<!--== jquery -->
<script src="{{ asset('assets/js/theme.js') }}"></script>

<!--== theme-plugin -->
<script src="{{ asset('assets/js/theme-plugin.js') }}"></script>

<!--== color-customize -->
<script src="{{ asset('assets/js/color-customize/color-customizer.js') }}"></script>

<!--== theme-script -->
<script src="{{ asset('assets/js/theme-script.js') }}"></script>

<!-- inject js end -->
</body>
</html>