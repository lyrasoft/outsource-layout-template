<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <link rel="shortcut icon" href="{{ $asset->path('images/favicon.png') }}" />

    <title>@yield('title', $helper->page->title($config['title'] ?? ''))</title>

    @stack('meta')
    @yield('meta')

    <link href="{{ $asset->path('vendor/@fortawesome/fontawesome-pro/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ $asset->path('css/bootstrap.css') }}" rel="stylesheet" />
    @stack('style')
    <link href="{{ $asset->path('css/main.css') }}" rel="stylesheet">

    @stack('head')
</head>
<body class="{{ $helper->page->bodyClass() }}" style="margin-top: 50px">
@yield('superbody')

<script src="{{ $asset->path('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ $asset->path('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

@stack('script')
</body>
</html>
