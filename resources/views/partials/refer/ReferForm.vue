<template>
    <dg-form title="Refer Your Friend"
             sub-title="Don't stop with just one, with every referral you increase your chances to win!">

        <div class="col-xs-12">
            <div class="row">
                <div v-if="page === 1" class="col-xs-12 text-center">
                    <h4 class="page-header">Your Information</h4>
                </div>
                <div v-if="page === 2" class="col-xs-12 text-center">
                    <h4 class="page-header">Friends Information</h4>
                </div>
            </div>
        </div>

        <!-- NAME -->
        <div v-if="page === 1" class="col-xs-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Your Name</label>
            </div>
        </div>
        <div v-if="page === 2" class="col-xs-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Friends Name</label>
            </div>
        </div>

        <!-- PHONE -->
        <div v-if="page === 1" class="col-xs-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Your Phone</label>
            </div>
        </div>
        <div v-if="page === 2" class="col-xs-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Friends Phone</label>
            </div>
        </div>

        <!-- EMAIL (OPTIONAL)-->
        <div v-if="page === 1" class="col-xs-12">
            <div class="styled-input">
                <input type="text" />
                <label>Your Email</label>
            </div>
        </div>
        <div v-if="page === 2" class="col-xs-12">
            <div class="styled-input">
                <input type="text" />
                <label>Friends Email</label>
            </div>
        </div>

        <!-- ADDRESS (OPTIONAL)-->
        <div v-if="page === 1" class="col-xs-12">
            <div class="styled-input">
                <input type="text" />
                <label>Your Address</label>
            </div>
        </div>
        <div v-if="page === 2" class="col-xs-12">
            <div class="styled-input">
                <input type="text" />
                <label>Friends Address</label>
            </div>
        </div>

        <div v-if="page === 1" class="col-xs-12">
            <div class="styled-input wide">
                <textarea></textarea>
                <label>How do you know about us ?</label>
            </div>
        </div>
        <div v-if="page === 2" class="col-xs-12">
            <div class="styled-input wide">
                <textarea></textarea>
                <label>What does your friend need from us ?</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div v-if="page > 1" @click="page--" class="btn-lrg submit-btn pull-left">back</div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div v-if="page < 2" @click="page++" class="btn-lrg submit-btn">Next</div>
                    <div v-if="page === 2" class="btn-lrg submit-btn">Submit</div>
                </div>
            </div>
        </div>

    </dg-form>
</template>

<script>
    import DgForm from 'Components/Form';

    export default {
      name: "contact-form",
      components: {
          DgForm
      },
      data() {
        return {
            page: 1,
        }
      }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .dg-form .styled-input {
        width: 100% !important;
    }
</style>