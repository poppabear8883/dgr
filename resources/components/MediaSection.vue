<template>
    <div class="media-section">
        <div class="container">
            <div class="row">
                <div v-if="title" class="col-lg-12">
                    <h2 class="page-header color-red">{{ title }} <small v-if="subtitle">({{subtitle}})</small></h2>
                </div>
                <div :class="[img ? 'col-md-6' : 'col-md-12']">
                    <slot></slot>
                </div>
                <div v-if="img" class="col-md-6">
                    <slot name="aimg"></slot>
                    <img :width="imgWidth ? imgWidth : null"
                         :class="['img-responsive', noShadow ? null : 'img-shadow']"
                         :src="img"
                         :alt="imgAlt">
                    <slot name="bimg"></slot>
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
            subtitle: {type: String},
            img: {type: String},
            imgAlt: {type: String},
            imgWidth: {type: String},
            noShadow: {type: Boolean, default: false}
        },
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .media-section {
        width: 100%;
        padding: 25px;
    }
</style>