<template>
    <divider-section bg-color="#353636">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="color-light">Why Choose Us ?</h2>
                <hr>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="images/comp.png" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="images/help.png" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="images/qual.png" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="images/rep.png" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="images/sale.png" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
                <img class="img-responsive customer-img" src="images/warr.png" alt="">
            </div>
        </div>
    </divider-section>
</template>

<script>
    export default {
        name: "why-choose-us"
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .divider-section {
        padding-bottom: 50px;

        hr {
            border-top: 2px $red solid;
        }
    }
</style>