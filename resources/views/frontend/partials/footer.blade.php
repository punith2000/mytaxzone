<footer class="footer">
  <div class="primary-footer dark-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <h4 class="mb-4 text-white">Our Services</h4>
          <div class="footer-list">
            <ul class="list-unstyled">
              <li>
                <a href="{{ route('business_services') }}">Business Services</a>
              </li>
              {{-- <li>
                <a href="software-research.html">Software & Research</a>
              </li> --}}
              <li>
                <a href="{{ route('finance_services') }}">Finance and Restructuring</a>
              </li>
              {{-- <li>
                <a href="energy-environment.html">Energy & Environment</a>
              </li> --}}
              <li>
                <a href="{{  route('investment_services') }}">Investment Planning</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
          <h4 class="mb-4 text-white">Link</h4>
          <div class="footer-list">
            <ul class="list-unstyled">
              <li>
                <a href="{{ route('cms') }}">Home</a>
              </li>
              <li>
                <a href="{{ route('about') }}">About Us</a>
              </li>
              <li>
                <a href="{{  route('blog') }}">Blogs</a>
              </li>
              <li>
                <a href="{{  route('contact') }}">Contact</a>
              </li>
              <li>
                <a href="{{  route('faq') }}">FAQ?</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-5 ms-auto col-md-12 mt-5 mt-lg-0">
          <h4 class="mb-4 text-white">About</h4>
          <p class="mb-3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
          </p>
          <div class="footer-cntct">
            <ul class="media-icon list-unstyled">
              <li>
                <p class="mb-0">
                  <i class="flaticon-paper-plane"></i> 423B, Road Wordwide
                  Country, USA
                </p>
              </li>
              <li>
                <i class="flaticon-email"></i>
                <a href="{{ url('mailto:dummy@gmail.com') }}"
                  >dummy@gmail.com</a
                >
              </li>
              <li>
                <i class="flaticon-phone"></i>
                <a href="tel:+912345678900">+91-234-567-8900</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="secondary-footer theme-bg">
    <div class="container">
      <div class="copyright">
        <div class="row">
          <div class="col-lg-6">
            <span
              >Copyright 2025 Theme by
              <u><a href="#">Justify</a></u> | All Rights Reserved</span
            >
          </div>
          <div class="col-lg-6 text-lg-end footer-list md-mt-2">
            <ul class="list-inline">
              <li class="list-inline-item mb-0">
                <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
              </li>
              <li class="list-inline-item mb-0">
                <a href="{{ route('terms') }}">Terms</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>