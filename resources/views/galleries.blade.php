@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/galleries-header.jpg" bg-pos="center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 85px">
                    Galleries
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section title="Our beautiful work">
        <p>
            Quality is really something you should see! Browse any of the Photo Galleries for you to see for yourself
            just how beautiful our work can be.
        </p>
    </media-section>

    <dg-galleries></dg-galleries>
@stop