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
            <div class="{{ session()->get('msgst') ? 'alert  alert-' . session()->get('msgst') : 'm-0 border-0 p-0' }}">
                {{ session()->get('msg') ?? null }}</div>
            <div class="mt-4">
                <div class="card" style="width:90%;">
                    <nav class="card-header fs-5">
                        {{-- <h4 class="">Edit Site Settings</h4> --}}
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Home</button>
                            <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about"
                                aria-selected="false">About</button>
                            <button class="nav-link" id="nav-test-tab" data-bs-toggle="tab" data-bs-target="#nav-test"
                                type="button" role="tab" aria-controls="nav-test" aria-selected="false">Test</button>
                        </div>
                    </nav>
                    <div class="card-body">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">Home</div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <form class="row g-3" action="" method="POST">
                                    @csrf
                                    <h5 class="card-title">Page Head</h5>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Title</label>
                                        <input type="text" class="form-control" name="about_title" value="">
                                        <div class="text-danger">
                                            @error('about_title')
                                                * {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Meta discription</label>
                                        <input type="text" class="form-control" name="about_meta" value="">
                                        <div class="text-danger">
                                            @error('about_meta')
                                                * {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <h5 class="card-title">Page Content</h5>
                                    <div class="col-md-6">
                                        <label for="" class="form-label">Image</label>
                                        <input type="file" class="form-control" name="about_image">
                                        <div class="text-danger">
                                            @error('about_image')
                                                * {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        Old image here
                                    </div>
                                    <div class="col-md-12">
                                        <label for="" class="form-label">Content</label>
                                        <textarea name="about_content" id="ckeditor"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="nav-test" role="tabpanel" aria-labelledby="nav-test-tab">Test
                            </div>

                        </div>
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
            CKEDITOR.replace('ckeditor');
        });
    </script>
@endsection
