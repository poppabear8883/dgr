@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/about-header.jpg">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown sub-page">
                    About Us
                </h1>
            </div>
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

    <dg-galleries></dg-galleries>

@stop