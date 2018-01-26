@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/galleries-header.jpg" bg-pos="center">
        <div class="col-md-12 text-center">
            <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 100px">
                Galleries
            </h1>
        </div>
        <div slot="bottom">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="pull-left">
                    <p>Want an exciting career with D & G Roofing & Restoration?</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pull-right">
                    <a href="#">Join Our Team</a>
                </div>
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

    <div class="portfolio-home">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Galleries</h2>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#">
                        <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop