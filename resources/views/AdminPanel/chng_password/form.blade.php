@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <h2>Change Password</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Root User</li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('save_password') }}" method="POST">
                            @csrf
                            <div class="row m-auto mt-3">
                                <div class="col mb-2 mx-auto">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Old Password</label>
                                            <input type="password" class="form-control" name="old_password">
                                            <div class="text-danger">
                                                @error('old_password')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="" class="form-label">New Password</label>
                                            <input type="password" class="form-control" name="new_password">
                                            <div class="text-danger">
                                                @error('new_password')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="" class="form-label">Confirm New Password</label>
                                            <input type="password" class="form-control" name="new_password_confirmation">
                                            <div class="text-danger">
                                                @error('new_password_confirmation')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <button class="btn btn-success" type="submit">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
