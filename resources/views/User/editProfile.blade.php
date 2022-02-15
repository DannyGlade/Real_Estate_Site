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
                        <form class="row" action="{{ route('editedUserProfile') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-4">
                                <img id="pro-img" class="img-rounded" height="420" width="420"
                                    src="{{ !empty($user->Data->image) ? asset('/storage/userdata/' . $user->Data->image) : asset('stockUser.png') }}"
                                    alt="{{ $user->name }}">
                                <div class="input-group w-100">
                                    <input class="form-control" name="image" type="file">
                                    <button class="btn btn-danger" id="rm-img"><i class="fa fa-trash"></i>
                                        Remove</button>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mb-3">
                                            <div class="col-12 mb-2">
                                                {{-- <h1 class="card-title">{{ $user->name }}</h1> --}}
                                                <label class="form-label h6" for="">Name</label>
                                                <input class="form-control" name="name" type="text"
                                                    placeholder="Your name here" value="{{ $user->name }}">
                                                @error('name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-2">
                                                {{-- <h5 class="card-text">{{ $user->email }}</h5> --}}
                                                <label class="form-label h6" for="">Email</label>
                                                <input class="form-control" name="email" type="email"
                                                    placeholder="Your new email here" value="{{ $user->email }}">
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3">
                                            {{-- <h5 class="card-title">About :</h5>
                                            <p class="card-text h6">{{ $user->Data->about ?? 'No Detail Added by You' }}
                                            </p> --}}
                                            <label class="form-label h6" for="">About</label>
                                            <input class="form-control" name="about" type="text"
                                                placeholder="Write something about you..."
                                                value="{{ $user->Data->about ?? '' }}">
                                            @error('about')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 mt-auto mb-0">
                                            <button type="submit" class="btn btn-success"
                                                href="{{ route('editUserProfile') }}">
                                                <i class="fa fa-floppy-o" aria-hidden="true"></i> Save Profile</button>
                                        </div>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $(document).on('click', 'form #rm-img', function(e) {
                e.preventDefault();
                var def_img = "{{ asset('stockUser.png') }}";

                $.ajax({
                    type: "GET",
                    url: "{{ route('del_profile_img') }}",
                    success: function(response) {
                        if (response) {
                            $('#pro-img').attr('src', def_img);
                        }
                    }
                });

            });
        });
    </script>
@endsection
