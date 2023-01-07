<!DOCTYPE html>
<html lang="en">

<head>

    @if (!empty($logo_image->value))
        <link rel="icon" type="image/x-icon" href="{{ asset('/storage/siteSettings/' . $logo_image->value) }}">
    @else
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_discription->value ?? '' }}@stack('meta')" />
    <title>
        @stack('title') |
        {{ $title ? $title : '' }} | {{ $site_title->value ?? config('dz.public.title') }}
        {{-- @stack('title') --}}
    </title>

    @foreach (config('dz.public.global.css') as $item)
        <link rel="stylesheet" crossorigin="anonymous" href="{{ $item }}">
    @endforeach

    {{-- <title>Home Page</title> --}}
</head>

<body class="py-0">
