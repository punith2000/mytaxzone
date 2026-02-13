<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    <title>About Us | MyTaxZone Business & Tax Consultants</title>
    <meta name="keywords" content="about mytaxzone, business tax consultants, expert tax advisors, accounting team, compliance experts, financial solutions, business partners"/>
    <meta name="description" content="Learn about MyTaxZone, your trusted partner for tax, accounting, and business compliance. Dedicated to simplifying finance for individuals & companies."/>
    <meta name="author" content="www.themeht.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    {{-- <title>@yield('About', 'MyTaxZone')</title> --}}

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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" ria-expanded="false" aria-label="Toggle navigation">
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
              <a class="nav-link active" href="{{ route('about') }}">About Us</a>
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

<section class="page-banner page-title parallaxie" data-bg-img="{{ asset('assets/images/bg/About.webp') }}">
  <div class="container">
    <div class="row">
      <div class="overlay"></div>
      <div class="col">
        <h1 class="banner-title">About us</h1>
      </div>
    </div>
  </div>
</section>

<!--page title end-->


<!--body content start-->

<div class="page-content">


<!--counter start-->

<section>
  <div class="container">
    @foreach ($abouts as $about)
    <div class="row">
      <div class="col-lg-6 col-12">
        <div class="row g-0">
          <div class="col-6">
            @if($about->image1)
              <img class="img-fluid rounded" src="{{ asset($about->image1) }}">
            @endif
            {{-- <img class="img-fluid rounded" src="{{ asset('assets/images/about/01.jpg') }}" alt="" /> --}}
          </div>
          <div class="col-6 ms-n4 mt-8">
            @if($about->image2)
              <img class="img-fluid rounded" src="{{ asset($about->image2) }}">
            @endif
            {{-- <img class="img-fluid rounded" src="{{ asset('assets/images/about/02.jpg') }}" alt="" /> --}}
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="section-title">
          <h6>About Us</h6>
          <h2 class="title">
            {{-- We Are The Best Consulting Company Business and innovation
            Marketing --}}
            {{ $about->title }}
          </h2>
          <p>
            {{-- MyTaxZone discovering the source behind the ubiquitous
            filler text. In seeing a sample of lorem ipsum, his interest
            was piqued by consectetur --}}
            {!! $about->content !!}
          </p>
        </div>
        <div class="d-sm-flex align-items-center justify-content-between">
          <div class="counter">
            <span class="count-number" data-to="20" data-speed="7000">
              {{-- 20 --}}
              {{ $about->count1 }}
            </span
            >
            <span>+</span>
            <h6>
              {{-- Experience --}}
              {{ $about->label1 }}
            </h6>
          </div>
          <div class="counter mt-5 mt-sm-0">
            <span class="count-number" data-to="400" data-speed="7000">
              {{-- 400 --}}
              {{ $about->count2 }}
            </span
            >
            <span>+</span>
            <h6>
              {{-- Success Reports --}}
              {{ $about->label2 }}
            </h6>
          </div>
          <div class="counter mt-5 mt-sm-0">
            <span class="count-number" data-to="15" data-speed="7000">
              {{-- 15 --}}
              {{ $about->count3 }}
            </span>
            <span>k</span>
            <h6>
              {{-- Happy Client --}}
              {{ $about->label3 }}
            </h6>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>

<!--counter end-->

<!--about start-->

