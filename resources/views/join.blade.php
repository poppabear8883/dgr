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
        <p>
            Working at D&G Roofing and Restoration is more than just a job, it’s an opportunity to be a part of a fast
            paced ever changing environment where growth opportunities are offered, skills are stretched and excellence
            is rewarded. D&G Roofing and Restoration is always accepting applications, so apply today!
        </p>


        <h4 class="page-header color-red">Our Benifits</h4>
        <ul>
            <li>Competitive Wages</li>
            <li>Health Benefits</li>
            <li>Profit Sharing</li>
            <li>401K</li>
            <li>Paid Vacations</li>
            <li>Paid Holidays</li>
            <li>Company Outings</li>
            <li>and More!</li>
        </ul>

    </media-section>

    <dg-call-anytime></dg-call-anytime>

    <dg-join-form></dg-join-form>
@stop