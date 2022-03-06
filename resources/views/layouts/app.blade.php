<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="{{ config('alnahda.meta.description_' . app()->getLocale()) }}">
    <meta name="keywords" content="{{ config('alnahda.meta.keywords_' . app()->getLocale()) }}">
    <meta name="author" content="{{ config('alnahda.meta.author_' . app()->getLocale()) }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:url" content="{{ route(config('alnahda.meta.url')) }}" />
    <meta property="og:type" content="{{ config('alnahda.meta.type') }}" />
    <meta property="og:title" content="{{ config('alnahda.meta.title_' . app()->getLocale()) }}" />
    <meta property="og:description" content="{{ config('alnahda.meta.description_' . app()->getLocale()) }}" />
    <meta property="og:image" content="{{ URL::asset(config('alnahda.meta.image')) }}" />
    <title>{{ config('alnahda.meta.title_' . app()->getLocale()) }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ URL::asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('favicon.png') }}" rel="shortcut icon">

    @yield('head')
    @stack('head')

    @include('includes.facebook_pixel')
</head>

<body>
    <div id="app" style="background-image: url({{ $background_image ?? URL::asset('assets/media/images/background.png') }})">
        @include('includes.header')
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14"></script>
    <script>
        const locale = @json(app()->getLocale());
        const assets_path = @json(URL::asset(''));
    </script>

    @yield('scripts')
    @stack('scripts')
</body>

</html>
