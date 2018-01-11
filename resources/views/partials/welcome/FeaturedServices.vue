<template>
    <div class="featured-services">
        <div class="container">

            <div class="row">

                <div class="col-md-12 text-center">
                    <h1>Featured Services</h1>
                </div>

                <div class="col-md-4 siding">
                    <div class="panel panel-default siding-panel">
                        <div class="panel-body">

                            <div class="text-center">
                                <i class="fa fa-bars fa-4x color-red"></i>
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
                                <a href="#">Read More</a>
                                <a href="#">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 roofing">
                    <div class="panel panel-default roofing-panel">
                        <div class="panel-body">

                            <div class="text-center">
                                <i class="fa fa-home fa-4x"></i>
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
                                <a href="#">Read More</a>
                                <a href="#">View Gallery</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 windows">
                    <div class="panel panel-default windows-panel">
                        <div class="panel-body">

                            <div class="text-center">
                                <i class="fa fa-clone fa-4x color-red"></i>
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
                                <a href="#">Read More</a>
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
        name: "featured-services"
    }
</script>

<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    $featured-services-bg: darken($white, 2%);

    @media (max-width: 767px) {
        .featured-services {
            background-color: transparent;
            padding-top: 100px;
        }
    }

    // todo: format to SCSS

    .featured-services {
        padding: 20px;
        background-color: $white;

        .panel-default {
            margin-top: 100px;
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
                height: 569px;
                background-color: #323233;
                color: #FFFFFF;
                box-shadow: 0 4px 26px rgba(237, 27, 36, 0.5);

                h3 {
                    color: $red;
                }
            }
        }

        .windows {
            margin: 0;
            padding: 0;
        }
    }

    .featured-services hr {
        border-top: 1px darken($white, 10%) solid;
    }

    .featured-services .panel {
        min-height: 530px;
    }

    .featured-services .panel-body {
        display: flex;
        flex-direction: column;
    }

    .featured-services .panel-body .panel-actions {
        display: flex;
        justify-content: center;
        padding: 5px;
        margin-top: auto;
    }

    .featured-services .panel-body .panel-actions a {
        font-size: 18px;
        padding: 10px 20px;
        display: block;
        color: $white;
        border: 2px $white solid;
        font-weight: 500;
        background-color: $red;
    }

    .featured-services .panel-body .panel-actions a:hover {
        background-color: $dark;
        color: $white;
        cursor: pointer;
        text-decoration: none;
    }

    .featured-services .panel-default {
        display: flex;
        background-color: #f7f7f7;
        border: 1px #f2f2f2 solid;
        box-shadow: 0 4px 26px rgba(0, 0, 0, 0.05)
    }

    .featured-services h3 {
        text-transform: uppercase;
    }

</style>