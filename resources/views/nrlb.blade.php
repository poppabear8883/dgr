@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/nrlb-header.jpg" bg-pos="center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 85px">

                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <div class="row" style="margin-top: 20px">
        <div class="col-md-12 text-center">
            <iframe width="800"
                    height="600"
                    src="https://www.youtube.com/embed/XkqW8OFWGy0?rel=0&amp;controls=0&amp;showinfo=0"
                    frameborder="0"
                    allow="autoplay; encrypted-media"
                    allowfullscreen></iframe>
        </div>
    </div>

    <dg-call-anytime></dg-call-anytime>

    <dg-galleries></dg-galleries>

@stop