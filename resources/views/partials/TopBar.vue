<template>
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">

                <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
                    <div class="nrlb">
                        <a href="/nrlb">
                            <img class="img-responsive" src="images/no-roof-left-behind.png">
                        </a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4 site-logo">
                    <a href="/">
                        <img class="img-responsive" src="images/site-logo.jpg">
                    </a>
                </div>
                <div class="col-xs-8 col-sm-6 col-md-4 col-lg-4">
                    <div class="info">
                        <p>
                            Free Inspections - <span class="color-red">Call Now!</span>
                        </p>
                        <h1><a href="tel:1-937-439-0554">937-439-0554</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
<style lang="scss">
    @import "~Sass/_variables.scss";

    .top-bar {
        margin-right: auto;
        margin-left: auto;
        padding: 10px 0;
        top: 0;
        position: fixed;
        background-color: $white;
        width: 100%;
        z-index: 100;
        color: lighten($dark, 20%);

        .img-responsive {
            display: inline-block;
        }

        .site-logo {
            img {
                width: 175px;
            }

            @media (min-width: 991px) {
                text-align: center;
            }
        }

        .nrlb {
            margin-top: 20px;

            img {
                width: 250px;
            }
        }

        .info {
            float: right;
            margin-top: 20px;

            h1 {
                color: $red;
                font-weight: 700;

                @media (max-width: 615px) {
                    font-size: 16px;
                }

                @media (max-width: 275px) {
                    font-size: 12px;
                }
            }

            p {
                font-size: 20px;
                color: $dark;
                margin-bottom: -20px;

                @media (max-width: 615px) {
                    font-size: 12px;
                }

                @media (max-width: 275px) {
                    font-size: 8px;
                }
            }
        }
    }

</style>