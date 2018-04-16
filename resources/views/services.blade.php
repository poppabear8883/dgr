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
                <h1 class="animated slideInDown sub-page">
                    Services
                </h1>
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

    <dg-galleries></dg-galleries>

@stop