@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Facilities</li>
                        <li class="breadcrumb-item active">@if (!empty($faci))Edit @else Add @endif</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_category') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="mt-4">
                <div class="card" style="width:40rem;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($faci))Edit @else Add @endif Facility</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($faci)){{ route('facilities_edited', $faci->id) }}@else{{ route('facilities_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col">
                                <div class="col-md-8">
                                    <label for="" class="form-label">Facility</label>
                                    <input type="text" class="form-control" name="faci" value="@if (!empty($faci)){{ $faci->faci }}@else{{ old('faci') }}@endif"
                                        required>
                                    <div class="text-danger">@error('faci') * {{ $message }} @enderror</div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn @if (!empty($faci)) btn-success @else btn-primary @endif" type="submit">@if (!empty($faci)) Update @else Submit @endif</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
