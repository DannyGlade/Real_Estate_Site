@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4 ">
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">Site Settings</li>
                        <li class="breadcrumb-item active">Edit</li>
                        {{-- <div class="d-flex ms-auto">
                            <a class="btn btn-primary disabled" href="{{ route('add_properties') }}">Add</a>
                        </div> --}}
                    </ol>
                </div>
            </div>
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <div class="card-header">
                        <h4 class="">Edit Site Settings</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" action="{{ route('save_settings') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row border-bottom border-2 m-auto mt-3">
                                <div class="col mb-2 mx-auto">
                                    <div class="mb-2">
                                        <h5 class="card-title">Main Options</h5>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Site Title</label>
                                                <input type="text" class="form-control" name="site_title"
                                                    value="{{ $siteSetting['site_title'] ?? '' }}">
                                                <div class="text-danger">@error('site_title') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Brand Title</label>
                                                <input type="text" class="form-control" name="brand_title"
                                                    value="{{ $siteSetting['brand_title'] ?? '' }}">
                                                <div class="text-danger">@error('brand_title') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Meta Discription</label>
                                                <input type="text" class="form-control" name="meta_discription"
                                                    value="{{ $siteSetting['meta_discription'] ?? '' }}">
                                                <div class="text-danger">@error('meta_discription') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Footer Content</label>
                                                <input type="text" class="form-control" name="footer_content"
                                                    value="{{ $siteSetting['footer_content'] ?? '' }}">
                                                <div class="text-danger">@error('footer_content') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Site Email</label>
                                                <input type="text" class="form-control" name="site_email"
                                                    value="{{ $siteSetting['site_email'] ?? '' }}">
                                                <div class="text-danger">@error('site_email') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Site Contact</label>
                                                <input type="text" class="form-control" name="site_contact"
                                                    value="{{ $siteSetting['site_contact'] ?? '' }}">
                                                <div class="text-danger">@error('site_contact') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <h5 class="card-title">Social Links</h5>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Facebook URL</label>
                                                <input type="text" class="form-control" name="facebook_url"
                                                    value="{{ $siteSetting['facebook_url'] ?? '' }}">
                                                <div class="text-danger">@error('facebook_url') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Instagram URL</label>
                                                <input type="text" class="form-control" name="instagram_url"
                                                    value="{{ $siteSetting['instagram_url'] ?? '' }}">
                                                <div class="text-danger">@error('instagram_url') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Youtube URL</label>
                                                <input type="text" class="form-control" name="youtube_url"
                                                    value="{{ $siteSetting['youtube_url'] ?? '' }}">
                                                <div class="text-danger">@error('youtube_url') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="" class="form-label">Twitter URL</label>
                                                <input type="text" class="form-control" name="twitter_url"
                                                    value="{{ $siteSetting['twitter_url'] ?? '' }}">
                                                <div class="text-danger">@error('twitter_url') * {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mx-auto mb-2 ps-2 border-start">
                                    <div class="col-md-12 mb-2">
                                        <label for="" class="form-label">Logo Image</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="logo_image">
                                        </div>
                                        <div class="text-danger mt-0">@error('logo_image') * {{ $message }} @enderror
                                        </div>
                                    </div>
                                    @if (!empty($siteSetting['logo_image']))
                                        <div class="mb-2">
                                            <label for="" class="form-label">Current Logo</label>
                                            <button data-name="Logo Image" data-key="logo_image"
                                                class="btn btn-danger btn-sm ajaxDelete"><i class="fa fa-remove"
                                                    aria-hidden="true"></i> Remove</button>
                                            <img class="form-control"
                                                src="{{ asset('/storage/siteSettings/' . $siteSetting['logo_image']) }}"
                                                alt="Error">
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-success" type="submit">Update</button>
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
            $(document).on('click', '.ajaxDelete', function(e) {
                e.preventDefault();
                var _this = $(this);
                var name = $(this).attr('data-name');
                var key = $(this).attr('data-key');
                var csrf = "{{ csrf_token() }}";

                if (confirm('Are you sure to delete current ' + name + ' ?')) {
                    data = {
                        key: key,
                        _token: csrf
                    }
                    $.ajax({
                        type: "POST",
                        url: "{{ route('ajaxDelete') }}",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {
                            alert(response.message);
                            $(_this).parent('div').attr('hidden', 'true');
                        }
                    });
                }
                // console.log(key, name);
            });
        });
    </script>
@endsection
