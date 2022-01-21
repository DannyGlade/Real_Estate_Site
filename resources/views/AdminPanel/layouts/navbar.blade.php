<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">
        {{ $brand_title->value ?? 'DG-Estate' }}
        @if ($status)
            | {{ $user['name'] }}
        @else
            | Guest
        @endif
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search" />
    <div class="navbar-nav">

        @if ($status)
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{ url(route('AdminLogout')) }}">Log out</a>
            </div>
        @else
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="{{ url(route('AdminLoginPage')) }}">Log in</a>
            </div>
        @endif
    </div>
</header>
