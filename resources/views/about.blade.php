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
                About Us
            </h1>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section
            title="About D & G Roofing & Restoration"
            img="images/duaneandgerritrucklogo.jpg"
            img-alt="Duane and Gerri">
        <p>
            D & G Roofing & Restoration is a General Contracting company based in Dayton, Ohio.
            We have over 20 years of combined service in the field. D & G Roofing services Dayton, C
            olumbus, Cincinnati and all surrounding areas. D & G Roofing & Restoration specializes in
            reroofs, siding and gutter installation. We also specialize in Insurance claim settlements.
            Our goal is always to provide excellent customer service and quality workmanship to every
            customer of D & G Roofing, while upholding professionalism, integrity, and company reputation
            as a leader in the construction industry.
        </p>

        <div class="h4 color-red">Our Mission</div>

        <p>
            To provide every customer with highest quality workmanship and materials while providing
            excellent customer service with the highest integrity.
        </p>

    </media-section>

    <dg-call-anytime></dg-call-anytime>

    <dg-our-team></dg-our-team>

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