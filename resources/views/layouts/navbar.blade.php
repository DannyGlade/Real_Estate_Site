<!-- Header Bootstrap -->
<header class="p-2 bg-dark text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                @if ($logo_image)
                    <a class="navbar-brand" href="{{ route('userHome') }}">
                        <img style="height: 40px" src="{{ asset('storage/siteSettings/' . $logo_image) }}"
                            alt="{{ $brand_title ?? 'DG-Estate' }}">
                    </a>
                @endif
                <a class="navbar-brand" href="{{ route('userHome') }}">{{ $brand_title ?? 'DG-Estate' }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('userHome') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <form class="me-2">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </div>
                        </form>

                        @if ($status)
                            {{-- Logged-In Icon --}}
                            <div class="dropdown text-end">
                                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                        class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li><a class="dropdown-item disabled" href="#">{{ $user['name'] }}</a></li>
                                    @if ($user['type'] == 'A' || $user['type'] == 'R')
                                        <li><a class="dropdown-item" href="{{ route('AdminHome') }}">Admin</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('/logout') }}">Log out</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="me-2">
                                <a class="btn btn-outline-primary me-1" href="{{ url('/login') }}">Login</a>
                                <a class="btn btn-outline-warning" href="{{ url('/signup') }}">Sign-up</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
