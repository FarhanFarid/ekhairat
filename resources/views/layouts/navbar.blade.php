<div class="d-flex align-items-center justify-content-between w-100">
    <!-- IJN Flagship Logo (Far Left) -->
    <div class="me-auto d-flex align-items-center">
        <!-- Sidebar Toggle Buttons -->
        <div class="ms-3 d-flex align-items-center">
            <!-- Mobile Toggle Button (Visible on small screens) -->
            <button id="kt_aside_mobile_toggle" class="btn btn-icon btn-active-color-primary d-lg-none me-2" title="Toggle Sidebar">
                <i class="ki-duotone ki-abstract-14 fs-2x"><span class="path1"></span><span class="path2"></span></i>
            </button>

        </div>

        <img alt="Logo" src="{{ asset('media/logo/ekhairat-banner.png') }}" style="max-height: 50px; margin-bottom: 5px;">
    </div>

    <!-- User Profile (Far Right) -->
    <div class="dropdown ms-auto">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="me-2"><b>Hi, {{ Auth::user()->name }}</b></span>
            <img src="{{ asset('media/logo/user-icon.png') }}" alt="User" class="rounded-3" width="40" height="40">
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow p-3" aria-labelledby="userDropdown" style="width: 300px;">
            <li class="d-flex align-items-center px-3">
                <img src="{{ asset('media/logo/user-icon.png') }}" alt="User" class="rounded-circle me-3" width="50" height="50">
                <div>
                    <strong>{{ Auth::user()->name }}</strong><br>
                    <small class="text-muted">{{ Auth::user()->email }}</small><br>
                    <small class="text-muted">{{ Auth::user()->dob }}</small>
                </div>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li class="text-center">
                <a class="btn btn-danger btn-sm" href="#"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   style="width: 250px !important;">
                    Logout
                </a>
                {{-- <form id="logout-form" action="{{ route('sso.logout') }}" method="POST" class="d-none">
                    @csrf
                </form> --}}
            </li>
        </ul>
    </div>
</div>
