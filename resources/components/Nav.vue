<template>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-xs" href="/">

                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul :class="['nav', 'navbar-nav', 'navbar-'+pos]">
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
        color: $white !important;
    }

    .navbar-inverse .navbar-nav > li > a:hover,
    .navbar-inverse .navbar-nav > li > a:focus {
        color: lighten($red, 20%) !important;
        cursor: pointer;
        text-decoration: underline;
    }
</style>