@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/contact-header.jpg" bg-pos="top 0 left 0">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown sub-page">
                    Contact Us
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section title="Company Information">

        <div class="row">
            <div class="col-md-6">
                <address>
                    <strong>D & G Roofing & Restoration</strong><br>
                    2275 Miamisburg Centerville Rd<br>
                    Dayton, OH 45459<br>
                    <a href="tel:1-937-439-0554">937-439-0554</a>
                </address>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.6627717891242!2d-84.21397758462773!3d39.634796279463636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x884088e17caf7c99%3A0xccdfe7af77fd0c9c!2s2275+Miamisburg+Centerville+Rd%2C+Dayton%2C+OH+45459!5e0!3m2!1sen!2sus!4v1516985186741"
                        width="100%"
                        height="350"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"></iframe>
            </div>
            <div class="col-md-6">
                <table class="table table-condensed">
                    <tbody>
                        <tr>
                            <td>Monday:</td>
                            <td>8:00am - 6:00pm</td>
                        </tr>
                        <tr>
                            <td>Tuesday:</td>
                            <td>8:00am - 6:00pm</td>
                        </tr>
                        <tr>
                            <td>Wednesday:</td>
                            <td>8:00am - 6:00pm</td>
                        </tr>
                        <tr>
                            <td>Thursday:</td>
                            <td>8:00am - 6:00pm</td>
                        </tr>
                        <tr>
                            <td>Friday:</td>
                            <td>8:00am - 5:00pm</td>
                        </tr>
                        <tr>
                            <td>Saturday:</td>
                            <td>9:00am - 4:00pm</td>
                        </tr>
                        <tr>
                            <td>Sunday:</td>
                            <td><strong class="color-red">CLOSED</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </media-section>

    <dg-call-anytime></dg-call-anytime>

    <dg-contact-form></dg-contact-form>
@stop