<!DOCTYPE html>
<html lang="en">

<head>
    @if ($logo_image->value)
        <link rel="icon" type="image/x-icon" href="{{ asset('/storage/siteSettings/' . $logo_image->value) }}">
    @else
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    @endif
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="{{ $meta_discription->value ?? '' }}" />
    <title>
        {{ $title ? $title : '' }} | Admin | {{ $site_title->value ?? config('dz.admin.title') }}
        {{-- @stack('title') --}}
    </title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

    @foreach (config('dz.admin.global.css') as $item)
        <link rel="stylesheet" crossorigin="anonymous" href="{{ $item }}">
    @endforeach
</head>

<body>
