<!-- [ breadcrumb ] start -->
<div class="page-header">
  <div class="page-block">
    <div class="page-header-title">
      <h5 class="mb-0 font-medium">Default</h5>
    </div>
    <!-- Clear Cache Button -->
    {{-- <form action="clear_cache.php" method="POST" style="display:inline; float: inline-end;">
      <button type="submit" class="btn btn-warning">
        Clear Cache
      </button>
    </form> --}}
    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>

      <script>
        setTimeout(function() {
            window.location.reload();
        }, 1000); // reloads after 1 second
      </script>
    @endif

    @if(session('error'))
      <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <!-- Clear Cache Button -->
    <a href="{{ route('admin.clear.cache') }}" class="btn btn-danger float-end" onclick="return confirm('Are you sure you want to clear the cache?')">
      Clear Cache
    </a>
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
      <li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
      <li class="breadcrumb-item" aria-current="page">Default</li>
    </ul>
  </div>
</div>
<!-- [ breadcrumb ] end -->
