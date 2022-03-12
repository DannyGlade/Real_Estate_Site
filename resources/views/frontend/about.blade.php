@extends('layouts.app')
@push('title')
    {{ $CMS['about_title'] }}
@endpush
@push('meta')
    {{ $CMS['about_meta'] }}
@endpush
@section('content_box')
    <div class="container">
        <div class="py-5">
            <div class="row">
                @if (!empty($CMS['about_image']))
                    <div class="col-md-5">
                        <img width="500px" class="h-auto mb-2" src="{{ asset('/storage/cms/' . $CMS['about_image']) }}"
                            alt="Error">
                    </div>
                @endif
                @if (empty($CMS['about_image']))
                    <div class="col-md-12" style="text-align: justify">
                        {!! $CMS['about_content'] !!}
                    </div>
                @else
                    <div class="col-md-7" style="text-align: justify">
                        {!! $CMS['about_content'] !!}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
