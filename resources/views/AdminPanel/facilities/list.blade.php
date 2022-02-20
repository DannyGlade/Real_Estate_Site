@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Facilities</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Facilities</li>
                        <li class="breadcrumb-item active">List</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_facilities') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            {{-- <h1>This is Your Category</h1> --}}
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Facility</th>
                            {{-- <th scope="col">FA icon</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faci as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th class="bg-{{ $item->color }}" scope="row">{!! $item->fa !!} {{ $item->faci }}
                                </th>
                                {{-- <th scope="row">{!! $item->fa ?? 'No Icon' !!}</th> --}}
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="{{ route('edit_facilities', $item->id) }}"><i
                                            class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                        href="{{ route('del_facilities', $item->id) }}"><i class="fa fa-trash"
                                            aria-hidden="true"></i></a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.alert').fadeOut(3000);
        });
    </script>
@endsection
