<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: #149A9B">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            @if (auth()->user()->isAdmin() or auth()->user()->isOperator())
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('dashboard.*') ? 'active' : '' }}" aria-current="page"
                    href="{{ route('dashboard.index') }}">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <!-- {{-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('positions.*') ? 'active' : '' }}"
                    href="{{ route('positions.index') }}">
                    <span data-feather="tag" class="align-text-bottom"></span>
                    Data Kelas
                </a>
            </li> --}} -->

              <li class="nav-item">
                <a class="nav-link " data-bs-toggle="collapse" data-bs-target="#home-collapse">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Master Data
                </a>
                <div class="collapse show" id="home-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                      <li>
                        <a class="nav-link {{ request()->routeIs('employees.*') ? 'active' : '' }}"
                        href="{{ route('employees.index') }}">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Data Mahasiswa & Mentor</a>
                      </li>
                      <li>
                        <a class="nav-link {{ request()->routeIs('positions.*') ? 'active' : '' }}"
                        href="{{ route('positions.index') }}">
                        <span data-feather="users" class="align-text-bottom"></span>
                        Data Kelas</a>
                      </li>
                    </ul>
                  </div>
                </li>
            
            {{-- <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('employees.*') ? 'active' : '' }}"
                    href="{{ route('employees.index') }}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Karyawaan
                </a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('holidays.*') ? 'active' : '' }}"
                    href="{{ route('holidays.index') }}">
                    <span data-feather="calendar" class="align-text-bottom"></span>
                    Pembayaran
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('attendances.*') ? 'active' : '' }}"
                    href="{{ route('attendances.index') }}">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    FAQ
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('presences.*') ? 'active' : '' }}"
                    href="{{ route('presences.index') }}">
                    <span data-feather="clipboard" class="align-text-bottom"></span>
                    Testimoni
                </a>
            </li>
            @endif
        </ul>
    </div>
</nav>