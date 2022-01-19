@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Users</li>
                        <li class="breadcrumb-item active">List</li>
                        <div class="d-flex ms-auto">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                {{-- <label for="" class="form-label">Property Gallary</label> --}}
                                <div class="input-group">
                                    <input type="file" class="form-control" name="gallary[]" multiple>
                                    <button class="btn btn-primary" type="submit">Add</button>
                                </div>
                            </form>
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
                            {{-- <th scope="col">Id</th> --}}
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usersData as $item)
                            <tr>
                                {{-- <th scope="row">{{ $item->id }}</th> --}}
                                <th scope="row">{{ $item->name }}</th>
                                <th scope="row">{{ $item->email }}</th>

                                <th scope="row">
                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')" href="">
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
