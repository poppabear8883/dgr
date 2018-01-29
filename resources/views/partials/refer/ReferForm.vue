<template>
    <dg-form title="Refer Your Friend"
             sub-title="Don't stop with just one, with every referral you increase your chances to win!">

        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-6 text-center">
                    <h4 class="page-header">Your Information</h4>
                </div>
                <div class="col-md-6 text-center">
                    <h4 class="page-header">Friends Information</h4>
                </div>
            </div>
        </div>

        <!-- NAME -->
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Name</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" required />
                <label>Name</label>
            </div>
        </div>

        <!-- PHONE -->
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" required />
                <label>Phone</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" required />
                <label>Phone</label>
            </div>
        </div>

        <!-- EMAIL (OPTIONAL)-->
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" />
                <label>Email</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" />
                <label>Email</label>
            </div>
        </div>

        <!-- ADDRESS (OPTIONAL)-->
        <div class="col-md-6 col-sm-12">
            <div class="styled-input">
                <input type="text" />
                <label>Street Address</label>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="styled-input" style="float:right;">
                <input type="text" />
                <label>Street Address</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="styled-input wide">
                <textarea required></textarea>
                <label>What does your friend need from us?</label>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="btn-lrg submit-btn">Submit</div>
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
          imputs: {
            'name': {type: 'text', required: true},
            'phone': {type: 'text', required: true},
            'email': {type: 'text', required: false},
            'address': {type: 'text', required: false}
          }
        }
      }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .contact-form {
        background-color: #353636;
        margin-top: -25px;
        padding-top: 25px;

        h1 {
            font-family: 'Poppins', sans-serif, 'arial';
            font-weight: 600;
            font-size: 72px;
            color: white;
            text-align: center;
        }

        h4 {
            font-family: 'Roboto', sans-serif, 'arial';
            font-weight: 400;
            font-size: 20px;
            color: #9b9b9b;
            line-height: 1.5;
        }

        input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
            font-size: 0.75em;
            color: #999;
            top: -5px;
            -webkit-transition: all 0.225s ease;
            transition: all 0.225s ease;
        }

        .styled-input {
            float: left;
            width: 293px;
            margin: 1rem 0;
            position: relative;
            border-radius: 4px;

            @media only screen and (max-width: 768px){
                width:100%;
            }

            label {
                color: #999;
                padding: 1.3rem 30px 1rem 30px;
                position: absolute;
                top: 10px;
                left: 0;
                -webkit-transition: all 0.25s ease;
                transition: all 0.25s ease;
                pointer-events: none;
            }

            &.wide {
                width: 650px;
                max-width: 100%;
            }

        }

        input,
        textarea {
            padding: 30px;
            border: 0;
            width: 100%;
            font-size: 1rem;
            background-color: #2d2d2d;
            color: white;
            border-radius: 4px;
        }

        input:focus,
        textarea:focus {
            outline: 0;
        }

        input:focus ~ span,
        textarea:focus ~ span {
            width: 100%;
            -webkit-transition: all 0.075s ease;
            transition: all 0.075s ease;
        }

        textarea {
            width: 100%;
            min-height: 15em;
        }

        .input-container {
            width: 650px;
            max-width: 100%;
            margin: 20px auto 25px auto;
        }

        .submit-btn {
            float: right;
            padding: 7px 35px;
            border-radius: 60px;
            display: inline-block;
            background-color: $red;
            color: white;
            font-size: 18px;
            cursor: pointer;
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.06),
            0 2px 10px 0 rgba(0,0,0,0.07);
            -webkit-transition: all 300ms ease;
            transition: all 300ms ease;

            &:hover {
                transform: translateY(1px);
                box-shadow: 0 1px 1px 0 rgba(0,0,0,0.10),
                0 1px 1px 0 rgba(0,0,0,0.09);
            }

            @media (max-width: 768px) {
                width:100%;
                float: none;
                text-align:center;
            }
        }

        input[type=checkbox] {
            + label {
                color: #ccc;
                font-style: italic;
            }

            &:checked + label {
                color: #f00;
                font-style: normal;
            }
        }

    }
</style>