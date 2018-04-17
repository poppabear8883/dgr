<template>
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 0 ? 'active' : null]"
                         @click="active = 0"
                         src="/images/icon_roofing_circle.png">
                    <br />
                    Residential Roofing
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 1 ? 'active' : null]"
                         @click="active = 1"
                         src="/images/icon_siding_circle.png" />
                    <br />
                    Siding
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 2 ? 'active' : null]"
                         @click="active = 2"
                         src="/images/icon_windows_circle.png" />
                    <br />
                    Windows
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 3 ? 'active' : null]"
                         @click="active = 3"
                         src="/images/icon_gutters_circle.png" />
                    <br />
                    Gutters
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 4 ? 'active' : null]"
                         @click="active = 4"
                         src="/images/icon_doors_circle.png" />
                    <br />
                    Doors
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 5 ? 'active' : null]"
                         @click="active = 5"
                         src="/images/icon_commercial_circle.png" />
                    <br />
                    Commercial
                </div>
            </div>
        </div>

        <!-- ROOFING -->
        <div id="roofing" v-if="active === 0" class="row">
            <media-section
                    class="pull-right"
                    title="Roofing"
                    img="/images/certainteed-home.jpg"
                    img-width="550px"
                    img-alt="dayton cincinnati ohio roofing contractors">

                <p>
                    Whether you are in need of a new roof on your exiting home or are re-roofing an addition to
                    your property, D&G Roofing and Restoration is the team to trust in the Dayton and Cincinnati
                    area. Our dedicated, professional roofers are on hand to provide you with quality residential or
                    commercial re-roofing services.
                </p>
                <p>
                    Your home is a significant investment, so don’t just trust anyone, turn to D&G Roofing and
                    Restoration and let us show you why we are worthy of your business. Call today to learn more
                    or to schedule an estimate today. 937-439-0554
                </p>

                <p>
                    No matter your business or building size, D&G Roofing and Restoration offers quality
                    commercial roofing solutions in the Dayton and Cincinnati area.
                </p>

                <p>
                    D&G Roofing and Restoration’s services are as reliable, trustworthy and efficient . We don’t
                    believe in cutting corners or skimping on quality of materials, instead we believe in doing things
                    right the first time so that you walk away more than satisfied. We want to earn your trust as a
                    client, and we will go the extra mile to complete your project on time and within budget. We
                    also specialize in working with your property managers to make sure your employees or
                    tenants are safe throughout the repairs.
                </p>

                <img class="img-responsive img-shadow" src="images/dayton-cincinnati-ohio-259600.jpg" alt="45449 roofing">

                <div slot="aimg" style="margin-bottom: 10px">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-responsive" src="images/certainteed.png" alt="CertainTeed">
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="images/mueller-roofing.png" alt="Mueller Roofing Dayton Ohio">
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" src="images/certainteed-certified-dealer.png" alt="CertainTeed Certified Installer">
                        </div>
                    </div>
                </div>

                <div slot="bimg">
                    <h4 class="page-header color-red">CertainTeed Certified Installer</h4>
                    <p>
                        At D&G Roofing and Restoration, we are Certainteed Shingle Master Installers. Most of our
                        installers have been with us since we opened our doors.
                    </p>
                    <p>
                        Our shingle of choice when it comes to composition asphalt shingles, is Certainteed, as their
                        shingle is high quality. It has the industry's toughest fiber glass mat, the strongest material
                        available and the best warranty. The Landmark Series shingle endure time and weather
                        beautifully. They come with the exclusive StreakFighter warranty, protecting your roof from
                        streaking that can be caused by airborne algae. The Landmark Series also has four levels of
                        high performance shingles in weight and thickness. The heavier the shingle, the more depth,
                        thickness and dimension it offers.
                    </p>
                </div>

            </media-section>
        </div>

        <!-- SIDING -->
        <div id="siding" v-if="active === 1" class="row">
            <media-section title="Siding">

                <p>
                    At D & G Roofing & Restoration, we know that the right siding can make all the difference in the look
                    and feel of your property. With a wide variety of styles and options for you to choose from, we're
                    confident our knowledgeable team can make the dreams you have for your home's appearance a reality.
                    Our range of choices allows us to work with your goals to make sure the job is done right. We'll be
                    here when you’re ready to take the next step.
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <h5 class="color-red">Before</h5>
                        <img class="img-responsive" src="/img/Hershberger-Before.jpg?w=700&h=400&fit=crop" alt="">
                    </div>
                    <div class="col-md-6">
                        <h5 class="color-red">After</h5>
                        <img class="img-responsive" src="/img/Hershberger-After.jpg?w=700&h=400&fit=crop" alt="">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <h5 class="color-red">Before</h5>
                        <img class="img-responsive" src="/img/Hershberger-Before-Back.jpg?w=700&h=400&fit=crop" alt="">
                    </div>
                    <div class="col-md-6">
                        <h5 class="color-red">After</h5>
                        <img class="img-responsive" src="/img/Hershberger-After-Back.jpg?w=700&h=400&fit=crop" alt="">
                    </div>
                </div>

                <h4 class="page-header color-red">Vinyl</h4>
                <p>
                    Mastic by Ply Gem provides you with a wide range of home exterior design options - from styles and
                    textures to popular colors and accessories. With Mastic you can create custom curb appeal that will
                    be the envy of the neighborhood. Mastic Siding is made in the U.S.A. and Green Certified.
                </p>

                <h4 class="page-header color-red">James Hardie</h4>
                <p>
                    With James Hardie Siding and trim, home owners have an exterior that’s tougher than the elements
                    and easy on the eyes. It stands up to storms, water resistant, fire resistant, helps reduce time
                    and money spent on maintenance and WON’T BE EATEN BE ANIMALS OR INSECTS.
                </p>

                <p>
                    If you're in the market for a home siding service, we're here for you. At D & G Roofing &
                    Restoration, we're committed to ensuring your satisfaction and peace of mind. Call today to set up
                    an appointment.
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="/images/mastic-logo.png" alt="Mastic Home Exteriors">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="/images/James-Hardie-logo-small.png" alt="James hardie Siding">
                    </div>
                </div>
            </media-section>
        </div>

        <!-- WINDOWS -->
        <div id="windows" v-if="active === 2" class="row">
            <media-section
                    title="Replacement Windows"
                    img="/images/atrium-window.jpg"
                    img-width="550px"
                    img-alt="dayton cincinnati ohio window installers">

                <p>
                    Are you in the market for new windows? You have come to the right place.
                    Our replacement windows are a great investment, so why not take the plunge and
                    choose a window that is easy to clean and operate.
                </p>

                <p>
                    At D&G roofing and Restoration, we understand how important it is to select the
                    right windows for your home or business.  No matter your budget, we’ll be glad to work
                    with you to provide the quality products you’re looking for and the excellent service
                    you deserve.
                </p>

                <p>
                    Our windows come in a wide variety of sizes and styles, and we would be happy to walk
                    you through your options and help you select the windows that will best serve your property’s
                    needs.
                </p>

                <h4 class="page-header color-red">Save money and help our planet</h4>
                <div class="row">
                    <div class="col-md-8">
                        <p>
                            We are always looking for ways to help our environment.
                            Our energy efficient windows can do more than just save you money;
                            they can also help you conserve resources, which mean our planet benefits as well.
                        </p>

                        <p>
                            <strong>Start saving money and the environment today!</strong>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="/images/recycle-planet.png" alt="D & G Roofing cares about our planet">
                    </div>
                </div>

                <div slot="bimg" style="margin-top: 10px">
                    <div class="row">
                        <div class="col-md-6">
                            <img class="img-responsive" src="/images/atrium-logo.png" alt="Atrium Windows">
                        </div>
                        <div class="col-md-6">
                            <img class="img-responsive" src="/images/marvin-doors-windows.png" alt="Marvin Windows">
                        </div>
                    </div>
                </div>
            </media-section>
        </div>

        <!-- GUTTERS -->
        <div id="gutters" v-if="active === 3" class="row">
            <media-section title="Gutters">

                <p>
                    Gutters serve the very important function of diverting rain from your roof to avoid structural damage,
                    damp walls, and mold. And when it comes to gutter installation or replacement, it's important to use a
                    company with the right experience and selection of products. That's where D & G Roofing & Restoration in
                    Dayton, OH comes in. As an established gutter installation company, we pride ourselves on superior
                    service and quality gutter solutions.
                </p>

                <h4 class="page-header color-red">BENEFIT FROM OUR EXPERTISE</h4>
                <p>
                    At D & G Roofing & Restoration, our experience with gutter installation is evident on every job.
                    Our professionally trained installers are dedicated to your complete satisfaction, and we go out of our
                    way to keep our pricing reasonable and affordable.

                    With gutter installation from D & G Roofing and Restoration, you'll be doing your part to protect your property on a
                    whole while adding to its overall value. So let's get the process started: Call today to schedule your
                    estimate and learn more about the products we offer.
                </p>
            </media-section>
        </div>

        <!-- DOORS -->
        <div id="doors" v-if="active === 4" class="row">
            <media-section
                    title="Door Replacement"
                    img="/images/door.png"
                    img-width="350px"
                    img-alt="dayton cincinnati ohio doors">

                <p>
                    Are you interested in enhancing the look or function of your property’s doors? At D&G Roofing
                    and Restoration, we offer the quality replacement doors and the outstanding service you’re
                    looking for. We are committed to offering the great service our customers deserve, while
                    providing well crafted, meticulously installed doors in a variety of styles, and welcome the
                    opportunity to walk you through the products we have to offer.
                </p>
                <p>
                    When you want beautiful, functional, quality replacement doors for your Dayton or Cincinnati
                    OH home or business, the professionals at D&G Roofing and Restoration have you covered.
                    Call us today to learn more and schedule a free consultation.
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="/images/provia-doors.jpg" alt="ProVia Doors">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="/images/marvin-doors-windows.png" alt="Marvin Doors & Windows">
                    </div>
                </div>
            </media-section>
        </div>

        <!-- COMMERCIAL -->
        <div id="commercial" v-if="active === 5" class="row">
            <media-section
                    title="Commercial"
                    img="/images/commercial-roofing.jpg"
                    img-width="550px"
                    img-alt="dayton cincinnati ohio commercial contractors">

                <p>
                    At D&G Roofing and Restoration, we offer a wide variety of applications for your business or
                    multi-family units. Whether you are in need of a repair or a full replacement, we have you
                    covered.
                </p>

                <h4 class="page-header color-red">Roofing</h4>
                <p>
                    <strong>Asphalt Shingles:</strong> D&G Roofing and Restoration are CertainTeed Master Elite Certified
                    Installers. We are not just here to put a roof on, we are here to help solve problems. We use
                    top of the line Limited Lifetime Certainteed materials with the best of the industry warranties.
                </p>
                <p>
                    <strong>EPDM Rubber Roofing:</strong> This application is used for flat surfaces. It’s proven hail resistant and
                    has superior resistance to extreme heat and fire.
                </p>
                <p>
                    <strong>TPO Membrane Roofing:</strong> This application is used for flat surfaces. TPO has become the fastest
                    growing segment in the commercial roofing industry, and for good reason. Carlisle TPO is
                    Energy Star qualified, Cool Roof Rating Council certified. The high reflectivity of Carlisle’s TPO
                    can significantly reduce air conditioning costs. Particularly for buildings in hot climates.
                </p>

                <h4 class="page-header color-red">Siding</h4>
                <p>
                    We offer a wide variety of products for your commercial property, whether you need a
                    repair or a full replacement, we are here to help. Check out our siding section for more
                    details on our siding selections.
                </p>

                <h4 class="page-header color-red">Gutters</h4>
                <p>
                    Gutters serve the very important function of diverting rain from your roof to avoid structural
                    damage, damp walls and mold. When it comes to gutter installation, it's important to use a
                    company with the right experience and quality products. That's where D&G Roofing and
                    Restoration comes in.
                </p>

                <div slot="bimg">
                    <h4 class="page-header color-red">Windows & Doors</h4>
                    <p>
                        At D&G Roofing and Restoration we use a wide variety of energy efficient windows and doors.
                        Check out our window and door section on this site for more information.
                    </p>

                    <h4 class="page-header color-red">BENEFIT FROM OUR EXPERTISE</h4>
                    <p>
                        At D&G Roofing and Restoration, our experience is evident on every job. Our Professionally
                        trained installers are dedicated to your complete satisfaction, and we go out of our way to keep
                        our pricing reasonable and affordable. Call today and join our family of satisfied customers.
                    </p>
                </div>
            </media-section>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'tabbed-services',
    data() {
      return {
        hash_ids: {
          '#roofing': 0,
          '#siding': 1,
          '#windows': 2,
          '#gutters': 3,
          '#doors': 4,
          '#commercial': 5
        },

        active: 0,
      }
    },
    created() {
      if (window.location.hash !== "") {
        this.active = _.get(this.hash_ids, window.location.hash);
      }
    }
  }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .services {
        color: $dark;
        padding: 15px;
        margin-top: 25px;
        // border-top: 15px $dark solid;

        img {

            &.tab {
                display: inline-block;
                width: 100px;
                filter: grayscale(100%);
                transition: .30s ease;

                &:hover, &.active {
                    transition: .30s ease;
                    filter: grayscale(0%);
                    cursor: pointer;
                }
            }
        }

    }
</style>