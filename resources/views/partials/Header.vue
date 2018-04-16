<template>
    <header class="main-header">

        <div class="main-header-inner" :style="styles">

            <div class="container">
                <slot>
                    <div class="row">
                        <div class="col-md-12 text-center hidden-xs">
                            <h1 class="animated bounceInLeft" :style="home ? 'padding-bottom: 0;' : null">
                                "Dependability You Can Rely On!"
                            </h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12 text-center hidden-xs">
                            <h1 class="animated bounceIn delay-1s" :style="home ? 'padding: 0;' : null">
                                "Honesty You Deserve!"
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
                </slot>
            </div>
        </div>

        <div class="main-header-bottom">
            <div class="container-fluid">
                <slot name="bottom">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                            <h4>Need a painless inspection? We are here to help you!</h4>
                        </div>
                        <div class="col-md-6 col-sm-6 hidden-xs">

                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="text-center" href="/giveaways">Refer A Friend</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="text-center" href="/join-our-team">Join Our Team</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="text-center animated tada delay-2-5s" href="#">Free Inspection</a>
                                    </div>
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
            home: {type: Boolean, default: false},
            bgImg: {type: String, default: 'images/headers/header.jpg'},
            bgPos: {type: String, default: 'center'},
            bgColor: {type: String, default: '#FFFFFF'},
            color: {type: String, default: '#000000'}
        },
        computed: {
            styles() {
                let styles;

                if(this.home) {
                  styles = `min-height: 500px;` + styles;
                }

                if(this.bgImg) {
                    styles = `
                    background: linear-gradient( rgba(42, 42, 42, 0.1), rgba(42, 42, 42, 0.1) ), url(/${this.bgImg});
                    background-position: ${this.bgPos};
                    background-size: cover;
                    ` + styles;
                } else {
                    styles = `background-color: ${this.bgColor};color: ${this.color};` + styles;
                }

                return styles;
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

            &.sub-page {
                font-size: 64px;
                margin-top: 150px;
                margin-bottom: -50px;
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
            padding-top: 25px;
            padding-bottom: 50px;
            width: 100%;
            height: 100%;
            color: $white;

            @media (min-width: 768px) {
                min-height: 300px;
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