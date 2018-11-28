@extends('layouts.main')

@section('title')
    Home - D & G Roofing & Restorations |
    Roof Replacements and repairs | Siding | Gutters | Windows |
    Serving The Entire Greater Dayton Ohio Area
@stop

@section('header')
    <dg-header bg-img="images/headers/community-header.jpg" bg-pos="center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="animated slideInDown sub-page">
                    Community
                </h1>
            </div>
        </div>
    </dg-header>
@stop

@section('content')
    <media-section title="Community Involvement">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="http://w3.cdn.anvato.net/player/prod/v3/anvload.html?key=eyJtIjoiTElOIiwicCI6IiIsInYiOiIxOTU3NzAzIiwiYW52YWNrIjoiZ3JEN3pRTjdxeDFKMlVYRzhlVWttU28zbFAxQVJCYW8iLCJwbHVnaW5zIjp7ImRmcCI6eyJjbGllbnRTaWRlIjp7ImFkVGFnVXJsIjoiaHR0cHM6Ly9wdWJhZHMuZy5kb3VibGVjbGljay5uZXQvZ2FtcGFkL2Fkcz9zej0xeDEwMDAmaXU9LzU2NzgvbGluLndkdG4vbmV3cy9sb2NhbF9uZXdzJmN1c3RfcGFyYW1zPWNvaWQlM0QlMjZ2aWRjYXQlM0RuZXdzL2xvY2FsX25ld3MmaW1wbD1zJmdkZnBfcmVxPTEmZW52PXZwJm91dHB1dD12YXN0JnVudmlld2VkX3Bvc2l0aW9uX3N0YXJ0PTEmdmlkPTE5NTc3MDMmY21zaWQ9JnVybD1bcmVmZXJyZXJfdXJsXSZkZXNjcmlwdGlvbl91cmw9JmNpdV9zenM9NzI4eDkwLDMwMHgyNTAmYWRfcnVsZT0wJnZwb3M9cHJlcm9sbCZjb2lkPSRjb2lkJmNvcnJlbGF0b3I9W3RpbWVzdGFtcF0ifX19LCJodG1sNSI6dHJ1ZSwidG9rZW4iOiIgIn0%3D"
                            frameborder="0"
                            allow="autoplay; encrypted-media"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </media-section>


    <dg-photos :gallery-id="7"></dg-photos>

@stop