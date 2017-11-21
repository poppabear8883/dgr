<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    @yield('css')

</head>

<body>
<div id="app">

    <!-- Top Bar -->
    <dg-top-bar></dg-top-bar>

    <!-- Navigation -->
    <dg-nav></dg-nav>

    <!-- Header -->
    @yield('header')

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <dg-footer></dg-footer>

</div>

<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')

</body>

</html>