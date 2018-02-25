<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>Mauritian Space | Explore The Tech Scenes in Mauritius</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Humeira Diljore">
    <meta name="description" content="Mauritian Space - Explore The Tech Scenes in Mauritius">
    <meta name="keywords" content="Developer, designers, Mauritius, craftsman, artisans, web, humeira diljore">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i|Merriweather:400,400i,700,700i"
          rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="border-blue-light border-4"></div>
<div id="app">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</div>
<script>window.Laravel = { csrfToken: '{{ csrf_token() }}' }</script>
<script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>
</body>

</html>