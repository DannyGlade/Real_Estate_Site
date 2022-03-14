@extends('AdminPanel.layouts.main')
@section('main-section')
    <div class="container">
        <div class="container-fluid">
            <div class="mt-4">
                <h2>CMS</h2>
                <div aria-label="breadcrumb mt-5">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item" aria-current="page">CMS</li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
            <div id="alert" class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <form action="{{ route('save_cms') }}" method="POST" enctype="multipart/form-data">
                        <nav class="card-header fs-5">
                            {{-- <h4 class="">Edit Site Settings</h4> --}}
                            <div class="d-flex">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                        aria-selected="true">Home</button>
                                    <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about"
                                        aria-selected="false">About</button>
                                    <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq"
                                        aria-selected="false">FAQ</button>
                                    <button class="nav-link" id="nav-terms-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-terms" type="button" role="tab" aria-controls="nav-terms"
                                        aria-selected="false">Terms</button>
                                    {{-- <button class="nav-link" id="nav-test-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-test" type="button" role="tab" aria-controls="nav-test"
                                        aria-selected="false">Test</button> --}}
                                </div>
                                @if (session()->get('AdminUser')['type'] == 'R')
                                    <div class="ms-auto">
                                        <button class="btn btn-success h-100" type="submit">Update</button>
                                    </div>
                                @endif
                            </div>
                        </nav>
                        <div class="card-body">
                            @csrf
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <h5 class="card-title">Home Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="home_title"
                                                value="{{ $cms['home_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_title')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="home_meta"
                                                value="{{ $cms['home_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('home_meta')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">Home Content</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="home_image">
                                            <div class="text-danger">
                                                @error('home_image')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['home_image']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="Home Image" data-key="home_image"
                                                        class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto"
                                                    src="{{ asset('/storage/cms/' . $cms['home_image']) }}" alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="home_content" id="home_content"
                                                class="ckeditor">{{ $cms['home_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <div class="row">
                                        <h5 class="card-title">About Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="about_title"
                                                value="{{ $cms['about_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('about_title')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="about_meta"
                                                value="{{ $cms['about_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('about_meta')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">About Content</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="about_image">
                                            <div class="text-danger">
                                                @error('about_image')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            @if (!empty($cms['about_image']))
                                                <label for="" class="form-label">Current Image</label>
                                                @if (session()->get('AdminUser')['type'] == 'R')
                                                    <button data-name="About Image" data-key="about_image"
                                                        class="mb-2 btn btn-danger btn-sm ajaxDelete">
                                                        <i class="fa fa-remove" aria-hidden="true"></i>
                                                        Remove
                                                    </button>
                                                @endif
                                                <img height="200px" class="form-control w-auto"
                                                    src="{{ asset('/storage/cms/' . $cms['about_image']) }}" alt="Error">
                                            @endif
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            {{-- <textarea name="about_content" class="ckeditor" id=""></textarea> --}}
                                            <textarea name="about_content" class="ckeditor"
                                                id="about_content">{{ $cms['about_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                                    <div class="row">
                                        <h5 class="card-title">FAQ Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="faq_title"
                                                value="{{ $cms['faq_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('faq_title')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="faq_meta"
                                                value="{{ $cms['faq_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('faq_meta')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">FAQ Content</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="faq_content" class="ckeditor"
                                                id="faq_content">{{ $cms['faq_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-terms" role="tabpanel" aria-labelledby="nav-terms-tab">
                                    <div class="row">
                                        <h5 class="card-title">Terms Head</h5>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="terms_title"
                                                value="{{ $cms['terms_title'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('tems_title')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <label for="" class="form-label">Meta discription</label>
                                            <input type="text" class="form-control" name="terms_meta"
                                                value="{{ $cms['terms_meta'] ?? '' }}">
                                            <div class="text-danger">
                                                @error('terms_meta')
                                                    * {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <h5 class="card-title">Terms Content</h5>
                                        <div class="col-md-12 mb-2">
                                            <label for="" class="form-label">Content</label>
                                            <textarea name="terms_content" class="ckeditor"
                                                id="terms_content">{{ $cms['terms_content'] ?? '' }}</textarea>
                                        </div>
                                        @if (session()->get('AdminUser')['type'] == 'R')
                                            <div class="col-md-12">
                                                <button class="btn btn-success" type="submit">Update</button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="tab-pane fade" id="nav-test" role="tabpanel" aria-labelledby="nav-test-tab">
                                    Test
                                </div> --}}
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
            $('.alert').fadeOut(3000);

            // var ckeditor = new CKEDITOR
            $(window).on('load', function() {
                $('.ckeditor').ckeditor();
            });
            // CKEDITOR.replaceAll('ckeditor');

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
                        url: "{{ route('cmsajaxDelete') }}",
                        data: data,
                        dataType: "JSON",
                        success: function(response) {
                            if (response.status) {
                                $('.alert').fadeIn();
                                // alert(response.message);
                                // $(_this).parent('div').attr('hidden', 'true');
                                $(_this).parent('div').html('');
                                $('#alert').addClass('alert alert-danger')
                                    .removeClass('m-0 border-0 p-0').html('Image Deleted...');
                                $('.alert').fadeOut(3000);
                            }
                        }
                    });
                }
                // console.log(key, name);
            });
        });
    </script>
@endsection
