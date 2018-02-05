<template>
    <div class="galleries">
        <div class="container">
            <div class="row" v-for="i in Math.ceil(galleries.length / 3)">
                <div class="col-md-4 col-sm-6 col-xs-12" v-for="gallery in galleries.slice((i - 1) * 3, i * 3)">
                    <div class="gallery-img">
                        <img class="img-responsive"
                             :src="gallery.img ? `${gallery.img}?w=700&h=400&fit=crop` : '/img/gallery/default-cover.jpg?w=700&h=400&fit=crop'"
                             :alt="gallery.name">

                        <div class="overlay">
                            <h2>{{gallery.name}}</h2>
                            <a class="info" :href="`/galleries/${gallery.id}/photos`">
                                View Photos
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </div>
</template>

<script>
  export default {
    name: 'galleries',
    data () {
      return {
        galleries: []
      }
    },
    methods: {
      getGalleries () {
        this.errors = []

        axios.get('/api/galleries')
          .then((response) => {
            this.galleries = response.data;
          }).catch((error) => {
            alert(error.response.data.message)
        })
      },
    },
    created () {
      this.getGalleries();
    }
  }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .galleries {
        .row {
            margin-bottom: 2rem;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
            margin-bottom: 1rem;

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
                background-color: rgba(0, 0, 0, 0.5);
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
                background: rgba(0, 0, 0, 0.6);
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
                    margin: 70px 0 0;
                    padding: 7px 14px;

                    &:hover {
                        box-shadow: 0 0 5px #fff;
                    }
                }
            }
        }
    }
</style>