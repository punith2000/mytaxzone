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
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg fixed inset-0 bg-white z-[1034]">
      <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
        <div class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
      <div class="navbar-wrapper">
        <div class="m-header flex items-center py-4 px-6 h-header-height">
          <a href="{{ route('admin.dashboard') }}" class="b-brand flex items-center gap-3">
            <!-- ========   Change your logo from here   ============ -->
            <img src="{{ asset('admin/images/logo-mtz.png') }}" style="width: 25%; height: auto; border-radius: 10px;" />
            {{-- <img src="{{ asset('admin/images/favicon.svg') }}" class="img-fluid logo logo-sm" alt="logo" /> --}}
          </a>
        </div>
        <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
          <ul class="pc-navbar">
            <li class="pc-item pc-caption">
              <label>Navigation</label>
            </li>
            <li class="pc-item">
            <li class="pc-item">
              <a href="{{ route('admin.dashboard') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="bi bi-rainbow"></i>
                </span>
                <span class="pc-mtext">Dashboard</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('admin.contacts') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="fas fa-user-tie"></i>
                </span>
                <span class="pc-mtext">Contacts</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('admin.consultations.consult') }}" class="pc-link active">
                <span class="pc-micon">
                  <i class="bi bi-chat-left-text-fill" aria-hidden="true"></i>
                </span>
                <span class="pc-mtext">Consult Requests</span>
              </a>
            </li>
            
            {{-- <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i> </span><span
                  class="pc-mtext">Menu levels</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                    <li class="pc-item pc-hasmenu">
                      <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                      <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="pc-item pc-hasmenu">
                  <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                  <ul class="pc-submenu">
                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                    <li class="pc-item pc-hasmenu">
                      <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
                      <ul class="pc-submenu">
                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a></li>
                        <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li> --}}
            
            <li class="pc-item">
              <a href="{{ route('admin.homes.home') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="bi bi-sliders"></i>
                </span>
                <span class="pc-mtext">Home/Slider</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('admin.features.feature') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="ti ti-layout-grid-add"></i>
                </span>
                <span class="pc-mtext">Features</span>
              </a>
            </li>
            <li class="pc-item">
              <a href="{{ route('admin.abouts.about') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="bi bi-info-circle-fill"></i>
                </span>
                <span class="pc-mtext">About</span>
              </a>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"><span class="pc-micon"> <i class="bi bi-layout-text-window-reverse"></i> </span><span
                  class="pc-mtext">Case Studies</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a href="{{ route('admin.case_studies.case_study') }}" class="pc-link">
                    <span> <i class="fas fa-file-alt"></i> </span>
                    <span class="pc-mtext">Case Studies</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a href="{{ route('admin.case_studies.cases.cs') }}" class="pc-link">
                    <span> <i class="fas fa-window-restore"></i> </span>
                    <span class="pc-mtext">Case Studies Header</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"><span class="pc-micon"> <i class="fas fa-handshake"></i> </span><span
                  class="pc-mtext">Services</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a href="{{ route('admin.services.service') }}" class="pc-link">
                    <span> <i class="fas fa-glass-martini-alt"></i> </span>
                    <span class="pc-mtext">Service</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a href="{{ route('admin.services.bs.business') }}" class="pc-link">
                    <span> <i class="bi bi-briefcase-fill"></i> </span>
                    <span class="pc-mtext">Business Service</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a href="{{ route('admin.services.fs.finance') }}" class="pc-link">
                    <span> <i class="fas fa-hand-holding-usd"></i> </span>
                    <span class="pc-mtext">Finance Service</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a href="{{ route('admin.services.invest.investment') }}" class="pc-link">
                    <span> <i class="fas fa-dollar-sign"></i> </span>
                    <span class="pc-mtext">Investment Service</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="pc-item">
              <a href="{{ route('admin.testimonials.test') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="bi bi-blockquote-left"></i>
                </span>
                <span class="pc-mtext">Testimonial</span>
              </a>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"><span class="pc-micon"> <i class="fas fa-users"></i> </span><span
                  class="pc-mtext">Teams</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a href="{{ route('admin.teams.team') }}" class="pc-link">
                    <span> <i class="fas fa-user-friends"></i> </span>
                    <span class="pc-mtext">Team</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a href="{{ route('admin.teams.team.teams') }}" class="pc-link">
                    <span> <i class="fas fa-window-restore"></i> </span>
                    <span class="pc-mtext">Team Header</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="pc-item pc-hasmenu">
              <a href="#!" class="pc-link"><span class="pc-micon"> <i class="bi bi-window-stack"></i> </span><span
                  class="pc-mtext">Blogs</span><span class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>
              <ul class="pc-submenu">
                <li class="pc-item">
                  <a href="{{ route('admin.blogs.blog') }}" class="pc-link">
                    <span> <i class="fas fa-clone"></i> </span>
                    <span class="pc-mtext">Blog</span>
                  </a>
                </li>
                <li class="pc-item">
                  <a href="{{ route('admin.blogs.bloghead.blog_head') }}" class="pc-link">
                    <span> <i class="fas fa-window-restore"></i> </span>
                    <span class="pc-mtext">Blog Header</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="pc-item">
              <a href="{{ route('admin.faq.faqs') }}" class="pc-link">
                <span class="pc-micon">
                  <i class="bi bi-question-circle"></i>
                </span>
                <span class="pc-mtext">Faq</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
      <div class="header-wrapper flex max-sm:px-[15px] px-[25px] grow">
        <!-- [Mobile Media Block] start -->
        <div class="me-auto pc-mob-drp">
          <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
            <!-- ======= Menu collapse Icon ===== -->
            <li class="pc-h-item pc-sidebar-collapse max-lg:hidden lg:inline-flex">
              <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="sidebar-hide">
                <i data-feather="menu"></i>
              </a>
            </li>
            <li class="pc-h-item pc-sidebar-popup lg:hidden">
              <a href="#" class="pc-head-link ltr:!ml-0 rtl:!mr-0" id="mobile-collapse">
                <i data-feather="menu"></i>
              </a>
            </li>
            <li class="dropdown pc-h-item">
              <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <i data-feather="search"></i>
              </a>
              <div class="dropdown-menu pc-h-dropdown drp-search">
                <form class="px-2 py-1">
                  <input type="search" class="form-control !border-0 !shadow-none" placeholder="Search here. . ." />
                </form>
              </div>
            </li>
          </ul>
        </div>
        <!-- [Mobile Media Block end] -->

        {{-- <div class="ms-auto">
          <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
            <li class="dropdown pc-h-item">
              <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
                 aria-haspopup="false" aria-expanded="false">
                  <i data-feather="bell"></i>
                  @if(auth('admin')->check())
                      <span class="badge bg-success-500 text-white rounded-full z-10 absolute right-0 top-0">
                          {{ auth('admin')->user()->unreadNotifications->count() }}
                      </span>
                  @endif
              </a>
              <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown p-2">
                  <div class="dropdown-header flex items-center justify-between py-4 px-5">
                      <h5 class="m-0">Notifications</h5>
                      @if(auth('admin')->check())
                          <a href="{{ route('admin.notifications.markAllRead') }}" class="btn btn-link btn-sm">Mark all read</a>
                      @endif
                  </div>
                  <div class="dropdown-body header-notification-scroll relative py-4 px-5"
                    style="max-height: calc(100vh - 215px)">
                    @if(auth('admin')->check())
                        @foreach(auth('admin')->user()->unreadNotifications as $notification)
                           <a href="#" class="dropdown-item">
                               <strong>{{ $notification->data['title'] }}</strong>
                               <p>{{ $notification->data['message'] }}</p>
                               <small>{{ $notification->created_at->diffForHumans() }}</small>
                           </a>
                        @endforeach
                    @endif           
                  </div>
              </div>
            </li>
            <li class="dropdown pc-h-item header-user-profile">
              <a class="pc-head-link dropdown-toggle arrow-none me-0" data-pc-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" data-pc-auto-close="outside" aria-expanded="false">
                <i data-feather="user"></i>
              </a>
              <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown p-2 overflow-hidden">
                <div class="dropdown-header flex items-center justify-between py-4 px-5 bg-primary-500">
                  <div class="flex mb-1 items-center">
                    <div class="shrink-0">
                      <img src="{{ asset('admin/assets/images/user/avatar-2.jpg') }}" alt="user-image" class="w-10 rounded-full" />
                    </div>
                    <div class="grow ms-3">
                      <h6 class="mb-1 text-white">Admin 🖖</h6>
                      <span class="text-white">admin@admin.com</span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-body py-4 px-5">
                  <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                    <a href="#" class="dropdown-item">
                      <span>
                        <svg class="pc-icon text-muted me-2 inline-block">
                          <use xlink:href="#custom-lock-outline"></use>
                        </svg>
                        <span>Change Password</span>
                      </span>
                    </a>
                    <a href="{{ route('logout') }}" class="dropdown-item">
                      <div>
                        <button class="btn btn-primary flex items-center justify-center">
                          <svg class="pc-icon me-2 w-[22px] h-[22px]">
                            <use xlink:href="#custom-logout-1-outline"></use>
                          </svg>
                          Logout
                        </button>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div> --}}
      </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->

    <div class="pc-container">

      <div class="pc-content">
        <div class="pc-body">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header flex items-center justify-between">
                  <h4 class="font-medium">Consultation Requests</h4>
                </div>
                @if(session('success'))
                  <p style="color:green;">{{ session('success') }}</p>
                @endif
                <div class="card-body">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Service</th>
                        <th>Submitted At</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($consultations as $consultation)
                        <tr>
                          <td>{{ $consultation->id }}</td>
                          <td>{{ $consultation->name }}</td>
                          <td>{{ $consultation->email }}</td>
                          <td>{{ $consultation->phone }}</td>
                          <td>{{ $consultation->service }}</td>
                          <td>{{ $consultation->created_at->format('d M Y H:i') }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="center mt-3">
                  <div class="pagination">
                      {{-- Previous Page Link --}}
                      @if ($consultations->onFirstPage())
                          <span>&laquo;</span>
                      @else
                          <a href="{{ $consultations->previousPageUrl() }}" rel="prev">&laquo;</a>
                      @endif
              
                      {{-- Page Number Links --}}
                      @foreach ($consultations->getUrlRange(1, $consultations->lastPage()) as $page => $url)
                          @if ($page == $consultations->currentPage())
                              <span class="active">{{ $page }}</span>
                          @else
                              <a href="{{ $url }}">{{ $page }}</a>
                          @endif
                      @endforeach
              
                      {{-- Next Page Link --}}
                      @if ($consultations->hasMorePages())
                          <a href="{{ $consultations->nextPageUrl() }}" rel="next">&raquo;</a>
                      @else
                          <span>&raquo;</span>
                      @endif
                  </div>
                </div>
              
                {{-- Results count --}}
                <div class="d-flex justify-content-center text-muted mt-2">
                  <small>
                      Showing {{ $consultations->firstItem() }} to {{ $consultations->lastItem() }} of {{ $consultations->total() }} results
                  </small>
                </div>
              
                {{-- Bootstrap Pagination --}}
                <div class="pagination-wrapper mt-2">
                  {{ $consultations->links('pagination::bootstrap-5') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- [ Main Content ] end -->
    
    @include('admin.layouts.footer') 
    @include('admin.layouts.scripts')
  </body>
  <!-- [Body] end -->
</html>