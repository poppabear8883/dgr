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
    <dg-header :home="true"></dg-header>
@stop

@section('content')
    <div class="welcome">
        <!-- Featured Services -->
        <dg-featured-services></dg-featured-services>

        <!-- Call Anytime -->
        <dg-call-anytime></dg-call-anytime>

        <!-- Friendly Service -->
        <media-section
                title="Service With A Friendly Approach"
                img="images/gerri-with-customer-01.jpg"
                img-alt="Dayton Oh Roofing Customer">
            <p>
                If you're in the market for a Dayton, Cincinnati, OH, roofer, our experienced team is ready to
                help. At D & G Roofing & Restoration, we understand that a roof is more than simply another part
                of your property. It also protects your loved ones and the valuable belongings that make your
                house a home. We have helped many people throughout Dayton, Cincinnati, OH, address their
                roofing needs with efficiency and ease. We're ready to use our extensive experience to help you
                do the same. Regardless, of the nature of the project, our crew will begin as soon as possible,
                and we’ll complete the job in a timely manner. Your satisfaction is one of our highest
                priorities.
            </p>
        </media-section>

        <!-- Why Choose Us -->
        <dg-why-choose-us></dg-why-choose-us>

        <dg-galleries></dg-galleries>
    </div>
@stop