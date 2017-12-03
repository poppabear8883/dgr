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
                <img class="img-responsive img-portfolio"
                     src="/images/1.jpg"
                     :alt="gallery.name">
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

    .gallery-name {
        font-size: 24px;
    }

    .gallery-img {
        background: #101010;
        margin-top: 10px;

        img {
            opacity: .7;
        }
    }

</style>