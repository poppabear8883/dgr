@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/refer-a-friend-header.jpg" bg-pos="center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown" style="font-size: 64px; margin-top: 85px">
                    Refer A Friend
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section title="Refer A Friend">
        We love to spread the word about our superior service and workmanship. With every referral, you will be entered
        into any <cite>CURRENT</cite> giveaways that we have. Every Referral is equal to a single entry, so get those
        referrals to increase your chances today!
    </media-section>

    <dg-call-anytime></dg-call-anytime>

    <dg-refer-form></dg-refer-form>
@stop