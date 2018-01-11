<template>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul :class="['nav', 'navbar-nav']">
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
        props: {
            pos: {type: String, default: 'right'}
        }
    }
</script>
<style lang="scss">
    @import "~Sass/_variables.scss";


    /* Navbar */
    .navbar {
         min-height: 0;
         margin-bottom: 0;
    }

    .navbar-fixed-top {
        top: 130px !important;
    }

    .navbar-inverse {
        background-color: $white !important;
        //border-bottom: 3px $grey solid !important;
        border: 0;

    }

    @media (min-width: 768px) {
        .navbar .navbar-nav {
            //margin: 13px 0 6px 0;
            display: inline-block;
            float: none;
        }

        .navbar .navbar-collapse {
            text-align: center;
        }

        .navbar-inverse .navbar-nav > li > a {
            line-height: 10px;
            color: $dark !important;
            margin-right: 25px;
            //border-bottom: solid $grey 2px;
        }

        .navbar-inverse .navbar-nav > li > a:hover,
        .navbar-inverse .navbar-nav > li > a:focus {
            color: $red !important;
            cursor: pointer;
            //border-bottom: solid lighten($red, 20%) 2px;
        }
    }
</style>