<template>
    <div class="dg-form">
        <div :class="container">
            <div class="row">
                <h1>{{ title }}</h1>
            </div>
            <div class="row">
                <h4 class="text-center">{{ subTitle }}</h4>
                <hr>
            </div>
            <div class="row input-container">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
      name: "contact-form",
      props: {
        title: {type: String},
        subTitle: {type: String},
        container: {type: String, default: 'container'}
      }
    }
</script>

<style lang="scss" scoped>
    @import '~Sass/_variables.scss';

    .dg-form {
        background-color: $white;
        margin-top: -25px;
        padding-top: 25px;

        h1 {
            font-family: 'Poppins', sans-serif, 'arial';
            font-weight: 600;
            font-size: 72px;
            color: $red;
            text-align: center;
        }

        h4 {
            font-family: 'Roboto', sans-serif, 'arial';
            font-weight: 400;
            font-size: 20px;
            color: $dark;
            line-height: 1.5;
        }

        input:focus ~ label, textarea:focus ~ label, input:valid ~ label, textarea:valid ~ label {
            font-size: .8em;
            color: #9b9b9b;
            top: -10px;
            left: -5px;
            transition: all 0.225s ease;
        }

        .styled-input {
            float: left;
            width: 100%;
            margin: 1rem 0;
            position: relative;
            border-radius: 4px;

            label {
                color: $white;
                padding: 1.3rem 30px 1rem 30px;
                position: absolute;
                top: 10px;
                left: 0;
                transition: all 0.25s ease;
                pointer-events: none;
            }

        }

        input,
        textarea {
            border: 0;
            width: 100%;
            font-size: 1.5rem;
            background-color: $dark;
            color: $white;
            border-radius: 4px;
            padding: 25px 25px 20px;
        }

        input:focus,
        textarea:focus {
            outline: 0;
        }

        input:focus ~ span,
        textarea:focus ~ span {
            width: 100%;
            transition: all 0.075s ease;
        }

        textarea {
            width: 100%;
            min-height: 15em;
        }

        .input-container {
            //width: 650px;
            max-width: 100%;
            margin: 20px auto 25px auto;
        }

        .form-btn {
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