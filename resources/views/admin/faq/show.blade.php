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
        <div class="pc-body" style="font-family: Arial, sans-serif; background-color:#f9f9f9; padding:20px;">
          <table width="100%" cellpadding="0" cellspacing="0" style="max-width:900px; margin:auto; background:#fff; border-radius:6px; box-shadow:0 2px 6px rgba(0,0,0,.1);">
            <tr>
                <td style="padding:20px; border-bottom:1px solid #eee;">
                    <h3 style="margin:0;">MyTaxZone
                        <span style="color:#999; font-size:14px; float: inline-end;">{{ $faq->created_at->format('d M Y H:i') }}</span>
                    </h3>

                    <p style="color: black;"><strong>From: </strong>
                        <span>{{ $faq->email }}</span>
                    </p>
                    <p style="color: black;"><strong>To: </strong> 
                       <span>punithmy2000@gmail.com</span>
                    </p>
                </td>
            </tr>

            <tr>
                <td style="padding:20px; background:#f1f1f1; border-bottom:1px solid #f1f1f1;">
                    <h2 style="margin:0; text-align: center;">Notifications</h2>
                    {{-- <p style="color:#999; font-size:12px;">{{ now()->format('d.m.Y, H:i') }}</p> --}}
                </td>
            </tr>
    
            <tr>
                <td style="padding:20px; color: black;">
                    {{-- <h3>Hello!</h3> --}}
                    <br>
                    <p>You have a new registered user for your meetup!</p>
                    <br>
    
                    <p><strong>{{ $faq->name }}</strong> ({{ $faq->email }}) has registered for the meetup.</p>
                    <br>

                    <p>{{ $faq->question }}</p>
                    <br><br>
    
                    <p>Regards,<br>Notifications</p>
                    <br><br>

                    <button style="border: 1px solid; padding: 8px; border-radius: 20px; border-color: #777;">
                      <i class="bi bi-reply"></i> Reply
                    </button>

                    <div id="replyForm" style="display:none; margin-top:20px;">
                      <form action="{{ route('admin.notifications.reply', $faq->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="message">Your Reply</label>
                            <textarea id="message" name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Send</button>
                      </form>
                  </div>
                </td>
            </tr>
    
            <tr>
                <td style="padding:15px; background:#f1f1f1; text-align:center; font-size:12px; color:#777;">
                    © {{ date('Y') }} Notifications. All rights reserved.
                </td>
            </tr>
        </table>
        </div>
      </div>

    <!-- [ Main Content ] end -->
    
    @include('admin.layouts.footer')
    @include('admin.layouts.scripts')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script>
document.getElementById('replyBtn').addEventListener('click', function() {
    this.style.display = 'none'; 
    document.getElementById('replyForm').style.display = 'block';
});

document.getElementById('replyFormAjax').addEventListener('submit', function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    fetch("{{ route('admin.notifications.reply', $faq->id) }}", {
    method: "POST",
    headers: {
        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
        "Accept": "application/json"
    },
    body: formData
})
.then(response => response.json())
.then(data => {
    if(data.success){
        Swal.fire('Success!', data.message, 'success');
        document.getElementById('replyFormAjax').reset();
    } else {
        Swal.fire('Error!', data.message, 'error'); // show backend error
    }
})
.catch(err => {
    Swal.fire('Error!', err.message, 'error');
});
});
</script> --}}
  </body>
  <!-- [Body] end -->
</html>