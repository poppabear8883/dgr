@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/services-header.jpg" bg-pos="center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 100px">
                    Services
                </h1>
            </div>
        </div>

        <div slot="bottom">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="pull-left">
                        <p>Need a FREE and Painless inspection ? We can help!</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 hidden-xs">
                    <div class="pull-right">
                        <a href="#">Get A Free Inspection</a>
                    </div>
                </div>
            </div>
        </div>
    </dg-header>
@stop

@section('content')

    <media-section
            title="Services Introduction"
            img="images/Miamisburg-45342-Roofing.jpg"
            img-alt="Dayton Oh Roofing Contractor Image">
        <p>
            When you're in the market for a Dayton, OH, roofing company, our knowledgeable crew is here to
            provide you with high caliber work. At D & G Roofing & Restoration, we're prepared to act as
            your first and final resource when it comes to all your needs. When you're ready to
            take the next step, we're excited for the opportunity to help you benefit from our thorough
            attention to detail.
        </p>

    </media-section>

    {{-- tabbed services --}}
    <dg-tabbed-services></dg-tabbed-services>

    <dg-call-anytime></dg-call-anytime>

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