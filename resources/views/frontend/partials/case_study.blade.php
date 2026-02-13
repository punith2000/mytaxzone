<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        @foreach($casestudies as $casestudy)
        <div class="section-title">
          <h6>Our Work</h6>
          <h2 class="title">{{ $casestudy->title  }}</h2>
          <p>
            {!! $casestudy->content  !!}
          </p>
        </div>
        @endforeach
      </div>
    </div>
    <div class="row">
      @foreach($cases as $case)
      <div class="col-lg-4 col-md-6">
        <div class="cases-item text-center">
          <div class="cases-images">
            @if($case->image)
              <img class="img-fluid rounded box-shadow" src="{{ asset($case->image) }}" alt="">
            @endif
            {{-- <img class="img-fluid rounded box-shadow" src="{{ asset('assets/images/case-studies/01.jpg') }}" alt=""/> --}}
          </div>
          <div class="cases-desc">
            <span>
              {{-- Consulting --}}
              {{ $case->role }}
            </span>
            <h5>
              <a href="#">
                {{-- Consultancy Solutions --}}
                <td>{{ $case->title }}</td>
              </a>
            </h5>
            <p>
              {{-- It has survived not only five centuries, but also the leap
              typesetting --}}
              {!! $case->content !!}
            </p>
          </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
        <div class="cases-item text-center">
          <div class="cases-images">
            <img
              class="img-fluid rounded box-shadow"
              src="{{ asset('assets/images/case-studies/02.jpg') }}"
              alt=""
            />
          </div>
          <div class="cases-desc">
            <span>Audit & Taxes</span>
            <h5><a href="#">Audit fixing</a></h5>
            <p>
              It has survived not only five centuries, but also the leap typesetting
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
        <div class="cases-item text-center">
          <div class="cases-images">
            <img
              class="img-fluid rounded box-shadow"
              src="{{ asset('assets/images/case-studies/03.jpg') }}"
              alt=""
            />
          </div>
          <div class="cases-desc">
            <span>Marketing</span>
            <h5><a href="#">Strategic Assessment</a></h5>
            <p>
              It has survived not only five centuries, but also the leap
              typesetting
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="cases-item text-center">
          <div class="cases-images">
            <img
              class="img-fluid rounded box-shadow"
              src="{{ asset('assets/images/case-studies/04.jpg') }}"
              alt=""
            />
          </div>
          <div class="cases-desc">
            <span>Business</span>
            <h5><a href="#">Business Planning</a></h5>
            <p>
              It has survived not only five centuries, but also the leap
              typesetting
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="cases-item text-center">
          <div class="cases-images">
            <img
              class="img-fluid rounded box-shadow"
              src="{{ asset('assets/images/case-studies/05.jpg') }}"
              alt=""
            />
          </div>
          <div class="cases-desc">
            <span>Financing</span>
            <h5><a href="#">Financing Management</a></h5>
            <p>
              It has survived not only five centuries, but also the leap
              typesetting
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-5">
        <div class="cases-item text-center">
          <div class="cases-images">
            <img
              class="img-fluid rounded box-shadow"
              src="{{ asset('assets/images/case-studies/06.jpg') }}"
              alt=""
            />
          </div>
          <div class="cases-desc">
            <span>Transport</span>
            <h5><a href="#">Optimizing Manufacturing</a></h5>
            <p>
              It has survived not only five centuries, but also the leap
              typesetting
            </p>
          </div>
        </div>
      </div> --}}

    </div>
  </div>
</section>