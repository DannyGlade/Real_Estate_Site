@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>Dashboard</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Admin</li>
                        <li class="breadcrumb-item active">Dashboard</li>
                        {{-- <div class="d-flex ms-auto">
                            <a class="btn btn-primary" href="{{ route('add_properties') }}">Add</a>
                        </div> --}}
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="row mb-3">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4>Users +{{ $newUsers }}</h4>
                            </div>
                            <div class="card-body bg-primary bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">New users this month
                                    <a class="stretched-link link-dark" href="{{ route('list_users') }}">
                                        more info
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card rounded">
                            <div class="card-header bg-success">
                                <h4>Reviews +{{ $newReviews }}</h4>
                            </div>
                            <div class="card-body bg-success bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">New reviews this month
                                    <a class="stretched-link link-dark" href="{{ route('list_reviews') }}">
                                        more info
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header bg-warning">
                                <h4>Properties +{{ $newProperty }}</h4>
                            </div>
                            <div class="card-body bg-warning bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">New properties this month
                                    <a class="stretched-link link-dark" href="{{ route('list_properties') }}">
                                        more info
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4>An Item</h4>
                            </div>
                            <div class="card-body bg-info bg-gradient bg-opacity-75 text-dark">
                                <p class="m-0">description</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <h4>More Items</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
