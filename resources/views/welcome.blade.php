@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs |
    Siding |
    Gutters |
    Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header></dg-header>
@stop

@section('content')
    <div class="welcome">
        <!-- Featured Services -->
        <dg-featured-services></dg-featured-services>

        <!-- Call Anytime -->
        <dg-call-anytime></dg-call-anytime>

        <!-- Friendly Service -->
        <dg-friendly-service></dg-friendly-service>

        <!-- Why Choose Us -->
        <dg-why-choose-us></dg-why-choose-us>

        <div class="portfolio-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header color-red">Galleries</h2>
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


    </div>
@stop