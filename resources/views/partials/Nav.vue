<template>
    <nav :class="['navbar', 'navbar-inverse', fixedTop ? 'navbar-fixed-top' : null]" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand hidden-sm hidden-md hidden-lg" href="/">
                    D&G <span class="color-red">Roofing</span>
                    <span class="color-light hidden-xs" style="font-size: 14px">and Restoration</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/services">Services</a>
                    </li>
                    <li>
                        <a href="/galleries">Galleries</a>
                    </li>
                    <li>
                        <a href="/giveaways">Giveaways</a>
                    </li>
                    <li>
                        <a href="/about">About</a>
                    </li>
                    <li>
                        <a href="/contact">Contact</a>
                    </li>
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
      data() {
        return {
            fixedTop: false
        }
      },
      methods: {
        handleScroll() {
          if (document.documentElement.scrollTop >= 137 || window.innerWidth < 768) {
            this.fixedTop = true;
          } else {
            this.fixedTop = false;
          }
        }
      },

      created() {
        if (window.innerWidth < 768) {
          this.fixedTop = true;
        }

        window.addEventListener('scroll', this.handleScroll);
      },

      destroyed() {
        window.removeEventListener('scroll', this.handleScroll);
      }
    }
</script>
<style lang="scss" scoped>
    @import "~Sass/_variables.scss";

    /* Navbar */
    .navbar-brand {
        font-size: 38px;
        color: $white;
    }

    .navbar {
        border-radius: 0;
        margin-bottom: 0;
    }

    .navbar-nav {
        font-size: 18px;
        padding-top: 5px;

        li {
            text-align: center;
            border-right: 1px $grey solid;

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
            transition: .5s ease;
            //top: 130px !important;
        }
    }

    .navbar-inverse {
        background-color: $dark !important;
        border-bottom: 1px $red solid;
    }

    .navbar-inverse .navbar-toggle .icon-bar {
        background-color: $white !important;
    }

    .navbar-inverse .navbar-toggle:hover,
    .navbar-inverse .navbar-toggle:focus {
        background-color: #333;
    }

    .navbar-inverse .navbar-toggle {
        border-color: $white;
    }


    .navbar-header {
        color: $white !important;
    }

    .navbar-inverse .navbar-nav > li > a {
        color: $white !important;
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