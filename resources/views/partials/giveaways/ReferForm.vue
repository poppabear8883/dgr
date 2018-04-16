<template>
    <dg-form title="Refer Your Friend"
             sub-title="Don't stop with just one, with every referral you increase your chances to win!">

        <div class="alert alert-danger" role="alert" v-if="error">
            Check your input and try again.
        </div>

        <div v-if="completed">
            <h2 class="page-header color-red">Thank you for your referral!</h2>
            <p>A single entry will be added in your favor!</p>
        </div>

        <div v-else>
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
                    <input v-model="frmdata.name" type="text" required/>
                    <label>Your Name</label>
                </div>
            </div>
            <div v-if="page === 2" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.fname" type="text" required/>
                    <label>Friends Name</label>
                </div>
            </div>

            <!-- PHONE -->
            <div v-if="page === 1" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.phone" type="text" required/>
                    <label>Your Phone</label>
                </div>
            </div>
            <div v-if="page === 2" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.fphone" type="text" required/>
                    <label>Friends Phone</label>
                </div>
            </div>

            <!-- EMAIL (OPTIONAL)-->
            <div v-if="page === 1" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.email" type="text" required/>
                    <label>Your Email</label>
                </div>
            </div>
            <div v-if="page === 2" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.femail" type="text" placeholder="optional"/>
                    <label>Friends Email</label>
                </div>
            </div>

            <!-- ADDRESS (OPTIONAL)-->
            <div v-if="page === 1" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.address" type="text" required/>
                    <label>Your Address</label>
                </div>
            </div>
            <div v-if="page === 2" class="col-xs-12">
                <div class="styled-input">
                    <input v-model="frmdata.faddress" type="text" placeholder="optional"/>
                    <label>Friends Address</label>
                </div>
            </div>

            <div v-if="page === 1" class="col-xs-12">
                <div class="styled-input">
                    <textarea v-model="frmdata.additional" placeholder="optional"></textarea>
                    <label>How do you know about us ?</label>
                </div>
            </div>
            <div v-if="page === 2" class="col-xs-12">
                <div class="styled-input">
                    <textarea v-model="frmdata.fadditional" placeholder="optional"></textarea>
                    <label>What does your friend need from us ?</label>
                </div>
            </div>

            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div v-if="page > 1" @click="page--" class="btn-lrg form-btn back-btn">Back</div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div v-if="page < 2" @click="validateInput()" class="btn-lrg form-btn">Next</div>
                        <div v-if="page === 2" @click="validateInput()" class="btn-lrg form-btn">Submit</div>
                    </div>
                </div>
            </div>
        </div>

    </dg-form>
</template>

<script>
  import DgForm from 'Components/Form'

  export default {
    name: 'refer-form',

    components: {
      DgForm
    },

    data () {

      return {
        page: 1,

        error: false,
        completed: false,

        frmdata: {
          name: '',
          email: '',
          phone: '',
          address: '',
          additional: '',

          fname: '',
          femail: '',
          fphone: '',
          faddress: '',
          fadditional: ''
        },
      }

    },

    methods: {

      validateInput() {
        switch (this.page) {
          case 1:
            if (this.frmdata.name === '' ||
              this.frmdata.email === '' ||
              this.frmdata.phone === '' ||
              this.frmdata.address === '') {

              this.error = true;
              return false;
            }
            break;
          case 2:
            if (this.frmdata.fname === '' ||
              this.frmdata.fphone === '') {

              this.error = true;
              return false;
            } else {
              this.submit();
            }
            break;
          default:
            this.page++
            this.error = false;
            return true;
        }

        this.page++
        this.error = false;
        return true;
      },

      submit() {
        axios.post('/api/giveaway/referral', this.frmdata)
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

    .dg-form {

        h4.page-header {
            margin: 0;
        }

        .form-btn {

            &.back-btn {
                margin-bottom: 5px;

                @media (min-width: 768px) {
                    float: left !important;
                    margin-bottom: 0;
                }
            }
        }
    }
</style>