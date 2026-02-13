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
<div class="ms-auto">
  <ul class="inline-flex *:min-h-header-height *:inline-flex *:items-center">
    <li class="dropdown pc-h-item">
      <a class="pc-head-link dropdown-toggle me-0" data-pc-toggle="dropdown" href="#" role="button"
        aria-haspopup="false" aria-expanded="false">
        <i data-feather="sun"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
        <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
          <i data-feather="moon"></i>
          <span>Dark</span>
        </a>
        <a href="#!" class="dropdown-item" onclick="layout_change('light')">
          <i data-feather="sun"></i>
          <span>Light</span>
        </a>
        {{-- <a href="#!" class="dropdown-item" onclick="layout_change_default()">
          <i data-feather="settings"></i>
          <span>Default</span>
        </a> --}}
      </div>
    </li>

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
              <img src="admin/assets/images/user/avatar-2.jpg" alt="user-image" class="w-10 rounded-full" />
            </div>
            <div class="grow ms-3">
              <h6 class="mb-1 text-white">Admin 🖖</h6>
              <span class="text-white">admin@admin.com</span>
            </div>
          </div>
        </div>
        <div class="dropdown-body py-4 px-5">
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
            <a href="{{ route('admin.change_password') }}" class="dropdown-item">
              <span>
                <svg class="pc-icon text-muted me-2 inline-block">
                  <use xlink:href="#custom-lock-outline"></use>
                </svg>
                <span>Change Password</span>
              </span>
            </a>
            <a href="{{ route('admin.logout') }}" class="dropdown-item">
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
</div>