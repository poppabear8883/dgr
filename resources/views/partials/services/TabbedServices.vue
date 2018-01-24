<template>
    <!--, Siding, Windows, , Gutters, Doors-->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 0 ? 'active' : null]"
                         @click="active = 0"
                         src="images/icon_roofing_circle.png">
                    <br />
                    Residential Roofing
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 1 ? 'active' : null]"
                         @click="active = 1"
                         src="images/icon_siding_circle.png" />
                    <br />
                    Siding
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 2 ? 'active' : null]"
                         @click="active = 2"
                         src="images/icon_windows_circle.png" />
                    <br />
                    Windows
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 3 ? 'active' : null]"
                         @click="active = 3"
                         src="images/icon_gutters_circle.png" />
                    <br />
                    Gutters
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 4 ? 'active' : null]"
                         @click="active = 4"
                         src="images/icon_doors_circle.png" />
                    <br />
                    Doors
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['tab', 'img-responsive', active === 5 ? 'active' : null]"
                         @click="active = 5"
                         src="images/icon_commercial_circle.png" />
                    <br />
                    Commercial Roofing
                </div>
            </div>
        </div>

        <!-- ROOFING -->
        <div v-if="active === 0" class="row">
            <media-section
                    title="Roofing"
                    subtitle="#1 RATED ROOFING COMPANY IN THE MIAMI VALLEY"
                    img="images/certainteed-home.jpg"
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

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/certainteed.png" alt="CertainTeed">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/mueller-roofing.png" alt="Mueller Roofing Dayton Ohio">
                    </div>
                </div>

            </media-section>

            <media-section
                    title="CertainTeed Certified Installer"
                    img="images/certainteed-certified-dealer.png"
                    :no-shadow="true"
                    img-width="350px"
                    img-alt="CertainTeed Certified Installer">

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
            </media-section>
        </div>

        <!-- SIDING -->
        <div v-if="active === 1" class="row">
            <media-section
                    title="Siding"
                    subtitle="Siding subtext">

                <p>
                    Siding content
                </p>
            </media-section>
        </div>

        <!-- WINDOWS -->
        <div v-if="active === 2" class="row">
            <media-section
                    title="Replacement Windows"
                    subtitle="Schedule your free estimate today"
                    img="images/atrium-window.jpg"
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

                <div class="row">
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/atrium-logo.png" alt="Atrium Windows">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/marvin-doors-windows.png" alt="Marvin Windows">
                    </div>
                </div>
            </media-section>

            <media-section
                    title="Save money and help our planet"
                    img="images/recycle-planet.png"
                    :no-shadow="true"
                    img-width="350px"
                    img-alt="D & G Roofing cares about our planet">

                <p>
                    We are always looking for ways to help our environment.
                    Our energy efficient windows can do more than just save you money;
                    they can also help you conserve resources, which mean our planet benefits as well.
                </p>

                <p>
                    <strong>Start saving money and the environment today!</strong>
                </p>
            </media-section>

        </div>

        <!-- GUTTERS -->
        <div v-if="active === 3" class="row">
            <media-section
                    title="Gutters"
                    subtitle="Gutters subtext">

                <p>
                    Gutters content
                </p>
            </media-section>
        </div>

        <!-- DOORS -->
        <div v-if="active === 4" class="row">
            <media-section
                    title="Door Replacement"
                    subtitle="Professional door installation at an affordable price!"
                    img="images/door.png"
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
                        <img class="img-responsive" src="images/provia-doors.jpg" alt="ProVia Doors">
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/marvin-doors-windows.png" alt="Marvin Doors & Windows">
                    </div>
                </div>
            </media-section>
        </div>

        <!-- COMMERCIAL ROOFING -->
        <div v-if="active === 5" class="row">
            <media-section
                    title="Commercial Roofing"
                    subtitle="Commercial Roofing subtext"
                    img="images/commercial-roofing-2.jpg"
                    img-width="550px"
                    img-alt="dayton cincinnati ohio commercial roofing contractors">

                <p>
                    Commercial Roofing content
                </p>
            </media-section>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'tabbed-services',
    data() {
      return {
        active: 0,
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