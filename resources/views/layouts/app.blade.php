@push('title')
    Home
@endpush
@include('layouts.header')
@include('layouts.navbar')
@include('layouts.carousel')

@yield('content_box')

@include('layouts.footer')
@include('layouts.close')
