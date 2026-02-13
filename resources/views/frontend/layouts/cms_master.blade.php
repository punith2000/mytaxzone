<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8" />
    <title>MyTaxZone | Tax, Accounting & Business Compliance Services</title>
    <meta name="keywords" content="mytaxzone, tax services, gst filing, business compliance, accounting, bookkeeping, payroll, company registration, financial advisory, business tax"/>
    <meta name="description" content="Simplify your business journey with MyTaxZone. Expert services in tax filing, GST, accounting, payroll, and company registration for startups & enterprises."/>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto">

            <!-- Home -->
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('cms') }}">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
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
              <img class="img-fluid rounded-circle"
                src="{{ asset('assets/images/thumbnail/01.png') }}" alt=""/>
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

      <!--hero section start-->

      <section class="page-banner banner p-0 position-relative fullscreen-banner">
        <div class="banner-slider owl-carousel no-pb"
          data-dots="false" data-nav="true">
          @foreach ($homes as $home)
          <div class="item" data-overlay="5">
            @if($home->image)
              <img src="{{ asset($home->image) }}" style="width: 100%; height: 900px;">
            @endif
            <div class="overlay"></div>
            <div class="align-center p-0">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-7 col-md-12" style="color: #fff;">
                    <h1 class="banner-title mb-4 animated1" style="color: #fff;">
                      {{ $home->title }}
                    </h1>
                    <p class="lead animated2">
                      {!! $home->content !!}
                    </p>
                    <div class="animated3 mt-5">
                      <a class="btn btn-2" href="#">
                        <span class="btn-icon btn-arrow"></span>
                        <span class="btn-text">Learn More</span>
                      </a>
                      <a class="btn btn-2 btn-border white" href="{{ route('contact') }}" style="background-color: #fd5b03;">
                        <span class="btn-icon btn-arrow"></span>
                        <span class="btn-text">Contact Us</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
          {{-- <div class="item" data-bg-img="images/bg/02.jpg" data-overlay="5">
            <div class="align-center p-0">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-7 col-md-12">
                    <h1 class="mb-4 text-white animated1">
                      Provide Professional Consulting
                    </h1>
                    <p class="lead text-white animated2">
                      Start working with an company that provide everything you
                      need to generate awareness, drive traffic, connect with
                      customers.
                    </p>
                    <div class="animated3 mt-5">
                      <a class="btn btn-2" href="#">
                        <span class="btn-icon btn-arrow"></span>
                        <span class="btn-text">Learn More</span>
                      </a>
                      <a class="btn btn-2 btn-border white" href="#">
                        <span class="btn-icon btn-arrow"></span>
                        <span class="btn-text">Contact Us</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </section>

      <!--hero section end-->

      <!--body content start-->

      <div class="page-content">
        @yield('content')
        <!--form start-->

        <section class="position-relative pt-0 mt-md-n8 z-index-1">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="row g-0 box-shadow">
                  <div class="col-lg-5 col-md-12 theme-bg p-5">
                    <div class="section-title mb-4">
                      <h2 class="title">Free Consultation</h2>
                    </div>
                    <p class="line-h-3 text-rgba">
                      MyTaxZone have facility to produce adipisicing elit,
                      changes and industrial systems.
                    </p>
                    {{-- @if(session('success'))
                      <p style="color:green;">{{ session('success') }}</p>
                    @endif --}}
                    @if(session('success'))
                      <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif
                    <form id="queto-form" method="POST" action="{{ route('consultation.store') }}">
                      @csrf
                      <div id="formmessage"></div>
                      <div class="form-group">
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name" required="required"/>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Email" required="required"/>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="form-group">
                        <input id="form_number" type="text" name="phone" class="form-control" placeholder="Phone Number" required="required"/>
                      </div>
                      <div class="form-group">
                        <select name="service" class="form-control" id="service" required>
                          <option>- Select Service</option>
                          <option>Consulting</option>
                          <option>Business Services</option>
                          <option>Finance and Restructuring</option>
                          <option>Investment planning</option>
                        </select>
                      </div>
                      <button class="btn btn-2 btn-border white mt-5">
                        <span class="btn-icon btn-arrow"></span>
                        <span class="btn-text">Submit</span>
                      </button>
                    </form>
                  </div>
                  <div class="col-lg-7 col-md-12 white-bg d-flex align-items-center">
                    <div class="p-3 p-md-5 w-100">
                      <div class="row">
                        @foreach($features as $feature)
                        <div class="col-lg-6 col-md-6 mb-4">
                          <div class="featured-item" data-bg-color="rgba(49,67,239,0.070)">
                            <div class="featured-icon">
                              {{-- <i class="flaticon-solution"></i> --}}
                              @if($feature->image)
                                <img src="{{ asset($feature->image) }}" width="70">
                              @endif
                            </div>
                            <div class="featured-title">
                              <h5>
                                {{ $feature->title }}
                              </h5>
                            </div>
                            <div class="featured-desc">
                              <p>
                                {!! $feature->content !!}
                              </p>
                            </div>
                          </div>
                        </div>
                        @endforeach

                        {{-- <div class="col-lg-6 col-md-6 mt-5 mt-md-0">
                          <div
                            class="featured-item"
                            data-bg-color="rgba(253,91,3,0.070)"
                          >
                            <div class="featured-icon">
                              <i class="flaticon-money"></i>
                            </div>
                            <div class="featured-title">
                              <h5>Financial Analysis</h5>
                            </div>
                            <div class="featured-desc">
                              <p>
                                I will give you a complete account of the
                                system, and expound the actual teachings
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-5">
                          <div
                            class="featured-item"
                            data-bg-color="rgba(131,199,43,0.070)"
                          >
                            <div class="featured-icon">
                              <i class="flaticon-testing"></i>
                            </div>
                            <div class="featured-title">
                              <h5>Strategy & Marketing</h5>
                            </div>
                            <div class="featured-desc">
                              <p>
                                I will give you a complete account of the
                                system, and expound the actual teachings
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt-5">
                          <div
                            class="featured-item"
                            data-bg-color="rgba(233,15,42,0.070)"
                          >
                            <div class="featured-icon">
                              <i class="flaticon-life"></i>
                            </div>
                            <div class="featured-title">
                              <h5>Investment Planning</h5>
                            </div>
                            <div class="featured-desc">
                              <p>
                                I will give you a complete account of the
                                system, and expound the actual teachings
                              </p>
                            </div>
                          </div>
                        </div> --}}

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--form end-->

        <!--about start-->

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
                    {{-- <img class="img-fluid rounded" src="{{ asset('assets/images/about/01.jpg') }}" alt=""/> --}}
                  </div>
                  <div class="col-6 ms-n4 mt-8">
                    @if($about->image2)
                      <img class="img-fluid rounded" src="{{ asset($about->image2) }}">
                    @endif
                    {{-- <img class="img-fluid rounded" src="{{ asset('assets/images/about/02.jpg') }}" alt=""/> --}}
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
                    {{-- Cms discovering the source behind the ubiquitous
                    filler text. In seeing a sample of lorem ipsum, his interest
                    was piqued by consectetur --}}
                    {!! $about->content !!}
                  </p>
                </div>
                <div
                  class="d-sm-flex align-items-center justify-content-between"
                >
                  <div class="counter">
                    <span class="count-number" data-to="20" data-speed="7000">
                      {{-- 20 --}}
                      {{ $about->count1 }}
                    </span>
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
                    </span>
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

        <!--case studies start-->

        @include('frontend.partials.case_study')

        <!--case studies end-->

        <!--testimonial start-->

        @include('frontend.partials.testimonial')

        <!--testimonial end-->

        <!--team start-->

        @include('frontend.partials.team')

        <!--team end-->

        <!--client start-->

        <section class="p-0 z-index-1 text-center">
          <div class="container-fluid p-0">
            <div class="row align-items-center">
              <div class="col-lg-10 ms-auto">
                <div class="px-lg-10 py-lg-10 p-5" data-bg-color="#f5fbee">
                  <div class="row align-items-center">
                    <div class="col-lg col-md-4 col-6">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/01.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/02.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6 mt-4 mt-md-0">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/03.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6 mt-4 mt-lg-0">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/04.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6 mt-4 mt-lg-0">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/05.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row align-items-center mt-4">
                    <div class="col-lg col-md-4 col-6">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/06.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6 mt-4 mt-md-0">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/07.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6 mt-4 mt-md-0">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/08.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="col-lg col-md-4 col-6 mt-4 mt-lg-0">
                      <div class="client-logo">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/client/01.png') }}"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <section class="p-0 mt-n8 z-index-0">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-lg-4 dark-bg px-5 custom-pt-1 pb-6 pb-lg-0">
                <div class="section-title">
                  <h6>Services</h6>
                  <h2 class="title">Why Choose MyTaxZone Service</h2>
                  <p class="text-light">
                    MyTaxZone discovering the source behind the ubiquitous
                    filler text. In seeing a sample of lorem ipsum, his interest
                    was piqued by consectetur
                  </p>
                </div>
                <div class="video-btn d-flex align-items-center">
                  <a
                    class="play-btn popup-youtube me-3"
                    href="{{ url('https://www.youtube.com/watch?v=P_wKDMcr1Tg') }}"
                    ><i class="fas fa-play"></i
                  ></a>
                  <h5 class="text-white">Watch Now</h5>
                </div>
              </div>
              <div class="col-lg-8 custom-pt-1 pb-5">
                <div class="row">
                  @foreach($services as $service)
                  <div class="col-lg-4 col-sm-6">
                    <div class="featured-item style-6 text-center">
                      <div class="featured-title">
                        <h5>
                          {{-- Software and Research --}}
                          {{ $service->title }}
                        </h5>
                      </div>
                      <div class="featured-desc">
                        <p>
                          {{-- Get in touch with us and we’ll figure out something that works for everyone --}}
                          {!! $service->content !!}
                        </p>
                      </div>
                      <div class="icon-box">
                        <div class="featured-icon">
                          {{-- <i class="flaticon-research"></i> --}}
                          @if($service->image)
                            <img src="{{ asset($service->image) }}" width="70">
                          @endif
                        </div>
                        <div class="hover-icon">
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach

                  {{-- <div class="col-lg-4 col-sm-6 mt-5 mt-sm-0">
                    <div class="featured-item style-6 active text-center">
                      <div class="featured-title">
                        <h5>Taxes And Efficiency</h5>
                      </div>
                      <div class="featured-desc">
                        <p>
                          Get in touch with us and we’ll figure out something
                          that works for everyone
                        </p>
                      </div>
                      <div class="icon-box">
                        <div class="featured-icon">
                          <i class="flaticon-report"></i>
                        </div>
                        <div class="hover-icon">
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt-5 mt-lg-0">
                    <div class="featured-item style-6 text-center">
                      <div class="featured-title">
                        <h5>Financial And Analysis</h5>
                      </div>
                      <div class="featured-desc">
                        <p>
                          Get in touch with us and we’ll figure out something
                          that works for everyone
                        </p>
                      </div>
                      <div class="icon-box">
                        <div class="featured-icon">
                          <i class="flaticon-testing"></i>
                        </div>
                        <div class="hover-icon">
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="featured-item style-6 text-center active">
                      <div class="featured-title">
                        <h5>Global Partnership</h5>
                      </div>
                      <div class="featured-desc">
                        <p>
                          Get in touch with us and we’ll figure out something
                          that works for everyone
                        </p>
                      </div>
                      <div class="icon-box">
                        <div class="featured-icon">
                          <i class="flaticon-connection"></i>
                        </div>
                        <div class="hover-icon">
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="featured-item style-6 text-center">
                      <div class="featured-title">
                        <h5>Innovative solutions</h5>
                      </div>
                      <div class="featured-desc">
                        <p>
                          Get in touch with us and we’ll figure out something
                          that works for everyone
                        </p>
                      </div>
                      <div class="icon-box">
                        <div class="featured-icon">
                          <i class="flaticon-concept"></i>
                        </div>
                        <div class="hover-icon">
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mt-5">
                    <div class="featured-item style-6 text-center active">
                      <div class="featured-title">
                        <h5>Professional Support</h5>
                      </div>
                      <div class="featured-desc">
                        <p>
                          Get in touch with us and we’ll figure out something
                          that works for everyone
                        </p>
                      </div>
                      <div class="icon-box">
                        <div class="featured-icon">
                          <i class="flaticon-customer-service"></i>
                        </div>
                        <div class="hover-icon">
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                          <div class="iconcircle"></div>
                        </div>
                      </div>
                    </div>
                  </div> --}}

                </div>
              </div>
            </div>
          </div>
        </section>

        <!--client end-->

        <!--blog start-->

        <section>
          <div class="container">
            <div class="row justify-content-center text-center">
              <div class="col-lg-8 col-md-12">
                @foreach($blogheader as $bloghead)
                <div class="section-title">
                  <h6>Blog</h6>
                  <h2 class="title">{{ $bloghead->title  }}</h2>
                  <p>
                    {!! $bloghead->content  !!}
                  </p>
                </div>
                @endforeach
              </div>
            </div>
            <div class="row">
              @foreach ($blogs as $blog)
              <div class="col-lg-4 col-md-12">
                <div class="post">
                  <div class="post-image">
                    @if($blog->image)
                      <img class="img-fluid rounded w-100" src="{{ asset($blog->image) }}">
                    @endif
                    {{-- <img class="img-fluid rounded w-100" src="{{ asset('assets/images/blog/01.jpg') }}"
                      alt=""/> --}}
                  </div>
                  <div class="post-desc">
                    <div class="post-meta">
                      <ul class="list-inline">
                        <li><a href="{{ route('blog_single', $blog->id) }}">{{ $blog->title }}</a></li>
                        <li>{{ $blog->created_at->format('d-m-Y') }}</li>
                      </ul>
                    </div>
                    <div class="post-title">
                      <p>
                        <a href="{{ route('blog_single', $blog->id) }}">
                          {!! $blog->content !!}
                        </a>
                      </p>
                    </div>
                    <div class="post-author">
                      <div class="post-author-img">
                        @if($blog->author_image)
                          <img src="{{ asset($blog->author_image) }}">
                        @endif
                        {{-- <img class="img-fluid" src="{{ asset('assets/images/thumbnail/01.png') }}"
                          alt=""/> --}}
                      </div>
                      <span>{{ $blog->author_name }}</span>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

              {{-- <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                <div class="post">
                  <div class="post-image">
                    <img
                      class="img-fluid rounded w-100"
                      src="{{ asset('assets/images/blog/02.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="post-desc">
                    <div class="post-meta">
                      <ul class="list-inline">
                        <li><a href="#">Business</a></li>
                        <li>15 Oct, 2019</li>
                      </ul>
                    </div>
                    <div class="post-title">
                      <h4>
                        <a href="blog-single.html"
                          >Make your customers improve your invoices</a
                        >
                      </h4>
                    </div>
                    <div class="post-author">
                      <div class="post-author-img">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/thumbnail/02.png') }}"
                          alt=""
                        />
                      </div>
                      <span>Danny Joe</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-12 mt-5 mt-lg-0">
                <div class="post">
                  <div class="post-image">
                    <img
                      class="img-fluid rounded w-100"
                      src="{{ asset('assets/images/blog/03.jpg') }}"
                      alt=""
                    />
                  </div>
                  <div class="post-desc">
                    <div class="post-meta">
                      <ul class="list-inline">
                        <li><a href="#">Consulting</a></li>
                        <li>15 Oct, 2019</li>
                      </ul>
                    </div>
                    <div class="post-title">
                      <h4>
                        <a href="blog-single.html"
                          >Why Cms is for your business</a
                        >
                      </h4>
                    </div>
                    <div class="post-author">
                      <div class="post-author-img">
                        <img
                          class="img-fluid"
                          src="{{ asset('assets/images/thumbnail/03.png') }}"
                          alt=""
                        />
                      </div>
                      <span>Leeta Rain</span>
                    </div>
                  </div>
                </div>
              </div> --}}
              
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
