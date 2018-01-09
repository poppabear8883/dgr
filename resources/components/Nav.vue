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
    .navbar-fixed-top {
        top: 122px !important;
    }

    .navbar-inverse {
        border-bottom: 2px $red solid !important;
    }

    .navbar-inverse .navbar-nav > li > a {
        line-height: 10px;
        color: $white !important;
        margin-right: 25px;
        border-bottom: solid $grey 2px;
    }

    .navbar-inverse .navbar-nav > li > a:hover,
    .navbar-inverse .navbar-nav > li > a:focus {
        color: lighten($red, 20%) !important;
        cursor: pointer;
        border-bottom: solid lighten($red, 20%) 2px;
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