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
                <h1 class="animated slideInDown sub-page">
                    Giveaways
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section
            title="Refer A Friend"
            img="images/site-logo.png"
            img-alt="Previous Giveway Winner">

        <p>
            We love to spread the word about our superior service and workmanship. With every referral, you will be
            given the chance to earn <strong>$50</strong> for every referral that signs a contract! So go get those
            referrals now to increase your chances today!
        </p>

        <h3 class="page-header color-red">Rules for Giveaway</h3>
        <p>
            1. We must be able to make contact with the person you refer. Please make sure all entries have a valid
            phone number. If we are unable to validate the referral, the entry will become invalid.
        </p>
        <p>
            2. We will announce all winner(s) on our facebook page. We will also contact the winner by telephone and
            email. If we have not had a response from the winner with-in <strong>3 Days after, at 5 PM</strong>, the
            winner forfeits their unclaimed prize money!
            span.
        </p>
    </media-section>

    <dg-refer-form></dg-refer-form>

@stop