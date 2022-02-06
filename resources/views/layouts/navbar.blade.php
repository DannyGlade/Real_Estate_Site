<!-- Header Bootstrap -->
<header class="py-1 bg-dark sticky-top text-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                @if ($logo_image->value)
                    <a class="navbar-brand" href="{{ route('userHome') }}">
                        <img style="height: 40px" src="{{ asset('storage/siteSettings/' . $logo_image->value) }}"
                            alt="{{ $brand_title->value ?? 'DG-Estate' }}">
                    </a>
                @endif
                <a class="navbar-brand" href="{{ route('userHome') }}">{{ $brand_title->value ?? 'DG-Estate' }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link @if ($menu == 'home')active @endif" aria-current="page"
                                href="{{ route('userHome') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'purpose')active @endif dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Purpose
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'sale') }}">Sale</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'rent') }}">Rent</a></li>
                                <li><a class="dropdown-item" href="{{ route('show_purpose', 'pg') }}">PG</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'category')active @endif dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($cate as $item)
                                    <li><a class="dropdown-item"
                                            href="{{ route('show_category', $item->slug_name) }}">{{ $item->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link @if ($menu == 'city')active @endif dropdown-toggle" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                City
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @foreach ($city as $item)
                                    <li><a class="dropdown-item"
                                            href="{{ route('show_city', $item->slug_city) }}">{{ $item->city }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li> --}}
                        {{-- <li class="nav-item dropdown">
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
                        </li> --}}
                    </ul>
                    <div class="d-flex">
                        <form id="searchFrm" action="{{ route('propSearch') }}" method="POST" class="me-2">
                            @csrf
                            <div class="input-group">
                                <select class="form-select w-25" name="purpose" id="">
                                    <option @if (!empty($purpose)){{ $purpose == 'sale' ? 'selected' : '' }} @endif value="sale">Sale</option>
                                    <option @if (!empty($purpose)){{ $purpose == 'rent' ? 'selected' : '' }} @endif value="rent">Rent</option>
                                    <option @if (!empty($purpose)){{ $purpose == 'pg' ? 'selected' : '' }} @endif value="pg">PG</option>
                                    <option @if (!empty($purpose)){{ $purpose == '*' ? 'selected' : '' }} @endif value="*">All</option>
                                </select>
                                <input class="form-control w-50" name="search" type="search"
                                    placeholder="Search by Name" value="{{ $SecStr ?? '' }}" aria-label="Search">
                                <button class="btn btn-outline-success w-25" type="submit">
                                    <i class="fas fa-search"></i>
                                    Search</button>
                            </div>
                        </form>

                        @if ($status)
                            {{-- Logged-In Icon --}}
                            <div class="dropdown ms-1 text-end">
                                <a href="#" class="d-block link-light text-decoration-none dropdown-toggle"
                                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ !empty($user['data']['image']) ? asset('/storage/userdata/' . $user['data']['image']) : asset('stockUser.png') }}"
                                        alt="{{ $user['name'] }}" width="38" height="38" class="rounded-circle">
                                </a>
                                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                    <li>
                                        <div class="dropdown-item text-dark text-bold">{{ $user['name'] }}</div>
                                    </li>
                                    @if ($user['type'] == 'A' || $user['type'] == 'R')
                                        <li><a class="dropdown-item" href="{{ route('AdminHome') }}">Admin</a></li>
                                    @endif
                                    <li><a class="dropdown-item" href="{{ route('UserProfile') }}">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('UserLogout') }}">Log out</a></li>
                                </ul>
                            </div>
                        @else
                            <div class="me-2">
                                <a class="btn btn-outline-primary me-1" href="{{ route('UserLoginForm') }}">Login</a>
                                <a class="btn btn-outline-warning" href="{{ route('UserSignupForm') }}">Sign-up</a>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
{{-- @section('scripts')
    <script>
        $(document).ready(function() {
            console.log('navbar');
        });
    </script>
@endsection --}}
