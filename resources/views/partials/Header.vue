<template>
    <header class="main-header">

        <div class="main-header-inner" :style="styles">

            <div class="container">
                <slot>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1 class="hidden-xs animated bounceInLeft">
                                "Dependability You Can Rely On!"
                            </h1>
                        </div>
                    </div>

                    <div class="row hidden-sm hidden-md hidden-lg">
                        <div class="col-md-12 text-center">
                            <h1>Free Inspections</h1>
                        </div>

                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h1><a href="tel:1-937-439-0554">937-439-0554</a></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="pull-right animated flipInX delay-2s">
                                <a href="/refer-a-friend">Refer A Friend</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="pull-left animated flipInX delay-2s">
                                <a href="/join-our-team">Join Our Team</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 text-center hidden-xs">
                            <h1 class="animated bounceIn delay-1s">
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
                                <a class="animated tada delay-2-5s" href="#">Get A Free Inspection</a>
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
        props: {
            bgImg: {type: String, default: 'images/headers/header.jpg'},
            bgPos: {type: String, default: 'center'},
            bgColor: {type: String, default: '#FFFFFF'},
            color: {type: String, default: '#000000'}
        },
        computed: {
            styles() {
                if(this.bgImg) {
                    return `
                    background: linear-gradient( rgba(42, 42, 42, 0.4), rgba(42, 42, 42, 0.4) ), url(/${this.bgImg});
                    background-position: ${this.bgPos};
                    background-size: cover;
                    `;
                } else {
                    return `background-color: ${this.bgColor};color: ${this.color}`;
                }
            }
        }
    }
</script>
<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    /* Main Header */
    header.main-header {
        width: 100%;
        margin-top: 50px;
        margin-bottom: -20px;

        @media (min-width: 768px) {
            margin-top: 0;
            margin-bottom: 0;
        }


        h1 {
            a {
                font-size: 35px;
            }

            @media (min-width: 768px) {
                margin-bottom: 12.5px;
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
            width: 100%;
            height: 100%;
            color: $white;

            @media (min-width: 768px) {
                min-height: 300px;
                padding-bottom: 0;
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
            padding-top: 25px;
            text-align: left;
        }
    }

</style>