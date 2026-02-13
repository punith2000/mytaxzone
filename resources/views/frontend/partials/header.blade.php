<header id="site-header" class="header">
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 d-flex align-items-center justify-content-between">
          <div class="social-icons">
            <ul class="list-inline">
              <li>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
            {{-- <div class="language-selection me-2">
              <div class="dropdown">
                <button class="dropdown-toggle" data-bs-toggle="dropdown">
                  English
                </button>
                <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">English</a>
                  <a href="#" class="dropdown-item">Arabic</a>
                  <a href="#" class="dropdown-item">French</a>
                  <a href="#" class="dropdown-item">Italian</a>
                </div>
              </div>
            </div> --}}
            @auth
              <a href="{{ route('logout') }}" 
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                @csrf
              </form>
            @endauth

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header-middle">
    <div class="container">
      <div class="row">
        <div
          class="col-md-12 d-flex align-items-center justify-content-between"
        >
          <a class="navbar-brand logo" href="{{ route('cms') }}">
            <img
              id="logo-img"
              class="img-fluid"
              src="{{ asset('assets/images/logo.png') }}"
              alt=""
            />
          </a>
          <div
            class="topbar-link d-none d-sm-flex align-items-center justify-content-between"
          >
            <div class="d-flex align-items-center me-3">
              <i class="flaticon-email"></i>
              <div>
                <h6>Email Us</h6>
                <a href="{{ url('mailto:dummy@gmail.com') }}"
                  >dummy@gmail.com</a
                >
              </div>
            </div>
            <div class="d-none d-md-flex align-items-center me-3">
              <i class="flaticon-phone"></i>
              <div>
                <h6>Call Us</h6>
                <a href="tel:+912345678900"> +91-234-567-8900</a>
              </div>
            </div>
            <div class="d-none d-lg-flex align-items-center">
              <i class="flaticon-24-hours"></i>
              <div>
                <h6>Working Hours</h6>
                <p class="mb-0">Mon-Sat 8am to 7pm</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="header-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">