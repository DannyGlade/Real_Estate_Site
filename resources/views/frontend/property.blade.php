@extends('layouts.app')
@section('content_box')
    <img style="max-height: 513px"
        src="{{ $item->fe_image ? asset('/storage/property/' . $item->fe_image) : asset('/storage/property/' . $item->image) }}"
        alt="{{ $item->title }}">
    <div class="container">
        <div class="py-5">
            {{-- <div class="row">
                <div class="col-12 mb-3">
                    <h1>{{ $title }}</h1>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <div class="row g-0 mb-2 border-bottom">
                            <div class="col-md-4">
                                <a href="{{ route('show_pro', $item->title_slug) }}">
                                    <img class="img-fluid rounded-start" data-fancybox="gallery"
                                        data-src="{{ asset('/storage/property/' . $item->image) }}"
                                        src="{{ asset('/storage/property/' . $item->image) }}" alt="{{ $item->title }}">
                                </a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <a class="btn p-0 text-secondary"
                                                href="{{ route('show_pro', $item->title_slug) }}">
                                                <h1 class="card-title">{{ $title }}</h1>
                                            </a>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <p class="card-text mb-1">
                                                <a class="btn btn-sm btn-outline-dark"
                                                    href="{{ route('show_category', $item->Cate->slug_name) }}">
                                                    {{ $item->Cate->name }}
                                                </a>
                                                <a class="btn btn-sm btn-outline-secondary"
                                                    href="{{ route('show_city', $item->City->slug_city) }}">
                                                    {{ $item->City->city }}
                                                </a>
                                            </p>
                                            <div class="col-12 mb-3 w-75">
                                                <p class="card-text">{{ $item->description }}</p>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <p class="card-text">
                                                    <i class="fas fa-bed"></i> {{ $item->rooms }}
                                                    <i class="fas fa-shower"></i> {{ $item->bathrooms }}
                                                </p>
                                            </div>
                                            {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                ago</small>
                                        </p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mb-2 border-bottom card-body">
                            <div class="col-4">
                                <div class="card-body">
                                    <h4 class="card-title">For {{ ucfirst($item->purpose) }}...</h4>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-2">
                                            <h5 class="card-title">Price :</h5>
                                        </div>
                                        <div class="col-10">
                                            <div class="card-text">
                                                ₹ {{ number_format($item->price) }}
                                                @if ($item->purpose != 'sale')
                                                /month
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            @if (!empty($gals))
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="card-title">Gallary :</h5>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="carousel">
                                                            @forelse ($gals as $gal)
                                                                <div class="carousel__slide">
                                                                    <img class="w-100 rounded"
                                                                        src="{{ asset('/storage/gallary/' . $gal->pro_id . '/' . $gal->gal_image) }}"
                                                                        data-fancybox="gallery"
                                                                        data-src="{{ asset('/storage/gallary/' . $gal->pro_id . '/' . $gal->gal_image) }}"
                                                                        alt="Error">
                                                                </div>
                                                            @empty
                                                                <h6>No Images Uploaded</h6>
                                                            @endforelse
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @if (!empty($item->video))
                                                <div class="row">
                                                    <div class="col-2 mb-2">
                                                        <h5 class="card-title">Video :</h5>
                                                    </div>
                                                    <div class="col-12 mb-2">
                                                        {!! $item->video !!}
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-start">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-3 mb-2">
                                            <h5 class="card-title">Area :</h5>
                                        </div>
                                        <div class="col mb-2">
                                            <div class="card-text">
                                                {{ number_format($item->area) }} Sq. Ft.
                                            </div>
                                        </div>
                                        @if (!empty($item->floorplan))
                                            <div class="col-12 mb-2">
                                                <h5 class="card-title">
                                                    Floorplan :
                                                </h5>
                                                <img class="w-100 rounded"
                                                    src="{{ asset('/storage/property/' . $item->floorplan) }}"
                                                    data-fancybox="gallery"
                                                    data-src="{{ asset('/storage/property/' . $item->floorplan) }}"
                                                    alt="Error">
                                            </div>
                                        @endif
                                        @if (!empty($faci))
                                            <div class="col-12 mb-2">
                                                <h5 class="card-title">
                                                    Facilities :
                                                </h5>
                                                <div class="row">
                                                    <div class="card-text">
                                                        @foreach ($faci as $fac)
                                                            <button class="btn btn-{{ $fac->color }} btn-lg mb-1">
                                                                {!! $fac->fa !!} {{ $fac->faci }}
                                                            </button>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <div class="col-12 mb-2">
                                            <h5 class="card-title">
                                                Contact :
                                            </h5>
                                            <div class="row">
                                                <div class="col-4">
                                                    <h6 class="card-title">Phone :</h6>
                                                </div>
                                                <div class="col-8">
                                                    <a href="tel:{{ $item->cont_ph }}"
                                                        class="card-text text-muted">{{ $item->cont_ph }}</a>
                                                </div>
                                                <div class="col-4">
                                                    <h6 class="card-title">Email :</h6>
                                                </div>
                                                <div class="col-8">
                                                    <a href="mailto:{{ $item->cont_em }}"
                                                        class="card-text text-muted">{{ $item->cont_em }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0 mb-2 card-body">
                            <div class="col-2">
                                <div class="card-body">
                                    <h5 class="card-title">Address :</h5>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <div class="card-text"> {{ $item->address }}</div>
                                </div>
                            </div>
                        </div>
                        @if (!empty($item->map))
                            <div class="row g-0 mb-2 card-body">
                                <div class="col-12 mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Map :</h5>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <div class="card-body">
                                        {!! $item->map !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('iframe').addClass('d-block mx-auto');
            $('iframe').css('width', '100%');
            $('iframe').css('height', '25em');
            // console.log('hello');

            Fancybox.bind("gallery", {});
            const myCarousel = new Carousel(document.querySelector(".carousel"), {});
        });
    </script>
@endsection
