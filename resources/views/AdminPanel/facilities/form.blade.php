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
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">@if (!empty($faci))Edit @else Add @endif Facility</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($faci)){{ route('facilities_edited', $faci->id) }}@else{{ route('facilities_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-8">
                                <label for="" class="form-label">Facility</label>
                                <input type="text" class="form-control" name="faci" value="@if (!empty($faci)){{ $faci->faci }}@else{{ old('faci') }}@endif"
                                    required>
                                <div class="text-danger">@error('faci') * {{ $message }} @enderror</div>
                            </div>
                            <div class="col-md-5">
                                <label for="" class="form-label">Font Awesome</label>
                                <input type="text" class="form-control" name="fa" value="@if (!empty($faci)){{ $faci->fa }}@else{{ old('fa') }}@endif">
                                <div class="text-danger">@error('fa') * {{ $message }} @enderror</div>
                            </div>
                            <div class="col-md-3">
                                <label for="" class="form-label">Color</label>
                                <div class="input-group">
                                    <select class="form-select" name="color">
                                        <option {{ $faci->color == '' ? 'selected' : '' }} value="">Choose...</option>
                                        <option {{ $faci->color == 'bg-primary' ? 'selected' : '' }}
                                            class="bg-primary" value="bg-primary">Blue</option>
                                        <option {{ $faci->color == 'bg-secondary' ? 'selected' : '' }}
                                            class="bg-secondary" value="bg-secondary">Grey</option>
                                        <option {{ $faci->color == 'bg-success' ? 'selected' : '' }}
                                            class="bg-success" value="bg-success">Green</option>
                                        <option {{ $faci->color == 'bg-danger' ? 'selected' : '' }}
                                            class="bg-danger" value="bg-danger">Red</option>
                                        <option {{ $faci->color == 'bg-warning' ? 'selected' : '' }}
                                            class="bg-warning" value="bg-warning">Yellow</option>
                                        <option {{ $faci->color == 'bg-info' ? 'selected' : '' }} class="bg-info"
                                            value="bg-info">Teal Blue</option>
                                        <option {{ $faci->color == 'bg-light' ? 'selected' : '' }} class="bg-light"
                                            value="bg-light">Light</option>
                                        <option {{ $faci->color == 'bg-dark text-white' ? 'selected' : '' }}
                                            class="bg-dark text-white" value="bg-dark text-white">Dark</option>
                                    </select>
                                </div>
                                <div class="text-danger">@error('color') * {{ $message }} @enderror</div>
                            </div>
                            <div class="col-12">
                                <button
                                    class="btn
                                @if (!empty($faci)) btn-success
                                @else btn-primary
                                @endif"
                                    type="submit">@if (!empty($faci)) Update @else Submit @endif</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
