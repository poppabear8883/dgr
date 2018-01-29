<template>
    <dg-form title="Apply Today!" sub-title="We can't wait to meet you!">

        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>First Name</label>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Last Name</label>
            </div>
        </div>



        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required />
                <label>Street Address</label>
            </div>
        </div>


        <div class="col-md-4 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>City</label>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="styled-input">
                <input type="text" required />
                <label>State</label>
            </div>
        </div>

        <div class="col-md-4 col-sm-6">
            <div class="styled-input">
                <input type="text" required />
                <label>Zip</label>
            </div>
        </div>


        <div class="col-xs-12">
            <div class="styled-input wide">
                <textarea></textarea>
                <label>Message</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="btn-lrg form-btn">Apply Now!</div>
        </div>
    </dg-form>
</template>

<script>
    import DgForm from 'Components/Form';

    export default {
      name: "join-form",
      components: {
          DgForm
      }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';
</style>