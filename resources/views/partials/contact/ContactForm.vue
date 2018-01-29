<template>
    <dg-form title="Contact Us" sub-title="We can't wait to hear from you!">

        <div class="col-xs-12">
            <div class="styled-input wide">
                <input type="text" required />
                <label>Name</label>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Email</label>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" />
                <label>Phone Number</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="styled-input wide">
                <textarea required></textarea>
                <label>Message</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="btn-lrg form-btn">Send Message</div>
        </div>
    </dg-form>
</template>

<script>
    import DgForm from 'Components/Form';

    export default {
      name: "contact-form",
      components: {
          DgForm
      }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';
</style>