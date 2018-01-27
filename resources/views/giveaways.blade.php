@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/giveaways-header.jpg">
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
            title="Congratulations to our previous winner"
            img="images/Giveaway-Wallace-2.jpg"
            img-alt="Previous Giveway Winner">

        <p>
            Here at D&G Roofing and Restoration we want to encourage everyone to spread the word about our superior
            craftsmanship, products and customer service! We have frequent referral giveaways amongst other promotional
            offers.
        </p>

        <div slot="bimg">
            <p>
                We are very proud to present the Wallace Family with their
                <strong>Brand New 49" Ultra HD 4K Toshiba TV</strong>!
            </p>
        </div>

    </media-section>

@stop