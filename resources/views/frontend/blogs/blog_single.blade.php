<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    <title>{{ $blog->title }} | MyTaxZone</title>
    <meta name="description" content="{{ Str::limit(strip_tags($blog->content), 160) }}">
    <meta name="keywords" content="{{ $blog->title }}, MyTaxZone, Tax Guide, Tax Filing, Income Tax, GST, Finance, {{ $blog->tags }}">
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
              <a class="nav-link active" href="{{ route('blog') }}">Blogs</a>
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

<section class="page-banner page-title parallaxie" data-bg-img="{{ asset('assets/images/bg/Blogs.webp') }}">
  <div class="container">
    <div class="row">
      <div class="overlay"></div>
      <div class="col">
        <h1 class="banner-title">Blog_Single</h1>
      </div>
    </div>
  </div>
</section>

<!--page title end-->

<!--body content start-->

<div class="page-content">

  <!--blog start-->
  
  <section>
    <div class="container">
      <div class="row justify-content-center">
        {{-- @foreach ($blogs as $blog) --}}
        <div class="col-lg-10">
          <div class="blog-post">
            <div class="post-image">
              @if($blog->image)
                <img class="img-fluid rounded" src="{{ asset($blog->image) }}">
              @endif
              {{-- <img class="img-fluid rounded" src="{{ asset('assets/images/blog/01.jpg') }}" alt=""> --}}
            </div>
            <br>
            <div class="post-description ps-0 pe-0">
              <div class="post-meta">
                <ul class="list-inline">
                  <li><a href="#">{{ $blog->title }}</a>
                  </li>
                  <li>{{ $blog->created_at->format('d-m-Y') }}</li>
                </ul>
              </div>
              <div class="post-title">
                <p class="my-3">{!! $blog->content !!}</p>
              </div>
            </div>
          </div>
          <br>
          <div class="post-author">
            <div class="post-author-img">
              @if($blog->author_image)
                <img class="img-fluid" src="{{ asset($blog->author_image) }}">
              @endif
              {{-- <img class="img-fluid" src="{{ asset('assets/images/thumbnail/01.png') }}" alt=""> --}}
            </div> <span>{{ $blog->author_name }}</span>
          </div>
          
          {{-- <div class="blog-share d-sm-flex justify-content-between mt-5">
            <div class="social-icons">
              <h4 class="mb-2">Share: </h4>
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a>
                </li>
              </ul>
            </div>
            <div class="post-tags text-sm-end mt-3 mt-sm-0">
              <h4 class="mb-2">Tags: </h4>
              <ul class="list-inline">
                <li><a href="#">Business</a>
                </li>
                <li><a href="#">Consulting</a>
                </li>
                <li><a href="#">Css</a>
                </li>
              </ul>
            </div>
          </div> --}}
          {{-- <div class="media-holder mt-5">
            <h3 class="title mb-3">All Comments</h3>
            <div class="d-sm-flex bg-white box-shadow p-4 mb-5">
              <div class="flex-shrink-0">
                <img class="img-fluid rounded-circle box-shadow" alt="image" src="{{ asset('assets/images/thumbnail/01.png') }}">
              </div>
              <div class="flex-grow-1 ms-sm-4 mt-4 mt-sm-0">
                <h6 class="font-w-6">Ava Lust</h6> 
                <div class="comment-date mb-3"> <span class="date">19 September, 2019</span>
                </div>
                <p>It's ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase 'it's Greek to me' and 'greeking' have common semantic roots!</p>
                <div class="reply"> <a href="#" class="comment-reply">Reply</a>
                </div>
              </div>
            </div>
            <div class="d-sm-flex bg-white box-shadow p-4 mb-5">
              <div class="flex-shrink-0">
                <img class="img-fluid rounded-circle box-shadow" alt="image" src="{{ asset('assets/images/thumbnail/02.png') }}">
              </div>
              <div class="flex-grow-1 ms-sm-4 mt-4 mt-sm-0">
                <h6 class="font-w-6">Michaels Oert</h6> 
                <div class="comment-date mb-3"> <span class="date">12 September, 2019</span>
                </div>
                <p>It's ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase 'it's Greek to me' and 'greeking' have common semantic roots!</p>
                <div class="reply"> <a href="#" class="comment-reply">Reply</a>
                </div>
              </div>
            </div>
            <div class="d-sm-flex bg-white box-shadow p-4">
              <div class="flex-shrink-0">
                <img class="img-fluid rounded-circle box-shadow" alt="image" src="{{ asset('assets/images/thumbnail/03.png') }}">
              </div>
              <div class="flex-grow-1 ms-sm-4 mt-4 mt-sm-0">
                <h6 class="font-w-6">Jordi Paul</h6> 
                <div class="comment-date mb-3"> <span class="date">28 August, 2019</span>
                </div>
                <p>It's ironic that when the then-understood Latin was scrambled, it became as incomprehensible as Greek; the phrase 'it's Greek to me' and 'greeking' have common semantic roots!</p>
                <div class="reply"> <a href="#" class="comment-reply">Reply</a>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
        {{-- @endforeach --}}
        <br>
      </div>
    </div>
  </section>
  
  <!--blog end-->
  
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