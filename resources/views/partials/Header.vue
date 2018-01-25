<template>
    <header class="main-header">

        <div class="main-header-inner">

            <div class="container">
                <slot>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="hidden-xs">
                                "Dependability You Can Rely On!"
                            </h1>
                            <div class="hidden-sm hidden-md hidden-lg">
                                <h1>
                                    Free Inspections
                                    <a href="tel:1-937-439-0554">937-439-0554</a>
                                </h1>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="pull-right">
                                <a href="#">Refer A Friend</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="pull-left">
                                <a href="#">Join Our Team</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center hidden-xs">
                            <h1>
                                "Honesty You Deserve!"
                            </h1>
                        </div>
                    </div>
                </slot>
            </div>
        </div>

        <div class="main-header-bottom">
            <div class="container">
                <slot name="bottom">
                    <div class="row">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <h4>Need a painless inspection? We are here to help you!</h4>
                        </div>
                        <div class="col-md-4 col-sm-6 hidden-xs">
                            <div class="pull-right">
                                <a href="#">Get A Free Inspection</a>
                            </div>
                        </div>
                    </div>
                </slot>
            </div>
        </div>
    </header>
</template>
<script>
    export default {

    }
</script>
<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    /* Main Header */
    header.main-header {
        width: 100%;
        margin-top: 40px;
        margin-bottom: -20px;


        @media (min-width: 768px) {
            margin-top: 0;
        }


        h1 {
            @media (min-width: 768px) {
                color: $white;
                text-transform: uppercase;
                font-weight: 700;
                line-height: 1.2;
                padding-top: 50px;
                padding-bottom: 50px;
                text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            }
        }

        a {
            padding: 10px 20px;
            display: block;
            color: $white;
            border: 2px $white solid;
            font-weight: 500;
            background-color: $red;

            @media (min-width: 768px) {
                font-size: 18px;
                animation-delay: 1s;

                &:hover {
                    background-color: $dark;
                    color: $white;
                    cursor: pointer;
                    text-decoration: none;
                }
            }
        }

        .main-header-inner {
            padding-bottom: 25px;
            height: 100%;
            width: 100%;
            background: linear-gradient( rgba(42, 42, 42, 0.8), rgba(42, 42, 42, 0.3) ), url(/images/header-shake.jpg);
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            color: $white;

            .delay-2s {
                animation-delay: 2s;
            }

            .delay-3s {
                animation-delay: 3s;
                margin-left: auto;
                margin-right: auto;
            }

            @media (min-width: 768px) {
                padding: 0;
            }
        }
    }

    .main-header-bottom {
        padding-top: 15px;
        background-color: $red;
        color: $white;
        min-height: 100px;
        text-align: center;
        font-size: 20px;

        @media (min-width: 768px) {
            text-align: left;
        }
    }

</style>