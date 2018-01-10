<template>
    <header class="main-header">

        <div class="main-header-inner">

            <div class="container">
                <div class="row">

                    <slot>
                        <div class="col-md-12 text-center">
                            <h1 class="animated slideInDown">
                                "Dependability You Can Rely On!"
                            </h1>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="pull-right">
                                <a href="#" class="animated flipInY">Refer A Friend</a>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="pull-left">
                                <a href="#" class="animated flipInY">Join Our Team</a>
                            </div>
                        </div>

                        <div class="col-md-12 text-center">
                            <h1 class="animated fadeIn delay-2s">
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
<style lang="scss">
    @import "~Sass/_variables.scss";

    /* Main Header */
    header.main-header {
    //height: 80%;
        width: 100%;
        margin-bottom: -20px;
    }

    header.main-header a {
        font-size: 18px;
        padding: 10px 20px;
        display: block;
        color: $white;
        border: 2px $white solid;
        font-weight: 500;
        background-color: $red;
        animation-delay: 1s;
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
    }

    header.main-header a:hover {
        background-color: $dark;
        color: $white;
        cursor: pointer;
        text-decoration: none;
    }

    header.main-header .main-header-inner .delay-2s {
        animation-delay: 2s;
        -moz-animation-delay: 2s;
        -webkit-animation-delay: 2s;
    }

    header.main-header .main-header-inner .delay-3s {
        animation-delay: 3s;
        -moz-animation-delay: 3s;
        -webkit-animation-delay: 3s;
        margin-left: auto;
        margin-right: auto;
    }

    header.main-header .main-header-inner {
    // min-height: 200px;
        margin-top: 30px;
        height: 100%;
        width: 100%;
        background: linear-gradient( rgba(42, 42, 42, 0.8), rgba(42, 42, 42, 0.3) ), url(/images/header-shake.jpg);
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        color: $white;
    }

    header.main-header h1 {
        color: $white;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 30px;
        line-height: 1.2;
        padding-top: 50px;
        padding-bottom: 50px;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
    }

    header.main-header .main-header-bottom {
        background-color: $red;
        padding-top: 35px;
        padding-bottom: 35px;
        color: $white;
    }

    header.main-header .main-header-bottom .pull-left p {
        font-size: 22px;
        padding-top: 10px;
        line-height: 28px;
    }
</style>