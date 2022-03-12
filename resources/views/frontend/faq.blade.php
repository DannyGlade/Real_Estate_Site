@extends('layouts.app')
@push('title')
    {{ $CMS['faq_title'] }}
@endpush
@push('meta')
    {{ $CMS['faq_meta'] }}
@endpush
@section('content_box')
    <div class="container">
        <div class="py-5">
            <div class="row">                
                <div class="col-md-12" style="text-align: justify">
                    {!! $CMS['faq_content'] !!}
                </div>
            </div>
        </div>
    </div>
@endsection
