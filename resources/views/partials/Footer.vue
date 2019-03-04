<template>
    <div class="footer">
        <div class="logos hidden-xs">
            <div class="container text-center">
                <!--<h2 class="page-header color-red">AFFILIATES</h2>-->
                <carousel :autoplay="true"
                          :loop="true"
                          :autoplay-timeout="5000"
                          :per-page="3"
                          :scroll-per-page="true"
                          :navigation-enabled="true"
                          pagination-active-color="#EE001B"
                          pagination-color="#353536"
                          :autoplay-hover-pause="true">
                    <slide>
                        <a href="https://www.certainteed.com/qualifications/" target="_blank">
                            <img class="img-responsive"
                                 src="/img/certainteed-certified-dealer.png?w=150&h=150">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.homeadvisor.com/rated.DandGRoofing.39451675.html" target="_blank">
                            <img class="img-responsive"
                                 src="/img/home_advisor.png?w=150&h=150">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.bbb.org/dayton/business-reviews/roofing-contractors/d-and-g-roofing-and-restoration-in-dayton-oh-28168/reviews-and-complaints"
                           target="_blank">
                            <img class="img-responsive"
                                 src="/img/bbb2.png?w=150&h=150">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.provia.com/" target="_blank">
                            <img class="img-responsive"
                                 src="/img/provia-logo.png?w=250&h=85"
                                 style="margin-top: 25px;">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.google.com/maps/place/D+%26+G+Roofing+%26+Restoration/@39.6347963,-84.2139776,17z/data=!3m1!4b1!4m7!3m6!1s0x0:0xa910907c8878e55b!8m2!3d39.6347963!4d-84.2117889!9m1!1b1"
                           target="_blank">
                            <img class="img-responsive"
                                 src="/img/google-reviews.png?w=180&h=85"
                                 style="margin-top: 25px; margin-left: -25px;">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.facebook.com/DgRoofingRestoration" target="_blank">
                            <img class="img-responsive"
                                 src="/img/facebook-logo.png?w=250&h=85"
                                 style="margin-top: 25px;">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.angieslist.com/companylist/us/oh/dayton/dandg-roofing-and-restoration-llc-reviews-7926733.htm"
                           target="_blank">
                            <img class="img-responsive"
                                 src="/img/angies-list-logo.png?w=250&h=85"
                                 style="margin-top: 25px;">
                        </a>
                    </slide>
                    <slide>
                        <a href="https://www.jameshardie.com/why-hardie/superior-siding"
                           target="_blank">
                            <img class="img-responsive"
                                 src="/img/jameshardie-logo.png?w=250&h=85"
                                 style="margin-top: 25px;">
                        </a>
                    </slide>
                </carousel>
            </div>
        </div>

        <footer>
            <div class="container-fluid">
                <div class="row bg-white">

                    <div class="col-md-3">
                        <div class="col-md-12">
                            <img src="https://www.greensky.com/merchantkit/images/finance_buttons/headers/header_320.jpg?v=1.0.99"
                                 alt="Financing Options from GreenSky" tabindex="0"/>
                        </div>
                        <div class="col-md-12">
                            <img src="https://www.greensky.com/merchantkit/images/finance_buttons/footers/footer_320.jpg?v=1.0.99"
                                 width="320" height="73"
                                 alt="Financing for GreenSky&#169; credit programs is provided by federally insured, federal and state chartered financial institutions without regard to race,color, religion,natinal origin, sex or familialstatus. NMLS #1416362; CT SLC-1416362; NJMT #1501607 C22"
                                 tabindex="0"/>
                        </div>
                    </div>

                    <div class="col-md-3 padding-top-25">
                        <a
                           href="https://portal.greenskycredit.com/MerchantLoanApplication?apptype=short&merchant=81050064&dealerplan=4123&channel=External-Button-03"
                           target="_blank" tabindex="0"><img
                          src="https://www.greensky.com/merchantkit/images/finance_buttons/plans/4123_320x100.jpg?v=1.0.99"
                          width="320" height="100"
                          alt="4123 - 12 Months No Interest, with Payments (36 months) - (24 Principal Pmts)"/></a>
                    </div>

                    <div class="col-md-3 padding-top-25">
                        <a
                           href="https://portal.greenskycredit.com/MerchantLoanApplication?apptype=short&merchant=81050064&dealerplan=4188&channel=External-Button-03"
                           target="_blank" tabindex="0"><img
                          src="https://www.greensky.com/merchantkit/images/finance_buttons/plans/4188_320x100.jpg?v=1.0.99"
                          width="320" height="100"
                          alt="4188 - 18 Months No Interest, with Payments - (66 Principal Pmts)"/></a>
                    </div>

                    <div class="col-md-3 padding-top-25">
                        <a
                           href="https://portal.greenskycredit.com/MerchantLoanApplication?apptype=short&merchant=81050064&dealerplan=1969&channel=External-Button-03"
                           target="_blank" tabindex="0"><img
                          src="https://www.greensky.com/merchantkit/images/finance_buttons/plans/1969_320x100.jpg?v=1.0.99"
                          width="320" height="100" alt="1969 - Reduced Rate 9.99% for 96 Months"/></a>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <h3 class="color-red">Qualifications</h3>
                        <ul>
                            <li>A+ Rating with BBB</li>
                            <li>30+ years of Experience</li>
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

                    <div class="col-xs-12 col-sm-12 col-md-4">
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

                    <div class="col-xs-12 col-sm-12 col-md-4">
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
                                            <img src="/images/fa-angieslist.png" class="img-responsive">
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
  import { Carousel, Slide } from 'vue-carousel'

  export default {
    components: {
      Carousel,
      Slide
    }

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

            h2 {
                &.page-header {
                    margin-top: -25px;
                }
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