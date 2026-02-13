<!doctype html>
<html lang="en" @@bodySetup>
  <!-- [Head] start -->

  <head>
    @include('admin.layouts.head')
    @include('admin.layouts.styles')
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->

  <body>
    @include('admin.layouts.layout_vertical')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        @include('admin.layouts.breadcrumb')
        
        <!-- [ Main Content ] start -->
        <div class="grid grid-cols-12 gap-x-6">

          <div class="col-span-12 sm:col-span-3 xl:col-span-2">
            <div class="card card-social">
              <div class="card-body p-2 border-b border-theme-border border-l-red-500"> <!-- reduced padding -->
                <a href="{{ route('admin.contacts') }}">
                  <div class="flex items-center justify-center space-x-2">
                    <div class="shrink-0">
                      <img src="{{ asset('admin/assets/images/dashboard/google-contacts.png') }}" width="50px" alt=""> <!-- smaller image -->
                    </div>
                    <div class="grow text-center">
                      <h3 class="text-center">Contacts</h3>
                      <h4 class="text-success-500 text-center mb-0">+{{ $totalContacts }} <span class="text-muted">Total</span></h4>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-3 xl:col-span-2">
            <div class="card card-social">
              <div class="card-body p-2 border-b border-theme-border border-l-red-500"> <!-- reduced padding -->
                <a href="{{ route('admin.faq.faqs') }}">
                  <div class="flex items-center justify-center space-x-2">
                    <div class="shrink-0">
                      <img src="{{ asset('admin/assets/images/dashboard/question.png') }}" width="50px" alt=""> <!-- smaller image -->
                    </div>
                    <div class="grow text-center">
                      <h3 class="text-center">FAQ</h3>
                      <h4 class="text-success-500 text-center mb-0">+{{ $faqCount }} <span class="text-muted">Total</span></h4>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-3 xl:col-span-2">
            <div class="card card-social">
              <div class="card-body p-2 border-b border-theme-border border-l-red-500"> <!-- reduced padding -->
                <a href="{{ route('admin.consultations.consult') }}">
                  <div class="flex items-center justify-center space-x-2">
                    <div class="shrink-0">
                      {{-- <img src="{{ asset('admin/assets/images/dashboard/document.png') }}" width="40px" alt=""> --}}
                    </div>
                    <div class="grow text-center">
                      <h3 class="text-center">Consult Requests</h3>
                      <h4 class="text-success-500 text-center mb-0">+{{ $consultCount }} <span class="text-muted">Total</span></h4>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-3 xl:col-span-2">
            <div class="card card-social">
              <div class="card-body p-2 border-b border-theme-border border-l-red-500"> <!-- reduced padding -->
                <a href="{{ route('admin.visitors') }}">
                  <div class="flex items-center justify-center space-x-2">
                    <div class="shrink-0">
                      <img src="{{ asset('admin/assets/images/dashboard/visitor.png') }}" width="50px" alt="">
                    </div>
                    <div class="grow text-center">
                      <h3 class="text-center">Visitors</h3>
                      <h4 class="text-success-500 text-center mb-0">+{{ $visitorCount }} <span class="text-muted">Total</span></h4>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="col-span-12 sm:col-span-3 xl:col-span-2">
            <div class="card card-social">
              <div class="card-body p-2 border-b border-theme-border border-l-red-500"> <!-- reduced padding -->
                <a href="{{ route('admin.page_view') }}">
                  <div class="flex items-center justify-center space-x-2">
                    <div class="shrink-0">
                      <img src="{{ asset('admin/assets/images/dashboard/document.png') }}" width="40px" alt="">
                    </div>
                    <div class="grow text-center">
                      <h3 class="text-center">Page Views</h3>
                      <h4 class="text-success-500 text-center mb-0">+{{ $pageCount }} <span class="text-muted">Total</span></h4>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>

          {{-- <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card card-social">
              <div class="card-body border-b border-theme-border">
                <div class="flex items-center justify-center">
                  <div class="shrink-0">
                    <i class="fab fa-twitter text-primary-500 text-[36px]"></i>
                  </div>
                  <div class="grow ltr:text-right rtl:text-left">
                    <h3 class="mb-2">11,200</h3>
                    <h5 class="text-purple-500 mb-0">+6.2% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="grid grid-cols-12 gap-x-6">
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Target:</span>34,185</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5">
                      <div class="bg-success-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 40%"></div>
                    </div>
                  </div>
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Duration:</span>800</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5">
                      <div class="bg-primary-500 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 70%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card card-social">
              <div class="card-body border-b border-theme-border">
                <div class="flex items-center justify-center">
                  <div class="shrink-0">
                    <i class="fab fa-google-plus-g text-danger-500 text-[36px]"></i>
                  </div>
                  <div class="grow ltr:text-right rtl:text-left">
                    <h3 class="mb-2">10,500</h3>
                    <h5 class="text-purple-500 mb-0">+5.9% <span class="text-muted">Total Likes</span></h5>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="grid grid-cols-12 gap-x-6">
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Target:</span>25,998</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5">
                      <div class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 80%"></div>
                    </div>
                  </div>
                  <div class="col-span-6">
                    <h6 class="text-center mb-2.5"><span class="text-muted m-r-5">Duration:</span>900</h6>
                    <div class="w-full bg-theme-bodybg rounded-lg h-1.5">
                      <div class="bg-theme-bg-2 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]" role="progressbar" style="width: 50%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-12 xl:col-span-4 md:col-span-6">
            <div class="card user-list">
              <div class="card-header">
                <h5>Rating</h5>
              </div>
              <div class="card-body">
                <div class="flex items-center justify-between gap-1 mb-5">
                  <h2 class="font-light flex items-center m-0">
                    4.7
                    <i class="fas fa-star text-[10px] ml-2.5 text-warning-500"></i>
                  </h2>
                  <h6 class="flex items-center m-0">
                    0.4
                    <i class="fas fa-caret-up text-success text-[22px] ml-2.5"></i>
                  </h6>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    5
                  </h6>
                  <h6>384</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 70%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    4
                  </h6>
                  <h6>145</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 35%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    3
                  </h6>
                  <h6>24</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 25%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    2
                  </h6>
                  <h6>1</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mb-6 mt-3">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 10%"
                  ></div>
                </div>

                <div class="flex items-center justify-between gap-2 mb-2">
                  <h6 class="flex items-center gap-1">
                    <i class="fas fa-star text-[10px] mr-2.5 text-warning-500"></i>
                    1
                  </h6>
                  <h6>0</h6>
                </div>
                <div class="w-full bg-theme-bodybg rounded-lg h-1.5 mt-4">
                  <div
                    class="bg-theme-bg-1 h-full rounded-lg shadow-[0_10px_20px_0_rgba(0,0,0,0.3)]"
                    role="progressbar"
                    style="width: 0%"
                  ></div>
                </div>
              </div>
            </div>
          </div> --}}
          
          {{-- <div class="col-span-12 xl:col-span-8 md:col-span-6">
            <div class="card table-card">
              <div class="card-header">
                <h5>Recent Users</h5>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tbody>
                      <tr class="unread">
                        <td>
                          <img class="rounded-full max-w-10" style="width: 40px" src="{{ asset('admin/assets/images/user/avatar-1.jpg') }}" alt="activity-user" />
                        </td>
                        <td>
                          <h6 class="mb-1">Isabella Christensen</h6>
                          <p class="m-0">Lorem Ipsum is simply dummy text of…</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            11 MAY 12:56
                          </h6>
                        </td>
                        <td>
                          <a href="#!" class="badge bg-theme-bg-2 text-white text-[12px] mx-2">Reply</a>
                          <a href="#!" class="badge bg-theme-bg-1 text-white text-[12px]">Mark as read</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> --}}
          
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    @include('admin.layouts.footer') 
    @include('admin.layouts.scripts')
  </body>
  <!-- [Body] end -->
</html>
