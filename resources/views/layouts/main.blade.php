<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    @yield('css')

</head>

<body>
<div id="app">

    <!-- Top Bar -->
    <dg-top-bar></dg-top-bar>

    <!-- Navigation -->
    <dg-nav></dg-nav>

    <!-- Header -->
    <dg-header></dg-header>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3">

                    <h3 class="color-red">Stay Updated</h3>
                    <p>
                        You want to get updates about promotions and/or contests?
                        Fill in your email address and click Submit!
                    </p>
                    <div class="form-group">
                        <div class="input-group">

                            <div class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <input type="text" class="form-control" name="email">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="button">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <h3 class="color-red">Qualifications</h3>
                    <ul>
                        <li>A+ Rating with BBB</li>
                        <li>25 years of Experience</li>
                        <li>Financing Available</li>
                        <li>No Job Too Big Or Too Small</li>
                        <li>Workmanship and Labor Warranty</li>
                        <li>Quality Workmanship</li>
                        <li>Complete Cleanup</li>
                        <li>Insurance Repair Specialists</li>
                        <li>We Work With All Insurance Companies</li>
                        <li>Insured & Workman Comp</li>
                        <li>Free Inspections</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <h3 class="color-red">Insurances</h3>
                    <ul>
                        <li>Progressive</li>
                        <li>Cincinnati Insurance</li>
                        <li>State Farm</li>
                        <li>AAA</li>
                        <li>Allstate</li>
                        <li>Liberty Mutual Group</li>
                        <li>Travelers Insurance</li>
                        <li>MetLife</li>
                        <li>USAA</li>
                        <li>Amica Mutual Insurance</li>
                        <li>Nationwide</li>
                        <li>And Many More ...</li>
                    </ul>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-3">
                    <h3 class="color-red">Contact</h3>
                    <address>
                        <strong>D&G Roofing & Restoration LLC</strong><br>
                        2275 Miamisburg Centerville Rd<br>
                        Dayton, OH 45459<br>
                        <abbr title="Phone">P:</abbr> (937) 439-0554
                    </address>

                    <p>
                        <strong>Copyright &copy; 2011</strong>
                    </p>

                    <div class="social">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/DgRoofingRestoration/">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://linkedin.com/">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://twitter.com/">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/maps/place/D%26G+Roofing+%26+Restoration/@39.6347963,-84.2139776,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xa910907c8878e55b!8m2!3d39.6347963!4d-84.2117889?hl=en">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.angieslist.com/companylist/us/oh/dayton/dandg-roofing-and-restoration-llc-reviews-7926733.htm"
                                   target="_blank">
                                    <i class="fa fa-angieslist">
                                        <img src="images/fa-angieslist.png" class="img-responsive">
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- /.container -->

    <script src="{{asset('js/app.js')}}"></script>

    @yield('scripts')
</div>
</body>

</html>