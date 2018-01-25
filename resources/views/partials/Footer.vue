<template>
    <div class="footer">
        <div class="logos">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs col-sm-4 col-md-3 text-center">
                        <img class="img-responsive"
                             src="images/certainteed-certified-dealer.png" width="130px">
                    </div>

                    <div class="hidden-xs hidden-sm col-md-3 text-center">
                        <img class="img-responsive"
                             src="images/no-roof-left-behind2.png" width="150px">
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                        <img class="img-responsive"
                             src="images/homeadvisor_logo4.png" width="150px">
                    </div>

                    <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                        <img class="img-responsive"
                             src="images/bbb2.png" width="100px">
                    </div>
                </div>
            </div>
        </div>

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
                                    <a href="https://www.facebook.com/DgRoofingRestoration/"
                                       target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/D%26G+Roofing+%26+Restoration/@39.6347963,-84.2139776,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0xa910907c8878e55b!8m2!3d39.6347963!4d-84.2117889?hl=en"
                                       target="_blank">
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
    </div>
</template>
<script>
    export default {

    }
</script>
<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    .footer {
        .logos {
            background-color: #f7f7f7;
            padding-top: 50px;
            padding-bottom: 50px;
            border-bottom: 5px $dark solid;

            img {
                display: inline-block !important;
            }
        }

        footer {
            background-color: darken($grey, 15%);
            border-top: 5px $red solid;
            color: darken($white, 30%);
            padding: 25px;

            .input-group-addon {
                border: none;
                border-radius: 0;
            }

            .form-control {
                border-radius: 0;

                &:focus {
                    border-color: transparent;
                    outline: 0;
                    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(163, 22, 33, 0.6);
                }
            }

            .btn-default {
                color: $red;
                background-color: $dark;
                border-color: $grey;

                &:hover {
                    color: lighten($grey, 35%);
                    background-color: darken($grey, 15%);
                    border-color: $grey;
                }
            }

            .social ul {
                overflow: auto;
                padding: 0;

                li {
                    list-style-type: none;
                    float: left;

                    a i {
                        background: $red;
                        color: #fff;
                        width: 40px;
                        height: 40px;
                        border-radius: 20px;
                        font-size: 25px;
                        text-align: center;
                        margin-right: 10px;
                        padding-top: 15%;
                        transition: all 0.2s ease-in-out;

                        &:hover {
                            opacity: .7;
                            cursor: pointer;
                        }
                    }
                }
            }

        }
    }
</style>