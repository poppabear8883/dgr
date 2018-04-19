<template>
    <div class="photos" v-if="photos.length > 0">
        <div class="container">
            <h1 class="page-header color-red">{{photos.length}} Photos</h1>
            <div class="row">
                <div class="col-md-6 col-xs-12" v-for="photo in photos">
                    <div class="photo-img">
                        <img class="img-responsive"
                             :src="`${photo.path}?w=700&h=400&fit=crop`"
                             :alt="photo.name">

                        <div class="title">
                            <h2>{{photo.description}}</h2>
                        </div>

                        <!--<div class="overlay">
                            <a class="info" :href="`/galleries/${gallery.id}/photos`">
                                View Photos
                            </a>
                        </div>-->
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </div>
</template>

<script>
  export default {
    name: 'photos',
    props: {
      galleryId: {type: Number, default: 0}
    },
    data () {
      return {
        photos: []
      }
    },
    methods: {
      getPhotos () {
        this.errors = []

        axios.get(`/api/galleries/${this.pathId}`)
          .then((response) => {
            this.photos = response.data;
          }).catch((error) => {
            alert(error.response.data.message)
        })
      },
    },
    computed: {
      pathId() {
        return this.galleryId !== 0 ? this.galleryId : window.location.href.substr(window.location.href.lastIndexOf('/') + 1);
      }
    },
    created () {
      this.getPhotos();
    }
  }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .photos {
        .row {
            margin-bottom: 2rem;
        }

        .photo-img {
            width: 100%;
            height: 100%;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
            margin-bottom: 1rem;

            &:hover {
                /*.title h2 {
                    opacity: 0;
                    transition: all .4s ease-in-out;
                }*/

                .overlay {
                    opacity: 1;
                    filter: alpha(opacity=100);

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
            }

            .title {
                width: 100%;
                position: absolute;
                overflow: hidden;
                top: 0;
                left: 0;
                transition: all .4s ease-in-out;

                @media (min-width: 768px) {
                    top: 70%;
                }

                h2 {
                    filter: alpha(opacity=100);
                    text-transform: uppercase;
                    color: #fff;
                    text-align: center;
                    position: relative;
                    font-size: 17px;
                    background: rgba(0, 0, 0, 0.6);
                    transition: all .2s ease-in-out;
                    padding: 10px;
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
                transition: all .4s ease-in-out;

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
    }
</style>
