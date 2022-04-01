@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Cities</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Cities</li>
                        <li class="breadcrumb-item active">@if (!empty($city))Edit @else Add @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_category') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            {{-- <h1>This is Your Category</h1> --}}
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($city))Edit @else Add @endif City</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($city)){{ route('cities_edited', $city->id) }}@else{{ route('cities_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col">

                                <div class="col-md-8">
                                    <label for="" class="form-label">City Name</label>
                                    <input type="text" class="form-control" name="city" value="@if (!empty($city)){{ $city->city }}@else{{ old('city') }}@endif"
                                        required>
                                    <div class="text-danger">* @error('city') {{ $message }} @enderror</div>
                                </div>
                                <div class="col-12">
                                    <label for="" class="form-label">City Status</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="1" name="status"
                                            @if (!empty($city)) @if ($city->status == 1) checked @endif @endif>
                                        <label class="form-check-label">
                                            Check to enable this city
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn @if (!empty($city)) btn-success @else btn-primary @endif" type="submit">@if (!empty($city)) Update @else Submit @endif</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
