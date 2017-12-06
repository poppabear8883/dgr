<template>
    <div class="top-bar">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <a href="/"><img class="img-responsive" src="images/site-logo.png"></a>
                </div>
                <div class="hidden-xs hidden-sm hidden-md col-lg-4">
                    <a href="/nrlb"><img class="img-responsive" src="images/no-roof-left-behind.png" width="350px"></a>
                </div>
                <div class="hidden-xs col-sm-6 col-md-6 col-lg-4">
                    <div class="info">
                        <p>
                            Free Inspections - <span class="color-red">Call Now!</span>
                        </p>
                        <h1>937-439-0554</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

    }
</script>
<style lang="scss">
    @import "~Sass/_variables.scss";

    .top-bar {
        margin-right: auto;
        margin-left: auto;
        padding: 15px;
        top: 0;
        position: fixed;
        background-color: $white;
        border-bottom: 1px darken($white, 20%) solid;
        width: 100%;
        z-index: 100;
        color: lighten($dark, 20%);
    }

    .top-bar .img-responsive {
        display: unset;
    }

    .top-bar .info {
        float: right;
        padding-right: 50px;
    }

    .top-bar .info > p {
        font-size: 20px;
        color: $dark;
        margin-bottom: -20px;
    }

    .top-bar .info > h1 {
        color: lighten($red, 10%);
        font-weight: 700;
    }

</style>