<template>
    <div class="galleries">
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-default btn-lg"><i class="fa fa-plus"></i></button>
            </div>
        </div> <!-- row -->

        <div v-if="galleries.length <= 0" class="row">
            <div class="col-md-12 text-center">
                <h1>No Galleries</h1>
            </div>
        </div> <!-- row -->

        <div v-else class="row" v-for="i in Math.ceil(galleries.length / 4)">

            <div class="col-md-3 col-sm-6 col-xs-12" v-for="gallery in galleries.slice((i - 1) * 4, i * 4)">
                <div class="gallery-img">
                    <img class="img-responsive"
                         :src="'../images/Miamisburg-45342-Roofing.jpg'"
                         :alt="gallery.name">

                    <div class="overlay">
                        <h2>{{gallery.name}}</h2>
                        <a class="info" href="#">View Photos</a>
                    </div>
                </div>
            </div>

        </div> <!-- row -->
    </div>
</template>
<script>
    export default {
      props: {
        galleries: {required: true}
      },
      computed: {

      }

    }
</script>
<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .gallery-img {
        width: 100%;
        height: 100%;
        float: left;
        overflow: hidden;
        position: relative;
        text-align: center;
        cursor: default;
        margin-bottom: 25px;

        &:hover {
            .overlay {
                opacity: 1;
                filter: alpha(opacity=100);
            }

            h2, a.info {
                opacity: 1;
                filter: alpha(opacity=100);
                transform: translatey(0);
                transition-delay: .2s;
            }

            img {
                transform: scale(1.2);
            }
        }

        .overlay {
            width: 100%;
            height: 100%;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            opacity: 0;
            background-color: rgba(0,0,0,0.5);
            transition: all .4s ease-in-out
        }

        img {
            display: block;
            position: relative;
            transition: all .4s linear;
        }

        h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            background: rgba(0,0,0,0.6);
            transform: translatey(-100px);
            transition: all .2s ease-in-out;
            padding: 10px;
        }

        a {
            &.info {
                text-decoration: none;
                display: inline-block;
                text-transform: uppercase;
                color: #fff;
                border: 1px solid #fff;
                background-color: transparent;
                opacity: 0;
                filter: alpha(opacity=0);
                transition: all .2s ease-in-out;
                margin: 10px 0 0;
                padding: 7px 14px;

                &:hover {
                    box-shadow: 0 0 5px #fff;
                }
            }
        }
    }
</style>