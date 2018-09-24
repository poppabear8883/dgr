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
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    @yield('css')

</head>

<body>
<div id="app">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">D&G Admin</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if(!Auth::guest())
                        <li>
                            <a href="/">Home</a>
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
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">

            @if(!Auth::guest())
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li><a href="/admin/galleries">Galleries</a></li>
                    <li><a href="/admin/photos">Photos</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li><a href="/admin/giveaway">Giveaway</a></li>
                </ul>
            </div>
            @endif

            <div class="{{ Auth::guest() ? 'col-md-6 col-md-offset-3' : 'col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2' }} main">
                <h1 class="page-header {{Auth::guest() ? 'text-center' : null}}">@yield('page')</h1>

                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
@yield('scripts')

</body>

</html>