<template>
    <div class="call-anytime">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <h1>We are here to answer all your questions</h1>
                    <p>
                        Call us anytime at
                        <span class="color-light-red">
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
        width: 100%;
        padding: 25px;
        background: linear-gradient( rgba(42, 42, 42, 0.7), rgba(42, 42, 42, 0.7) ), url(/images/1.jpg);
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        color: $white;

        h1 {
            margin-bottom: 20px;
            font-weight: 700;
            font-size: 30px;
            line-height: 1.2;
            text-shadow: 0 0 10px rgba(0, 0, 0, 0.8);

            @media (max-width: 375px) {
                font-size: 20px;
            }
        }

        p {
            font-size: 20px;
            font-weight: 700;

            span {
                font-size: 25px;

                @media (max-width: 320px) {
                    font-size: 16px;
                }

                @media (max-width: 425px) {
                    font-size: 20px;
                }
            }

            @media (max-width: 320px) {
                font-size: 12px;
            }

            @media (max-width: 425px) {
                font-size: 16px;
            }
        }

    }
</style>