{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite(['resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div id="app">
        </div>
    </body>
</html> --}}


@extends('shopify-app::layouts.default')
@section('styles')
    @vite(['resources/js/app.js'])
@endsection

@section('content')
    <div id="app"></div>
@endsection


{{-- @section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
@endsection --}}

{{-- @section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Welcome' });
    </script>
@endsection --}}