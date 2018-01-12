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
    <dg-header></dg-header>
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

            {{--<p>
                We'll begin by gaining a firmer understanding of your individual needs. A better grasp of your
                goals allows us to design a plan with a higher rate of success. Over the course of the job, our
                knowledgeable team will remain available to address your concerns or answer any questions you
                may have. Whether you're looking for residential re-roofing, home roofing, roof installation, or
                commercial roofing in Dayton, our staff is ready to help you take the next step. Providing you
                with high caliber workmanship on every job is simply the way we've operated since opening our
                doors.
            </p>

            <p>
                When you need a Dayton, or Cincinnati, OH, roofer, our friendly staff can provide you with the
                quality handiwork you need to feel confident moving forward. At D & G Roofing & Restoration,
                we'll handle your roofing needs with the same respect and careful attention that we would use to
                tackle our own. Come visit us in Dayton, OH, or call today to learn more.
            </p>--}}
        </media-section>

        <!-- Why Choose Us -->
        <dg-why-choose-us></dg-why-choose-us>

        <div class="portfolio-home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header color-red">Galleries</h2>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <a href="#">
                            <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop