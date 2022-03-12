@extends('layouts.app')
@push('title')
    {{ $CMS['terms_title'] }}
@endpush
@push('meta')
    {{ $CMS['terms_meta'] }}
@endpush
@section('content_box')
    <div class="container">
        <div class="py-5">
            <div class="row">
                <div class="col-md-12" style="text-align: justify">
                    {!! $CMS['terms_content'] !!}
                </div>
            </div>
        </div>
    </div>
@endsection
