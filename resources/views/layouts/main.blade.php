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
    <dg-nav>
        <li>
            <a href="/about">About</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">News</a>
        </li>
        <li>
            <a href="#">Testimonies</a>
        </li>
        <li>
            <a href="#">Contests</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
        @guest
            <li>
                <a href="/login">Login</a>
            </li>
            <li>
                <a href="/register">Register</a>
            </li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->profile->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </dg-nav>

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