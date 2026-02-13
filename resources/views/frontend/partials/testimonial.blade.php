<section class="p-0 slider-sec">
  <div
    class="owl-carousel no-pb"
    data-items="1"
    data-dots="false"
    data-autoplay="true"
    data-autoplay-timeout="8000"
  >
    @foreach ($testimonials as $testimonial)
    <div class="item">
      @if($testimonial->image)
        <img src="{{ asset($testimonial->image) }}" alt="Testimonial Image" class="img-fluid w-100">
      @endif
      <div class="align-center p-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-md-7">
              <div
                class="testimonial style-1 dark-bg p-5 h-100 m-0 d-flex align-items-center overflow-hidden"
              >
                <div class="testimonial-content">
                  <div class="testimonial-quote">
                    <i class="fas fa-quote-left"></i>
                  </div>
                  <p class="testimonial text-white">
                    {!! $testimonial->content !!}
                  </p>
                  <div class="testimonial-caption">
                    <h5 class="text-white">
                      {{ $testimonial->name }}
                    </h5>
                    <label>
                      <strong>{{ $testimonial->designation }}</strong>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>