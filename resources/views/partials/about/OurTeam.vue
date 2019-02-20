<template>
    <div class="our-team">
        <div class="container">

            <!-- TABS -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-header color-red">Our Team</h2>
                </div>

                <div class="col-md-3 text-center">
                    <img :class="['tab', 'img-responsive', 'img-circle', active === 0 ? 'active' : null]"
                         @click="active = 0"
                         src="/images/duane.jpg"
                         alt="">
                    <h5>
                        DUANE HOWARD<br>
                        <small :class="active === 0 ? 'color-red' : null">
                            President
                        </small>
                    </h5>
                </div>

                <div class="col-md-3 text-center">
                    <img :class="['tab', 'img-responsive', 'img-circle', active === 1 ? 'active' : null]"
                         @click="active = 1"
                         src="/images/gerri.jpg"
                         alt="">
                    <h5>
                        GERRI HOWARD<br>
                        <small :class="active === 1 ? 'color-red' : null">
                            Vice President
                        </small>
                    </h5>
                </div>

                <div class="col-md-3 text-center">
                    <img :class="['tab', 'img-responsive', 'img-circle', active === 2 ? 'active' : null]"
                         @click="active = 2"
                         src="/images/mike.jpg"
                         alt="">
                    <h5>
                        MIKE WALKER<br>
                        <small :class="active === 2 ? 'color-red' : null">
                            Residential Operations Manager
                        </small>
                    </h5>
                </div>

                <div class="col-md-3 text-center">
                    <img :class="['tab', 'img-responsive', 'img-circle', active === 3 ? 'active' : null]"
                         @click="active = 3"
                         src="/images/amanda.jpg"
                         alt="">
                    <h5>
                        AMANDA WILLMAN<br>
                        <small :class="active === 3 ? 'color-red' : null">
                            Administrative Assistant
                        </small>
                    </h5>
                </div>

                <div class="col-md-3 text-center">
                    <img :class="['tab', 'img-responsive', 'img-circle', active === 4 ? 'active' : null]"
                         @click="active = 4"
                         src="/images/brian.jpg"
                         alt="">
                    <h5>
                        BRIAN MENDENHALL<br>
                        <small :class="active === 4 ? 'color-red' : null">
                            Sales Professional
                        </small>
                    </h5>
                </div>
            </div>

            <!-- CONTENT CONTAINERS -->

            <!-- DUANE HOWARD -->
            <div v-if="active === 0" class="row">
                <media-section
                        title="About Duane Howard"
                        subtitle="President"
                        img="images/duane.jpg"
                        img-width="250px"
                        img-alt="duane howard">
                    <p>
                        Duane Howard is the president of D & G Roofing & Restoration. Duane brings years of expertise in
                        the construction business to the D & G team. Duane oversees all of D & G’s projects, ensuring
                        every customer is receiving the best quality workmanship. One of Duane's best qualities is his
                        attention to detail. Prior to becoming D & G’s president, Duane was the building department
                        manager for a large construction company. Duane has also been a Customer Consultant and
                        knows the importance of customer service. Ten years of experience as a property appraiser, has
                        given Duane plenty of skill with customer service, organization, management, and the necessary
                        field experience to ensure every D & G customer's needs are met.
                    </p>
                </media-section>
            </div>

            <!-- GERRI HOWARD -->
            <div v-if="active === 1" class="row">
                <media-section
                        title="About Gerri Howard"
                        subtitle="Vice President"
                        img="images/gerri.jpg"
                        img-width="250px"
                        img-alt="gerri howard">
                    <p>
                        Gerri Howard is D & G Roofing & Restoration's Vice President. As VP, Gerri upholds D & G
                        Roofing's image as an industry leader and expands awareness of D & G Roofing and our
                        services. Gerri takes great pride in helping people to repair their homes when needed,
                        and treats every project as if it were her own. Gerri has been in the customer service
                        industry for over 35 years. Gerri began her construction career as a Customer Consultant
                        with one of the top contractors in the country. Many have trained extensively with
                        Gerri, and directly benefited from her hands on knowledge and years of experience. An
                        expert in training, Gerri passes on her knowledge and high integrity to all new recruits
                        that come aboard with our D & G team. Quality and customer service is Gerri’s #1 goal.
                    </p>
                </media-section>
            </div>

            <!-- MIKE WALKER -->
            <div v-if="active === 2" class="row">
                <media-section
                        title="About Mike Walker"
                        subtitle="Residential Operations Manager"
                        img="images/mike.jpg"
                        img-width="250px"
                        img-alt="mike walker">
                    <p>
                        Mike comes to us with 22 years in the Home Improvement Industry. Twenty years of which
                        Mike has management experience in. Mike plays a key role in the training and development
                        of all new recruits at D & G Roofing and Restoration and has proven to be a quality leader
                        with the company. Mike’s top priority is customer satisfaction.
                    </p>
                </media-section>
            </div>

            <!-- AMANDA WILLMAN -->
            <div v-if="active === 3" class="row">
                <media-section
                        title="About Amanda Willman"
                        subtitle="Administrative Assistant"
                        img="images/amanda.jpg"
                        img-width="250px"
                        img-alt="amanda willman">
                    <p>
                        Amanda has ten years in customer service experience with five years office experience.
                        She is currently attending school for business management. She is a great asset to D & G
                        Roofing and Restoration and customer service is Amanda’s top priority.
                    </p>
                </media-section>
            </div>

            <!-- BRIAN MENDENHALL -->
            <div v-if="active === 4" class="row">
                <media-section
                  title="About Brian Mendenhall"
                  subtitle="Sales Professional"
                  img="images/brian.jpg"
                  img-width="250px"
                  img-alt="brian mendenhall">
                    <p>
                        Bio Coming Soon ...
                    </p>
                </media-section>
            </div>

        </div>


    </div>
</template>

<script>
    export default {
        name: "ourteam",
        data() {
            return {
                active: 0,
            }
        },
        computed: {

        }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .our-team {
        img {

            &.tab {
                display: inline-block !important;
                margin: 10px;
                width: 200px;
                transition: .30s ease;

                &:hover, &.active {
                    transition: .30s ease;
                    transform: scale(1.05);
                    cursor: pointer;
                }
            }
        }
    }
</style>