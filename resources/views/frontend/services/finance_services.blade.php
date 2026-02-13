<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    @foreach($finance as $fs)
    <title>{{ $fs->title }} | MyTaxZone</title>
    <meta name="description" content="{{ Str::limit(strip_tags($fs->content), 160) }}">
    <meta name="keywords" content="{{ $fs->title }}, MyTaxZone, Tax Guide, Tax Filing, Income Tax, GST, Finance, {{ $fs->tags }}">
    @endforeach
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
                class="nav-link dropdown-toggle active"
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
              <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
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
  <input type="text" class="form-control" id="search-input" placeholder="Search Here"/>
  <button type="submit" class="btn"></button>
  <span class="flaticon-close" id="close-search" title="Close Search"></span>
</form>
</div>
</div>

      <!--header end-->

  <!--page title start-->

  <section class="page-banner page-title parallaxie" data-bg-img="{{ asset('assets/images/bg/Finance.webp') }}">
    <div class="container">
      <div class="row">
        <div class="overlay"></div>
        <div class="col">
          <h1 class="banner-title">Finance</h1>
        </div>
      </div>
    </div>
  </section>

  <!--page title end-->

  <!--body content start-->

  <div class="page-content">

    <!--section start-->
  
    <section>
      <div class="container">
        <div class="row">
          @foreach($finance as $fs)
            <div class="col-lg-8 col-md-12">
              <h2 class="title mb-3">{{ $fs->title }}</h2>
              @if($fs->image)
                <img class="img-fluid w-100 rounded box-shadow my-4" src="{{ asset($fs->image) }}">
              @endif
              <p>{!! $fs->content !!}</p>
              <div class="row mt-5">
                @foreach($features as $feature)
                  <div class="col-sm-6 mt-5 mt-sm-0">
                    <div class="featured-item text-center">
                      <div class="featured-icon">
                        @if($feature->image)
                          <img src="{{ asset($feature->image) }}" width="70">
                        @endif
                      </div>
                      <div class="featured-title">
                        <h5>{{ $feature->title }}</h5>
                      </div>
                      <div class="featured-desc">
                        <p>{!! $feature->content !!}</p>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>
              {{-- <div class="row align-items-center mt-5">
            <div class="col-sm-6 mt-5 mt-sm-0">
              <canvas id="revenue-chart" style="display: block; width: 100%; height: 400px;"></canvas>
            </div>
            <div class="col-sm-6 mt-5 mt-lg-0">
              <ul class="list-unstyled list-icon">
                <li class="mb-3"><i class="flaticon-tick"></i> It has survived not only five centuries, leap typesetting</li>
                <li class="mb-3"><i class="flaticon-tick"></i> Cms discovering the source behind the ubiquitous</li>
                <li><i class="flaticon-tick"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur</li>
              </ul>
            </div>
              </div> --}}

            </div>
          @endforeach
          <div class="col-lg-4 col-md-12 sidebar mt-5 mt-lg-0">
            <div class="widget mb-5">
              <div class="sidebar-links">
                <ul class="list-unstyled">
                  <li>
                    <a href="{{ route('business_services') }}"><span class="link-icon link-arrow"></span> <p class="link-text">Business Services</p></a>
                  </li>
                  <li class="active"><a href="{{ route('finance_services') }}"><span class="link-icon link-arrow"></span><p class="link-text">Finance and Restructuring</p> </a>
                  </li>
                  <li>
                    <a href="{{ route('investment_services') }}"><span class="link-icon link-arrow"></span><p class="link-text">Investment Planning</p> </a>
                  </li>
                </ul>
              </div>
            </div>
            
            <div class="widget">
              <div class="widget-contact px-5 py-5 xs-px-2 xs-py-2 text-white" data-bg-img="{{ asset('assets/images/bg/home.png') }}" data-overlay="8">
                <h4 class="text-white text-capitalize">Contact us for help?</h4>
                <p>Contact us at the Consulting nearest to you or submit a business inquiry online.</p> <a class="btn" href="{{ route('contact') }}"><span>Contact Us</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!--section end-->
  
    </div>
  
    <!--body content end--> 

    <!--footer start-->

    @include('frontend.partials.footer')

    <!--footer end-->
  </div>

  <!-- page wrapper end -->

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