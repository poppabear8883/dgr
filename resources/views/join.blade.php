@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/join-our-team-header.jpg" bg-pos="center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 85px">
                    Join Our Team
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section title="Join Our Team">

        <h4 class="page-header color-red">Outside Sales Rep</h4>
        <p>
            We are an established Certainteed Shingle Master residential roofing and restoration company with an
            A+ rating with the BBB. We also have over 30 5 star google reviews.
        </p>
        <p>
            We specialize in Roofing, Siding, Gutters, Windows and Doors. We offer unlimited income potential
            with an upbeat atmosphere, ongoing training and performance bonuses throughout the year as well as
            many other exciting benefits.
        </p>
        <p>
            We offer a 4-6 week paid training program for the right candidate. After training, the position is 100%
            commission with no cap. Top performers can make 6 figures!
        </p>

        <h4 class="page-header color-red">The candidate we are looking for will include:</h4>
        <ul>
            <li>Strong customer service skills</li>
            <li>The ability to navigate in a fast paced environment</li>
            <li>Detail oriented</li>
            <li>Good time management skills</li>
            <li>Computer skills</li>
            <li>Ability to work long hours and weekends if necessary</li>
            <li>Excellent follow up and follow through</li>
        </ul>

        <h4 class="page-header color-red">Responsibilities will include:</h4>
        <ul>
            <li>Help homeowners to solve problems</li>
            <li>Measure, document and present estimates to homeowners</li>
            <li>Be available to answer questions from homeowners and managers</li>
            <li>Organize and turn paperwork in on a timely manner</li>
            <li>Prospect and maintain relationships with customers</li>
            <li>Provide excellent customer service before, during and after the job is completed</li>
            <li>Report to management as need</li>
        </ul>

    </media-section>

    <dg-call-anytime></dg-call-anytime>

    <dg-join-form></dg-join-form>
@stop