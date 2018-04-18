<template>
    <div class="galleries">
        <div class="container">
            <h1 class="page-header color-red">Galleries</h1>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12" v-for="gallery in galleries">
                    <div class="gallery-img">
                        <img class="img-responsive"
                             :src="gallery.img ? `${gallery.img}?w=700&h=400&fit=crop` : '/img/default-cover.jpg?w=700&h=400&fit=crop'"
                             :alt="gallery.name">

                        <div class="title">
                            <h2>{{gallery.name}}</h2>
                        </div>

                        <div class="overlay">
                            <h2>{{gallery.photo_count}} Photos</h2>
                            <a v-if="gallery.photo_count > 0" class="info" :href="`/galleries/${gallery.id}`">
                                View Photos
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->

            <div class="row">
                <div class="col-md-12 text-center">
                    <nav>
                        <ul class="pagination">
                            <li :class="prev_page_url ? null : 'disabled'">
                                <a href="#" @click.prevent="getGalleries(current_page - 1)" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li v-for="index in last_page" :class="current_page === index ? 'active' : null">
                                <a href="#" @click.prevent="getGalleries(index)">{{index}}</a>
                            </li>
                            <li :class="next_page_url ? null : 'disabled'">
                                <a href="#" @click.prevent="getGalleries(current_page + 1)" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'galleries',
    data () {
      return {
        perpage: 9,
        current_page: -1,
        galleries: [],
        from: 0,
        last_page: 0,
        next_page_url: null,
        prev_page_url: null,
        total: 0
      }
    },
    methods: {
      getGalleries (page) {
        this.errors = []

        if (this.current_page === page) {
          return false;
        }

        if (page === this.current_page + 1 && this.next_page_url === null) {
          return false;
        }

        if (page === this.current_page - 1 && this.prev_page_url === null) {
          return false;
        }

        axios.get(`/api/galleries/paginate/${this.perpage}?page=${page}`)
          .then((response) => {
            let r = response.data;

            this.current_page = r.current_page;
            this.galleries = r.data;
            this.from = r.from;
            this.last_page = r.last_page;
            this.next_page_url = r.next_page_url;
            this.prev_page_url = r.prev_page_url;
            this.total = r.total;

          }).catch((error) => {
            alert(error.response.data.message)
        });
      },
    },
    created () {
      this.getGalleries(1)
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
                .title h2 {
                    opacity: 0;
                    transition: all .4s ease-in-out;
                }
            }

            &:hover {
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
