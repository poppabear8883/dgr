@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header>
        <div class="col-md-12 text-center">
            <h1 class="animated slideInDown" style="font-size: 64px">
                Services
            </h1>
        </div>
        <div slot="bottom">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <div class="pull-left">
                    <p>Need a FREE and Painless inspection ? We can help!</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="pull-right">
                    <a href="#">Get A Free Inspection</a>
                </div>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <div class="friendly-service">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header color-red">Introduction</h2>
                </div>
                <div class="col-md-6">
                    <p>
                        When you're in the market for a Dayton, OH, roofing company, our knowledgeable crew is here to
                        provide you with high caliber work. At D & G Roofing & Restoration, we're prepared to act as
                        your first and final resource when it comes to all your needs. When you're ready to
                        take the next step, we're excited for the opportunity to help you benefit from our thorough
                        attention to detail.
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" src="images/Miamisburg-45342-Roofing.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <dg-call-anytime></dg-call-anytime>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header color-red">Our Services</h2>
            </div>
            <div class="col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        External Resources
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled resources">
                            <li>
                                <a href="#" target="_blank">
                                    Certainteed Landmark: CertainTeed’s tried-and-true architectural laminate roofing shingle.
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    Certainteed Landmark: CertainTeed’s tried-and-true architectural laminate roofing shingle.
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    Certainteed Landmark: CertainTeed’s tried-and-true architectural laminate roofing shingle.
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    Certainteed Landmark: CertainTeed’s tried-and-true architectural laminate roofing shingle.
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <tabs :tabs="['Roofing', 'Siding', 'Windows']">
                    <div slot="Roofing">
                        @include('partials.services.roofing')
                    </div>
                    <div slot="Siding">
                        @include('partials.services.siding')
                    </div>
                    <div slot="Windows">
                        @include('partials.services.windows')
                    </div>
                </tabs>
            </div>
        </div>
    </div>

    <dg-why-choose-us></dg-why-choose-us>

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