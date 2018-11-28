<template>
    <dg-form title="Apply Today!"
             sub-title="We can't wait to meet you!"
             container="container-fluid">

        <div class="alert alert-danger" role="alert" v-if="error">
            Check your input and try again.
        </div>

        <div v-if="completed">
            <h2 class="page-header color-red">Thank you for your interest!</h2>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <div class="row">
                <div class="col-xs-12">
                    <div class="styled-input">
                        <input v-model="frmdata.name" type="text" required />
                        <label>Full Name</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input">
                        <input v-model="frmdata.email" type="text" required />
                        <label>Email</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input v-model="frmdata.phone" type="text" required />
                        <label>Phone #</label>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input v-model="frmdata.altphone" type="text" placeholder="optional" />
                        <label>Alt. Phone #</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input">
                        <textarea v-model="frmdata.whyus" required></textarea>
                        <label>Why did YOU choose US ?</label>
                    </div>
                </div>

                <div class="col-xs-12">
                    <div class="styled-input">
                        <textarea v-model="frmdata.whyyou" required></textarea>
                        <label>Why should WE choose YOU ?</label>
                    </div>
                </div>

                <!--<div class="col-xs-12">
                    <div class="styled-input">
                        <input type="file" />
                        <label>Attach Your Resume</label>
                    </div>
                </div>-->
            </div>
        </div>

        <div class="col-md-6 col-md-offset-3">
            <div @click="validateInput" class="btn-lrg form-btn">Apply Now!</div>
        </div>
    </dg-form>
</template>

<script>
    import DgForm from 'Components/Form';

    export default {
      name: "join-form",
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
            altphone: '',
            whyus: '',
            whyyou: '',
          },
        }

      },

      methods: {

        validateInput() {
          this.error = false;

          if (this.frmdata.name === '' ||
            this.frmdata.email === '' ||
            this.frmdata.phone === '' ||
            this.frmdata.whyyou === '' ||
            this.frmdata.whyus === '') {

            this.error = true;
            return false;
          }

          this.submit();
          this.completed = true;
        },

        submit() {
          axios.post('/api/join/apply', this.frmdata)
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