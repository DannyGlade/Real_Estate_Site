@extends('layouts.app')
@section('content_box')
    <div class="container">
        <div class="py-5">
            {{-- <div class="row">
                <div class="col-12 mb-3">
                    <h1>This is {{ $user->name }} User Profile</h1>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-12 mb-3">
                    <div class="card mb-3 p-0">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-rounded" height="420" width="420"
                                    src="{{ !empty($user->Data->image) ? asset('/storage/userdata/' . $user->Data->image) : asset('stockUser.png') }}"
                                    alt="{{ $user->name }}">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <div class="col-12 mb-2">
                                                <h1 class="card-title">{{ $user->name }}</h1>
                                            </div>
                                            <div class="col-12 mb-2">
                                                <h5 class="card-text">{{ $user->email }}</h5>
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <h5 class="card-title">About :</h5>
                                            <p class="card-text h6">{{ $user->Data->about ?? 'No Detail Added by You' }}
                                            </p>
                                        </div>
                                        <div class="col-12 mt-auto mb-0">
                                            <a class="btn btn-outline-primary" href="{{ route('editUserProfile') }}"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i> Edit Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
