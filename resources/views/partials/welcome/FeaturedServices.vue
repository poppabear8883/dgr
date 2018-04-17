<template>
    <div class="featured-services">
        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">
                    <h1>Featured Services</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 siding">
                    <div class="panel panel-default siding-panel">
                        <div class="panel-body">

                            <div class="text-center">
                                <img src="/images/icon_siding_red.png" alt="siding ico" class="img-responsive">
                                <h3>Siding</h3>
                                <hr>
                            </div>

                            <p>
                                Our proven work can rejuvenate your home. At D & G Roofing & Restoration, we know that the
                                right siding can make all the difference in the look and feel of your Dayton or
                                Cincinnati,
                                OH, property. With a wide variety of styles and options for you to choose from, we're
                                confident our knowledgeable team can make the dreams you have for your home's appearance
                                a
                                reality.
                            </p>

                            <div class="panel-actions">
                                <a href="/services#siding">Read More</a>
                                <a href="#">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 roofing">
                    <div class="panel panel-default roofing-panel">
                        <div class="panel-body">

                            <div class="text-center">
                                <img src="/images/icon_roofing_circle.png" alt="roofing ico" class="img-responsive">
                                <h3>Roofing</h3>
                                <hr>
                            </div>

                            <p>
                                When you're in the market for a Dayton, OH, roofing company, our knowledgeable crew is
                                here
                                to provide you with high caliber work. At D & G Roofing & Restoration, we're prepared to
                                act
                                as your first and final resource when it comes to all your roofing needs. When you're
                                ready
                                to take the next step, we're excited for the opportunity to help you benefit from our
                                thorough attention to detail.
                            </p>

                            <div class="panel-actions">
                                <a href="/services#roofing">Read More</a>
                                <a href="#">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 windows">
                    <div class="panel panel-default windows-panel">
                        <div class="panel-body">

                            <div class="text-center">
                                <img src="/images/icon_windows_red.png" alt="windows ico" class="img-responsive">
                                <h3>Windows</h3>
                                <hr>
                            </div>

                            <p>
                                Every building is unique, and off-the-shelf windows aren’t always the best solution. For
                                your one-of-a-kind property, your deserve top-quality, one-of-a-kind custom windows; and
                                D &
                                G Roofing & Restoration is a reliable, trusted source for custom windows in Dayton, OH.
                            </p>

                            <div class="panel-actions">
                                <a href="/services#windows">Read More</a>
                                <a href="#">View Gallery</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: "featured-services",
    }
</script>

<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    .featured-services {
        background-color: transparent;
        padding-top: 30px;

        @media (min-width: 768px) {
            padding-top: 0;
            padding-bottom: 50px;
        }

        .siding {
            margin: 0;
            padding: 0;
        }

        .roofing {
            margin: 0;
            padding: 0;
            z-index: 2;

            .roofing-panel {
                margin-top: 80px;
                border: none;
                background-color: #323233;
                color: #FFFFFF;
                box-shadow: 0 5px 60px 7px rgba(0, 0, 0, 0.5);

                h3 {
                    color: $red;
                }

                img {
                    width: 75px;
                }

                @media (min-width: 992px) {
                    height: 569px;
                }
            }
        }

        .windows {
            margin: 0;
            padding: 0;
        }

        .panel {
            @media (min-width: 992px) {
                min-height: 530px;
            }
        }

        .panel-default {
            display: flex;
            margin: 50px;
            box-shadow: 0 4px 26px rgba(0, 0, 0, 0.05);
            background-color: #f7f7f7;
            border: 1px #f2f2f2 solid;

            img {
                display: inline-block;
                width: 55px;
            }

            @media (min-width: 992px) {
                margin: 0;
                margin-top: 100px;
            }
        }

        .panel-body {
            display: flex;
            flex-direction: column;

            .panel-actions {
                display: flex;
                justify-content: center;
                padding: 5px;
                margin-top: auto;

                a {
                    font-size: 18px;
                    padding: 10px 20px;
                    display: block;
                    color: #FFFFFF;
                    font-weight: 500;
                    background-color: $red;
                    margin: 3px;
                    transition: .15s ease;

                    &:hover {
                        background-color: $dark;
                        color: $white;
                        cursor: pointer;
                        text-decoration: none;
                        transition: .15s ease;
                    }
                }
            }
        }

        hr {
            border-top: 1px darken($white, 10%) solid;
        }

        h3 {
            text-transform: uppercase;
        }
    }
</style>