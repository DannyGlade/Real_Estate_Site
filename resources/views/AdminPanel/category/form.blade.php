@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Category</li>
                        <li class="breadcrumb-item active">@if (!empty($cate))Edit @else Add @endif</li>
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
                        <h4 class="">@if (!empty($cate))Edit @else Add @endif Category</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="@if (!empty($cate)){{ route('category_edited', $cate->id) }}@else{{ route('category_added') }}@endif" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="col">

                                <div class="col-md-12">
                                    <label for="" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="@if (!empty($cate)){{ $cate->name }}@else{{ old('name') }}@endif"
                                        required>
                                    <div class="text-danger">@error('name') * {{ $message }} @enderror</div>
                                </div>
                                <div class="col-md-12">
                                    <label for="" class="form-label">Category Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id=""
                                            @if (empty($cate))required @endif>
                                    </div>
                                    <div class="text-danger mt-0">@error('image') * {{ $message }} @enderror</div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                @if (!empty($cate))
                                    <label for="" class="form-label">Old Image</label>
                                    <img class="form-control" src="{{ asset('/storage/images/' . $cate->image) }}"
                                        alt="Error">
                                @endif
                            </div>
                            <div class="col-12">
                                <button class="btn @if (!empty($cate)) btn-success @else btn-primary @endif" type="submit">@if (!empty($cate)) Update @else Submit @endif</button>
                                </div>

                            </form>

                        {{-- <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted ">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
