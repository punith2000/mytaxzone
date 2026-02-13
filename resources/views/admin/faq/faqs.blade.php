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
              <a href="{{ route('admin.faq.faqs') }}" class="pc-link active">
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

    <!-- [ Main Content ] start -->

    <div class="pc-container">

      <div class="pc-content">
        <div class="pc-body">
          <div class="col-span-12 xl:col-span-8 md:col-span-6">
            <div class="card table-card">
              <div class="card-header">
                <h3>Quieries</h3>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <tbody>
                      
                      @foreach($faqs as $faq)
                      <tr class="unread">
                        <td>
                          <h6 class="text-muted">
                            {{ $faq->id }}
                          </h6>
                          {{-- <img class="rounded-full max-w-10" style="width: 40px" src="{{ asset('admin/assets/images/user/avatar-1.jpg') }}" alt="activity-user" /> --}}
                        </td>
                        <td>
                          <h6 class="mb-1">{{ $faq->name }} ({{ $faq->email }})</h6>
                          <p class="m-0">{{ \Illuminate\Support\Str::limit($faq->question, 50) }}</p>
                        </td>
                        <td>
                          <h6 class="text-muted">
                            <i class="fas fa-circle text-success text-[10px] ltr:mr-4 rtl:ml-4"></i>
                            {{ $faq->created_at->format('d M Y H:i') }}
                          </h6>
                        </td>
                        <td>
                          <a href="{{ route('admin.faq.show', $faq->id) }}" class="badge text-white text-[12px] mx-2" style="background-color: #003399;">
                            show
                          </a>
                          {{-- <a href="#!" class="badge text-white text-[12px] mx-2" style="background-color: #fd5b03;">Mark as read</a> --}}
                          <form action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')" class="badge btn-danger text-white text-[12px]">
                              <i class="fa fa-trash"></i>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="center mt-3">
                  <div class="pagination">
                      {{-- Previous Page Link --}}
                      @if ($faqs->onFirstPage())
                          <span>&laquo;</span>
                      @else
                          <a href="{{ $faqs->previousPageUrl() }}" rel="prev">&laquo;</a>
                      @endif
              
                      {{-- Page Number Links --}}
                      @foreach ($faqs->getUrlRange(1, $faqs->lastPage()) as $page => $url)
                          @if ($page == $faqs->currentPage())
                              <span class="active">{{ $page }}</span>
                          @else
                              <a href="{{ $url }}">{{ $page }}</a>
                          @endif
                      @endforeach
              
                      {{-- Next Page Link --}}
                      @if ($faqs->hasMorePages())
                          <a href="{{ $faqs->nextPageUrl() }}" rel="next">&raquo;</a>
                      @else
                          <span>&raquo;</span>
                      @endif
                  </div>
              </div>
              
              {{-- Results count --}}
              <div class="d-flex justify-content-center text-muted mt-2">
                  <small>
                      Showing {{ $faqs->firstItem() }} to {{ $faqs->lastItem() }} of {{ $faqs->total() }} results
                  </small>
              </div>
              
              {{-- Bootstrap Pagination --}}
              <div class="pagination-wrapper mt-2">
                  {{ $faqs->links('pagination::bootstrap-5') }}
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