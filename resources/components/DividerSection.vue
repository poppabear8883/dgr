<template>
    <div class="divider-section" :style="styles">
        <div :class="`${container !== 'fluid' ? container : 'container-fluid'}`">
            <div class="row">
                <div :class="`col-xs-12 col-sm-12 col-md-12 ${center ? 'text-center' : null}`">
                    <slot></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "divider-section",
        props: {
            container: {type: String, default: 'container'},
            center: {type: Boolean, default: false},
            bgColor: {type: String},
            bgImg: {type: String}
        },
        computed: {
            styles() {
                if(this.bgImg) {
                    return `
                    background: linear-gradient( rgba(42, 42, 42, 0.7), rgba(42, 42, 42, 0.7) ), url(${this.bgImg});
                    background-position: center;
                    background-attachment: fixed;
                    background-size: cover;
                    `;
                } else if (this.bgColor) {
                    return `background-color: ${this.bgColor};`;
                }

                return 'background-color: #FFFFFF;color: #000000';
            }
        }

    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .divider-section {
        width: 100%;
        margin: 25px 0 25px 0;
        padding: 25px;
        color: $white;
    }
</style>