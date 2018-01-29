<template>
    <dg-form title="Apply Today!"
             sub-title="We can't wait to meet you!"
             container="container-fluid">

        <div class="col-md-6">
            <div class="row">
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
                    <div class="styled-input">
                        <input type="text" required />
                        <label>Street Address</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input">
                        <input type="text" placeholder="optional" />
                        <label>Additional Address</label>
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
            </div>
        </div>

        <div class="col-md-6">
            <div class="row">
                <div class="col-xs-12">
                    <div class="styled-input">
                        <textarea required></textarea>
                        <label>Why did YOU choose US ?</label>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="styled-input">
                        <textarea required></textarea>
                        <label>Why should WE choose YOU ?</label>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="styled-input">
                        <input type="file" />
                        <label>Upload Resume</label>
                    </div>
                </div>
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