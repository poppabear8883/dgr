<template>
    <div class="row">
        <div class="col-md-12 text-center" v-if="galleries.length <= 0">
            <h1>No Galleries</h1>
        </div>
        <div class="col-md-3 col-sm-6" v-else v-for="gallery in galleries">
            <div class="row">
                <div class="col-md-3">
                    <div class="gallery-name">{{gallery.name}}</div>
                </div>
                <div class="col-md-9">
                    <div class="pull-right">
                        <button class="btn btn-default btn-xs"><i class="fa fa-image"></i></button>
                        <button class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                    </div>
                </div>
            </div>

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
    </div>
</template>
<script>
    export default {
        props: {
            galleries: {required: true}
        }
    }
</script>
<style lang="scss">
    @import '~Sass/_variables.scss';

    .gallery-name {
        font-size: 24px;
    }

    .gallery-img {
        width:100%;
        height:100%;
        float:left;
        overflow:hidden;
        position:relative;
        text-align:center;
        cursor:default;

        &:hover {
            .overlay {
                opacity:1;
                filter: alpha(opacity=100);
            }

            h2, a.info {
                    opacity: 1;
                    filter: alpha(opacity=100);
                    transform: translatey(0);
                    transition-delay:.2s;
            }

            img {
                transform: scale(1.2);
            }
        }

        .overlay {
            width:100%;
            height:100%;
            position:absolute;
            overflow:hidden;
            top:0;
            left:0;
            opacity:0;
            background-color:rgba(0,0,0,0.5);
            transition:all .4s ease-in-out
        }

        img {
            display:block;
            position:relative;
            transition:all .4s linear;
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
                margin: 50px 0 0;
                padding: 7px 14px;

                &:hover {
                    box-shadow:0 0 5px #fff;
                }
            }
        }
    }
</style>