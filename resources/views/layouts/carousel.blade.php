<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach ($featuredPro as $key => $item)
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="{{ $key }}"
                class="active" aria-label="Slide {{ $key + 1 }}" @if ($key == 0)aria-current="true" @endif></button>
        @endforeach
        {{-- <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
            aria-label="Slide 1" aria-current="true"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
            class=""></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
            class=""></button> --}}
    </div>
    <div class="carousel-inner">
        @foreach ($featuredPro as $key => $item)
            <div class="carousel-item @if ($key == 0)active @endif">
                <img class="bd-placeholder-img"
                    src="{{ $item->fe_image ? asset('/storage/property/' . $item->fe_image) : asset('/storage/property/' . $item->image) }}"
                    alt="{{ $item->title }}">
                <div class="container">
                    <div class="carousel-caption @if ($key % 2 == 0)text-start @else text-end @endif">
                        <h1>{{ $item->title }}</h1>
                        <p>
                            <a class="btn btn-sm btn-dark" href="{{ route('show_category', $item->Cate->slug_name) }}">
                                {{ $item->Cate->name }}
                            </a>
                            <a class="btn btn-sm btn-secondary disabled" href="#">
                                {{ $item->City->city }}
                            </a>
                        </p>
                        <p><a class="btn btn-lg btn-primary" href="{{ route('show_pro', $item->title_slug) }}">See
                                More</a></p>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="carousel-item active">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
            </svg>

            <div class="container">
                <div class="carousel-caption text-start">
                    <h1>Example headline.</h1>
                    <p>Some representative placeholder content for the first slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
            </svg>

            <div class="container">
                <div class="carousel-caption">
                    <h1>Another example headline.</h1>
                    <p>Some representative placeholder content for the second slide of the carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                <rect width="100%" height="100%" fill="#777"></rect>
            </svg>

            <div class="container">
                <div class="carousel-caption text-end">
                    <h1>One more for good measure.</h1>
                    <p>Some representative placeholder content for the third slide of this carousel.</p>
                    <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                </div>
            </div>
        </div> --}}
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
