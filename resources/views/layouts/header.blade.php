<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Bootstrap Css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/10cf85d80f.js" crossorigin="anonymous"></script>
    <!-- Template Css  -->

    @foreach (config('dz.public.global.css') as $item)
        <link rel="stylesheet" href="{{ $item }}">
    @endforeach

    {{-- @foreach (config('dz.public.pagelevel.css') as $item)
        <link rel="stylesheet" href="{{ $item }}">
    @endforeach --}}

    {{-- <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/headers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footers.css') }}"> --}}

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ config('dz.public.title') }} | {{ $title ? $title : '' }}
        {{-- @stack('title') --}}
    </title>

    {{-- <title>Home Page</title> --}}
</head>

<body class="py-0">
