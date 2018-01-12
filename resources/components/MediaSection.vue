<template>
    <div class="media-section">
        <div class="container">
            <div class="row">
                <div v-if="title" class="col-lg-12">
                    <h2 class="page-header color-red">{{ title }}</h2>
                </div>
                <div class="col-md-6">
                    <slot></slot>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive" :src="img" :alt="imgAlt">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "media-section",
        props: {
            title: {type: String},
            img: {type: String, required: true},
            imgAlt: {type: String, required: true}
        }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .media-section {
        width: 100%;
        padding: 25px;

        img {
            box-shadow: 0 4px 26px rgba(0, 0, 0, 0.2);
        }
    }
</style>