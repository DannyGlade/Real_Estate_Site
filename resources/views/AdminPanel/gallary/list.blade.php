@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>{{ $pro->title ?? '' }} Gallary</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Gallary</li>
                        <li class="breadcrumb-item active">List</li>
                        @if (!empty($id))
                            <div class="d-flex ms-auto">
                                <form action="{{ route('set_gallary', $id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    {{-- <label for="" class="form-label">Property Gallary</label> --}}
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="gallary[]" multiple>
                                        <button class="btn btn-primary" type="submit">Add</button>
                                    </div>
                                    <div class="text-danger">
                                        @error('gallary[]')
                                            {{ $message }}
                                        @enderror
                                    </div>

                                </form>
                            </div>
                        @endif
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}
            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Image</th>
                            <th scope="col">Property</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($gal as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row"><img height="100rem" class="rounded"
                                        src="{{ asset('/storage/gallary/' . $item->pro_id . '/' . $item->gal_image) }}"
                                        data-fancybox="gallery"
                                        data-src="{{ asset('/storage/gallary/' . $item->pro_id . '/' . $item->gal_image) }}"
                                        alt="Error"></th>
                                <th scope="row">{{ $item->Property->title }}</th>
                                <th scope="row">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                        href="{{ route('del_gallary', [$item->pro_id, $item->id]) }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                </th>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="4" class="text-center">No Images Uploaded</th>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.alert').fadeOut(3000);
            Fancybox.bind("gallery", {});
            // const myCarousel = new Carousel(document.querySelector(".carousel"), {});
        });
    </script>
@endsection
