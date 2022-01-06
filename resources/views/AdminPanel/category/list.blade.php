@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Category</li>
                        <li class="breadcrumb-item active">List</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_category') }}">Add</a>
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
                            <th scope="col">Category Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cate as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row"><img height="40rem" class="rounded" src="{{ asset('/storage/images/' . $item->image) }}" alt="Error"></th>
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="{{ route('edit_category', $item->id) }}"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')" href="{{ route('del_category',$item->id ) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </th>
                            </tr>
                        @endforeach
                        {{-- <tr>
                            <th scope="row">1</th>
                            <td scope="row">Mark</td>
                            <td scope="row">Otto</td>
                            <td scope="row">@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
