<section>
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-8 col-md-12">
        @foreach($teamheader as $teamhead)
        <div class="section-title">
          <h6>Team Expert</h6>
          <h2 class="title">
            {{ $teamhead->title }}
          </h2>
          <p>
            {!! $teamhead->content !!}
          </p>
        </div>
        @endforeach
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-carousel" data-items="3" data-md-items="2" 
          data-margin="30" data-sm-items="1" data-autoplay="true">
          @foreach($teams as $team)
          <div class="item">
            <div class="team-member style-1">
              <div class="team-images">
                @if($team->image)
                  <img src="{{ asset($team->image) }}">
                @endif
                {{-- <img class="img-fluid" src="{{ asset('assets/images/team/01.jpg') }}" alt="" /> --}}
                <div class="team-social-icon">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-google-plus-g"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-description">
                <h5>
                  <a href="team-single.html">
                    {{-- Alexandra --}}
                    <td>{{ $team->name }}</td>
                  </a>
                </h5>
                <span>
                  {{-- Manager --}}
                  {{ $team->designation }}
                </span>
              </div>
            </div>
          </div>
          @endforeach


          {{-- <div class="item">
            <div class="team-member style-1">
              <div class="team-images">
                <img
                  class="img-fluid"
                  src="{{ asset('assets/images/team/02.jpg') }}"
                  alt=""
                />
                <div class="team-social-icon">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-google-plus-g"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Rilon Jony</a></h5>
                <span>Advisor</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team-member style-1">
              <div class="team-images">
                <img
                  class="img-fluid"
                  src="{{ asset('assets/images/team/03.jpg') }}"
                  alt=""
                />
                <div class="team-social-icon">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-google-plus-g"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Daisy Loy</a></h5>
                <span>Financial</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team-member style-1">
              <div class="team-images">
                <img
                  class="img-fluid"
                  src="{{ asset('assets/images/team/04.jpg') }}"
                  alt=""
                />
                <div class="team-social-icon">
                  <ul>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"
                        ><i class="fab fa-google-plus-g"></i
                      ></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-description">
                <h5><a href="team-single.html">Sam kevieon</a></h5>
                <span>Accountant</span>
              </div>
            </div>
          </div> --}}

        </div>
      </div>
    </div>
  </div>
</section>