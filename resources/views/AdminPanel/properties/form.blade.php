@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Property</li>
                        <li class="breadcrumb-item active">@if (!empty($pro))Edit @else Add @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_properties') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($pro))Edit @else Add @endif Property</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" id="proForm" action="@if (!empty($pro)){{ route('properties_edited', $pro->id) }}@else{{ route('properties_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="row border-bottom border-2 m-auto mt-3">
                                <div class="col mb-2  mx-auto">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="1" name="featured"
                                                @if (!empty($pro)) @if ($pro->featured == 1) checked @endif @endif>
                                            <label class="form-check-label">
                                                Featured
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Property Title</label>
                                            <input type="text" class="form-control" name="title"
                                                value="@if (!empty($pro)){{ $pro->title }}@else{{ old('title') }}@endif">
                                            <div class="text-danger">@error('title') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Price</label>
                                            <div class="input-group">
                                                <div class="input-group-text">₹</div>
                                                <input type="number" class="form-control" name="price" min="0"
                                                    max="999999999" value="@if (!empty($pro)){{ $pro->price }}@else{{ old('price') }}@endif">
                                            </div>
                                            <div class="text-danger">@error('price') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-6">
                                            <label class="form-label">Purpose</label>
                                            <div class="input-group">
                                                <label class="input-group-text">Options</label>
                                                <select class="form-select" name="purpose">
                                                    <option value="" selected>Choose...</option>
                                                    <option @if (!empty($pro)) @if ($pro->purpose == 'sale') selected @endif @else @if (old('purpose') == 'sale') selected @endif @endif value="sale">Sale</option>
                                                    <option @if (!empty($pro)) @if ($pro->purpose == 'rent') selected @endif @else @if (old('purpose') == 'rent') selected @endif @endif value="rent">Rent</option>
                                                    <option @if (!empty($pro)) @if ($pro->purpose == 'pg') selected @endif @else @if (old('purpose') == 'pg') selected @endif @endif value="pg">PG</option>
                                                </select>
                                            </div>
                                            <div class="text-danger">@error('purpose') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Category</label>
                                            <div class="input-group">
                                                <label class="input-group-text">Options</label>
                                                <select class="form-select" name="category">
                                                    <option value="" selected>Choose...</option>
                                                    @foreach ($cate as $item)
                                                        @if (!empty($pro))
                                                            @if ($pro->category == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->name }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endif
                                                        @else
                                                            @if (old('category') == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->name }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->name }}
                                                                </option>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger">@error('category') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <div class="form-label">Bed Rooms</div>
                                            <input type="number" class="form-control" value="@if (!empty($pro)){{ $pro->rooms }}@else{{ old('rooms') ?? 1 }}@endif"
                                                name="rooms" min="1">
                                            <div class="text-danger">@error('rooms') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-label">Bath Rooms</div>
                                            <input type="number" class="form-control" value="@if (!empty($pro)){{ $pro->bathrooms }}@else{{ old('bathrooms') ?? 1 }}@endif"
                                                name="bathrooms" min="1">
                                            <div class="text-danger">@error('bathrooms') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-label">Area</div>
                                            <div class="input-group">
                                                <label class="input-group-text">Sq. Ft.</label>
                                                <input type="number" class="form-control"
                                                    value="@if (!empty($pro)){{ $pro->area }}@else{{ old('area') ?? 700 }}@endif" name="area" min="700">
                                            </div>
                                            <div class="text-danger">@error('area') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-3">
                                            <label class="form-label">City</label>
                                            <div class="input-group">
                                                <select class="form-select" name="city">
                                                    <option selected>Choose...</option>
                                                    @foreach ($city as $item)
                                                        @if (!empty($pro))
                                                            @if ($pro->city == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->city }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->city }}
                                                                </option>
                                                            @endif
                                                        @else
                                                            @if (old('city') == $item->id)
                                                                <option selected value="{{ $item->id }}">
                                                                    {{ $item->city }}</option>
                                                            @else
                                                                <option value="{{ $item->id }}">{{ $item->city }}
                                                                </option>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="text-danger">@error('city') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-9">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" value="@if (!empty($pro)){{ $pro->address }}@else{{ old('address') }}@endif"
                                                name="address">
                                            <div class="text-danger">@error('address') * {{ $message }} @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Property Video</label>
                                            <textarea class="form-control" rows="3"
                                                name="video">@if (!empty($pro)){{ $pro->video }}@else{{ old('video') }}@endif</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Property Map</label>
                                            <textarea class="form-control" rows="3"
                                                name="map">@if (!empty($pro)){{ $pro->map }}@else{{ old('map') }}@endif</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mx-auto mb-2 ps-2 border-start">
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label">Property Image</label>
                                        <p class="text-muted form-label">for best featured output upload [1903 x 513] Image</p>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="text-danger mt-0">@error('image') * {{ $message }} @enderror</div>
                                    </div>
                                    @if (!empty($pro->image))
                                        <div class="mb-2">
                                            <label for="" class="form-label">Old Image</label>
                                            <img class="form-control"
                                                src="{{ asset('/storage/property/' . $pro->image) }}" alt="Error">
                                        </div>
                                    @endif
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label">Flooreplan Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="floorplan">
                                        </div>
                                        <div class="text-danger mt-0">@error('floorplan') * {{ $message }} @enderror
                                        </div>
                                    </div>
                                    @if (!empty($pro->flooreplan))
                                        <div class="mb-2">
                                            <label for="" class="form-label">Old Flooreplan</label>
                                            <img class="form-control"
                                                src="{{ asset('/storage/property/' . $pro->floorplan) }}" alt="Error">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="row border-bottom border-2 m-auto mt-3">
                                <form id="gallaryAjax" data-id="" action="javascript:void(0)" method="post">
                                    @csrf
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label">Property Gallary</label>
                                        <div class="input-group mb-2">
                                            <input type="file" class="form-control" name="gallary[]" multiple>
                                        </div>
                                        <button type="submit" id="ajaxSave" class="btn btn-outline-secondary">Save</button>
                                        <button id="ajaxDelete" class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </form>
                            </div> --}}
                            <div class="col-12">
                                <button class="btn @if (!empty($pro)) btn-success @else btn-primary @endif" type="submit">@if (!empty($pro)) Update @else Submit @endif</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $(document).on('click', '#ajaxSave', function(e) {
            e.preventDefault();

        });
        $(document).on('click', '#ajaxDelete', function(e) {
            e.preventDefault();
        });
        $('#gallaryAjax').submit(function (e) {
            e.preventDefault();
            console.log('submit');

        });
    });
</script> --}}
