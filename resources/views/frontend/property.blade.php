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
                        <div class="row g-0">
                            <div class="col-md-4">
                                <a href="{{ route('show_pro', $item->title_slug) }}">
                                    <img class="img-fluid rounded-start"
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
                                            <div class="col-12 mb-3">
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
                            <div class="row">
                                <div class="col-12">
                                    <div class="card-body">
                                        <h4 class="card-title">For {{ ucfirst($item->purpose) }}...</h4>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-2">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="card-title">Price :</h5>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-text">
                                                            ₹ {{ number_format($item->price) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-2">
                                                        <h5 class="card-title">Address :</h5>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card-text"> {{ $item->address }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if (!empty($item->video))
                                                <div class="col-12 mb-2">
                                                    <div class="">
                                                        {!! $item->video !!}
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <h5 class="form-label">Area :</h5>
                                            </div>
                                            <div class="col">
                                                <div class="card-text">
                                                    {{ number_format($item->area) }} Sq. Ft.
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                @if (!empty($item->flooreplan))
                                                    <h5 class="card-title">
                                                        Floorplan :
                                                    </h5>
                                                    <img class="w-100 rounded"
                                                        src="{{ asset('/storage/property/' . $item->floorplan) }}"
                                                        alt="Error">
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('iframe').addClass('mx-auto');
            console.log('hello');
        });
    </script>
@endsection
