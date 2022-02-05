<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'dashboard')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('AdminHome') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'category')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_category') }}">
                    <i class="fas fa-cubes"></i>
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'cities')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_cities') }}">
                    <i class="fas fa-city"></i>
                    Cities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'facilities')fw-bolder fs-6 active @endif " aria-current="page"
                    href="{{ route('list_facilities') }}">
                    <i class="fas fa-shapes"></i>
                    Facilities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'properties')fw-bolder fs-6 active @endif " aria-current="page"
                    href="{{ route('list_properties') }}">
                    <i class="fas fa-building"></i>
                    Properties
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    Customers
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    Integrations
                </a>
            </li> --}}
        </ul>
        @if ($user['type'] == 'R')
            <h6
                class="
                sidebar-heading
                d-flex
                justify-content-between
                align-items-center
                px-3
                mt-4
                mb-1
                text-muted
              ">
                <span>Root User Access</span>
                <a class="link-secondary" href="#" aria-label="Add a new report">
                    <span data-feather="plus-circle"></span>
                </a>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link @if ($menu == 'users')fw-bolder fs-6 active @endif " aria-current="page"
                        href="{{ route('list_users') }}">
                        <i class="fas fa-users"></i>
                        Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if ($menu == 'site_settings')fw-bolder fs-6 active @endif " aria-current="page"
                        href="{{ route('list_settings') }}">
                        <i class="fas fa-cog"></i>
                        Site Settings
                    </a>
                </li>
            </ul>
        @endif
    </div>
</nav>