<section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-12 order-lg-1">
        <div class="row g-0">
          <div class="col-sm-7 z-index-1">
            <div class="theme-bg rounded p-4">
              @foreach ($abouts as $about)
              <div class="section-title mb-0">
                <h2 class="title mb-0 font-w-5">
                  {{-- 20 --}}
                  {{ $about->count1 }}+ Years Experience of Business
                </h2>
              </div>
              @endforeach
            </div>
          </div>
          <div class="col-5 ms-n1 mt-sm-5">
            <img class="img-fluid rounded" src="{{ asset('assets/images/about/about-5.webp') }}" alt="">
          </div>
        </div>
        <div class="row mt-n10 z-index-0">
          <div class="col-10 mx-auto">
            <img class="img-fluid rounded" src="{{ asset('assets/images/about/about-4.webp') }}" alt="">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 mt-5 mt-lg-0">
         <div class="row">
            @foreach($features as $feature)
            <div class="col-lg-6 col-md-6 mb-3">
              <div class="featured-item" data-bg-color="rgba(49,67,239,0.070)">
                <div class="featured-icon">
                  {{-- <i class="flaticon-solution"></i> --}}
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

            {{-- <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
              <div class="featured-item" data-bg-color="rgba(253,91,3,0.070)">
                <div class="featured-icon"> <i class="flaticon-money"></i>
                </div>
                <div class="featured-title">
                  <h5>Financial Analysis</h5>
                </div>
                <div class="featured-desc">
                  <p>I will give you a complete account of the system, and expound the actual teachings</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <div class="featured-item" data-bg-color="rgba(131,199,43,0.070)">
                <div class="featured-icon"> <i class="flaticon-testing"></i>
                </div>
                <div class="featured-title">
                  <h5>Strategy & Marketing</h5>
                </div>
                <div class="featured-desc">
                  <p>I will give you a complete account of the system, and expound the actual teachings</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-5">
              <div class="featured-item" data-bg-color="rgba(233,15,42,0.070)">
                <div class="featured-icon"> <i class="flaticon-life"></i>
                </div>
                <div class="featured-title">
                  <h5>Investment Planning</h5>
                </div>
                <div class="featured-desc">
                  <p>I will give you a complete account of the system, and expound the actual teachings</p>
                </div>
              </div>
            </div> --}}

          </div>
      </div>
    </div>
    <div class="row mt-8 text-white">
      <div class="col-lg-4 theme-bg p-5">
        <i class="flaticon-brainstorming ic-3x"></i>
        <h5 class="font-w-7 text-white mt-3">Our Mission</h5>
        <p>
          Many desktop publishing packages and web page editors now use
          Lorem Ipsum as their default model text, and a search for
          'lorem ipsum' will uncover web sites infancy.
        </p>
        <a class="btn-simple" href="#"
          >Read More <i class="fas fa-long-arrow-alt-right"></i
        ></a>
      </div>
      <div class="col-lg-4 dark-bg p-5">
        <i class="flaticon-team ic-3x"></i>
        <h5 class="font-w-7 text-white mt-3">Our Vision</h5>
        <p>
          Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
          odit aut fugit, sed quia consequuntur magni dolores eos qui
          ratione voluptatem sequi nesciunt.
        </p>
        <a class="btn-simple" href="#"
          >Read More <i class="fas fa-long-arrow-alt-right"></i
        ></a>
      </div>
      <div class="col-lg-4 theme-bg-2 p-5">
        <i class="flaticon-money-2 ic-3x"></i>
        <h5 class="font-w-7 text-white mt-3">Our Value</h5>
        <p>
          Officiis debitis aut rerum necessitatibus saepe eveniet ut et
          voluptates repudiandae sint et molestiae non recusandae.
          Itaque earum rerum hic tenetur.
        </p>
        <a class="btn-simple" href="#"
          >Read More <i class="fas fa-long-arrow-alt-right"></i
        ></a>
      </div>
    </div>
  </div>
</section>

<!--about end-->

<!--about us start-->

{{-- <section>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-12">
        <div class="position-relative">
          <img class="img-fluid rounded box-shadow w-100" src="{{ asset('assets/images/about/03.jpg') }}" alt="">
          <div class="video-btn video-btn-pos"> <a class="play-btn popup-youtube me-3" href="{{ url('https://www.youtube.com/watch?v=P_wKDMcr1Tg') }}"><i class="fas fa-play"></i></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-12 mt-5 mt-lg-0">
        <div class="section-title">
          <h6>About Us</h6>
          <h2 class="title">The smartest thing to do with your Consulting Business</h2>
          <p>Cms discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur</p>
        </div>
        <div class="ht-progress-bar">
          <h4>Business</h4>
          <div class="progress" data-value="65">
            <div class="progress-bar">
              <div class="progress-parcent"><span>65</span>%</div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar">
          <h4>Consulting</h4>
          <div class="progress" data-value="75">
            <div class="progress-bar">
              <div class="progress-parcent"><span>75</span>%</div>
            </div>
          </div>
        </div>
        <div class="ht-progress-bar mb-0">
          <h4>Developing</h4>
          <div class="progress" data-value="80">
            <div class="progress-bar">
              <div class="progress-parcent"><span>80</span>%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<!--about us end-->

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

{{-- @include('frontend.faq.scripts') --}}

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