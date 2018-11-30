<template>
    <dg-form title="Contact Us" sub-title="We can't wait to hear from you!">

        <div class="col-xs-12">
            <div class="alert alert-danger" role="alert" v-if="error">
                Check your input and try again.
            </div>

            <div v-if="completed">
                <h2 class="page-header color-red">Thank you for contacting D&G Roofing!</h2>
            </div>

            <div class="styled-input">
                <input v-model="frmdata.name" type="text" required />
                <label>Name</label>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input v-model="frmdata.email" type="text" required />
                <label>Email</label>
            </div>
        </div>

        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input v-model="frmdata.phone" type="text" placeholder="optional"/>
                <label>Phone Number</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="styled-input">
                <textarea v-model="frmdata.message" required></textarea>
                <label>Message</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div @click="validateInput" class="btn-lrg form-btn">Send Message</div>
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
      data () {

        return {
          error: false,
          completed: false,

          frmdata: {
            name: '',
            email: '',
            phone: '',
            message: '',
          },
        }

      },

      methods: {

        validateInput() {
          this.error = false;

          if (this.frmdata.name === '' ||
            this.frmdata.email === '' ||
            this.frmdata.message === '') {

            this.error = true;
            return false;
          }

          this.submit();
          this.completed = true;
        },

        submit() {
          axios.post('/api/contact', this.frmdata)
            .then(function (response) {
              console.log(response);
              this.completed = true;
            }.bind(this))
            .catch(function (error) {
              console.log(error);
            });
        }
      }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';
</style>