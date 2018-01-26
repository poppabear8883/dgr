<template>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand color-dark hidden-sm hidden-md hidden-lg" href="/">
                    D & G <span class="color-red">Roofing</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <slot></slot>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</template>
<script>
    export default {

    }
</script>
<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    /* Navbar */
    .navbar-nav {
        font-size: 20px;
        padding-top: 5px;

        li {
            text-align: center;
            border-right: 1px lighten($grey, 50%) solid;

            a {
                padding-right: 25px;
                padding-left: 25px;
            }

            &:last-child {
                border-right: none;
            }
        }
    }

    .navbar-fixed-top {
        @media (min-width: 768px) {
            top: 130px !important;
        }
    }

    .navbar-inverse {
        background-color: lighten($dark, 77%) !important;
        border-bottom: 5px $dark solid;
    }

    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: $dark !important;
    }

    .navbar-header {
        color: $dark !important;
    }

    .navbar-inverse .navbar-nav > li > a {
        color: $dark !important;
    }

    .navbar-inverse .navbar-nav > li > a:hover,
    .navbar-inverse .navbar-nav > li > a:focus {
        color: $red !important;
        cursor: pointer;
    }

    @media (min-width: 768px) {

        .navbar .navbar-nav {
            display: inline-block;
            float: none;
        }

        .navbar .navbar-collapse {
            text-align: center;
        }
    }
</style>