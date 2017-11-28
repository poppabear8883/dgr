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
    <dg-top-bar></dg-top-bar>

    <!-- Navigation -->
    <dg-nav>
        @if(Auth::guest())
            <li>
                <a href="/">Home</a>
            </li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->profile->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
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
        @endif
    </dg-nav>

    <div class="container-fluid" style="padding-top: 50px; min-height: 600px">
        <div class="row">
            <div class="col-md-2">
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="/dashboard">Dashboard</a>
                    </li>
                    @can('view users')
                        <li class="active">
                            <a href="#">Users</a>
                        </li>
                    @endcan
                    @can('view galleries')
                        <li>
                            <a href="#">Galleries</a>
                        </li>
                    @endcan
                </ul>
            </div>
            <div class="col-md-10">
                <!-- Page Content -->
                @yield('content')
            </div>
        </div>
    </div>


    <!-- Footer -->
    <dg-footer></dg-footer>

</div>

<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')

</body>

</html>