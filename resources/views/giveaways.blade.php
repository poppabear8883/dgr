@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/giveaways-header.jpg">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 85px">
                    Giveaways
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section
            title="Refer A Friend"
            img="images/Giveaway-Wallace.jpg"
            img-alt="Previous Giveway Winner">

        <p>
            We love to spread the word about our superior service and workmanship. With every referral, you will be entered
            into any <cite>CURRENT</cite> giveaways that we have. Every Referral is equal to a single entry, so get those
            referrals to increase your chances today!
        </p>

        <h3 class="page-header color-red">Rules for Giveaway</h3>
        <p>
            1. We must be able to make contact with the person you refer. Please make sure all entries have a valid
            phone number. If we are unable to validate the referral, the entry will become invalid.
        </p>
        <p>
            2. We will draw the winner <strong>Friday June 15th at 1 PM</strong> and will announce on our facebook
            page as well as the website. We will also contact the winner by telephone and email. If we have not had a
            response from the winner by <strong>Monday, June 18th at 5 PM</strong>, the winner forfeits,
            and we will draw again with the same 3 day time span.
        </p>

        <div slot="aimg">
            <h4 class="color-red">Congratulations to our previous winner</h4>
            <p>
                We are very proud to present the Wallace Family with their
                <strong>Brand New 49" Ultra HD 4K Toshiba TV</strong>!
            </p>
        </div>

    </media-section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row countdown">
                    <div class="col-sm-6 col-xs-12">
                        <div class="countdown-description">
                            @if($ended)
                                This Contest Has Ended!
                            @else
                                Next Drawing is {{$date}}
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="timer">
                            @if(!$ended)
                                <countdown end="{{$date}}"></countdown>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <img class="img-responsive" src="images/dgr-giveaway-grill.png" style="display: inline-block">
            </div>
        </div>
    </div>

    <media-section
            title="Weber Spirit Model # E-210"
            img="images/meat.jpg"
            img-alt="Giveway Details">

        <p>
            Open your door to the world of grilling with this awesome Weber Spirit E-210 gas grill. This two burner grill is
            built to fit small spaces, and packed with features such as the powerful GS4 grilling system, iGrill capability,
            and convenient side tables for placing serving trays.
        </p>

        <ul>
            <li>Liquid propane gas grill with easy-to-clean porcelain-enameled shroud</li>
            <li>450-sq in total cooking area: 360-sq in primary and 90-sq in warming rack</li>
            <li>Porcelain-coated cast-iron cooking grates retain heat for even grilling and superior searing</li>
            <li>Two stainless steel main burners are durable</li>
            <li>Electronic ignition for fast and reliable startups</li>
            <li>Folding side shelves with integrated tool hooks keep utensils and condiments close by</li>
            <li>Front-mounted control knobs give you precise heat control</li>
            <li>Fuel gauge monitors fuel level, taking the guesswork out of grilling</li>
            <li>10-year limited grill warranty on lid, cookbox and burner</li>
        </ul>

        <div slot="bimg">
            <div class="row" style="margin-top: 10px">
                <div class="col-md-4">
                    <img class="img-responsive img-rounded" width="300px" height="170px" src="images/Giveaway Grill 2.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-rounded" width="300px" height="170px" src="images/Giveaway Grill 3.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-rounded" width="300px" height="170px" src="images/Giveaway Grill 4.jpg" alt="">
                </div>
            </div>
        </div>
    </media-section>

    <dg-refer-form></dg-refer-form>

@stop