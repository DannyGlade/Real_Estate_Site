<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 ps-1">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'dashboard') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('AdminHome') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Dashboard
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'category') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_category') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Category
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'cities') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_cities') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-city"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Cities
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'facilities') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_facilities') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-shapes"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Facilities
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'properties') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_properties') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-building"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Properties
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'gallary') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_gallary') }}">
                    <div class="d-flex text-center">
                        <div style="width: 25px" class="fs-5">
                            <i class="fas fa-images"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Gallary
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'reviews') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_reviews') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Reviews
                        </span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="py-0 nav-link @if ($menu == 'users') fw-bolder fs-6 active @endif "
                    aria-current="page" href="{{ route('list_users') }}">
                    <div class="d-flex">
                        <div style="width: 25px" class="fs-5 text-center">
                            <i class="fas fa-users"></i>
                        </div>
                        <span class="ms-2 my-auto">
                            Users
                        </span>
                    </div>
                </a>
            </li>
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
                    <a class="py-0 nav-link @if ($menu == 'cms') fw-bolder fs-6 active @endif "
                        aria-current="page" href="{{ route('list_cms') }}">
                        <div class="d-flex">
                            <div style="width: 25px" class="fs-5 text-center">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span class="ms-2 my-auto">
                                CMS
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="py-0 nav-link @if ($menu == 'site_settings') fw-bolder fs-6 active @endif "
                        aria-current="page" href="{{ route('list_settings') }}">
                        <div class="d-flex">
                            <div style="width: 25px" class="fs-5 text-center">
                                <i class="fas fa-cog"></i>
                            </div>
                            <span class="ms-2 my-auto">
                                Site Settings
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="py-0 nav-link @if ($menu == 'chng_password') fw-bolder fs-6 active @endif "
                        aria-current="page" href="{{ route('chng_password') }}">
                        <div class="d-flex">
                            <div style="width: 25px" class="fs-5 text-center">
                                <i class="fas fa-key"></i>
                            </div>
                            <span class="ms-2 my-auto">
                                Change Password
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        @endif
    </div>
</nav>
