<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'dashboard')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('AdminHome') }}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'category')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_category') }}">
                    <span data-feather="home"></span>
                    Category
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'cities')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_cities') }}">
                    <span data-feather="home"></span>
                    Cities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'facilities')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_facilities') }}">
                    <span data-feather="home"></span>
                    Facilities
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'properties')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_properties') }}">
                    <span data-feather="home"></span>
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
                <a class="nav-link @if ($menu == 'users')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_users') }}">
                    <span data-feather="home"></span>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if ($menu == 'site_settings')fw-bolder fs-6 active @endif " aria-current="page" href="{{ route('list_settings') }}">
                    <span data-feather="home"></span>
                    Site Settings
                </a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li> --}}
        </ul>
    </div>
</nav>
