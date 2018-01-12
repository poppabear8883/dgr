<template>
    <header class="main-header">

        <div class="main-header-inner">

            <div class="container">
                <div class="row">

                    <slot>
                        <div class="col-md-12 text-center">
                            <h1>
                                "Dependability You Can Rely On!"
                            </h1>
                        </div>

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

                        <div class="col-md-12 text-center">
                            <h1>
                                "Honesty You Deserve!"
                            </h1>
                        </div>

                    </slot>
                </div>
            </div>
        </div>

        <div class="main-header-bottom">
            <div class="container">
                <div class="row">
                    <slot name="bottom">
                        <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="pull-left">
                                <p>Need a painless inspection? We are here to help you!</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="pull-right">
                                <a href="#">Get A Free Inspection</a>
                            </div>
                        </div>
                    </slot>
                </div>
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
        margin-bottom: -20px;

        @media (max-width: 425px) {
            margin-top: -40px;
        }

        @media (max-width: 425px) {
            .main-header-inner h1 {
                font-size: 18px;
                padding: 0;
            }
        }

        @media (max-width: 767px) {
            .main-header-inner .delay-2s {
                padding-top: 80px;
            }
        }

        h1 {
            color: $white;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 30px;
            line-height: 1.2;
            padding-top: 50px;
            padding-bottom: 50px;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
        }

        a {
            font-size: 18px;
            margin-bottom: 15px;
            padding: 10px 20px;
            display: block;
            color: $white;
            border: 2px $white solid;
            font-weight: 500;
            background-color: $red;
            animation-delay: 1s;
            -webkit-animation-delay: 1s;
            -moz-animation-delay: 1s;

            &:hover {
                background-color: $dark;
                color: $white;
                cursor: pointer;
                text-decoration: none;
            }
        }

        .main-header-inner {
            height: 100%;
            width: 100%;
            background: linear-gradient( rgba(42, 42, 42, 0.8), rgba(42, 42, 42, 0.3) ), url(/images/header-shake.jpg);
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            color: $white;

            .delay-2s {
                animation-delay: 2s;
                -moz-animation-delay: 2s;
                -webkit-animation-delay: 2s;
            }

            .delay-3s {
                animation-delay: 3s;
                -moz-animation-delay: 3s;
                -webkit-animation-delay: 3s;
                margin-left: auto;
                margin-right: auto;
            }
        }

        .main-header-bottom {
            background-color: $red;
            padding: 25px 0;
            color: $white;

            .pull-left p {
                font-size: 22px;
                padding-top: 10px;
                line-height: 28px;
            }
        }

    }
</style>