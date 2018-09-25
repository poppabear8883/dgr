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
            img="{{$previous->image}}"
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
            2. We will draw the winner <strong>{{$ends_at}} at 1 PM</strong> and will announce on our facebook
            page as well as the website. We will also contact the winner by telephone and email. If we have not had a
            response from the winner with-in <strong>3 Days after at 5 PM</strong>, the winner forfeits,
            and we will draw again with the same 3 day time span.
        </p>

        <div slot="aimg">
            <h4 class="color-red">{{$previous->title}}</h4>
            <p>
                {{$previous->content}}
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
                                Next Drawing is {{$ends_at}}
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="timer">
                            @if(!$ended)
                                <countdown end="{{$ends_at}}"></countdown>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 text-center">
                <img class="img-responsive"
                     src="{{$giveaway->image}}"
                     style="display: inline-block"
                     alt=""
                >
            </div>
        </div>
    </div>

    <media-section
            title="{{$giveaway->title}}"
            img="{{$giveaway->product_image}}?w=555&h=416&fit=crop"
            img-alt="Giveway Details">

        <p>
            {{$giveaway->description}}
        </p>

        <ul>
            @foreach($features as $feature)
                @if($feature !== '')
                    <li>{{$feature}}</li>
                @endif
            @endforeach
        </ul>

        <div slot="bimg">
            <div class="row" style="margin-top: 10px">
                <div class="col-md-4">
                    <img class="img-responsive img-rounded"
                         src="{{$giveaway->product_image_2}}?w=300&h=170&fit=crop"
                         alt=""
                    >
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-rounded"
                         src="{{$giveaway->product_image_3}}?w=300&h=170&fit=crop"
                         alt=""
                    >
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-rounded"
                         src="{{$giveaway->product_image_4}}?w=300&h=170&fit=crop"
                         alt=""
                    >
                </div>
            </div>
        </div>
    </media-section>

    <dg-refer-form></dg-refer-form>

@stop