<template>
    <div class="call-anytime">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <h1>We are here to answer all your questions</h1>
                    <p>
                        Call us anytime at
                        <span class="color-light-red" style="font-size: 25px">
                            937-439-0554
                        </span>
                        and get direct help from our advisors
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "call-anytime"
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    // todo: format for SCSS

    .call-anytime {
    //clip-path: polygon( 50% 0%, 100% 45%, 100% 100%, 0% 100%, 0% 45% );
    //clip-path: polygon( 50% 0%, 99% 90%, 99% 100%, 1% 100%, 1% 90% );
        //margin-top: 50px;
        width: 100%;
        height: 250px;
        padding: 25px;
        background: linear-gradient( rgba(42, 42, 42, 0.7), rgba(42, 42, 42, 0.7) ), url(/images/1.jpg);
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        color: $white;
    }

    .call-anytime > .container {
        margin-top: 50px;
    }

    .call-anytime h1 {
        font-weight: 700;
        font-size: 30px;
        line-height: 1.2;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
    }

    .call-anytime p {
        font-size: 20px;
        font-weight: 700;
    }
</style>