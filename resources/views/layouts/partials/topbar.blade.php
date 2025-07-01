<nav class="navbar px-3 ps-5">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center text-white me-auto">
        <img src="{{ asset('images/logo.avif') }}" alt="Logo" style="width:50px;height:50px;object-fit:contain"
            class="me-2">
        <span class="fw-medium">RUMKITAL ILYAS TARAKAN</span>
    </a>

    {{-- tombol burger (mobile) --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-link d-md-none me-3 text-success" id="mobileToggle" type="button">
            <i class="fas fa-bars"></i>
        </button>
    </div>

    {{-- dropdown user --}}
    <div class="d-flex align-items-center">
        <div class="dropdown">
            <button class="btn text-white" type="button" data-bs-toggle="dropdown">
                <i class="fas fa-user me-2"></i>
                {{ Auth::user()->name ?? 'Admin' }}
                <i class="fas fa-chevron-down ms-2"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a class="dropdown-item" href="">
                        <i class="fas fa-user me-2"></i>Profile
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item text-danger" href="#"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
