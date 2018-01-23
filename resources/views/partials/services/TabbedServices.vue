<template>
    <!--, Siding, Windows, , Gutters, Doors-->
    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-center">
                    <img :class="['img-responsive', active === 0 ? 'active' : null]"
                         @click="active = 0"
                         src="images/icon_roofing_circle.png">
                    <br />
                    Residential Roofing
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['img-responsive', active === 1 ? 'active' : null]"
                         @click="active = 1"
                         src="images/icon_siding_circle.png" />
                    <br />
                    Siding
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['img-responsive', active === 2 ? 'active' : null]"
                         @click="active = 2"
                         src="images/icon_windows_circle.png" />
                    <br />
                    Windows
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['img-responsive', active === 3 ? 'active' : null]"
                         @click="active = 3"
                         src="images/icon_gutters_circle.png" />
                    <br />
                    Gutters
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['img-responsive', active === 4 ? 'active' : null]"
                         @click="active = 4"
                         src="images/icon_doors_circle.png" />
                    <br />
                    Doors
                </div>
                <div class="col-md-2 text-center">
                    <img :class="['img-responsive', active === 5 ? 'active' : null]"
                         @click="active = 5"
                         src="images/icon_commercial_circle.png" />
                    <br />
                    Commercial Roofing
                </div>
            </div>
        </div>

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
            </media-section>

            <media-section
                    title="Residential Roofing From CertainTeed"
                    subtitle="CertainTeed has you covered"
                    img="images/certainteed.png"
                    img-width="350px"
                    img-alt="RESIDENTIAL ROOFING FROM CERTAINTEED">

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
            </media-section>

            <media-section
                    title="CertainTeed Certified Installer"
                    subtitle="Professionals in every aspect"
                    img="images/certainteed-certified-dealer.png"
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
</style>