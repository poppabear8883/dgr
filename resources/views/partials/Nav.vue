<template>
    <nav :class="['navbar', 'navbar-inverse', fixedTop ? 'fixed-top' : null]" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button @click="collapse = !collapse" type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse"
                        data-target="#navbar-collapse"
                        aria-expanded="false">
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
            <div :class="[collapse ? 'collapse' : null, 'navbar-collapse']" id="navbar-collapse">
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
            fixedTop: false,
            collapse: true
        }
      },
      methods: {
        handleScroll() {
          this.fixedTop = document.documentElement.scrollTop >= 198 || window.innerWidth < 768;
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

    .navbar {
        position: static;
        border-radius: 0;
        margin-bottom: 0;
        transition: top 500ms;
        top: -64px;

        &.fixed-top {
            position: fixed;
            left: 0;
            top: 0;
            width: 100% !important;
            z-index: 99;
            transition: top 500ms;
        }

        &.navbar-inverse {
            background-color: $dark !important;
            border-bottom: 1px $red solid;

            .navbar-toggle {
                border-color: $white;

                .icon-bar {
                    background-color: $white !important;
                }

                &:hover,
                &:focus {
                    background-color: #333;
                }
            }
        }

        .navbar-brand {
            font-size: 38px;
            color: $white;
        }

        .navbar-nav {
            font-size: 18px;
            padding-top: 5px;

            li {
                text-align: center;
                border-right: 1px $grey solid;

                a {
                    color: $white !important;
                    padding-right: 25px;
                    padding-left: 25px;

                    &:hover,
                    &:focus {
                        color: $red !important;
                        cursor: pointer;
                    }
                }

                &:last-child {
                    border-right: none;
                }
            }

            @media (min-width: 768px) {
                display: inline-block;
                float: none;
            }
        }

        .navbar-header {
            color: $white !important;
        }

        .navbar-collapse {
            text-align: left;

            @media (min-width: 768px) {
                text-align: center;
            }
        }

    }
</style>