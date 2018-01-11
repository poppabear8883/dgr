<template>
    <div class="why-choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="color-light">Why Choose Us ?</h2>
                    <hr>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="images/bbb-logo.png" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="images/25-yrs-exp.png" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <img class="img-responsive customer-img" src="http://placehold.it/500x300" alt="">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "why-choose-us"
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .why-choose-us {
        width: 100%;
        background-color: lighten($dark, 5%);
        padding-bottom: 50px;

        hr {
            border-top: 2px $red solid;
        }
    }
</style>