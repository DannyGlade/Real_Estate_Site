@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Properties</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Properties</li>
                        <li class="breadcrumb-item active">List</li>
                        <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_properties') }}">Add</a>
                        </div>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <table class="table table-hover table-striped" id="data">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Property</th>
                            <th scope="col">Price ( ₹ )</th>
                            <th scope="col">Featured</th>
                            <th scope="col">Purpose</th>
                            <th scope="col">Category</th>
                            <th scope="col">Image</th>
                            <th scope="col">City</th>
                            <th scope="col">Gallary</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pro as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <th scope="row">{{ $item->title }}</th>
                                <th scope="row">{{ number_format($item->price) }}</th>
                                <th scope="row" @if ($item->featured == 1)class="text-success">Active @else class="text-danger"> Disabled @endif</th>
                                <th scope="row">{{ $item->purpose }}</th>
                                <th scope="row">{{ $item->Cate->name }}</th>
                                <th scope="row"><img height="30rem" class="rounded"
                                        src="{{ asset('/storage/property/' . $item->image) }}" alt="Error"></th>
                                <th scope="row">{{ $item->City->city }}</th>
                                <th scope="row"><a href="{{ route('get_gallary', $item->id) }}"
                                        class="btn btn-primary btn-sm"><i class="fas fa-images"></i></a></th>
                                <th scope="row">
                                    <a class="btn btn-success btn-sm" href="{{ route('edit_properties', $item->id) }}">
                                        <i class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')"
                                        href="{{ route('del_properties', $item->id) }}">
                                        <i class="fa fa-trash" aria-hidden="true"></i></a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
